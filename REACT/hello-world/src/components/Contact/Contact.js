import React from 'react';
import "./Contact.css";
import Jumbotron from 'react-bootstrap/Jumbotron'
import {SiLinkedin} from 'react-icons/si';

function Contact () {

    return (<Jumbotron className="color-contact" id="Contact">
        <div className="paragraphBox" >
            
            <h1>Contact</h1>
        <p>
          Are you looking for a junior frontend web developer? Someone who's trained to solve problems, 
          keen to put in the work: you've found me. Let's get in touch!
        </p>
        </div>
            <a href="https://www.linkedin.com/in/learningtocode" className="Linkedin" target="_blank" >
                <SiLinkedin/>
            </a>
        
        
      </Jumbotron>);
}
    

export default Contact;