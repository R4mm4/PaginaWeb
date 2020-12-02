<?php
session_start();
$correo = $_SESSION[ 'correo' ];
echo "<h1>$correo</h1>";
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <link rel="stylesheet" href="css/fontello.css">
         <link rel="stylesheet" href="css/estilos.css">
         <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
     <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<title>Leer mas</title>
</head>

<body>
<header>
  <div class="contenedor">
    <h1>My Anime</h1>
    <input type="checkbox" id="menu-bar">
    <label class="icon-menu" for="menu-bar"></label>
	 <div>
    <nav class="menu">
      <ul id="MenuBar1" class="MenuBarHorizontal">
        <li><a href="index.php">Inicio</a></li>
        <li><a class="MenuBarItemSubmenu" href="#">Animes</a>
          <ul>
            <li><a class="MenuBarItemSubmenu" href="#">Elemento 3.1</a>
              <ul>
                <li><a href="#">Elemento 3.1.1</a></li>
                <li><a href="#">Elemento 3.1.2</a></li>
              </ul>
            </li>
            <li><a href="#">Elemento 3.2</a></li>
            <li><a href="#">Elemento 3.3</a></li>
          </ul>
        </li>
        <li><a href="#">Blogs</a></li>
        <?php
        if ( isset( $correo ) ) {
            echo "<li><a class='MenuBarItemSubmenu' href='Usuario.php'>$correo</a>
							<ul>
                              <li><a href='#'>Cerrar Secion</a></li>
                              <li><a href='#'>Ver Usuario</a></li>
                            </ul></li>";
        } else {
            echo "<li><a href='InicioSecion.php'>Iniciar Sesion</a></li>";
        }
        ?>
      </ul>
    </nav>
    </div>

  </div>
</header>
<nav></nav>
<article>
  <section id="banner"> <img src="img/banner.jpg">
    <div class="contenedor">
      <h2>Anime y niños felices</h2>
      <p>¿Cual es el mejor anime para usted?</p>
    </div>
  </section>
  <section id="info">
    <div class="contenedor">
      <div class="info-ani">
        <form action="login.php" method="POST">
          <label>Nombre:</label>
          <br>
          <br>
          <input type="text" id="nombre" name="nombre" value=""/>
          <br>
          <br>
          <label>Anime Favorito / Recomendados:</label>
          <br>
          <label for="Comentario"></label>
          <textarea name="Comentario" id="Comentario" cols="45" rows="5"></textarea>
          <br>
          <br>
          <input type="submit" value="Enviar Comentario">
          </p>
          <p>&nbsp;</p>
        </form>
      </div>
    </div>
  </section>
</article>
<aside></aside>
</body>
</html>