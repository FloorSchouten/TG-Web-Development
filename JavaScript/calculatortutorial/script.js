class Calculator {
    constructor(previousOperandTextElement, currentOperandTextElement){
        this.previousOperandTextElement = previousOperandTextElement
        this.currentOperandTextElement = currentOperandTextElement
        this.clear()
    }
}

clear() {
    this.previousOperand =''
    this.currentOperand = ''
    this.operation = undefined

}

delete() {

}

appendNumber() {

}
chooseOperation(operation){

}
compute() {

}
updateDisplay() {
    this.currentOperandTextElement.innerText = this.currentOperand

}
const numberButtons = document.querySelectorAll('[data-number]')
const operationButtons = document.querySelectorAll('[data-operation]')
const equalsButton = document.querySelector('[data-equals]')//single
const allClearButton = document.querySelector('[data-all-clear]')
const previousOperandTextElement = document.querySelectorAll('[data-previous-operand]')
const currentOperandTextElement = document.querySelectorAll('[data-current-operand]')

const calculator = new Calculator(previousOperandTextElement, currentOperandTextElement)
numberButtons.forEach(button => {
    button.addEventListener('click', () => {
        calculator.appendNumber(button.innerText)
        calculatro.updateDisplay
})
})