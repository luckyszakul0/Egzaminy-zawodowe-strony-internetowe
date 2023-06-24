document.getElementById("check").addEventListener("click", () => {
    const password = document.getElementById("password").value;
    let numberOfLetters = 0;
    let numberOfNumbers = 0;
    let result = "";
    let resultStyle = "";

    if(password == ""){
        result = "WPISZ HASŁO!";
        resultStyle = "red";
    } else {
        for(let i=0; i <= password.length-1; i++){
            if(isNaN(parseInt(password.charAt(i)))){
                numberOfLetters++;
            } else if(!isNaN(parseInt(password.charAt(i)))){
                numberOfNumbers++;
            }
        }

        if(numberOfLetters >= 7 && numberOfNumbers >= 1){
            result = "DOBRE";
            resultStyle = "green";
        } else if((numberOfLetters >= 4 && numberOfLetters <= 6) && numberOfNumbers >= 1) {
            result = "ŚREDNIE";
            resultStyle = "blue";
        } else {
            result = "SŁABE";
            resultStyle = "yellow";
        }
    }

    document.getElementById("result").innerHTML = result;
    document.getElementById("result").style.color = resultStyle;
})