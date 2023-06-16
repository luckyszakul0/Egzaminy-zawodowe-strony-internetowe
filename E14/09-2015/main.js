const input = document.getElementById("input");
//sprawdzenie czy pole nie jest puste lub nie jest liczbą
//jeśli tak, zwraca wartość logiczną prawda, która następnie jest użyta w funkcjach opisujących zachowanie przycisków
function sprawdz() {
    if(input.value == "" || input.value == null || isNaN(input.value))
        return 1;
}
//zachowanie przycisku licz pole
document.getElementById("pole").addEventListener("click", () => {
    if(sprawdz()){
        document.getElementById("wynik").innerHTML = "Należy wpisać wartość liczbową";
    } else {
        let bok = parseFloat(input.value);
        let wynik = bok**2;
        document.getElementById("wynik").innerHTML = `P = a<sup>2</sup> = ${wynik}`;
    }
})
// zachowanie przycisku licz obwód
document.getElementById("obwod").addEventListener("click", () => {
    if(sprawdz()){
        document.getElementById("wynik").innerHTML = "Należy wpisać wartość liczbową";
    } else {
        let bok = parseFloat(input.value);
        let wynik = bok*4;
        document.getElementById("wynik").innerHTML = `Obw = 4a = ${wynik}`;
    }
})