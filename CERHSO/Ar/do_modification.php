<?php
//Accèder à la base de données
try{
$base=new PDO('mysql:host=localhost;dbname=colloque','root','');
$base->exec("set names utf8");
}
catch(Exception $e){
die('Erreur:'.$e->getMessage());}

////////////

if((!empty($_POST['username']))&&(!empty($_POST['langue']))&&(!empty($_POST['name']))&&(!empty($_POST['prenom']))&&(!empty($_POST['institution']))
&&(!empty($_POST['ville']))&&(!empty($_POST['pays']))&&(!empty($_POST['phone']))&&(!empty($_POST['email']))
&&(!empty($_POST['namec']))&&(!empty($_POST['prenomc']))&&(!empty($_POST['institutionc']))&&(!empty($_POST['villec']))&&(!empty($_POST['paysc']))
&&(!empty($_POST['phonec']))&&(!empty($_POST['emailc']))
)

{	
   $username=trim($_POST['username']);
   $langue=trim($_POST['langue']);

   $nameAuteur=trim($_POST['name']);
   $prenomAuteur=trim($_POST['prenom']);
   $institutionAuteur=trim($_POST['institution']);
   $villeAuteur=trim($_POST['ville']);
   $paysAuteur=trim($_POST['pays']);
   $phoneAuteur=trim($_POST['phone']);
   $emailAuteur=trim($_POST['email']);
   
   $namecAuteur=trim($_POST['namec']);
   $prenomcAuteur=trim($_POST['prenomc']);
   $institutioncAuteur=trim($_POST['institutionc']);
   $villecAuteur=trim($_POST['villec']);
   $payscAuteur=trim($_POST['paysc']);
   $phonecAuteur=trim($_POST['phonec']);
   $emailcAuteur=trim($_POST['emailc']);

   session_start();
   
   $id2=$_SESSION['idCo'];
   $PDOStatement = $base->prepare("UPDATE coauteur SET nomCoauteur = :A, prenomCoauteur = :B,institutionCoauteur = :C,villeCoauteur = :D , paysCoauteur = :E,phoneCoauteur = :F, emailCoauteur = :G WHERE numCoauteur = :H");
   $PDOStatement->bindParam(":A", $namecAuteur);$PDOStatement->bindParam(":B", $prenomcAuteur);$PDOStatement->bindParam(":C", $institutioncAuteur);
   $PDOStatement->bindParam(":D", $villecAuteur);$PDOStatement->bindParam(":E", $payscAuteur);$PDOStatement->bindParam(":F", $phonecAuteur);
   $PDOStatement->bindParam(":G", $emailcAuteur);$PDOStatement->bindParam(":H", $id2);
   $PDOStatement->execute();

   
 
   $id1=$_SESSION['idArticle'];
   $PDOStatement = $base->prepare("UPDATE article SET titreArticle = :A, langueArticle = :B WHERE numArticle = :C");
   $PDOStatement->bindParam(":A", $username);$PDOStatement->bindParam(":B", $langue);$PDOStatement->bindParam(":C",$id1);
   $PDOStatement->execute();
	
	
   $id=$_SESSION['numAuteur'];
   $PDOStatement = $base->prepare("UPDATE auteur SET nomAuteur = :A, prenomAuteur = :B,institutionAuteur = :C,villeAuteur = :D , paysAuteur = :E,phoneAuteur = :F, emailAuteur = :G WHERE numAuteur = :H");
   $PDOStatement->bindParam(":A", $nameAuteur);$PDOStatement->bindParam(":B", $prenomAuteur);$PDOStatement->bindParam(":C", $institutionAuteur);
   $PDOStatement->bindParam(":D", $villeAuteur);$PDOStatement->bindParam(":E", $paysAuteur);$PDOStatement->bindParam(":F", $phoneAuteur);
   $PDOStatement->bindParam(":G", $emailAuteur);$PDOStatement->bindParam(":H", $id);
   $PDOStatement->execute();
	
   header("location:operations.php");
   
   } 
?>
</body>
</html>