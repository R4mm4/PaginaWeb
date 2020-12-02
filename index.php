<?php
  session_start();
  $correo = $_SESSION['correo'];
  echo "<h1>$correo</h1>";
?>
<!DOCTYPE html>
<html>
<head>
         <title>My anime</title>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width,user-scalable=no, initial.scale=1, maximun-scale=1, minimun-scale=1">
         <link rel="stylesheet" href="css/fontello.css">
         <link rel="stylesheet" href="css/estilos.css">
         <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
     <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
     
<body>
  <header>
    <div class="contenedor">
        <h1>My Anime</h1>
        <input type="checkbox" id="menu-bar">
      <label class="icon-menu" for="menu-bar"></label>
                <nav class="menu">
					
                  <ul id="MenuBar1" class="MenuBarHorizontal">
                      <li><a href="index.php">Inicio</a></li>
                      <li><a class="MenuBarItemSubmenu" href="#">Animes</a>
                        <ul>
                          <li><a class="MenuBarItemSubmenu" href="#">En emision</a>
                            <ul>
                              <li><a href="#">Mas Animes</a></li>
                              <li><a href="#">Elemento 3.1.2</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Elemento 3.2</a></li>
                          <li><a href="#">Elemento 3.3</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Blogs</a></li>
                                          <?php
                    if(isset($correo)){
                    echo "<li><a class='MenuBarItemSubmenu' href='Usuario.php'>$correo</a>
							<ul>
                              <li><a href='logout.php'>Cerrar Secion</a></li>
                              <li><a href='Usuario.php'>Ver Usuario</a></li>
                            </ul></li>";
                    }else{
                    echo "<li><a href='InicioSecion.php'>Iniciar Sesion</a></li>";
                    }
                    ?>
                  </ul>
                </nav>         
    </div>
</header>
  <main>
        <section id="banner">
            <img src="img/banner.jpg">
            <div class="contenedor">
                 <h2>Anime y niños felices</h2>
                 <p>¿Cual es el mejor anime para usted?</p>
                 <a href="LeerMas.php">Leer más</a>
            </div>
           </section>
           

            <section id="Bienvenidos">
            <div class="contenedor">
                <h2>BIENVENIDOS A LA PAGINA</h2>
                <p>La mejor pagina para Ver Anime Online Gratis, mira los ultimos capitulos de los animes del momento sin ninguna restriccion | ver Online y descargar.</p>
              </div>
            </section> 

            <section id="blog">
                <h3>Lo último de nuestro blog</h3>
                <div class="contenedor">
                    <article>
                        <img src="img/blogFF.jpg">
                        <h4>Fire Force S2</h4>
                    </article>
                    <article>
                        <img src="img/blogKKKB.jpg">
                        <h4>Kuma Kuma Kuma Bear</h4>
                    </article>
                    <article>
                        <img src="img/blogD3.jpg">
                        <h4>DanMachi S3</h4>
                    </article>
                    <article>
                        <img src="img/blogRC.jpg">
                        <h4>Re Creators</h4>
                    </article>
                    <article>
                        <img src="img/blogBSM.jpg">
                        <h4>BusouShoujo Machiavellianism</h4>
                    </article>
                    <article>
                        <img src="img/blogFSN.jpg">
                        <h4>Fate/Stay Night Unlimited Blade Works</h4>

                         
                    </article>
                </div>
            </section>

            <section id="info">
                <h3>Animes Recomendados</h3>
                <div class="contenedor">
                    <div class="info-ani">
                        <a href=""><img src="img/ani.jpg" alt="">
                        </a><h4>Gabriel Dropout</h4>
                    </div>
                    <div class="info-ani">
                        <a href=""><img src="img/ani2.jpg" alt="">
                        </a><h4>Kono Subarashii 
                        <p>Sekai ni Shukufuku wo</h4>
                    </div>
                    <div class="info-ani">
                        <a href=""><img src="img/ani3.jpg" alt="">
                        </a><h4>kobayashi-san chi no
                        <p> maid dragon </h4>
                    </div>
                    <div class="info-ani">
                        <a href=""><img src="img/ani4.jpg" alt="">
                        </a><h4>Sora no Otoshimono </h4>
                    </div>
                </div>
            </section>
</main>

<footer>
            <div class="contenedor">
                <p class="copy">My Anime &copy; 2020</p>
                <div class="sociales">
                    <a class="icon-facebook-rect" href="https://www.facebook.com/"></a>
                    <a class="icon-twitter" href="https://twitter.com/"></a>
                    <a class="icon-instagram" href="https://www.instagram.com/"></a>
                    <a class="icon-googleplus-rect" href="https://plus.google.com/"></a>
                </div>
            </div>
            <MARQUEE class="copy">Alumnos: Elizabeth Mejia Avila / Pedro Ruiz Rangel /Imanol Ibarra Ortiz / Sealtiel</MARQUEE>
        </footer>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
        </script>
</body>
</html>