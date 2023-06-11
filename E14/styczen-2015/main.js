const input1 = document.getElementById("number1");
const input2 = document.getElementById("number2");
const error = document.getElementById("error");
const resultContainer = document.getElementById("result");
let result = "";
let resultNumber = 0;
function checkIfNotNull(){
    if(isNaN(parseFloat(input1.value)) || isNaN(parseFloat(input2.value))){
        error.innerHTML = "Proszę uzupełnić obie liczby";
        error.style.visibility = "visible";
    } else {
        error.style.visibility = "hidden";
    }
}
function checkIfNotDividingByZero(){
    if(parseFloat(input2.value) == 0){
        error.innerHTML = "Nie wolno dzielić przez zero";
        error.style.visibility = "visible";
    }
}
function add(){
    checkIfNotNull();
    resultNumber = parseFloat(input1.value) + parseFloat(input2.value);
    result = `Wynik działania wynosi: ${resultNumber}`;
    if(isNaN(resultNumber))
        result = "";
    resultContainer.innerHTML = result;
}
function substract(){
    checkIfNotNull();
    resultNumber = parseFloat(input1.value) - parseFloat(input2.value);
    result = `Wynik działania wynosi: ${resultNumber}`;
    if(isNaN(resultNumber))
        result = "";
    resultContainer.innerHTML = result;
}
function multiply(){
    checkIfNotNull();
    resultNumber = parseFloat(input1.value) * parseFloat(input2.value);
    result = `Wynik działania wynosi: ${resultNumber}`;
    if(isNaN(resultNumber))
        result = "";
    resultContainer.innerHTML = result;
}
function divide(){
    checkIfNotNull();
    checkIfNotDividingByZero();
    resultNumber = parseFloat(input1.value) / parseFloat(input2.value);
    result = `Wynik działania wynosi: ${resultNumber}`;
    if(isNaN(resultNumber) || !isFinite(resultNumber))
        result = "";
    resultContainer.innerHTML = result;
}