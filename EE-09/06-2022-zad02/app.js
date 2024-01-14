document.getElementById("btn").addEventListener("click", () => {
    let hue = parseInt(document.getElementById("h").value);

    let sValues = [100, 80, 60, 40, 20];

    for(let i = 0; i < sValues.length; i++){
        document.getElementById(`kom${i+1}`).style.background = `hsl(${hue}, ${sValues[i]}%, 50%)`;
    }

})