window.onload = function main(){
    document.getElementById("submit").addEventListener("click", () => {
        let shapeNumber = parseInt(document.getElementById("shape").value);
        let R = parseInt(document.getElementById("r").value);
        let G = parseInt(document.getElementById("g").value);
        let B = parseInt(document.getElementById("b").value);

        let shapeName;

        switch(shapeNumber){
            case 1:
                shapeName = "cytryna";
                break;
            case 2:
                shapeName = "liść";
                break;
            case 3:
                shapeName = "banan";
                break;
            default:
                shapeName = "inny";
                break;
        }

        document.getElementById("color").style.background = `rgb(${R}, ${G}, ${B})`;

        document.getElementById("result").innerHTML = `Twoje zamówienie to cukierek ${shapeName}`;
    })
}