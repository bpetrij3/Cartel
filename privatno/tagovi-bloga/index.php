<?php
include_once '../../konfiguracija.php';
if(!isset($_SESSION[$sid . "autoriziran"])){
	header("location: ../../logout.php");
}
			
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<?php
		include_once '../../predlozak/head.php';
		?>

	</head>
	
	<body>
		<?php
		include_once '../../predlozak/izbornik.php';
		?>
		
			<div class="row columns">
			<a class="secondary button expanded" href="unos.php">Unos novog taga</a>
			</div>
		
		<div class="row">
		<?php 
		
		
		$izraz=$veza->prepare("
		select * from tag
		");
		$izraz->execute();
		
		$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
		
		foreach ($rezultati as $red):?>
		
		<li>
			<?php  echo $red->naziv; ?> | <a href="promjeni.php?sifra=<?php echo $red->sifra ?>">
				promjeni
			</a> | <a href="obrisi.php?sifra=<?php echo $red->sifra ?>">
				obriši
			</a>
		</li>
		
		<?php 
		endforeach;
		
		?>
		
		<?php
		include_once "../../predlozak/skripta.php";
		?>
		
	</body>
</html>
