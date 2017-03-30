<?php
include_once '../../konfiguracija.php';
if(!isset($_SESSION[$sid . "autoriziran"])){
	header("location: ../../logout.php");
}

if(!isset($_GET["sifra"]) && !isset($_POST["tag"])){
	header("location: ../../logout.php");
	exit;
}

include_once '../../predlozak/inputPolja.php';
$poruke=array();
	if(isset($_GET["sifra"])){
	if (!is_numeric($_GET["sifra"])){
		header("location: ../../logout.php");
		exit;
	}
	$izraz=$veza->prepare("
	select sifra as tag,
    naziv from tag
	where sifra=:sifra");
	$izraz->execute($_GET);
	$_POST = $izraz->fetch(PDO::FETCH_ASSOC);
	}

	if(isset($_POST["promjeni"])){
	include_once 'kontrola.php';
	
	if(count($poruke)==0){
		unset($_POST["promjeni"]);

		
		$izraz=$veza->prepare("update tag 
		set naziv=:naziv
		where sifra=:sifra");
		$izraz->execute(array(
		"naziv" => $_POST["naziv"],
		"sifra" => $_POST["tag"] 
		));
		
		
		header("location: index.php");
	}
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
		
		<form action="<?php echo $_SERVER["PHP_SELF"] ?>" 
			method="post">
			<div class="row">
				<legend>Promjenite podatke</legend>
				
				
				<?php 	include_once 'atributi.php'; ?>
				
				<input type="hidden" name="tag" value="<?php echo $_POST["tag"] ?>" />
			
			</div>
		
		<div class="row">
			<div class="large-6 columns">
				<a class="alert button expanded" href="index.php">Odustani</a>
		
			</div>
			<div class="large-6 columns">
				<input name="promjeni" class="success button expanded" type="submit" value="Promjeni" />
	
			</div>
		</div>
		
		</form>
			
		<?php
		include_once "../../predlozak/skripta.php";
		?>
		<script>
			<?php 
			if(!isset($_POST["dodaj"])){
				?>
				$("#naziv").focus();
				<?php
			}else{
				foreach ($poruke as $key => $value) {
					?>
					$("#<?php echo $key ?>").focus();
					<?php
					break;
				}
				?>
				
				<?php
			}
			?>
		</script>
	</body>
</html>
