<?php


if(isset($_REQUEST['formconnexion'])){
    $nom=    htmlspecialchars($_REQUEST['nom']);
    $prenom= htmlspecialchars($_REQUEST['prenom']);
    $mail=   htmlspecialchars($_REQUEST['mail']);
    $numTel= htmlspecialchars($_REQUEST['telephone']);
    $myFile=fopen("C://Users/Liyah/Documents/php/client2.txt", "a+") or die (" impossible d'écrire dans le fichier");
    $nouvelleLigne="\n".$nom.",".$prenom.",".$mail.",".$numTel;
    $fileWrite=fwrite($myFile,$nouvelleLigne);
    fclose($myFile);

}
?>
<h1>Redirection dans 3 secondes ...</h1>
<meta http-equiv="refresh" content="3;URL=tableau.php"/>