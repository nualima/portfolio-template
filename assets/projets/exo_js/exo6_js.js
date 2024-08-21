window.addEventListener("DOMContentLoaded", (event) => {
    alert("cliquez pour afficher la page");
});
let image = document.getElementById("image");

function handleMouseEnterImage(event) {
    alert("Voici le logo Macademia");
    image.removeEventListener("mouseenter", handleMouseEnterImage);
};

image.addEventListener("mouseenter", handleMouseEnterImage);


var button = document.querySelector('#button_alert');

button.addEventListener("click", (event) => {
    alert("vous avez cliqué sur le boutton");
});

function keyBoard(event) {
    alert("vous avez appuyer sur une touche du clavier")
    removeEventListener('keydown', keyBoard)
};
addEventListener('keydown', keyBoard)
var color_red = document.querySelector('#button_red');
color_red.addEventListener("click", (event) => {
    document.querySelector('body').style.backgroundColor = "red";
});
var color_blue = document.querySelector('#button_blue');
color_blue.addEventListener("click", (event) => {
    document.querySelector('body').style.backgroundColor = "blue";
});
let portrait = document.getElementById("photo");
portrait.addEventListener("mouseenter", function(event) {
    document.querySelector("#portrait").style.display = "block";
});
portrait.addEventListener("mouseleave", function(event) {
    document.querySelector("#portrait").style.display = "none";
});