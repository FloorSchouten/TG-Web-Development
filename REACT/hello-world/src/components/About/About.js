import React from 'react';
import "./About.css";
import Jumbotron from 'react-bootstrap/Jumbotron';
import Image from 'react-bootstrap/Image';
import Portfolioimage from './images/0.jpg';


    function About() {

        return (

            <div >
                <Jumbotron className="color-about">
                    <h1>Portfolio</h1>
                    <p>
                        I'm in a web developer bootcamp
                        Crawling through the trenches, 
                        hitting the JavaScript obstacle course, 
                        scaling the heigths of JavaScript.
                        Exhausted  
                        Learning a lot, blood sweat and tears, 
                        after six months
                        I'll be fierce
                    </p>
                    <p>
                        {/* <Container>
                            <Row>
                                
                                <Col xs={6} md={4}> */}
                                    <Image src= {Portfolioimage} roundedCircle />
                                {/* </Col>

                            </Row>
                        </Container> */}
                    </p>
                </Jumbotron>
            </div>

        );
    }
export default About;