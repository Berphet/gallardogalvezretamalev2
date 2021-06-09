<?php

//conexion a base de datos
include("data/DBConfig.php");

//comprobar que existan datos recibidos del formulario
if(isset($_POST['login'])){

    //declarar variables
    $username = mysqli_real_escape_string($conn,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);

    //comprobar que no esten vacias
    if ($username != "" && $password != ""){

        //corroborar que existe 1 solo usuario con ese nombre y contraseña
        $sql_query = "select count(*) as countUser from usuario where nombre='".$username."' and codigo='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['countUser'];

        //redireccionar en caso de ser un usuario valido
        if($count > 0){
            header('Location: menues/showContenido.php');
        }else{
            echo "Usuario o clave incorrectos";
        }

    }

}
?>

<!doctype html>
<html>
    <head>
        <title>gallardoEV2</title>
        <link rel="stylesheet" type="text/css" href="estilosEV2/estilosEV2.css">
    </head>
    <body>
        <div id="conteiner">
            <div id="separador">
            <hr>
            </div>

            <div id="menu">
                <div id="tabs">
                <button onclick="window.location = 'index.php'">Login</button>
                </div>
            </div>
            <div id="formulario_login">
                <form method="post" action="">
                    <div>
                        <h1>Login</h1>
                        <li>Nombre Usuario</li>
                        <div>
                            <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" style="margin-top: 1%; margin-bottom: 1%;"/>
                        </div>
                        <li>Contraseña</li>
                        <div>
                            <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password" style="margin-top: 1%; margin-bottom: 1%;"/>
                        </div>
                        <div>
                            <input type="submit" value="Iniciar" name="login" id="login" style="margin-top: 1%; margin-bottom: 1%;"/>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
        
    </body>
</html>