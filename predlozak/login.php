<div class="reveal" id="exampleModal1" data-reveal>
	<form method="post" action="<?php echo $putanjaAPP; ?>autoriziraj.php">

  <div class="container">
    <label><span class="prefix" ><i class="fi-torsos-female-male"></i></span><b>Username</b></label>
    <input type="text" placeholder="Enter Email Address" value="<?php echo isset($_GET['korisnik']) ? $_GET['korisnik'] : '' ?>" name="email" required >

    <label><span class="prefix" ><i class="fi-key"></i></span><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <input type="submit" name="autorizacija" class="button" value="Prijavi se">
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">&times;</span>
	</button>
  </div>
</form>
  <?php
    if (isset($_GET["korisnik"])):
    ?>
    <div class="alert callout">
    	Krivi email ili lozinka!
    </div>
    <?php
	endif;
    ?>
</div>