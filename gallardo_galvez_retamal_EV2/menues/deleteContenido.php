<?php

include("./../data/DBConfig.php");

if(isset($_POST['delete'])){

    $idcondel = mysqli_real_escape_string($conn,$_POST['idcondel']);

    if ($idcondel != ""){

        $sql_query = "delete from contenido where id = $idcondel";
        $sql_query2 = "delete from apunte where contenido_id = $idcondel";
        $result = mysqli_query($conn,$sql_query);
        $result2 = mysqli_query($conn,$sql_query2);

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
                        <h1>Eliminar Contenido</h1>
                        <li>ID Contenido a eliminar (ejemplo: 1, 2, 3 ...)</li>
                        <div>
                            <input type="text" class="textbox" id="idcondel" name="idcondel" placeholder="1, 2, 3 ..." style="margin-top: 10px; margin-bottom: 10px;"/>
                        </div>
                        <div>
                            <input type="submit" value="Eliminar Contenido" name="delete" id="delete" />
                        </div>
                    </div>
                </form>
                <button style="margin-top: 1%" onclick="window.location='showContenido.php'">Volver</button>
            </div>
            
        </div>
        
    </body>
</html>