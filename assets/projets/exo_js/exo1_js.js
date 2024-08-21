var valeur = prompt("donnez un chiffre");
valeur = parseInt(valeur);


function line() {
    var line = "";
    if (valeur <= 0) {
        alert("erreur");
    } else if (valeur > 0) {
        for (let i = 1; i <= valeur; i++) {
            line = line + "*";
        }
        console.log(line)
    }
}
line();


function square() {
    var line = "*";
    if (valeur <= 0) {
        alert("erreur");
    } else if (valeur > 0) {
        for (let i = 1; i < valeur; i++) {

            line = line + "*";

        }
        var newLine = line;
        for (let n = 1; n < valeur; n++) {
            line = line + "\n" + newLine;
        }
        console.log(line);
    }
}
square();


function triangle() {
    line = "*";
    newLine = "\n*"
    if (valeur <= 0) {
        alert("erreur");
    } else if (valeur > 0) {
        for (let i = 2; i <= valeur; i++) {

            newLine = newLine + "*";
            line = line + newLine;
        }
        console.log(line);
    }
}
triangle();