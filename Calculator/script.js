let getDisplay = document.getElementById("display");
let operand1 = 0;
let operand2 = 0;
let operator = "";
let result = 0;
let previousAnswer = 0;

function clickButtons(event) {
  if (
    event == 1 ||
    event == 2 ||
    event == 3 ||
    event == 4 ||
    event == 5 ||
    event == 6 ||
    event == 7 ||
    event == 8 ||
    event == 9 ||
    event == 0 ||
    event == "00"
  ) {
    getDisplay.value += event;
  } else if (event == "AC" || event == "C") {
    getDisplay.value = null;
    operand1 = 0;
  } else if (event == ".") {
    getDisplay.value += ".";
  }
}

function Operation(event) {
  // Addition

  if (event == "+") {
    operand1 = parseInt(getDisplay.value);
    console.log(operand1);
    getDisplay.value = "";
    operator = "+";
  }
  // Subtraction
  else if (event == "-") {
    operand1 = parseInt(getDisplay.value);
    console.log(operand1);
    getDisplay.value = "";
    operator = "-";
  }
  // Multiplication
  else if (event == "*") {
    operand1 = parseInt(getDisplay.value);
    console.log(operand1);
    getDisplay.value = "";
    operator = "*";
  }
  // Division
  else if (event == "/") {
    operand1 = parseInt(getDisplay.value);
    console.log(operand1);
    getDisplay.value = "";
    operator = "/";
  }

  // Modulus
  else if (event == "%") {
    operand1 = parseInt(getDisplay.value);
    console.log(operand1);
    let percentage = (100 * operand1) / 100;
    getDisplay.value = percentage;
  }

  if (event == "=") {
    switch (operator) {
      case "+":
        operand1 += parseInt(getDisplay.value);
        getDisplay.value = operand1;
        break;

      case "-":
        operand1 -= parseInt(getDisplay.value);
        getDisplay.value = operand1;
        break;

      case "*":
        operand1 *= parseInt(getDisplay.value);
        getDisplay.value = operand1;
        break;
      case "/":
        operand1 /= parseInt(getDisplay.value);
        getDisplay.value = operand1;
        break;
    }
  }
}
