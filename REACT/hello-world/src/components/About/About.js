import React from 'react';

import Jumbotron from 'react-bootstrap/Jumbotron';
import Image from 'react-bootstrap/Image';
import "./About.css";
import Portfolioimage from './images/0.jpg';


    function About() {

        return (

            <div >
                <Jumbotron className="color-about" id="About">
                    <div>
                        
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                <h1>About me</h1>
                                    This is where you will find information about my work, my ambitions, my skills
                                </div>
                                <div class="col">
                                    <Image src= {Portfolioimage} className="imageMe" />
                                </div>
                            </div>

                        </div>
                    </div>
                </Jumbotron>
            </div>

        );
    }
export default About;