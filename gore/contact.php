<?php 
include_once '../konfiguracija.php';
 ?>
<!doctype html>
<html lang="en">
    <head>
		<?php 
		include_once '../predlozak/head.php';
		?>
	</head>
	<body>
   
        <?php
		include_once '../predlozak/izbornik.php';
		?>
    

        <article>
            <section class="naslovnica">
                <div class="tablica">
                    <div class="celija">
                        <h1>Let's Collaborate<br/>Give Us A Shout</h1>
                    </div>
                </div>
            </section>
        </article>
        <section class="article contact">
            <div class="tablica">
                <div class="celija">
                    <article>
                        <div class="blogImg">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.497014749258!2d18.678742315560687!3d45.56044297910224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475ce7a664d75897%3A0xb1a55bac5634fca6!2sEdunova+-+%C5%A1kola+informatike%2C+managementa+i+stranih+jezika!5e0!3m2!1shr!2shr!4v1481739324277" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                         <section class="comments">
                            <h3>drop a comment</h3>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <form method="post" action="">
                                <input type="text" name="name" placeholder="Name*" required/>
                                <input type="email" name="email" placeholder="E-mail*" required/>
                                <input type="url" name="url" placeholder="http://"/>
                                <textarea name="message" placeholder="Message*" required></textarea>
                                <input type="submit" name="submit" value="send"/>
                            </form>
                        </section>
                    </article>
                </div>
                <div class="celija">
                    <aside>
                        <div class="widget">
                            <h2>Studio Locations</h2>
                            <ul>
                                <li>
                                    <span>Australia: </span><a href="tel:0061256864445">+61 25 68 64 445</a>
                                </li>
                                <li>
                                    <span>Brasil: </span><a href="tel:0061256864445">+61 25 68 64 445</a>
                                </li>
                                <li>
                                    <span>Japan: </span><a href="tel:0061256864445">+61 25 68 64 445</a>
                                </li>
                                <li>
                                    <span>Mexico: </span><a href="tel:0061256864445">+61 25 68 64 445</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    
                </div>
            </div>
        </section>
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
		include_once '../predlozak/login.php';
		?>
		<?php
		include_once '../predlozak/skripta.php';
		?>
    </body>
</html>