<?php

$source ="mysql:host=localhost;dbname=gsbv2";
$utilisateur = "admin";
$mot_de_passe= "password";

$db = new PDO($source,$utilisateur,$mot_de_passe);

$sql_select = "SELECT * FROM Visiteur WHERE 
      login = '".$username."' and mdp = '".$password."' ";
$st = $db -> prepare($sql_select);

$st-> execute();

$resultat = $st->fetch();
print_r($resultat);
if($resultat ->rowCount() > 0)
{
    $sql = "INSERT INTO visiteur (admin, password) VALUES ('$utilisateur','$mot_de_passe')";
    $req = $db->prepare($sql);
    $req->execute();
}
else {
    echo"Accès refusé";
}
?>