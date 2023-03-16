#!/usr/bin/php
<?php

/////creer des variables et les afficher

$var1 = 23;
$var2 = "43";
$var3 = array("un", "deux", "trois");
$var4 = array(1, 2, 3);
$var5 = array("key1" => "1", "key2" => "2", "key3" => "3");
$var6 = explode(",", "val1,val2,val3,val4");

echo $var1."\n".$var2."\n".$var3."\n".$var4."\n"; // -----> print en concatenant

echo "32" + "10"."\n"; // -----> additioner des string

print_r($var3); // ---> print all table;
print_r($var4);  
print_r($var5);
print_r($var6);

/////// creer des fonctions 

function    addition($var1, $var2)
{
    return ($var1 + $var2);
}

echo "\n".addition($var2, $var1)."\n";

//////// condition et boucles

if ($var5["key1"] == "1")
    echo "\nTRUE"."\n";
else
    echo "\nFALSE"."\n";

foreach($var3 as $elem) // ----> iterer sur chaque element d'un tableau
{
    echo $elem."\n";
}

////////// recuperer argc et argv

echo "\n$argc\n";
print_r($argv);

?>