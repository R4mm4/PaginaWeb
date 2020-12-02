<?php
  session_start();
  $correo = $_SESSION['correo'];
  echo "<h1>$correo</h1>";
?>
<!DOCTYPE html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Usuario</title>
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
     <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
			 <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	    <header>    <div class="contenedor">
        <h1>My User</h1>
        <input type="checkbox" id="menu-bar">
      <label class="icon-menu" for="menu-bar"></label>
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
                    if(isset($correo)){
                    echo "<li><a class='MenuBarItemSubmenu' href='Usuario.php'>$correo</a>
							<ul>
                              <li><a href='#'>Cerrar Secion</a></li>
                              <li><a href='#'>Ver Usuario</a></li>
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
                 <h2>Mi usuario</h2>
                 <p>Vienvenido a formar parte de la comunidad anime</p>
            </div>
           </section>
		<section id="info">
                <div class="contenedor">
                    <div class="info-ani">
						<p>Nombre:</p>
						<input type="text" name="nombre"/><br><br>
						<p>Correo:</p>
						<input type="text" name="correo"/><br><br>
						<p>Genero</p>
						<input type="text" name="genero"/>
					</div>
				</div>
		</section>
	
	</main>
	
</body>
</html>