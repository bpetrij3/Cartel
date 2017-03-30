 		<header class="zaglavlje">
            <div class="tablica">
                <div class="logo celija">
                    <a href="<?php echo $putanjaAPP;  ?>index.php">Cartel.</a>
                </div>
                <div class="nav celija">
                    <nav>
                        <ul class="dropdown menu" data-dropdown-menu>
                        <?php if(!isset($_SESSION[$sid . "autoriziran"])): ?>
                            <li>
                                <a href="<?php echo $putanjaAPP;  ?>index.php">Home</a>
                            </li>
                            <?php else: ?>
                            <li>
                            	<a href="#">Unos</a>
                         	   	<ul class="menu vertical">
                           		  <li>
                                	<a href="<?php echo $putanjaAPP;  ?>privatno/autori/index.php">Autori</a>
                           		  </li>
                           		  <li>
                               		 <a href="<?php echo $putanjaAPP;  ?>privatno/post/index.php">Post</a>
                            	  </li>
                            	   <li>
                               		 <a href="<?php echo $putanjaAPP;  ?>privatno/tagovi-bloga/index.php">Tagovi bloga</a>
                            	  </li>                          
                           		</ul> 
                            </li>    
                           <?php endif; ?>
                           <?php if(!isset($_SESSION[$sid . "autoriziran"])): ?>
                           		  <li>
                                	<a href="<?php echo $putanjaAPP;  ?>gore/about.php">About</a>
                            	  </li>
                            	  <li>
                                	<a href="<?php echo $putanjaAPP;  ?>gore/blog.php">Blog</a>
                                  </li>
                            	  <li>
                                	<a href="<?php echo $putanjaAPP;  ?>gore/contact.php">Contact</a>
                           		  </li>
                           <?php else: ?>
                           <li>
                           		<a href="#">Više o nama</a>
                           		<ul class="menu vertical">
                            	  <li>
                                	<a href="<?php echo $putanjaAPP;  ?>gore/about.php">About</a>
                            	  </li>
                            	  <li>
                                	<a href="<?php echo $putanjaAPP;  ?>gore/blog.php">Blog</a>
                                 </li>
                            	   <li>
                                	<a href="<?php echo $putanjaAPP;  ?>gore/contact.php">Contact</a>
                           		  </li>
                           		</ul>
                          	</li>
                          	<?php endif; ?>
                            <li>
                            	<?php if(isset($_SESSION[$sid . "autoriziran"])): ?>
                            	<a href="<?php echo $putanjaAPP;  ?>privatno/era.php">ERA</a>
                            </li>
                            <li>
      							<a href="<?php echo $putanjaAPP;  ?>logout.php">Odjavi <?php echo $_SESSION[$sid . "autoriziran"]->ime . " ". $_SESSION[$sid . "autoriziran"]->prezime ?></a>
      						<?php else: ?>
      							<a data-open="exampleModal1" href="#">Login</a>
      						<?php endif; ?>
                            </li>
                        </ul>
                    </nav>
                </div>
             </div>
        </header>