import React from 'react';
import "./About.css";
import Jumbotron from 'react-bootstrap/Jumbotron'


    function About() {

        return (

            <div >
                <Jumbotron className="color-about">
                    <h1>Portfolio</h1>
                    <p>
                        I'm training as a web developer at TechGrounds bootcamp. Crawling
                        through the trenches, taking on the JavaScript obstacle course, scaling the heigths of JavaScript. I'm
                        exhausted after marathon sessions. Learning a lot, blood sweat and tears, but after six months
                        we'll be mean clean coding machines
                    </p>
                    <p>
                        {/* <Button variant="primary">Learn more</Button> */}
                    </p>
                </Jumbotron>
            </div>

        );
    }
export default About;