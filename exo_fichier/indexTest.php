<?php

$myFile=fopen("C://Users/Liyah/Documents/php/client2.txt", "a");
for($i=0;$i<3;$i++){
    $nom=readline("Nom :");
    $prenom=readline("Prénom :");
    $numTel=readline("Numéro de téléphone :");
    $wR=fwrite($myFile,"Nom : ".$nom.", Prénom : ".$prenom.", Numéro de téléphone : ".$numTel."\n");
}
$myFile=fopen("C://Users/Liyah/Documents/php/client2.txt", "r");
$content=fread($myFile, filesize("C://Users/Liyah/Documents/php/client2.txt"));
echo $content;
fclose($myFile);
