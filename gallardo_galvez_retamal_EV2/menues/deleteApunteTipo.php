<?php

include("./../data/DBConfig.php");

if(isset($_POST['deleteat'])){

    $idatel = mysqli_real_escape_string($conn,$_POST['idatel']);

    if ($idatel != ""){

        $sql_query = "delete from apunte_tipo where id = $idatel";
        $result = mysqli_query($conn,$sql_query);

        if($result > 0){
            header('Location: showApunteTipo.php');
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
                        <h1>Eliminar Apunte Tipo</h1>
                        <li>ID Apunte Tipo a eliminar (ejemplo: 1, 2, 3 ...)</li>
                        <div>
                            <input type="text" class="textbox" id="idatel" name="idatel" placeholder="1, 2, 3 ..." style="margin-top: 10px; margin-bottom: 10px;"/>
                        </div>
                        <div>
                            <input type="submit" value="Eliminar Apunte Tipo" name="deleteat" id="deleteat" />
                        </div>
                    </div>
                </form>
                <button style="margin-top: 1%" onclick="window.location='showApunteTipo.php'">Volver</button>
            </div>
            
        </div>
        
    </body>
</html>