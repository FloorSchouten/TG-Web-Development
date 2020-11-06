import React from 'react';
import "./Contact.css";
import Jumbotron from 'react-bootstrap/Jumbotron'
import {SiLinkedin} from 'react-icons/si';

function Contact () {

    return (<Jumbotron className="color-contact" id="Contact">
        <div>
            </div>
            <h1>Contact</h1>
        <p>
          Are you looking for a junior frontend web developer? <br></br>Someone who's trained to solve problems, 
          keen to put in the work: you've found me. <br></br>Let's get in touch!
        </p>
       
            <a href="https://www.linkedin.com/in/learningtocode" className="Linkedin">
                <SiLinkedin/>
            </a>
        
        
      </Jumbotron>);
}
    

export default Contact;