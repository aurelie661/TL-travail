<?php
$somme = 0;
$total = 0;

function add($nb1, $nb2)
{
    $total = $nb1 + $nb2;
    return $total;
}

$tailleTab = readline("Entrez la taille du tableau : ");
for ($i = 0; $i < $tailleTab; $i++) {
    $tab[$i] = readline("Entrez votre valeur : ");
    $somme = add($somme, $tab[$i]);
}
echo "La somme du tableau est : " . $somme;
