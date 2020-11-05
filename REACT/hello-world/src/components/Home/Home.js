import React from 'react';
import "./Home.css";
import Jumbotron from 'react-bootstrap/Jumbotron'



    function Home() {

        return (

            <div >
                <Jumbotron className="color-about">
                    <h1>Nice to meet you!</h1>
                    <p>
                        Please take a look at this portfolio. Like what you see? Scroll down to the LinkedIn button and let's meet!
                    </p>

                </Jumbotron>
            </div>

        );
    }
export default Home;