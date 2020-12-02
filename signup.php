<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['correo']) && !empty($_POST['contrasena'])) {
    $sql = "INSERT INTO usuario (nombre,correo,contrasena,genero) VALUES (:nombre,:correo,:contrasena,:genero)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre',$_POST['nombre']);
    $stmt->bindParam(':correo', $_POST['correo']);
    $password = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
    $stmt->bindParam(':contrasena', $password);
    $stmt->bindParam(':genero', $_POST['genero']);


    if ($stmt->execute()) {
      $message = 'El usuario se ha creado de forma satisfactoria';
    } else {
      $message = 'No se ha podido crear tu usuario';
    }
  }
?>
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
		 
		 <script type="text/javascript">
			 function validar(){
				 var form = document.form;
				 if(form.nombre.value==0){
						alert("El campo esta vacio");
					 form.nombre.value="";
					 form.nombre.focus();
					 return false;
					}
			 }
		 </script>
		 <script>
		 	function validarCorreo(correo){
				var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
				
				var esValido = expReg.test(correo);
				if(esValido==true){
				   alert('El correo es valido');
				   }else{
					   alert('El correo es invalido');
				   }
			}
		 </script>
		 
     </head>
     
<body>

<h1>Login</h1>

        
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
        <a href="file:///C|/xampp/htdocs/fr/index.html">index</a><?php
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
						    <form action="signup.php" method="POST">
								<p>Nombre:</p>
      							<input name="nombre" type="text" placeholder="Ingresa tu nombre">
      							<input name="correo" id="correo" type="text" placeholder="Ingresa tu correo">
      							<input name="contrasena" type="password" placeholder="Ingresa tu contrasena">
      							<input name="confirmar_contrasena" type="password" placeholder="Confirma tu contrasena">
      							<input name="genero" type="text" placeholder="Genero">
      							<input type="submit" value="Crear"/>
    							</form>


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
     </body>
</html>