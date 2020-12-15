import React from 'react';
import PropTypes from 'prop-types';

class TodolistPage extends React.Component {

    constructor(props) {
        super(props); 

        this.state = {
            itemsList: []
        }
    }

    addToItemList() {
        const items = this.state.itemsList;

        items.push(document.getElementById('search').value);

        this.setState({itemsList: items});
        console.log(items);
    }

    render() {
        const {selectedDate} = this.props;
        const {itemsList} = this.state;

        return (
            <div>
                <h1>To Do List for {selectedDate}</h1>
                <input type="text" placeholder="Search.." className="search" id="search" />
                <button type="submit" onClick={() => this.addToItemList()}><i className="fa fa-search" />Add Item</button>
                <ul>
                    {itemsList.map((item, key) => (
                        <li key={key}>{item}</li>
                    ))}
                </ul>
            </div>
        );
    }
}

TodolistPage.propTypes = {
    selectedDate: PropTypes.number
}

export default TodolistPage;

// var obj = { date, todoItem };
// var myJSON = JSON.stringify(obj);

// document.getElementById("demo").innerHTML = myJSON;

// this.props.date.getTime() receiving end