<?php
include_once '../konfiguracija.php';
if(!isset($_SESSION[$sid . "autoriziran"])){
	header("location: ../logout.php");
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<?php
		include_once '../predlozak/head.php';
		?>
	</head>
	<body>
		<?php
		include_once '../predlozak/izbornik.php';
		?>
		<div class="row columns">
		<img style="margin-left: 220px" src="<?php echo $putanjaAPP ?>img/era.png" />
		</div>
		<?php
		include_once "../predlozak/skripta.php";
		?>
		
	</body>
</html>
