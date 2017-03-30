<?php 	
include_once '../../konfiguracija.php';
if(!isset($_SESSION[$sid . "autoriziran"])){
	header("location: ../../logout.php");
}
include_once'../../predlozak/inputPolja.php';
$poruke=array();
	
if(isset($_POST["dodaj"])){
	$nacin="insert";
	include_once 'kontrola.php';
	
	if(count($poruke)==0){
		unset($_POST["dodaj"]);
	
	
		$izraz=$veza->prepare("insert into autor
		(ime, prezime, email, password) values
		(:ime, :prezime, :email, md5(:password))");
		$izraz->execute($_POST)
		;
		
		
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
			method="post" 
			enctype="multipart/form-data">
			
			<div class="row columns">
				
				<?php 	include_once 'atributi.php'; ?>
				
			</div>
		
		<div class="row">
			<div class="large-6 columns">
				<a class="alert button expanded" href="index.php">Odustani</a>
		
			</div>
			<div class="large-6 columns">
				<input name="dodaj" class="success button expanded" type="submit" value="Dodaj" />
	
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
				$("#ime").focus();
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

 