<?php 


$_POST["naslov"]=trim($_POST["naslov"]);
	if(strlen($_POST["naslov"])==0){
		$poruke["naslov"]="Naslov obavezan";
	}
	if(strlen($_POST["naslov"])>150){
		$poruke["naslov"]="Naslov članka ne smije biti duži od 150 znakova";
	}
	
$_POST["clanak"]=trim($_POST["clanak"]);
	if(strlen($_POST["clanak"])==0){
		$poruke["clanak"]="Unesite tekst članka";
	}
	if(strlen($_POST["clanak"])>2000){
		$poruke["clanak"]="Dužina članka ne smije biti duža od 2000 znakova";
	}
	
 ?>