<?php
include "import_bdd.php";
var_dump($_POST);
$requete = "INSERT INTO `actus`(`titre`, `contenu`, `datecr`) VALUES ('".$_POST['titre']."', '".$_POST['editeur']."', '".date("Y-m-d H:i:s")."')";
$bdd->query($requete);
echo $requete
?>