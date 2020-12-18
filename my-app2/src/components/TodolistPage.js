import React from 'react';
import PropTypes from 'prop-types';
import ToDoItemsList from '../json/ToDoItems.json';

class TodolistPage extends React.Component {

    constructor(props) {
        super(props); 

        this.state = {
            itemsList: ToDoItemsList
        }
    }

    addToItemList() {
        const itemsList = this.state.itemsList;
        const date = this.props.selectedDate;
        const newItem = {
            date: date,
            name: document.getElementById('search').value
        }

        itemsList.push(newItem);

        this.setState({itemsList: itemsList});

        console.log(itemsList);
    }

    filterItemsByDate(itemsList) {
        const {selectedDate} = this.props;

        return itemsList.filter(function(item) {
            return item.date === selectedDate;
        });
    }

    deleteToDoItem(item) {
        const {selectedDate} = this.props;
        const {itemsList} = this.state;

        // itemsList.
    }

    render() {
        const {selectedDate} = this.props;
        const {itemsList} = this.state;
        
        const currentItems = this.filterItemsByDate(itemsList);

        return (
            <div>
                <h1>To Do Items for {selectedDate}</h1>
                <input type="text" placeholder="What needs to get done?" className="search" id="search" />
                <button type="submit" onClick={() => this.addToItemList()}><i className="fa fa-search" />Add to list</button>
                <ul>
                    {currentItems.map((item, key) => (
                        <li key={key}>                      
                            <input type="checkbox" id="toDoItem" name="toDoItem" value="CheckBox" />
                            <label htmlFor="toDoItem"> {item.name}</label>
                            <button onClick={(item) => this.deleteToDoItem(item)}>X</button>
                        </li>
                    ))}
                </ul>
            </div>
        );
    }
}

TodolistPage.propTypes = {
    selectedDate: PropTypes.string
}

export default TodolistPage;

{/* <p style={isDone && strikeThrough}></p> */}

// var isDone = true;
// const strikeThrough = { textDecoration: "line-through" };
