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
&&(!empty($_FILES['doc_file']['name']))
)

{

	 $dossier = 'upload/';
     $fichier = basename($_FILES['doc_file']['name']);
	 $nom_destination=$dossier.$fichier;
     move_uploaded_file($_FILES['doc_file']['tmp_name'],$nom_destination); //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
   
	 
   $username=trim($_POST['username']);
   $langue=trim($_POST['langue']);
   $date = new DateTime();
   $d=$date->format('Y-m-d') . "\n";
   
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

   $sql1="INSERT INTO article(titreArticle,langueArticle,cheminArticle,d)values('$username','$langue','$nom_destination','$d')";
   $resultat1=$base->exec($sql1);
   $id1=$base->lastInsertId();
   echo "===1:::"+$id1;
   
   $sql2="INSERT INTO coauteur(nomCoauteur,prenomCoauteur,institutionCoauteur,villeCoauteur,paysCoauteur,phoneCoauteur,emailCoauteur)
   values('$namecAuteur','$prenomcAuteur','$institutioncAuteur','$villecAuteur','$payscAuteur','$phonecAuteur','$emailcAuteur')";
   $resultat2=$base->exec($sql2);
   $id2=$base->lastInsertId();
   echo "===2:::"+$id2;

   
   $sql="INSERT INTO auteur(nomAuteur,prenomAuteur,institutionAuteur,villeAuteur,paysAuteur,phoneAuteur,emailAuteur,numCoauteur,numArticle)
   values('$nameAuteur','$prenomAuteur','$institutionAuteur','$villeAuteur','$paysAuteur','$phoneAuteur','$emailAuteur','$id2','$id1')";
   $resultat=$base->exec($sql);
   $id=$base->lastInsertId();
   echo "===1:::"+$id;

   header("location:index.php");
   
   }



   
   
?>
</body>
</html>