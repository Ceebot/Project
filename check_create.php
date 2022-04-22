<?php
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $category = filter_var(trim($_POST['category']), FILTER_SANITIZE_STRING);
    $price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);
    $text = filter_var(trim($_POST['text']), FILTER_SANITIZE_STRING);
    $location = filter_var(trim($_POST['location']), FILTER_SANITIZE_STRING);

    $user_name = $_COOKIE['user'];
    echo $user_name;
    $date = date('d.m.o в G:H');

    require "connect.php";

    $res = $mysql->query("SELECT `id` FROM `user` WHERE `login` = '$user_name'");
    $user_all_id = $res->fetch_assoc();
    $user_id = $user_all_id['id'];

    $result = $mysql->query("INSERT INTO `product` (`name`, `user_id`, `category`, `price`, `text`, `date`, `location`) VALUES ('$name', '$user_id', '$category', '$price', '$text', '$date', '$location')");

    header('Location: reg.php');
?>