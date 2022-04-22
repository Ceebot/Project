<?php 
    require "connect.php";

    $result = $mysql->query("DELETE FROM `product` WHERE `id` = {$_GET['id']}");

?>
