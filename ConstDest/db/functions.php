<?php

class Login {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function validarCredenciales($username, $password) {
        if ($this->username === $username && $this->password === $password) {
            return true;
        } else {
            return false;
        }
    }

}


// class Logout{
//     function logout() {
        
//         session_destroy();
//         unset($submit_login['email']);
//         unset($submit_login['password']);
//     }
    

// }
