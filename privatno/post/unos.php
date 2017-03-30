<?php 	
include_once '../../konfiguracija.php';
if(!isset($_SESSION[$sid . "autoriziran"])){
	header("location: ../../logout.php");
}
include_once'../../predlozak/inputPolja.php';
$poruke=array();
	
if(isset($_POST["dodaj"])){

	include_once 'kontrola.php';
	
	if(count($poruke)==0){
		unset($_POST["dodaj"]);
		$curr_timestamp = date('Y-m-d H:i:s');
		
		$izraz=$veza->prepare("insert into post (naslov, clanak, privitak, datumObjave, autor_sifra, vidljivPost) values
		(:naslov, :clanak, :privitak, :datumObjave, :autor, :vidljivPost)
		");
		$izraz->execute(array(
		"naslov" => $_POST["naslov"],
		"clanak" => $_POST["clanak"],
		"privitak" => $_POST["privitak"],
		"autor" => $_SESSION[$sid . "autoriziran"]->sifra,
		"datumObjave"=>$curr_timestamp,
		"vidljivPost"=>1
		));
		$zadnjiPost = $veza->lastInsertId();
		
		//$izraz=$veza->prepare("insert into tag_post (sifra_post,tagovi) values
		//(:sifra, :tagovi)
		//");
		//$izraz->execute(array(
		//"sifra"=>$zadnjiPost, 
		//"tagovi"=>$_POST["tagovi"]
		//));
		
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
				
				<?php include_once 'atributi.php'; ?>
				<?php  
				$izraz = $veza->prepare("select * from post");
				$izraz->execute();
				$rezultati=$izraz->fetchAll(PDO::FETCH_OBJ);
						
						foreach ($rezultati as $red) :
							?>
							<ul>
							
							</ul>
							<?php
							endforeach;
				?>
				
				<label>Članak
				<textarea cols="50" rows="10" name="clanak" id="clanak" value="clanak" aria-describedby="clanakPomoc"></textarea>
				</label>
				<?php if (isset($poruke["clanak"])): ?>
				<p class="help-text" id="clanakPomoc"><?php echo $poruke["clanak"]; ?></p>
				<?php endif; 
		
				?>
				<input type="hidden" name="sifraPosta" value="<?php echo $_POST["sifraPosta"] ?>" />
				
			</div>
		
		<div class="row">
			<div class="large-6 columns">
				<a class="alert button expanded" href="index.php">Odustani</a>
		
			</div>
			<div class="large-6 columns">
				<input name="dodaj" class="success button expanded" type="submit" value="Objavi" />
	
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

 