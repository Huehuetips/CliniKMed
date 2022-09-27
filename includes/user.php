<?php
include 'models/Connection.php';

class User extends Connection{
    private $nombre;
    private $username;


    public function userExists($user, $pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM logins WHERE User_login = :user AND Password_logins = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM logins WHERE User_login = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['User_login'];
            $this->usename = $currentUser['Password_logins'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}

?>