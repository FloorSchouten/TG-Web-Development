import React from 'react';
import Calendar from 'react-calendar';
import 'react-calendar/dist/Calendar.css';
import {holidays} from '../json/Holidays';
import '../index.css';
import TodolistPage from './TodolistPage';

class CalendarPage extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      selectedDate: new Date(),
      isToDoListOpen: false
    }
  }

  getHoliday(date) {
    for (let i = 0; i < holidays.length; i++) {
      if(`${date.getMonth()+1}-${date.getDate()}-${date.getFullYear()}` === holidays[i].date) {
        return "\n" + holidays[i].name.substring(0,1);
      }
    }
  }

  getTileStyle(date) {
    for (let i = 0; i < holidays.length; i++) {
      if(`${date.getMonth()+1}-${date.getDate()}-${date.getFullYear()}` === holidays[i].date) {
        return "holidaytile";
      }
    }
  }

  handleDateClick(date) {
    const {isToDoListOpen, selectedDate} = this.state;
    const dayOfMonth = new Date(date.getFullYear(), date.getMonth(), date.getDate());

    console.log(dayOfMonth);

    const isDoubleClick = selectedDate.toDateString() === dayOfMonth.toDateString();

    if (isToDoListOpen && isDoubleClick){
      this.setState({isToDoListOpen: false});
    } else {
      this.setState({
        selectedDate: dayOfMonth,
        isToDoListOpen: true
      });
    }
  }
  
  render() {
    const {isToDoListOpen, selectedDate} = this.state;

    return (
      <>
        {isToDoListOpen && <TodolistPage selectedDate={selectedDate.toDateString()} />}
        <Calendar tileClassName={({ date }) => this.getTileStyle(date)} tileContent={({ date }) => this.getHoliday(date)} onClickDay={(day) => this.handleDateClick(day)} />
      </>
    );
  }
}

export default CalendarPage;
