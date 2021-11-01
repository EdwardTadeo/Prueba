<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
              <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="/img/skull.png" type="image/x-icon">
        <title></title>
    </head>
    <body>
        <form action="" method="POST">
        <?php session_start();
            include("Pagina/Cabecera.html");
            
        ?>
        
        
        
        <?php
        if(isset($_POST["btnConfirmar"])){
          $IdCodigo=$_POST["txtCodigo"];
          $Contraseña=$_POST["txtContraseña"];
          
          $mysqli = new mysqli('localhost', 'root', '', 'BDLogeo');
          //Datos del trabajador
          $query ="SELECT * FROM Login Where IdCodigo='$IdCodigo'and Contraseña='$Contraseña'";
          $resultado= mysqli_query($mysqli, $query);
          $filas= mysqli_num_rows($resultado);
          if ($filas>0) {
             header("Location: Intranet/blog_index.html?'$IdCodigo'");  
          }
          else{
          echo "<script>alert('Usuario o Contraseña Inválidos');</script>";
          }
             
          }
       
          ?>
            <section class="section">
            <div class="container">
                <div class="skull skull1"></div>
                <div class="skull skull2"></div>
                <div class="skull skull3"></div>
                <div class="skull skull4"></div>
                <div class="skull skull5"></div>
                <div class="container__inner">
              <div class="container__inner">
                  <div class="form">
                      <h2 class="form__title">UCSS</h2>
                      <form action="get">
                          <div class="input__box">
                              <input type="correo" name="txtCodigo" placeholer="Codigo"/>
                          </div>
                          <div class="input__box">
                            <input type="password" name="txtContraseña" placeholer="Contraseña"/>
                          </div>
                          <div class="input__box">
                            <input type="submit" name="btnConfirmar" placeholer="Ingresar"/>
                          </div>
                          <p class="form__subtitle">Crear Usuario <a href=Registro/Registro.php>Registrese</a></p>
                      </form>
                  </div>
              </div>
            
            </div>
        </section>
        <div align="center">
           
        <?php include ("Pagina/PiePag.html");?>
     </div>
    </form>
   </body>
</html>
