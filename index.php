<?php
include_once 'konfiguracija.php';
 ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<?php 
		include_once 'predlozak/head.php';
		?>
	</head>
	<body>
        <?php 
        include_once 'predlozak/izbornik.php';  
        ?>

            <section class="naslovnica">
                <div class="tablica">
                    <div class="celija">
                        <h1>Welcome to cartel creative wordpress theme!</h1>
                    </div>
                </div>
            </section>
            <section class="galerija">
                <div class="tNav tablica">
                    <div class="celija">
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">All</a>
                                </li>
                                <li>
                                    <a href="#">Design</a>
                                </li>
                                <li>
                                    <a href="#">Fashion</a>
                                </li>
                                <li>
                                    <a href="#">Illustration</a>
                                </li>
                                <li>
                                    <a href="#">Photography</a>
                                </li>
                                <li>
                                    <a href="#">Video</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="gLista tablica">
                    <div class="celija">
                        <ul>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </article>
        <footer>
            <section class="podnozje">
                <div class="tablica">
                    <div class="logo celija">
                        <a href="#">Cartel.</a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in porttitor lacus. Mauris dolor sapien.
                        </p>
                        <p>
                            Morbi in nulla sit amet mi facilisis ornare ac vel ligula. Fusce in commodo tortor. Praesent eleifend mi nisl, nec iaculis eros imperdiet in. Pellentesque id odio vehicula, rhoncus arcu ac.
                        </p>
                    </div>
                    <div class="post celija">
                        <h2>Recent posts</h2>
                        <ul>
                            <li><a href="#">Photo Post <span>September 6, 2013</span></a></li>
                            <li><a href="#">A Sticky Post <span>September 5, 2013</span></a></li>
                            <li><a href="#">A Youtube Post <span>September 6, 2013</span></a></li>
                            <li><a href="#">A Slider Post <span>September 6, 2013</span></a></li>
                            <li><a href="#">A Vimeo Post <span>September 6, 2013</span></a></li>
                            <li><a href="#">A Regular Post <span>September 6, 2013</span></a></li>
                        </ul>
                    </div>
                    <div class="colla celija">
                        <h2>Let's collaborate</h2>
                        <p>
                            Morbi in nulla sit amet mi facilisis ornare ac vel ligula. Fusce in commodo tortor. Praesent eleifend mi nisl, nec iaculis eros imperdiet in. Pellentesque id odio vehicula, rhoncus arcu ac.
                            <br/><br/>
                            Tel: +1 55 65 73 4503 | +1 55 02 37 4701<br/>
                            E-mail: <span>bpetrij3@gmail.com</span>
                        </p>
                    </div>
                </div>
            </section>
            <section class="info">
                <div class="tablica">
                    <div class="celija">
                        <ul>
                            <li>
                                <a href="#"><span class="socicon-twitter"></span> Twitter</a>
                            </li>
                            <li>
                                <a href="#"><span class="socicon-facebook"></span> Facebook</a>
                            </li>
                            <li>
                                <a href="#"><span class="socicon-google"></span> Google+</a>
                            </li>
                        </ul>
                        <p>
                            &copy; <a href="#">Barbara Petrijevčanin</a>. All Rights Reserved.
                        </p>
                    </div>
                </div>
            </section>
            <a class="aTop" href="#">&#x2770;</a>
        </footer>
        <?php
		include_once 'predlozak/login.php';
		?>
        <?php
		include_once 'predlozak/skripta.php';
		?>
		<script>
		<?php
			  if (isset($_GET["korisnik"])):
			    ?>
			    $("#exampleModal1").foundation("open");
			    <?php
				endif;
			    ?>
		</script>
		
	</body>
</html>
