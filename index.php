<?php

    session_start();
    // $_SESSION['usuario'] = "pedro";

    include ('intromedic.php');


// include_once 'includes/user.php';
// include_once 'includes/user_session.php';

// $user = new User();
// $userSession = new UserSession();

// if(isset($_SESSION['user'])){
//     //echo "hay sesion";
//     $user->setUser($userSession->getCurrentUser());
//     include_once 'Forms/ConsultaMedicos.php';

// }else if(isset($_POST['username']) && isset($_POST['password'])){
    
//     $userForm = $_POST['username'];
//     $passForm = $_POST['password'];

//     $user = new User();
//     if($user->userExists($userForm, $passForm)){
//         //echo "Existe el usuario";
//         $userSession->setCurrentUser($userForm);
//         $user->setUser($userForm);

//         include_once 'Forms/ConsultaMedicos.php';
//     }else{
//         echo "No existe el usuario";
//         $errorLogin = "Nombre de usuario y/o password incorrecto";
//         include_once 'intromedic.php';
//     }
// }else{
//     //echo "login";
//     include_once 'intromedic.php';
// }



?>