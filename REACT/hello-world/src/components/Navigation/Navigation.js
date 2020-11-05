import React from 'react';
import "./Navigation.css";
import Navbar from 'react-bootstrap/Navbar';
import {
    Form,
    Button,
    FormControl,
    Nav,
  } from "react-bootstrap";
//   import "bootstrap/dist/css/bootstrap.min.css";


function Navigation() {

    return (
    <Navbar className="color-nav" variant="light">
        <Navbar.Brand href="#home">Floor</Navbar.Brand>
        <Nav className="mr-auto">
            <Nav.Link href="#home">Home</Nav.Link>
            <Nav.Link href="#about">About</Nav.Link>
            <Nav.Link href="#work">Work</Nav.Link>
            <Nav.Link href="#contact">Contact</Nav.Link>

        </Nav>
        <Form inline>
           
        </Form>
    </Navbar>);
}
{/* <Container>
  <Navbar expand="lg" variant="light" bg="light">
    <Navbar.Brand href="#">Navbar</Navbar.Brand>
  </Navbar>
</Container> */}




export default Navigation;