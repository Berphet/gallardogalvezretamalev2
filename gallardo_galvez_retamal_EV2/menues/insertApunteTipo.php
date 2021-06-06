<?php

include("./../data/DBConfig.php");

if(isset($_POST['inserat'])){

    $tipo = mysqli_real_escape_string($conn,$_POST['tipo']);

    if ($tipo != ""){

        $sql_query = "insert into apunte_tipo (nombre, fecha_creacion, fecha_actualizacion) values";
        $sql_query .= "('".$tipo."',now(),now());";
        $result = mysqli_query($conn,$sql_query);

        if($result > 0){
            header('Location: showApunteTipo.php');
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
                        <h1>Crear Apunte Tipo</h1>
                        <li>Formato</li>
                        <div>
                            <input type="text" class="textbox" id="tipo" name="tipo" placeholder="Formato" style="margin-top: 10px; margin-bottom: 10px;"/>
                        </div>
                        <div>
                            <input type="submit" value="Crear Apunte Tipo" name="inserat" id="inserat" />
                        </div>
                    </div>
                </form>
                <button style="margin-top: 1%" onclick="window.location='showApunteTipo.php'">Volver</button>
            </div>
            
        </div>
        
    </body>
</html>