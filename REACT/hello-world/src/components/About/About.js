import React from 'react';
import "./About.css";
import Jumbotron from 'react-bootstrap/Jumbotron';
import Image from 'react-bootstrap/Image';
import Portfolioimage from './images/0.jpg';


    function About() {

        return (

            <div >
                <Jumbotron className="color-about">
                    <div>
                    <h1>About me</h1>
                    <p>I'm training to become a web developer</p>
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