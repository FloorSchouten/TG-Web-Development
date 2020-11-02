import React from 'react';

class Welcome extends React.Component {

    constructor(props) {
        super(props);

        this.state = {
            resultNumber: 0
        };
    }

    addNumber() {
        this.setState({resultNumber: this.state.resultNumber + 1});
    }

    render() {
        const {resultNumber} = this.state;

        return (
            <>
                <h1>Class Component</h1>
                <button onClick={() => this.addNumber()}>Click me!</button>
                <div>{resultNumber}</div>
            </>
        );
    }
}

export default Welcome