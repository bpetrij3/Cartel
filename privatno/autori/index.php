<?php
include_once '../../konfiguracija.php';
if(!isset($_SESSION[$sid . "autoriziran"])){
	header("location: ../../logout.php");
}
$uvjet="";
		if(isset($_GET["uvjet"])){
			$uvjet="%" . $_GET["uvjet"] . "%";
		}else{
			$uvjet="%";
		}
		
		
		$poStranici=6;
			
			$izraz = $veza -> prepare("
			select count(*) from autor 
			");
			$izraz -> execute();
			$ukupno = $izraz->fetchColumn();
			
			
			$ukupnoStranica=ceil($ukupno/$poStranici);
			
			
			if(isset($_GET["stranica"])){
				$stranica=$_GET["stranica"];
			}else{
				$stranica=1;
			}
			
			if($stranica>$ukupnoStranica){
				$stranica=1;
			}
			
			if($stranica==0){
				$stranica=$ukupnoStranica;
			}
			
			$odKuda = $stranica*$poStranici-$poStranici;
			
			
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<?php
		include_once '../../predlozak/head.php';
		?>
		<link rel="stylesheet" href="<?php echo $putanjaAPP ?>css/cropper.min.css">

	</head>
	
	<body>
		<?php
		include_once '../../predlozak/izbornik.php';
		?>
		
			<div class="row columns">
			<a class="secondary button expanded" href="unos.php">Unos novog autora</a>
			</div>
		
		<div class="row">
			<div class="large-12 columns">
				<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="GET">
			<input id="uvjet" value="<?php echo str_replace("%","", $uvjet); ?>" type="text" name="uvjet" placeholder="dio naziva" />
				</form>
			</div>
			
		<?php 
		
		
		$izraz=$veza->prepare("
		select sifra, ime, prezime from autor
		where concat(ime, prezime) like :uvjet
		order by prezime, ime limit :odKuda,:poStranici;
		");
		$izraz->execute(array("uvjet" => $uvjet, "odKuda"=>$odKuda,"poStranici"=>$poStranici));
		
		$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
		
		foreach ($rezultati as $red):
		
			include '../../predlozak/stavkaAutor.php';
		
		endforeach;
		
		 ?>
		</div>
		<ul class="pagination text-center" role="navigation" aria-label="Pagination">
			<li class="pagination-previous">
				<a href="?uvjet=<?php echo str_replace("%","", $uvjet); ?>&<?php echo "stranica=" . ($stranica-1) ?>" >Prethodna <span class="show-for-sr">stranica</span></a>
			</li>
			
			<?php 
			
			
			for($i=1;$i<=$ukupnoStranica;$i++):
			if($i==$stranica):
			 ?>
			<li class="current"><span class="show-for-sr">Vi ste na stranici</span> <?php echo $i ?></li>

			
			<?php else: ?>
			<li>
				<a href="?uvjet=<?php echo str_replace("%","", $uvjet); ?>&stranica=<?php echo $i; ?>" ><?php echo $i; ?></a>
			</li>
			
			<?php endif; ?>
			
			<?php endfor; ?>
			
			
			<li class="pagination-next">
				<a href="?uvjet=<?php echo str_replace("%","", $uvjet); ?>&<?php echo "stranica=" . ($stranica+1) ?>">Sljedeća <span class="show-for-sr">stranica</span></a>
			</li>
		</ul>
		
		
		
	<div class="reveal" id="slikaModal" data-reveal>
		<form method="post" action="slika.php" enctype="multipart/form-data">
    	<label>slika
    		<input type="file" required="required" name="slika"/>
    	</label>
    		
    		<input type="hidden" id="sifra" name="sifra" />
    		
    		<input class="expanded button" type="submit" name="autorizacija" value="Postavi" />
    		
    		
   		</form>
		<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
		
		
		<?php
		include_once "../../predlozak/skripta.php";
		?>
		

		<script>
		
			$("#uvjet").focus();
			
			
			$(".postaviSliku").click(function(){
				$("#sifra").val($(this).attr("id").split("_")[1]);
				$("#slikaModal").foundation("open");
				

				return false;
			});
			
		</script>
	</body>
</html>
