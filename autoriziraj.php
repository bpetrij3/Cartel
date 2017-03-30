<?php
include_once 'konfiguracija.php';


if(isset($_POST["autorizacija"])){
	
	print_r($_POST);
	
	$izraz=$veza->prepare("select * from autor 
	where email=:email and password=md5(:password)");
	unset($_POST["autorizacija"]);
	$izraz->execute($_POST);
	$operater = $izraz->fetch(PDO::FETCH_OBJ);
	
	if($operater!=null){
		$_SESSION[$sid . "autoriziran"]=$operater;
		header("location: privatno/index.php");
		exit;
	}
	else {
		header("location: index.php?korisnik=".$_POST["email"]);
	}
}
