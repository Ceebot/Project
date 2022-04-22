<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $telephone = filter_var(trim($_POST['telephone']), FILTER_SANITIZE_STRING);
    $mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_STRING);
   
    //$password = md5($password."asd343313r3435");

    require "connect.php";

    $result = $mysql->query("INSERT INTO `user` (`login`, `password`, `telephon`, `mail`) VALUES ('$login', '$password', '$telephone', '$mail')");
    
    header('Location: index.php');
?>