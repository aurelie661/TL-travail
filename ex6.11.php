<?php
$somme = 0;
$somme2 = 0;
$total = 0;

function add($nb1, $nb2)
{
    $total = $nb1 + $nb2;
    return $total;
}

$tailleTab1 = readline("Entrez la taille du premier tableau : ");
for ($i = 0; $i < $tailleTab1; $i++) {
    $tab1[$i] = readline("Entrez votre valeur n°" . ($i + 1) . ": ");
}
$tailleTab2 = readline("Entrez la taille du deuxième tableau : ");
for ($i = 0; $i < $tailleTab2; $i++) {
    $tab2[$i] = readline("Entrez votre valeur n°" . ($i + 1) . ": ");
}
for ($i = 0; $i <= $tailleTab1; $i++) {
    for ($j = 0; $j <= $tailleTab2; $j++) {
        $somme = ($tab1[$i] * $tab2[$j]);
        $somme2 = add($somme, $somme2);
    }
    echo $somme2 . " ";
}
//a FINIR