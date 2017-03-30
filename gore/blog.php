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
                        <h1>our blog</h1>
                    </div>
                </div>
            </section>
        </article>
        <section class="blog-list">
            <div class="tablica">
                <div class="celija">
                    <article>
                        <div class="blogImg" style="background-image:url('../img/stickyarticle.jpg');"></div>
                        <h2>a sticky post</h2>
                        <p><time>05/09/2016</time> | Comments: <a href="#">0</a> | Posted by: admin | In: <a href="#">Art</a>, <a href="#">Design</a></p>
                        <p>
                            Cras varius mi at luctus tempor. Praesent sed dignissim diam, vel hendrerit mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum finibus non justo vitae venenatis. Duis a dui nec nulla laoreet maximus in id ligula. Praesent tristique tincidunt ultrices. In ut odio vel dolor elementum porta nec vitae tellus.
                        </p>
                        <a href="article.php">Read more &#8594;</a>
                    </article>
                    <article>
                        <div class="blogImg" style="background-image:url('../img/photos.jpg');"></div>
                        <h2>photo post</h2>
                        <p><time>05/09/2016</time> | Comments: <a href="#">0</a> | Posted by: admin | In: <a href="#">Art</a>, <a href="#">Design</a></p>
                        <p>
                            Cras varius mi at luctus tempor. Praesent sed dignissim diam, vel hendrerit mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum finibus non justo vitae venenatis. Duis a dui nec nulla laoreet maximus in id ligula. Praesent tristique tincidunt ultrices. In ut odio vel dolor elementum porta nec vitae tellus.
                        </p>
                        <a href="article.html">Read more &#8594;</a>
                    </article>
                    <article>
                        <div class="blogImg"><iframe width="100%" height="350" src="https://www.youtube.com/embed/9D-QD_HIfjA" frameborder="0" allowfullscreen></iframe></div>
                        <h2>a youtube post</h2>
                        <p><time>05/09/2016</time> | Comments: <a href="#">0</a> | Posted by: admin | In: <a href="#">Art</a>, <a href="#">Design</a></p>
                        <p>
                            Cras varius mi at luctus tempor. Praesent sed dignissim diam, vel hendrerit mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum finibus non justo vitae venenatis. Duis a dui nec nulla laoreet maximus in id ligula. Praesent tristique tincidunt ultrices. In ut odio vel dolor elementum porta nec vitae tellus.
                        </p>
                        <a href="article.html">Read more &#8594;</a>
                    </article>
                    <article>
                        <div class="blogImg" style="background-image:url('../img/slider.jpeg');"></div>
                        <h2>a slider post</h2>
                        <p><time>05/09/2016</time> | Comments: <a href="#">0</a> | Posted by: admin | In: <a href="#">Art</a>, <a href="#">Design</a></p>
                        <p>
                            Cras varius mi at luctus tempor. Praesent sed dignissim diam, vel hendrerit mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum finibus non justo vitae venenatis. Duis a dui nec nulla laoreet maximus in id ligula. Praesent tristique tincidunt ultrices. In ut odio vel dolor elementum porta nec vitae tellus.
                        </p>
                        <a href="article.html">Read more &#8594;</a>
                    </article>
                    <a href="#" class="post-nav">&laquo; Older posts</a>
                </div>
                <div class="celija">
                    <aside>
                        <div class="search">
                            <form method="post" action="">
                                <input type="search" name="search" placeholder="Search" class="s"/>
                                <input type="submit" name="submit" value="ok" class="submit"/>
                            </form>
                        </div>
                        <div class="widget">
                            <h2>recent posts</h2>
                            <ul>
                                <li>
                                    <a href="#">Photo Post</a>
                                </li>
                                <li>
                                    <a href="#">A Sticky Post</a>
                                </li>
                                <li>
                                    <a href="#">A YouTube Post</a>
                                </li>
                                <li>
                                    <a href="#">Slider Post</a>
                                </li>
                                <li>
                                    <a href="#">A Vimeo Post</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h2>recent comments</h2>
                            <ul>
                                <li>
                                    <a href="#"><span>admin on</span> Photo Post</a>
                                </li>
                                <li>
                                    <a href="#">Christian <span>on</span> A Sticky Post</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h2>archives</h2>
                            <ul>
                                <li>
                                    <a href="#">September 2016</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h2>categories</h2>
                            <ul>
                                <li>
                                    <a href="#">Art</a>
                                </li>
                                <li>
                                    <a href="#">Design</a>
                                </li>
                                <li>
                                    <a href="#">Fashion Wear</a>
                                </li>
                                <li>
                                    <a href="#">Filmography</a>
                                </li>
                                <li>
                                    <a href="#">Illustration</a>
                                </li>
                                <li>
                                    <a href="#">Photography</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tags">
                            <h2>tag cloud</h2>
                            <ul>
                                <li>
                                    <a href="#">Art</a>
                                </li>
                                <li>
                                    <a href="#">Design</a>
                                </li>
                                <li>
                                    <a href="#">Film</a>
                                </li>
                                <li>
                                    <a href="#">Lomography</a>
                                </li>
                                <li>
                                    <a href="#">Nature</a>
                                </li>
                                <li>
                                    <a href="#">Paris</a>
                                </li>
                                <li>
                                    <a href="#">Photography</a>
                                </li>
                                <li>
                                    <a href="#">Photography Effects</a>
                                </li>
                                <li>
                                    <a href="#">Video</a>
                                </li>
                                <li>
                                    <a href="#">Vimeo</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </section><!-- lista clanaka -->
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