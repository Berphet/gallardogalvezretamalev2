<?php

include("./../data/DBConfig.php");

if(isset($_POST['updapunte'])){

    $apunteid = mysqli_real_escape_string($conn,$_POST['apunteid']);
    $contenidoid = mysqli_real_escape_string($conn,$_POST['contenidoid']);
    $nombre = mysqli_real_escape_string($conn,$_POST['nombre']);
    $url = mysqli_real_escape_string($conn,$_POST['url']);
    $tipo = mysqli_real_escape_string($conn,$_POST['apuntetipo']);

    if ($apunteid != "" && $contenidoid != "" && $nombre != "" && $url != "" && $tipo != ""){

        $sql_query = "update apunte set contenido_id = $contenidoid, nombre = '".$nombre."', url = '".$url."', tipo = $tipo, fecha_actualizacion = now() where id = $apunteid;";
        $result = mysqli_query($conn,$sql_query);

        if($result > 0){
            header('Location: showApunte.php');
        }else{
            echo "algo salio mal";
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
                        <h1>Insertar Apunte</h1>
                        <li>ID Apunte a editar</li>
                        <div>
                            <input type="text" class="textbox" id="apunteid" name="apunteid" placeholder="1, 2, 3..." style="margin-top: 10px; margin-bottom: 10px;"/>
                        </div>
                        <li>Contenido Relacionado</li>
                        <div>
                            <input type="text" class="textbox" id="contenidoid" name="contenidoid" placeholder="1, 2, 3..." style="margin-top: 10px; margin-bottom: 10px;"/>
                        </div>
                        <li>Nombre Apunte</li>
                        <div>
                            <input type="text" class="textbox" id="nombre" name="nombre" placeholder="como dice dracula: bla, bla bla" style="width: 1000px; height: 30px; margin-top: 10px; margin-bottom: 10px;"/>
                        </div>
                        <li>URL</li>
                        <div>
                            <input type="text" class="textbox" id="url" name="url" placeholder="youtube.com/profepongame un 7" style="margin-top: 10px; margin-bottom: 10px;"/>
                        </div>
                        <li>Apunte Tipo</li>
                        <div>
                            <input type="text" class="textbox" id="apuntetipo" name="apuntetipo" placeholder="1, 2, 3..." style="margin-top: 10px; margin-bottom: 10px;"/>
                        </div>
                        <div>
                            <input type="submit" value="Actualizar Apunte" name="updapunte" id="updapunte" />
                        </div>
                    </div>
                </form>
                <button style="margin-top: 1%" onclick="window.location='showApunte.php'">Volver</button>
            </div>
            
        </div>
        
    </body>
</html>