<?php
if(isset($_POST['submit_login'])){ 
include_once('functions.php');

$login = new Login("lucho@gmail.com", "123");

if ($login->validarCredenciales($_POST["email"], $_POST["password"])) {
    header("Location:../Home.php");
} else {
    echo "Credenciales inválidas. Acceso denegado.";
}

}


// if(isset($_POST['submit_logout'])){
    
//     $logout = new Logout();
//     function __destruct(){
    
//         $this->logout;
//     }
//     header("Location:../Login.php");

// }

?>
