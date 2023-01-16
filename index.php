<?php
/*
- Créer un script php qui permet de générer un nombre aléatoire compris entre x et y
- Coté front, créer un formulaire acceptant deux valeurs : x et y
- Envoyer le formulaire au script php et retourner le nombre aleatoire généré


- Pour générer un nombre aléatoire en PHP , vous pouvez utiliser la méthode mt_rand() ou rand()

http://php.net/manual/fr/function.mt-rand.php
*/

echo "
<form method='post' action='script.php'>
    <div>
        <label for='minimum'>MINIMUM : </label>
        <input type='number' name='minimum' id='minimum'>
    </div><br>
    <div>
        <label for='maximum'>MAXIMUM : </label>
        <input type='number' name='maximum' id='maximum'>
    </div>
    <input type='submit' value='Envoyer' name='submit'>
</form>
";