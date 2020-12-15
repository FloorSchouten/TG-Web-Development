import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import CalendarPage from './components/CalendarPage.js';
import TodolistPage from './components/TodolistPage';

ReactDOM.render(

  <React.StrictMode>
    <h1 className="header1">Honey-do list</h1>
    <p img src="honeydewmelon.jpg" className="picture"></p>
    <div>
      <div className="container">
        <CalendarPage />
      </div>
      <div>
        <TodolistPage />
      </div>
    </div>
  </React.StrictMode>,

  document.getElementById('root')
);

