<?php

include("./../data/DBConfig.php");

if(isset($_POST['updatat'])){

    $idtipo = mysqli_real_escape_string($conn,$_POST['idtipo']);
    $tipo = mysqli_real_escape_string($conn,$_POST['tipo']);

    if ($idtipo != "" && $tipo != ""){

        $sql_query = "update apunte_tipo set nombre = '".$tipo."', fecha_actualizacion= now() where id= $idtipo;";
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
                        <h1>Actualizar Apunte Tipo</h1>
                        <li>ID Apunte Tipo (ejemplo: 1, 2, 3 ...)</li>
                        <div>
                            <input type="text" class="textbox" id="idtipo" name="idtipo" placeholder="1, 2, 3 ..." style="margin-top: 10px; margin-bottom: 10px;"/>
                        </div>
                        <li>Formato</li>
                        <div>
                            <input type="text" class="textbox" id="tipo" name="tipo" placeholder="Formato" style="margin-top: 10px; margin-bottom: 10px;"/>
                        </div>
                        <div>
                            <input type="submit" value="Actualizar Apunte Tipo" name="updatat" id="updatat" />
                        </div>
                    </div>
                </form>
                <button style="margin-top: 1%" onclick="window.location='showApunteTipo.php'">Volver</button>
            </div>
            
        </div>
        
    </body>
</html>