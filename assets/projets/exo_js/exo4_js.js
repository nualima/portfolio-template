let notes = [0, 3, 8, 10, 10, 14, 18, 19, 19, 20]


function displayArray(noteParametre) {
    for (let note of noteParametre) {
        console.log(note)

    }
}
displayArray(notes)
    // enumère les éléments du tableau
    //displayArray([1, 2, 3])

function getAverageFromArray(noteParametre) {
    {
        if (notes.length <= 0) {
            console.log("0");
        }
        let sum = 0;
        for (let rating of noteParametre) {
            sum += rating;
        }
        rating = sum / notes.length
    }

    console.log(rating)
        //donne la moyenne des élément du teableau


    var counter = 0;
    var noteMaxi = 0;
    var noteMini = 20;
    for (valeur of noteParametre) {
        if (valeur >= 10) {
            counter += 1;
        }

        if (noteMaxi <= valeur) {
            noteMaxi = valeur;
        }

        if (noteMini >= valeur) {
            noteMini = valeur;
        }


    }
    console.log(counter)
    console.log(noteMaxi)
    console.log(noteMini)
        //donne l'élement l plus grand, le plus petit, et le nombre de note ayant la moyenne ou plus.
}


getAverageFromArray(notes)
    //getAverageFromArray([3, 2, 1, 7])