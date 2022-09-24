<?php 

/**
 *  MANEJO DE SESIONES
 */
class User_session
{
	
	public function __construct()
	{
		session_start();
	}

	public function Set_current_user($user){
		$_SESSION['user'] = $user;
	}


	public function Get_current_user(){
		return $_SESSION['user'];
	}


	public function Close_session(){
		session_unset();
		session_destroy();
	}



}


?>