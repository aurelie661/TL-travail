<?php

if (isset($_REQUEST['id'])) {
    
    $myFile = "personne.txt";
    $lignes = file($myFile,FILE_IGNORE_NEW_LINES);
    unset($lignes[$_REQUEST['id']-1]);
    file_put_contents($myFile,implode("\n",$lignes));
}
header('location: tableau.php');
?>
 
