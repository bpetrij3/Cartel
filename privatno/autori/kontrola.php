<?php 


$_POST["ime"]=trim($_POST["ime"]);
	if(strlen($_POST["ime"])==0){
		$poruke["ime"]="Ime obavezno";
	}
	if(strlen($_POST["ime"])>50){
		$poruke["ime"]="Dužina imena mora biti manja od 50";
	}
	
	$_POST["prezime"]=trim($_POST["prezime"]);
	if(strlen($_POST["prezime"])==0){
		$poruke["prezime"]="Prezime obavezno";
	}
	if(strlen($_POST["prezime"])>50){
		$poruke["prezime"]="Dužina prezimena mora biti manja od 50";
	}

	$_POST["email"]=trim($_POST["email"]);
	if(strlen($_POST["email"])==0){
		$poruke["email"]="Email obavezno";
	}
	if(strlen($_POST["email"])>50){
		$poruke["email"]="Dužina emaila mora biti manja od 50";
	}
	
	$_POST["password"]=trim($_POST["password"]);
	if(strlen($_POST["password"])==0){
		$poruke["password"]="Password obavezno";
	}
	if(strlen($_POST["password"])>50){
		$poruke["password"]="Dužina passworda mora biti manja od 50";
	}
	if(strlen($_POST["password"])<8){
		$poruke["password"]="Dužina passworda mora biti duža od 8 znakova";
	}

 ?>