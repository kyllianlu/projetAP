<?php

$source ="mysql:host=localhost;dbname=gsbv2";
$utilisateur = "root";
$mot_de_passe= "";

$db = new PDO($source,$utilisateur,$mot_de_passe);

$sql_select = "SELECT * FROM visiteur";
      /*login = '".$utilisateur."' and mdp = '".$mot_de_passe."' ";*/
$st = $db -> prepare($sql_select);

$st-> execute();

$resultat = $st->fetchAll();
print_r($resultat);
/*if($resultat->rowCount() > 0)
{
    $sql = "INSERT INTO visiteur (admin, password) VALUES ('$utilisateur','$mot_de_passe')";
    $req = $db->prepare($sql);
    $req->execute();
}
else
{
  echo"Accès refusé";
}



$date ="TEST";
$libelle="test";
$prix="120";


$my_Insert_Statement = $db->prepare("INSERT INTO LigneFraisHorsForfait (date, libelle, montant) VALUES (:date, :libelle, :montant)");
$my_Insert_Statement->bindParam(":date", $date);
$my_Insert_Statement->bindParam(":libelle", $libelle);
$my_Insert_Statement->bindParam(":montant", $prix);
if ($my_Insert_Statement->execute()) {
    $bd = $my_Insert_Statement->fetch();
    print_r($bd);
   echo "Nouveau enregistrement créé avec succès";
 } else {
   echo "Impossible de créer l'enregistrement";
 }*/
?>