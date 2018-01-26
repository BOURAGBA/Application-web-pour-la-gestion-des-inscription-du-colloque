<?php
//Accèder à la base de données
try{
$base=new PDO('mysql:host=localhost;dbname=colloque','root','');
$base->exec("set names utf8");
}
catch(Exception $e){
die('Erreur:'.$e->getMessage());}

////////////
  $contenu="";
   
  $sql="select * from auteur ";
  $resultat=$base->query($sql); 
  while($ligne=$resultat->fetch(PDO::FETCH_OBJ)){
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
  
    
  $contenu=$contenu."<tr><td>$nom</td><td>$prenom</td><td>$institution</td><td>$ville</td>
  <td>$pays</td><td>$phone</td><td>$email</td><td>$title</td><td>$d</td><td>$nomc</td><td>$prenomc</td</tr>";
  }
  $resultat->closeCursor();
  require 'pdfcrowd.php';

try
{   
    // create an API client instance
    $client = new Pdfcrowd("medbouragba", "879759d97b4b32113a2d28bf45588afc");
    // convert a web page and store the generated PDF into a $pdf variable
	$pdf = $client->convertHtml("<head></head><body>	
	<center><h1 style='color:blue;'>La liste du colloque </h1>	
	<table border=1> <tr><th>Nom</th><th>Prenom</th><th>Institution</th><th>Ville</th><th>Pays</th><th>Phone</th><th>Email</th>
    <th>Article</th><th>date</th><th>Nom Co-Auteur</th><th>Prenom Co-Auteur</th></tr>
    $contenu
    </table></body>");
    // set HTTP response headers
    header("Content-Type: application/pdf");
    header("Cache-Control: max-age=0");
    header("Accept-Ranges: none");
    header("Content-Disposition: attachment; filename=\"Liste_colloque.pdf\"");

    // send the generated PDF 
    echo $pdf;
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}
?>














