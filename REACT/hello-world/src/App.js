import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import Work from './components/Work/Work';
import About from './components/About/About';
import Navigation from './components/Navigation/Navigation';
import Contact from './components/Contact/Contact';
import Footer from './components/Footer/Footer';
// import Stylesheet from './components/Stylesheet';
import Navbar from 'react-bootstrap/Navbar';
import { MDBFooter } from "mdbreact";


  class App extends Component {
    render () {
      return (
        <div className="App">
          
          {/* <Stylesheet primary={true} /> */}

          <Navigation />
          <About />
          <Work />
          <Contact />
          <Footer />
        </div>
      );
    }
}

export default App;
