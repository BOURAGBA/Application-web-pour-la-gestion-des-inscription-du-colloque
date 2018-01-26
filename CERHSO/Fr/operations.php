<?php
//Accèder à la base de données
try{
$base=new PDO('mysql:host=localhost;dbname=colloque','root','');
$base->exec("set names utf8");
}
catch(Exception $e){
die('Erreur:'.$e->getMessage());}
?>
<html>
<body>
<style>
table {
 border-collapse:collapse;
 width:90%;
 }
th, td {
 border:1px solid black;
 width:20%;
 }
td {
 text-align:center;
 }
caption {
 font-weight:bold
 }
</style>
<table summary="ligne 1 : les navigateurs, ligne 2 : les pourcentages">
<caption>la liste du colloque : CERHSO<caption>
 <tr>
  <th>Nom</th>
  <th>Prénom</th>
  <th>Phone</th>
  <th>Article</th>
  <th>Opérations</th>
 </tr>
 <?php
////////////

   
  $sql="select * from auteur ";
  $resultat=$base->query($sql); 
  while($ligne=$resultat->fetch(PDO::FETCH_OBJ)){
  $numAuteur=$ligne->numAuteur;
  $nom=$ligne->nomAuteur;
  $prenom=$ligne->prenomAuteur;
  $institution=$ligne->institutionAuteur;
  $ville=$ligne->villeAuteur;
  $pays=$ligne->paysAuteur; 
  $phone=$ligne->phoneAuteur;
  $email=$ligne->emailAuteur;
  $idArticle=$ligne->numArticle;
  $idCo=$ligne->numCoauteur;
  
  $sql1="select * from article where numArticle='$idArticle'";
  $resultat1=$base->query($sql1);
  $ligne1=$resultat1->fetch(PDO::FETCH_OBJ);
  $title=$ligne1->titreArticle;
  $d=$ligne1->d;

  $sql2="select * from coauteur where numCoauteur='$idCo'";
  $resultat2=$base->query($sql2);
  $ligne2=$resultat2->fetch(PDO::FETCH_OBJ);
  $nomc=$ligne2->nomCoauteur;
  $prenomc=$ligne2->prenomCoauteur;
  


  echo"
  <tr>
  <td>$nom</td>
  <td>$prenom</td>
  <td>$phone</td>
  <td>$title</td>
  <td><a href='supprimer.php?idCo=$idCo & idArticle=$idArticle'>Supprimer</a><br><a href='modifier.php?numAuteur=$numAuteur & idCo=$idCo & idArticle=$idArticle'>Modifier</a></td>
  </tr>";
 
   }
  $resultat->closeCursor();
?>
</table>
<center><b><a href='adminContenu.php'>Retour</a></b></center>
</body>
</html>



