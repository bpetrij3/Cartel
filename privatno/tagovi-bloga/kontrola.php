<?php 


$_POST["naziv"]=trim($_POST["naziv"]);
	if(strlen($_POST["naziv"])==0){
		$poruke["naziv"]="Naziv obavezno";
	}
	if(strlen($_POST["naziv"])>50){
		$poruke["naziv"]="Naziv mora biti manji od 50";
	}

 ?>