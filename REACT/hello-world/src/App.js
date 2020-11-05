import React, { Component } from 'react';
// import logo from './logo.svg';
import './App.css';
import Home from './components/Home/Home';
import Work from './components/Work/Work';
import About from './components/About/About';
import Navigation from './components/Navigation/Navigation';
import Contact from './components/Contact/Contact';

// import Stylesheet from './components/Stylesheet';
import Navbar from 'react-bootstrap/Navbar';




  class App extends Component {
    render () {
      return (
        <div className="App">
          
          {/* <Stylesheet primary={true} /> */}
          
          <Navigation />
          <Home />
          <About />
          <Work />
          <Contact />

        </div>
      );
    }
}

export default App;
