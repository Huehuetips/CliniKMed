<?php
include 'models/Connection.php';

class User extends Connection{
    private $User_login;
    private $Password_logins;


    public function userExists($user, $pass){
        $query = $this->connect()->prepare("SELECT * from logins where User_login='$user' and Password_logins='$pass';");
        $query->execute();

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare("SELECT * from logins where User_login='$user';");
        $query->execute();
        
        foreach ($query as $currentUser) {
            $this->User_login = $currentUser['User_login'];
            $this->Password_logins = $currentUser['Password_logins'];
        }
    }

    public function getNombre(){
        return $this->User_login;
    }
}

?>