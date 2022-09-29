<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';


$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    // echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once 'Forms/ConsultaMedicos.php';

}else if(isset($_POST['user']) && isset($_POST['password'])){
    
    $userForm = $_POST['user'];
    $passForm = $_POST['password'];

    $user = new User();
    if($user->userExists($userForm, $passForm)){
        echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'Forms/ConsultaMedicos.php';
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
    }
}else{
    //echo "login";
    include_once 'intromedic.php';
}



?>