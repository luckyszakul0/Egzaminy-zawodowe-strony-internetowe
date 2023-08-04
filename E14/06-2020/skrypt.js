document.getElementById("policz").addEventListener("click", () => {
    let powierzchnia = document.getElementById("powierzchnia").value;
    let wynik = "Liczba jednolitrowych puszek farby potrzebnych do pomalowania wynosi: ";
    
    wynik += Math.ceil(powierzchnia / 4);

    document.getElementById("wynik").innerHTML = wynik;
})