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
                        <h1>About me</h1>
                        <p>This is where you will find some information about my work, my ambitions, my skills</p>
                        <p>
                            {/* <Container>
                                <Row>
                                    
                                    <Col xs={6} md={4}> */}
                                        <Image src= {Portfolioimage} roundedCircle />
                                    {/* </Col>

                                </Row>
                            </Container> */}
                        </p>
                    </div>
                </Jumbotron>
            </div>

        );
    }
export default About;