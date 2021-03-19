<?php


if(isset($_REQUEST['formconnexion'])){
    
    $id=     htmlspecialchars($_REQUEST['id']);
    $nom=    htmlspecialchars($_REQUEST['nom']);
    $prenom= htmlspecialchars($_REQUEST['prenom']);
    $mail=   htmlspecialchars($_REQUEST['mail']);
    $numTel= htmlspecialchars($_REQUEST['telephone']);
    $myFile=fopen("personne.txt", "a+") or die (" impossible d'ouvrir dans le fichier");
    $nouvelleLigne="\n".$id.",".$nom.",".$prenom.",".$mail.",".$numTel;
    $fileWrite=fwrite($myFile,$nouvelleLigne);
    fclose($myFile);

}

if (isset($_REQUEST["formmodification"])) {
    $id=     htmlspecialchars($_REQUEST['id']);
    $nom=    htmlspecialchars($_REQUEST['nom']);
    $prenom= htmlspecialchars($_REQUEST['prenom']);
    $mail=   htmlspecialchars($_REQUEST['mail']);
    $numTel= htmlspecialchars($_REQUEST['telephone']);
    $myFile = "personne.txt";
    $lignes = file($myFile,FILE_IGNORE_NEW_LINES);
    $nouvelleLigne = $id.",".$nom.",".$prenom.",".$mail.",".$numTel;
    $lignes[$id-1] = $nouvelleLigne;
    file_put_contents($myFile,implode("\n",$lignes));
    
}

?>
<h1>Redirection dans 3 secondes ...</h1>
<meta http-equiv="refresh" content="3;URL=tableau.php"/>