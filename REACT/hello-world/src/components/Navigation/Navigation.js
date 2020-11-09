import React from 'react';

import Navbar from 'react-bootstrap/Navbar';
import {
    Form,
    Button,
    FormControl,
    Nav,
  } from "react-bootstrap";
  import "./Navigation.css";


function Navigation() {

    return (
    <Navbar className="color-nav" variant="light">
        <Navbar.Brand href="#home">Floor</Navbar.Brand>
        <Nav className="mr-auto">
            <Nav.Link href="#Home">Home</Nav.Link>
            <Nav.Link href="#About">About</Nav.Link>
            <Nav.Link href="#Work">Work</Nav.Link>
            <Nav.Link href="#Contact">Contact</Nav.Link>

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
