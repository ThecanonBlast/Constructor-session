<?php
if(isset($_POST['submit_login'])){ 
    include_once('functions.php');
    
    $login = new Login("lucho@gmail.com", "123");
    
    if ($login->validarCredenciales($_POST["email"], $_POST["password"])) {
        header("Location:../Home.php");
    } else {
        header("Location:../WrongLogin.php");
    }
    
}

// if(isset($_POST['wrong_login'])){
//     header("Location:../Login.php");
// }



if(isset($_POST['send_data'])){

}



// if(isset($_POST['submit_logout'])){
    
//     $logout = new Logout();
//     function __destruct(){
    
//         $this->logout;
//     }
//     header("Location:../Login.php");

// }
