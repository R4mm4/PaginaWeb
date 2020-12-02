<!DOCTYPE html>
<html>

<head>
  <title>Inicio de Sesion</title>
  <link rel="stylesheet" href="css/fontello.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
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
          if (isset($correo)) {
            echo "<li><a class='MenuBarItemSubmenu' href='Usuario.php'>$correo</a>
							<ul>
                              <li><a href='logout.php'>Cerrar Secion</a></li>
                              <li><a href='Usuario.php'>Ver Usuario</a></li>
                            </ul></li>";
          } else {
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
        <h2>Inicio de Sesion</h2>
        <p>Vienvenido a formar parte de la comunidad anime</p>
      </div>
    </section>


    <section id="info">
      <div class="contenedor">
        <div class="info-ani">
        <script src="java/app.js"></script>
          <form action="login.php" method="POST" id="formulario" name="formulario">
            <p><img src="img/blogKKKB.jpg"><br><br>
              <label>Correo:</label>
              <br><br>
              <input type="text" id="correo" name="correo" value="" /><br><br>
              <label>Contraseña:</label>
              <br><br>
              <input type="password" id="contrasena" name="contrasena" value="" /><br><br>
              <input class="btn-primary" type="submit" value="Iniciar Sesion">
            </p>
            <p>&nbsp;</p>
            <p>No tienes una cuenta?</p>
            <a href="signup.php" style="color:#FFF">Crear cuenta</a>
          </form>
          <div class="mt-3" id="respuesta"></div>
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
    <MARQUEE class="copy">Alumno: Imanol Ibarra Ortiz No.Control: s17120241</MARQUEE>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>