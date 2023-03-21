#!/usr/bin/php

<?php

$tab = file("test.txt"); //---> la fonction file rempli un tableau en gardant les \n;

foreach ($tab as $elem)
    echo "$elem";

$fd = fopen("test.txt", "r"); // ----> la fonction fopen ouvre un file descriptor

while ($line = fgets($fd)) // ----> la fonction fgets retourne ligne par ligne le contenu du fichier
{
    echo $line;
}

fclose($fd);

?>