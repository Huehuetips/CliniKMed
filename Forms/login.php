<form action="" method="post" id="login">
    <center>
        <u>
            <h3 style="margin: 1rem">LOGIN</h3>
        </u>
            <div> <h5 style="color: red;">

            <?php 

                if (isset($_POST['Submit_log'])) {
                    $User = isset($_POST['user']) ? $_POST['user'] : "";
                    $pass = isset($_POST['password']) ? $_POST['password'] : "";

                    require_once "models\Select.model.php";
                    $userquery =Select::Sel_mast_table("SelLog","$User","$pass");
                    if (empty($userquery)) {
                        echo "USUARIO INCORRECTO, INTENTE NUEVAMENTE <br><br>";
                    }else{
                        $_SESSION['user'] = $User;
                        ?>
                        <script>location. reload()</script>
                        <?php 

                        // foreach ($userquery as $rowlog) {
                        //     if ($rowlog->Password_logins==$pass) {
                        //     
                        //          ------------------aqui va el codigo de validaion-----------------------
                        //     
                        //     }else{
                        //         echo "PASSWORD INCORRECTO, INTENTE NUEVAMENTE <br><br>";
                        //     }
                        // }
                    }
                }
            ?>
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
<?php 
include_once 'includes/nullrefresh.php';
 ?>