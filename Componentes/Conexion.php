<?php
  $mysqli = new mysqli('localhost', 'root', '', 'BDLogeo');
  
  
  
          //Datos del pedido
          $query = $mysqli -> query ("SELECT * FROM Login");
              echo '<table border="1" width="75%">';
              echo '<thead>';
              echo '<th align="center">'.'ID'.'</th>';
              echo '<th align="center">'.'CONTRASEÑA'.'</th>';
             
              echo '</thead>';
          while ($Logeo = mysqli_fetch_array($query)) {
              echo '<tr>';
              echo  '<td align="center">'.$Logeo['IdCodigo'].'</td>';
              echo  '<td align="center">'.$Logeo['Contraseña'].'</td>';
              echo '</tr>';
              echo '</table>';
          }
?>


<form action="" method="POST">
        
        
        
        
        <?php
        if(isset($_POST["btnConfirmar"])){
          $IdCodigo=$_POST["txtCodigo"];
          $Contraseña=$_POST["txtContraseña"];
          
          $mysqli = new mysqli('localhost', 'root', '', 'BDLogeo');
          //Datos del trabajador
          $query = $mysqli -> query ("SELECT * FROM Login Where IdCodigo=".$IdCodigo.
                                      "and Contraseña=".$Contraseña );
          
while ($Logeo = mysqli_fetch_array($query)) {
              echo '<tr>';
              echo  '<td align="center">'.$Logeo['IdCodigo'].'</td>';
              echo  '<td align="center">'.$Logeo['Contraseña'].'</td>';
              echo '</tr>';
              echo '</table>';
          }
          }
       
          ?>
        <div align="center">
        <table border="1">
            <thead>
                
            </thead>
            <tbody>
                <tr>
                    
                    <td>Codigo</td>
                    <td>
                        <input type="text" name="txtCodigo" value=" " size="30" />  
                    </td>
                </tr>
                <tr>
                    <td>Contraseña</td>
                    <td>
                        <input type="text" name="txtContraseña" value=" " size="30" />  
                    </td>
                </tr>
                
                
                
                
            </tbody>
        </table>
            <input type="submit" value="Ingresar" name="btnConfirmar" />     
      
     </div>
    </form>