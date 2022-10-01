<?php

if(isset($_SESSION['user'])){
    require_once "Controller.php";
    $route=routescontroller::controller('med');

}

else{
    include 'intromedic.php';
}

?>
