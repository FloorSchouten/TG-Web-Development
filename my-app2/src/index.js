import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import CalendarPage from './components/CalendarPage.js';

ReactDOM.render(

  <React.StrictMode>
    <h1 className="header1">To do list</h1>
    <div>
      <div className="container">
        <CalendarPage />
      </div>
    </div>
  </React.StrictMode>,

  document.getElementById('root')
);

