// import logo from './logo.svg';
import './App.css';
import React, { Component } from 'react';
// import logo from './logo.svg';
// import './App.css';
// import Home from './components/Home/Home';
// import Work from './components/Work/Work';
import About from './components/About/About';
import Navigation from './components/Navigation/Navigation';
import Contact from './components/Contact/Contact';

function App() {
  return (
    <div className="App">
        <Navigation />
        <About />
        <Contact />
    </div>
  );
}

export default App;
