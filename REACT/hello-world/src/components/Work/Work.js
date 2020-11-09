import React from 'react';
import Carousel from 'react-bootstrap/Carousel';
import werkFoto1 from "./img/Foto1.jpg";
import werkFoto2 from "./img/Foto2.jpg";
import werkFoto3 from "./img/Foto3.jpg";


function Work (){ 
    return (
    <div>
        <Carousel className="color-work" id="Work">
            <Carousel.Item>
                <img
                    className="d-block w-100"
                    src={werkFoto1}
                    alt="eerste project"
                />
                <Carousel.Caption>
                    <h3>Project, product, plan</h3>
                    <p>Highlight your project. Sell your product. Launch your plan.</p>
                </Carousel.Caption>
            </Carousel.Item>
            
            <Carousel.Item>
                <img
                    className="d-block w-100"
                    src={werkFoto2}
                    alt="tweede project"
                />

                <Carousel.Caption>
                <h3>Project, product, plan</h3>
                    <p>Highlight your project. Sell your product. Launch your plan.</p>
                </Carousel.Caption>
            </Carousel.Item>
            <Carousel.Item>
                <img
                    className="d-block w-100"
                    src={werkFoto3}
                    alt="Third slide"
                />

                <Carousel.Caption>
                <h3>Project, product, plan</h3>
                    <p>Highlight your project. Sell your product. Launch your plan.</p>
                </Carousel.Caption>
            </Carousel.Item>
            
        </Carousel>
    </div>)

}





export default Work;