import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import Greet from './components/Greet'
import Welcome from './components/Welcome'
import Stylesheet from './components/Stylesheet'

  class App extends Component {
    render () {
      return (
        <div className="App">
          
          <Stylesheet primary={true} />
          <Greet/>
          <Welcome />
        </div>
      );
    }
}

export default App;
