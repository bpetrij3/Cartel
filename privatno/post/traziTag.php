<?php
include_once '../../konfiguracija.php';
if(!isset($_SESSION[$sid . "autoriziran"])){
	header("location: ../../logout.php");
	exit;
}
	$izraz = $veza->prepare("select a.naziv, b.sifra_tag from tag a
	 						inner join tag_post b on a.sifra=b.sifra_tag
							inner join post c on c.sifra=b.sifra_post
				   			where a.naziv like :uvjet
				   			");
							$izraz->execute(array("uvjet" => "%",
							"tag" => $_POST["sifra"]));
							$rezultati=$izraz->fetchAll(PDO::FETCH_OBJ);
	$t=new stdClass();
	$t->sifra=0;
	$t->ime="Nisu prikazani svi rezultati, filtrirajte dodatnim unosom";
	$rezultati[]=$t;
	echo json_encode($rezultati);