<!DOCTYPE html>
<html>
    <head>

                <!-- CONFIGURACIONES DE LA PÁGINA -->

        <title>CliniKMed</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://kit.fontawesome.com/6a50c4176b.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="Styles/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="Styles/CSSCLINIK.css">
        

    </head>

                <!-- Llama al formulario inicial -->
        <?php
            include('Styles\HEADER.html');

        ?>


    <body>
        
        <form action="index.php" method="post" id="login">
            <center>
                <u>
                    <h3 style="margin: 1rem">LOGIN</h3>
                </u>
                <div class="container">
                     <div style="margin: 10px;">
                        <b>USUARIO</b><br>
                        <input type="text" class="form-control" name="user" malgength="50"  required>
                    </div>  
                    <div style="margin: 10px;">
                        <b>CONTRASEÑA</b><br>
                        <input type="password" class="form-control" name="password" malgength="50" required>
                    </div>  <br>
                    <div> <h5 style="color: red;">
                        <?php 

                        if (isset($_POST['Submit_log'])) {

                            $user = isset($_POST['user']) ? $_POST['user'] : "";
                            $password = isset($_POST['password']) ? $_POST['password'] : "";

                            require_once "models\Select.model.php";
                            $Validacion_login =Sel_model::Sel_data("SelLog", "$user");

                            if (count($Validacion_login)>0) {
                                
                                if ($password==$Validacion_login[0]->Password_logins) {
                                    
                                    echo "entrar";

                                }else{
                                    echo "contraseña incorrecta, intente nuevamente";
                                }


                            }else{
                                echo "no se encontro el usuario, intente nuevamente";
                            }

                        }


                            

                         ?>
                    </h5></div>  
                    <div>
                        <button type="submit" id="submit" name="Submit_log" class="btn btn-dark btn-sm" style="width: 90px; height: 45px;">INGRESAR</button>
                    </div>
                    <br>
                </div>
            </center>
        </form>

     <script>
        if (window.history.replaceState) {
            console.log("")
            window.history.replaceState(null,null,window.location.href)
        }
    </script>

    </body>
<?php 

include_once 'models/SESSION.php';

$User_session = new User_session();
$user = new User();

if (isset($_SESSION['user'])) {
    echo "hay sesion";
}elseif (isset($_POST['username'] and isset($_POST['password']))) {
    echo "validacion de login";
}else{
    echo "login";
}



?>





</html>


