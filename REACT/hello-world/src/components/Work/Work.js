import React from 'react';
import Carousel from 'react-bootstrap/Carousel';
import werkFoto1 from "./img/Foto1.jpg";
import werkFoto2 from "./img/Foto2.jpg";
import werkFoto3 from "./img/Foto3.jpg";


function Work (){ 
    return (
    <div>
        <Carousel className="color-work">
            <Carousel.Item>
                <img
                    className="d-block w-100"
                    src={werkFoto1}
                    alt="eerste project"
                />
                <Carousel.Caption>
                    <h3>Project Molen</h3>
                    <p>Website</p>
                </Carousel.Caption>
            </Carousel.Item>
            
            <Carousel.Item>
                <img
                    className="d-block w-100"
                    src={werkFoto2}
                    alt="tweede project"
                />

                <Carousel.Caption>
                    <h3>Project "Muur"</h3>
                    <p>Webshop</p>
                </Carousel.Caption>
            </Carousel.Item>
            <Carousel.Item>
                <img
                    className="d-block w-100"
                    src={werkFoto3}
                    alt="Third slide"
                />

                <Carousel.Caption>
                    <h3>Project Schaap</h3>
                    <p>Voor gemeente Alkmaar</p>
                </Carousel.Caption>
            </Carousel.Item>
            
        </Carousel>
    </div>)

}





export default Work