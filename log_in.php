<?php
include 'core/init.php';



if (empty($_POST) === false) {
    $username = $_POST['username'];
    $password = $_POST['password'];
        
    if (empty($username) === true || empty($password) === true){
        $errors[] = 'You need to enter a username or password!';
    }else if (user_exists($username) === fasle){
        errors[] = 'We can\'t find that username. Have you registred?';
    }else {
        $login = login($username, $password);
    }
}

?>


