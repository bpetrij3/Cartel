<?php
include_once '../../konfiguracija.php';
if(!isset($_SESSION[$sid . "autoriziran"])){
	header("location: ../../logout.php");
	exit;
}

if(!isset($_POST["sifra"]) && !isset($_POST["slika"])){
	header("location: ../../logout.php");
	exit;
}

$target_file=$_SERVER["CONTEXT_DOCUMENT_ROOT"] . $putanjaAPP."img/autori/". $_POST["sifra"] . ".jpg";
move_uploaded_file($_FILES["slika"]["tmp_name"], $target_file);

header("location: index.php");