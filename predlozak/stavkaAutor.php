<div class="column medium-4 end">

	<ul class="pricing-table no-bullet text-center">
		<li class="description">
			<img class="slika" id="o_<?php echo $red->sifra ?>" src="<?php 
				
				$putanjaslika = $_SERVER["CONTEXT_DOCUMENT_ROOT"] . $putanjaAPP."img/autori/". $red->sifra . ".jpg";
				//echo $putanjaslika;
				if(file_exists($putanjaslika)){
					echo $putanjaAPP ."img/autori/" . $red->sifra . ".jpg";
				}else{
					echo $putanjaAPP ."img/autori/nepoznato.jpg";
				}
				
				?>" alt="" />
				
	</li>
		<li class="title">
			<?php echo $red->prezime . " " . $red->ime ?>
		</li>
			
		</li>
		<li class="description">
			<a href="promjeni.php?sifra=<?php echo $red->sifra ?>">
				promjeni
			</a> | <a href="obrisi.php?sifra=<?php echo $red->sifra ?>">
				obriši
			</a>
			</a> | <a href="#" class="postaviSliku" id="o_<?php echo $red->sifra ?>">
				slika
			</a>
		</li>
	</ul>

</div>