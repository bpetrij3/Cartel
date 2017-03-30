<?php
include_once '../../konfiguracija.php';
if(!isset($_SESSION[$sid . "autoriziran"])){
	header("location: ../../logout.php");
}

if(!isset($_GET["sifra"]) && !isset($_POST["sifraPosta"])){
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
	select sifra as sifraPosta,
    naslov, clanak, privitak, datumObjave from post
	where sifra=:sifra");
	$izraz->execute($_GET);
	$_POST = $izraz->fetch(PDO::FETCH_ASSOC);
}

	if(isset($_POST["promjeni"])){
	$nacin="update";
	include_once 'kontrola.php';
	
	if(count($poruke)==0){
		unset($_POST["promjeni"]);
		$curr_timestamp = date('Y-m-d H:i:s');
		
		$izraz=$veza->prepare("update post 
		set naslov=:naslov, clanak=:clanak, privitak=:privitak, datumObjave=:datumObjave
		where sifra=:sifra");
		$izraz->execute(array(
		"naslov" => $_POST["naslov"],
		"clanak" => $_POST["clanak"],
		"privitak" => $_POST["privitak"],
		"sifra" => $_POST["sifraPosta"],
		"datumObjave"=>$curr_timestamp 
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
				<label id="tagovi">Tagovi
				<input id="tag" type="text" />
		
				</label>
				<?php  
				$izraz = $veza->prepare("select a.naziv, b.sifra_tag from tag a inner join tag_post b on a.sifra=b.sifra_tag inner join post c on c.sifra=b.sifra_post where c.sifra=:sifra");
				$izraz->execute($_GET);
				$rezultati=$izraz->fetchAll(PDO::FETCH_OBJ);
						
						foreach ($rezultati as $red) :
							?>
							<ul>
								<li>
									<?php echo $red->naziv; ?>
								</li>
								
							</ul>
							<?php
							endforeach;
				?>
				
				<label>Članak
				<textarea cols="50" rows="10" name="clanak" id="clanak" aria-describedby="clanakPomoc"><?php echo $_POST["clanak"]?></textarea>
				</label>
				<?php if (isset($poruke["clanak"])): ?>
				<p class="help-text" id="clanakPomoc"><?php echo $poruke["clanak"]; ?></p>
				<?php endif; ?>
				
				<input type="hidden" name="sifraPosta" value="<?php echo $_POST["sifraPosta"] ?>" />
			
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
		<script src="<?php echo $putanjaAPP ?>js/jquery-ui.js"></script>
		<script>
		
				$("#tag").autocomplete({
				    source: "traziTag.php?tag=<?php echo $_POST["sifra"]?>",
				    minLength: 1,
				    focus: function( event, ui ) {
				    	event.preventDefault();
				    	},
				    select: function(event, ui) {
				        $(this).val('').blur();
				        event.preventDefault();
				        spremiUBazu(ui.item);
				    }
					}).data( "ui-autocomplete" )._renderItem = function( ul, objekt ) {
				      return $( "<li>" )
				        .append( "<a>" + objekt.naziv + "</a>" )
				        .appendTo( ul );
				    };
				    
				    function spremiUBazu(tag){
			if(tag.sifra==0){
				return;
			}
				var tag = <?php echo $_POST["sifra"] ?>;
				
				$.ajax({
				type: "POST",
				url: "dodajPolaznika.php",
				data: "grupa=" + grupa + "&polaznik=" + polaznik.sifra,
				success: function(vratioServer){
					if(vratioServer=="OK"){
						$("#podaci").append("<tr><td>" + polaznik.ime 
						+ " " + polaznik.prezime + "</td><td>" 
						+ "<a href=\"#\" class=\"polaznik\" id=\"p_" + polaznik.sifra + "\">Obriši</a></td></tr>");
						definirajBrisanje();
						$("#uvjet").focus();
					}else{
						alert(vratioServer);
					}
					}
					
				});
			}
		
		
		
		function definirajBrisanje(){
		$(".polaznik").click(function(){
				var grupa = <?php echo $_POST["sifra"]?>;
				var element = $(this);
				var polaznik =element.attr("id").split("_")[1];
				$.ajax({
				type: "POST",
				url: "obrisiPolaznika.php",
				data: "grupa=" + grupa + "&polaznik=" + polaznik,
				success: function(vratioServer){
					if(vratioServer=="OK"){
						element.parent().parent().remove();
					}else{
						alert(vratioServer);
					}
					}
					
				});
				
				
				return false;
			});
		
		}
		
		definirajBrisanje();
			
	
		</script>
	</body>
</html>
