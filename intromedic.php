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
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
            include('Styles\HEADER.php');

        ?>


    <body>
        
        <form action="" method="post" id="login">
            <center>
                <u>
                    <h3 style="margin: 1rem">LOGIN</h3>
                </u>
                    <div> <h5 style="color: red;">
                    </h5></div>  
                <div class="container">
                     <div style="margin: 10px;">
                        <b>USUARIO</b><br>
                        <input type="text" class="form-control" name="user" malgength="50"  required>
                    </div>  
                    <div style="margin: 10px;">
                        <b>CONTRASEÑA</b><br>
                        <input type="password" class="form-control" name="password" malgength="50" required>
                    </div>  <br>
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

</html>


