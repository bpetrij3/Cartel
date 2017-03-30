<div class="large-12 columns">

	<ul class="pricing-table no-bullet text-center">

		<li class="title">
			<?php echo $red->naslov . " | " . $red->ime . " " . $red->prezime . " | " . $red->datumObjave ?>
		</li>
		<?php 
		$izraz=$veza->prepare("select count(privitak) from post where sifra=:sifra");
		$izraz->execute(array("sifra"=>$red->sifra)); 
		$provjeraPrivitak=$izraz->fetchColumn();
		if($provjeraPrivitak==1):
		if(strpos($red->privitak, "img") !== false):
		?>

		<li>
			<li class="description">
			<img class="slika" id="o_<?php echo $red->sifra ?>" src="<?php 
				
					echo $putanjaAPP . $red->privitak;
				
				?>" alt="" />
				
			</li>
		</li>
		<?php elseif(strpos($red->privitak, "https") !== false): ?>
			<li>
				<li class="description">
				<iframe width="640" height="426" allowfullscreen="allowfullscreen" src="<?php echo $red->privitak ?>"></iframe>
				</li>
			</li>
		<?php endif; ?>
		<?php endif; ?>
		
		<li class="description">
			<?php echo $red->clanak ?>
		</li>
			
		</li>
		<li class="description">
			<a href="promjeni.php?sifra=<?php echo $red->sifra ?>">
				promjeni
			</a> | <a href="obrisi.php?sifra=<?php echo $red->sifra ?>">
				obriši
			</a>
		</li>
	</ul>

</div>