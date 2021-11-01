<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
<div class="container" id="container">
	
	<div class="form-container sign-in-container">
		<form action="" method="POST">
     <?php
        if(isset($_POST["btnConfirmar"])){
         $IdCodigo=$_POST["txtCodigo"];
         $Contraseña=$_POST["txtContraseña"];
         
          $mysqli = new mysqli('localhost', 'root', '', 'BDLogeo');
          //Datos del trabajador
          $query ="insert into login VALUES('$IdCodigo', '$Contraseña')";
          $resultado= mysqli_query($mysqli, $query);

          echo "<script>alert('Usuario Registrado');</script>";
      //   if ($filas>0) {
            header("Location:/Logeo_Asus/Logearse.php");  
//          }
//          else{
//          echo "Usuario NO Validado";}
             
          }
       
          ?>
			<h1>Crear Cuenta</h1>
			
			<input type="codigo" name="txtCodigo" placeholder="Codigo" />
			<input type="password"  name="txtContraseña" placeholder="Contraseña" />
			<button name="btnConfirmar">Registrar</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			
			<div class="overlay-panel overlay-right">
				<h1>Bienvenido</h1>
				<p>Ingresa tu Informacion Personal para crear una cuenta</p>
			</div>
		</div>
	</div>
</div>


    </body>
</html>
