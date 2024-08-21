const tabValues = [
    'You are a good friend',
    'Today your\'s birthday',
    'wishing you all the best'
];
/*définir l'indice actuel */
let actualIndex = 0;
let doShowBackground = false;

/*appliqué la fonction avec événement click */
$("h1").on("click", function(evt) {
    /* créer une variable une sous-variable reliant la constante et l'indice actuel */
    let elementToDisplay = tabValues[actualIndex];
    /* créer un evenement if : si le nombre total du tableau est inferreur à l'indice actuel l'evenement se poursuit*/
    /* jquery code */

    if (actualIndex < tabValues.length) {
        $("#ma_liste").append('<li class="item">' + elementToDisplay + '</li>');
        actualIndex++;
        /* sinon (si l'indice actuel dépasse le nombre d'élément total), le background se modifie */
    } else if (actualIndex === 3) {
        $('body').css('background-image', 'url(./anniversaire.jpg)');
        /*on finalise en fermant l'évenement pour éviter que le background s'actualie à chaque click, perte d'efficacité et de perf*/
        $(this).off(evt);
    }
});