<?php
  include("./../data/DBConfig.php");
?>

<!DOCTYPE html> 
<html>
  <head> 
    <title>HTML</title>
    <link rel="stylesheet" type="text/css" href="./../estilosEV2/estilosEV2.css">
  </head> 
  <body style="background-image: url('./../estilosEv2/background.jpg')">
    <div id="conteiner">
        <div id="separador">
          <hr>
        </div>

        <div id="menu">
            <div id="tabs">
              <button onclick="window.location = './../index.php'">Cerrar Sesion</button>
              <button onclick="window.location='showContenido.php'">Contenido</button>
              <button onclick="window.location='showApunteTipo.php'">Apunte Tipo</button>
              <button onclick="window.location='showApunte.php'">Apuntes</button>
            </div>
        </div>

      <div id="formulario_showcontenido" style="background-color: #aca45e">
        <h2>Tipos de Apuntes</h2>
        <h4 style="display: inline; ">ID</h4>
        <h4 style="display: inline; margin-left: 6%;">Tipo</h4>
        <h4 style="display: inline; margin-left: 13%;">Fecha Creacion</h4>
        <h4 style="display: inline; margin-left: 26%;">Fecha Actualizacion</h4>
          <?php
          
            include("./../data/DBConfig.php");

            // Realizar una consulta MySQL
            $query = 'SELECT * FROM apunte_tipo';
            $result = mysqli_query($conn,$query) or die('algo salio mal: ' . mysql_error());

            // Imprimir los resultados en HTML
            echo "<table >\n";
            while ($line = $result->fetch_array(MYSQLI_ASSOC)) {
                echo "\t<tr>\n";
                foreach ($line as $col_value) {
                    echo "\t\t<td>$col_value</td>\n";
                }
                echo "\t</tr>\n";
            }
            echo "</table>\n";

            // Liberar resultados
            mysqli_free_result($result);

          ?>
          <div>
            <button style="margin-top: 1%" onclick="window.location='insertApunteTipo.php'">Crear Apunte Tipo</button>
            <button style="margin-top: 1%" onclick="window.location='updateApunteTipo'">Actualizar Apunte Tipo</button>
            <button style="margin-top: 1%" onclick="window.location='deleteApunteTipo'">Eliminar Apunte Tipo</button>
          </div>   
          
      </div>

      <div id="pie">
        <hr>
      </div>  
      
    </div>
  </body> 
</html>