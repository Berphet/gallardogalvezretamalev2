<?php

include("./../data/DBConfig.php");

if(isset($_POST['update'])){

    $idcon = mysqli_real_escape_string($conn,$_POST['idcon']);
    $nuevadescripcion = mysqli_real_escape_string($conn,$_POST['nuevadescripcion']);

    if ($idcon != "" && $nuevadescripcion != ""){

        $sql_query = "update contenido set descripcion = '".$nuevadescripcion."', fecha_actualizacion= now() where id = $idcon;";
        $result = mysqli_query($conn,$sql_query);

        if($result > 0){
            header('Location: showContenido.php');
        }else{
            echo "Por favor ingrese un ID existente";
        }

    }

}
?>

<!doctype html>
<html>
    <head>
        <title>gallardoEV2</title>
        <link rel="stylesheet" type="text/css" href="./../estilosEV2/estilosEV2.css">
    </head>
    <body>
        <div id="conteiner">
            <div id="formulario_contenido">
                <form method="post" action="">
                    <div>
                        <h1>Actualizar Contenido</h1>
                        <li>ID Contenido (ejemplo: 1, 2, 3 ...)</li>
                        <div>
                            <input type="text" class="textbox" id="idcon" name="idcon" placeholder="1, 2, 3 ..." style="margin-top: 10px; margin-bottom: 10px;"/>
                        </div>
                        <li>Descripcion Contenido</li>
                        <div>
                            <input type="text" class="textbox" id="nuevadescripcion" name="nuevadescripcion" placeholder="como dice dracula: bla, bla bla" style="width: 1000px; height: 30px; margin-top: 10px; margin-bottom: 10px;"/>
                        </div>
                        <div>
                            <input type="submit" value="Actualizar Contenido" name="update" id="update" />
                        </div>
                    </div>
                </form>
                <button style="margin-top: 1%" onclick="window.location='showContenido.php'">Volver</button>
            </div>
            
        </div>
        
    </body>
</html>