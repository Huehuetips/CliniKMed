<!DOCTYPE html>
<head>

            <!-- CONFIGURACIONES DE LA PÁGINA -->

    <title>CliniKMed</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://kit.fontawesome.com/6a50c4176b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="Styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Styles/CSSCLINIK.css">
    


</head>
<body>

<?php

if (!isset($_SESSION['user'])) {
    session_start();
}

if(isset($_SESSION['user'])){

    include_once 'Styles/HEADER.php';

    if (isset($_SESSION['rute']) and  $_SESSION['rute'] != "") {
        include_once $_SESSION['rute'];
    }

}else{
    include_once 'Forms/login.php';
}

?>

</body>




</html>