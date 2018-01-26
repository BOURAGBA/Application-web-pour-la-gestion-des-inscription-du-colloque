<?php
$nom=trim($_POST['nom']);
$password=trim($_POST['password']);
try{
$base=new PDO('mysql:host=localhost;dbname=colloque','root','');
}
catch(Exception $e){
die('Erreur:'.$e->getMessage());}
$sql="SELECT numAdmin,nomAdmin,passwordAdmin FROM admin where nomAdmin='$nom' AND passwordAdmin='$password'";
$resultat=$base->query($sql);
$ligne=$resultat->fetch(PDO::FETCH_OBJ);
$id=$ligne->numAdmin;
$resultat->closeCursor();
if($id){
session_start();
$_SESSION['nomAdmin']=$ligne->nomAdmin;
$_SESSION['numAdmin']=$id;
header("location:adminContenu.php");
}
else{
header("location:admin.php");
}
?>