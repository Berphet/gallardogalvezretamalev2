<?php

include("./../data/DBConfig.php");

if(isset($_POST['deleteapunte'])){

    $idap = mysqli_real_escape_string($conn,$_POST['idap']);

    if ($idap != ""){

        $sql_query = "delete from apunte where id = $idap";
        $result = mysqli_query($conn,$sql_query);

        if($result > 0){
            header('Location: showApunte.php');
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
                        <h1>Eliminar Apunte</h1>
                        <li>ID Apunte a eliminar (ejemplo: 1, 2, 3 ...)</li>
                        <div>
                            <input type="text" class="textbox" id="idap" name="idap" placeholder="1, 2, 3 ..." style="margin-top: 10px; margin-bottom: 10px;"/>
                        </div>
                        <div>
                            <input type="submit" value="Eliminar Apunte" name="deleteapunte" id="deleteapunte" />
                        </div>
                    </div>
                </form>
                <button style="margin-top: 1%" onclick="window.location='showApunte.php'">Volver</button>
            </div>
            
        </div>
        
    </body>
</html>