<?php

include("./../data/DBConfig.php");

if(isset($_POST['newapunte'])){

    //declarar variables
    $contenidoid = mysqli_real_escape_string($conn,$_POST['contenidoid']);
    $nombre = mysqli_real_escape_string($conn,$_POST['nombre']);
    $url = mysqli_real_escape_string($conn,$_POST['url']);
    $tipo = mysqli_real_escape_string($conn,$_POST['apuntetipo']);

    //comprobar que las variables recibidas no esten vacias
    if ($contenidoid != "" && $nombre != "" && $url != "" && $tipo != ""){

        $sql_query = "insert into apunte (contenido_id, nombre, url, tipo, fecha_creacion, fecha_actualizacion) values";
        $sql_query .= "($contenidoid,'".$nombre."', '".$url."', $tipo, now(), now());";
        $result = mysqli_query($conn,$sql_query);

        if($result > 0){
            header('Location: showApunte.php');
        }else{
            echo "rellene todos los campos";
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
                            <input type="submit" value="Crear Apunte" name="newapunte" id="newapunte" />
                        </div>
                    </div>
                </form>
                <button style="margin-top: 1%" onclick="window.location='showApunte.php'">Volver</button>
            </div>
            
        </div>
        
    </body>
</html>