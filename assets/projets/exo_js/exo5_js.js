document.querySelector("#carre-bouton").addEventListener("click", function() {
    var valeur = document.querySelector("#carre-input").value;
    var carre = valeur * valeur;
    this.innerHTML = carre;
});

document.querySelector("#division-2-button").addEventListener("click", function() {
    var valeur = document.querySelector("#division-2-input").value;
    var half = valeur / 2;
    this.innerHTML = half;
});
document.querySelector("#diviser-bouton").addEventListener("click", function() {
    var dividende = document.querySelector("#diviser-1-input").value;
    var diviser = document.querySelector("#diviser-2-input").value;
    var result = dividende / diviser;
    document.querySelector("#diviser-bouton").innerHTML = result;

});
document
    .querySelector("#aire-cercle-bouton")
    .addEventListener("click", function() {
        var valeur = document.querySelector("#aire-cercle-input").value;
        var radius = valeur * valeur * 3.14;
        this.innerHTML = radius;
    });