<?php

session_start();
$sid="cartel";
$GLOBALS["sid"]=$sid;
$formatDatumaPHP="d.m.Y.";
$formatDatumaJS="dd.mm.yy.";


if($_SERVER["SERVER_NAME"]==="localhost"){
	$putanjaAPP="/Cartel/";
	$server="localhost";
	$imeBaze="cartel";
	$korisnik="edunova";
	$lozinka="edunova";
}else{
	$putanjaAPP="/";
	$server="sql304.byethost32.com"; 
	$imeBaze="b32_19754901_cartel";
	$korisnik="b32_19754901";
	$lozinka="OmniaMeaMecum0310";
}


$veza = new PDO(
	"mysql:host=" . $server . ";dbname=" . $imeBaze,
	$korisnik,
	$lozinka,
	array(
		PDO::ATTR_EMULATE_PREPARES=> false,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8",
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
	)
);