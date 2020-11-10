import React from 'react';
import "./Home.css";
import Jumbotron from 'react-bootstrap/Jumbotron'


    function Home() {

        return (
        <Jumbotron className="color-home" id="Home">
                    <div></div>
                        <h1>Nice to meet you!</h1>
                        <p className="helloPar">Look at this website!<br></br>
                            It's made in React with Bootstrap components. <br></br>
                            The navigation bar, the jumbotron segments and the carousel all work nicely. <br></br>
                            In the contact segment, you can add contact information and links to social networks. 
                        </p>
                    
                </Jumbotron>);
            
    }
   
export default Home;