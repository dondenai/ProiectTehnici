
 
 
//Editarea unui element
document.getElementById("modifica").innerHTML = "Trimite o scrisoare moșului!";
document.getElementById("modifica").style.fontSize = "45px";
 
//Stergerea unui element
var parinte = document.getElementById("scrisoare");
var copil = document.getElementById("sterge");
parinte.removeChild(copil);
 
//Adaugarea unui element nou
var adaugaNod = document.createElement("p");
var text = document.createTextNode("Numele tău este:");
adaugaNod.appendChild(text);
var element = document.getElementById("scrisoare");
var child = document.getElementById("text");
element.insertBefore(adaugaNod,child);
 
//evenimente
document.getElementById("btn").addEventListener("keyup", function(event) {
    event.preventDefault();
    if(event.keyCode === 13) {
        document.getElementById("btn").click();
    }
});

document.getElementById("btn").addEventListener("click", sendLetter);
function sendLetter() {
    alert("Scrisoare trimisă!");
}
