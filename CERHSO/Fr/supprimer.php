 <?php
//Accèder à la base de données
try{
$base=new PDO('mysql:host=localhost;dbname=colloque','root','');
$base->exec("set names utf8");
}
catch(Exception $e){
die('Erreur:'.$e->getMessage());}
?>
 <?php
 
   $statement=$base->prepare("Delete FROM article WHERE numArticle=:id" ); // Prépare une requête
   $dotat=$statement->execute(array('id'=>$_GET['idArticle'])); //Exécute une requête préparée 
   
   $statement=$base->prepare("Delete FROM coauteur WHERE numCoauteur=:id" ); // Prépare une requête
   $dotat=$statement->execute(array('id'=>$_GET['idCo'])); //Exécute une requête préparée 
   
   header("location:operations.php");
 ?>