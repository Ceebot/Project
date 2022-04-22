<?php 
    setcookie('user', $user['login'], time() - 3600* 24, "/");
    header('Location: index.php');
?>