var word = "macademia";
var newWord = "";
for (let caracter of word.slice(0, 7)) {
    console.log(caracter);
    var newWord = newWord + caracter;
}
console.log(newWord);