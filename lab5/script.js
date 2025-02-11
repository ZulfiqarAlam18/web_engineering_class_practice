let operation = null; // Stores selected operation

function setOperation(op) {
    operation = op;
}

function calculate() {
    let num1 = parseFloat(document.getElementById("num1").value);
    let num2 = parseFloat(document.getElementById("num2").value);
    let result = 0;

    if (isNaN(num1) || isNaN(num2)) {
        document.getElementById("result").innerText = "Please enter valid numbers!";
        return;
    }

    switch (operation) {
        case '+':
            result = num1 + num2;
            break;
        case '-':
            result = num1 - num2;
            break;
        case '*':
            result = num1 * num2;
            break;
        case '/':
            if (num2 === 0) {
                document.getElementById("result").innerText = "Cannot divide by zero!";
                return;
            }
            result = num1 / num2;
            break;
        default:
            document.getElementById("result").innerText = "Please select an operation!";
            return;
    }

    document.getElementById("result").innerText = "Result: " + result;
}
