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

      <div id="formulario_showcontenido">
        <h2>Apuntes</h2>
        <h4 style="display: inline; ">ID</h4>
        <h4 style="display: inline; margin-left: 1%;">Contenido</h4>
        <h4 style="display: inline; margin-left: 1%;">Nombre Apunte</h4>
        <h4 style="display: inline; margin-left: 8%;">URL</h4>
        <h4 style="display: inline; margin-left: 30%;">Tipo Apunte</h4>
        <h4 style="display: inline; margin-left: 1%;">Fecha Creacion</h4>
        <h4 style="display: inline; margin-left: 1%;">Fecha Actualizacion</h4>
          <?php
          
            include("./../data/DBConfig.php");

            // Realizar una consulta MySQL
            $query = 'SELECT * FROM apunte';
            $result = mysqli_query($conn,$query) or die('algo salio mal: ' . mysql_error());

            // Imprimir los resultados en HTML
            echo "<table>\n";
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
            <button style="margin-top: 1%" onclick="window.location='insertApunte.php'">Crear Apunte</button>
            <button style="margin-top: 1%" onclick="window.location='updateApunte'">Actualizar Apunte</button>
            <button style="margin-top: 1%" onclick="window.location='deleteApunte'">Eliminar Apunte</button>
          </div>   
          
      </div>

      <div id="pie">
        <hr>
      </div>  
      
    </div>
  </body> 
</html>