let display = document.getElementById('display');
function appendValue(value) {
    display.value += value;
}
function appendFunction(func) {
    display.value += func;
}
function clearDisplay() {
    display.value = '';
}
function deleteLast() {
    display.value = display.value.slice(0, -1);
}
function calculate() {
    try {
        display.value = eval(display.value);
    } catch (error) {
        alert('Invalid Expression');
    }
}
function calculateFactorial() {
    let num = parseInt(display.value);
    if (num < 0) {
        alert('Factorial of negative number is not possible');
        return;
    }
    let result = 1;
    for (let i = 1; i <= num; i++) {
        result *= i;
    }
    display.value = result;
}
function toggleSign() {
    if (display.value) {
        display.value = display.value.startsWith('-') ? display.value.substring(1) : '-' + display.value;
    }
}
