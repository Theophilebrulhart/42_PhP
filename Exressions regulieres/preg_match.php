#!/usr/bin/php

<?php

///////////trouver des occurances dans une string

$nb = preg_match("|salut|", "asjfkja;djsalutdsjkfasdj"); //  ---> trouve la premiere occurance entre les delimiter

$nb = preg_match("|^salut|", "salutasjfkja;djsalutdsjkfasdj"); //  ---> verifie si l'occurance est au debut de la string

$nb = preg_match("|salut$|", "sjfkja;djsalutdsjkfasdjsalut"); //  ---> verifie si l'occurance est en fin de la string

$nb = preg_match("|s[au]l[au]t|", "sulut"); //  ---> les valeur entre [] peuvent etre l'une ou l'autre

$nb = preg_match("|s[^au]l[au]t|", "s9lut"); //  ---> les valeur entre [] peuvent etre tout sauf celles-ci

$nb = preg_match("|s[0-9]l[a-b]t|", "s8lbt"); //  ---> les valeur entre [] peuvent etre dans la range

$nb = preg_match("|s[au]l[au]t|", "sulut"); //  ---> les valeur entre [] peuvent entre l'une ou l'autre

$nb = preg_match("|s[au]+l[au]t|", "suauaualut"); //  ---> les valeur prescedant le + peuvent apparaitre une fois plusieur fois

$nb = preg_match("|s[au]*l[au]t|", "slut"); //  ---> les valeur prescedant le * peuvent apparaitre zero fois ou plusieur fois

$nb = preg_match("|s[au]{3}l[au]t|", "sauulut"); //  ---> les valeur prescedant le {x} doivent apparaitre x fois

echo "$nb\n";

?>