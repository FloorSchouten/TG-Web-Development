import React, { useState} from 'react';
import CalendarPage from "./components/calendar";
import TodolistPage from "./components/TodolistPage";
import "./App.css";

function App() {
    const [inputText, setInputText] = useState ("");
    return (
        <div className="heleApp">

                <TodolistPage />
                <CalendarPage />
            
        </div>
    )
}
export default App;