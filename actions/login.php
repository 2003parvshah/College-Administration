<?php
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        if($email=='admin@gmail.com' && $password=='admin@123'){
            $_SESSION['login'] = true;
            header('Location:../index.php');
        }
        else{
            echo 'Invalid Credentials.';
        }
    }