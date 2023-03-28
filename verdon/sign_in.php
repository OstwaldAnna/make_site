<?php
    session_start();
    require_once 'connection.php';

    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pov_password = $_POST['pov_password'];
    
    if ($password == $pov_password) {
        
    mysqli_query($connect, "INSERT INTO `user` (`id`, `surname`, `name`, `email`, `password`) 
        VALUES (NULL, '$surname', '$name', '$email', '$password')");
        $_SESSION['message'] = 'Регистрация прошла успешна, вы просто обварожительны';
        header('location: ../login.php');

    }else{
        $_SESSION['message'] = 'К сожалению, что-то пошло не так, но вы все равно выглядите прекрасно, проверьте поля';
        header('location: ../registration.php');
    }
?>