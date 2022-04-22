<!DOCTYPE html>
<html>
	<head>
			<meta charset="UTF-8">
			<title>NeDwigka22.RF</title>
			<link href="css\styles.css" rel="stylesheet" type="text/css">
			<script src="script.js"></script>
			<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
	</head>

    <body>

        <div class="exit_info">
            <a class="exit_a" href="index.php"><img src="img/back.png" height="20px" alt=""> Вернуться на главную</a>
            <span class="ei">NeDwigka22.RF.</span>
        </div>
        <?php
            require "connect.php";
            $result = $mysql->query("SELECT * FROM `product`,`user` WHERE `user`.`id`=`product`.`user_id` AND `product`.`id`={$_GET['id']}");
        ?> 
        <?php 
            while ( ($product = mysqli_fetch_assoc($result)) )
            {
        ?>      
                <div class="viewing1">
                    <span class="text"><?php echo $product['location'] . ' ' . $product['date']; ?></span><br>
                </div>

                <div class="viewing1_2">
                    <span class="items_title"><?php echo $product['name'] ?></span><br>
                </div>
        
                <div class="product_img_pick_block"><img class="product_img_pick" src="img/<?php echo $product['url'];?>" alt=""></div>
                <br>
                <span class="viewing2"><?php echo $product['price'] . ' р'; ?></span><br>
                <div class="viewing3">
                    <img class="user2" src="img/user2.png" height="60px">
                    <span class="items_title"><?php echo $product['login'] ?></span><br><br>
                    <div class="block_telephon"> <span class="items_title"><span class="text">Телефон: </span><?php echo $product['telephon']; ?></span><br></div>
                    <div class="block_mail"> <span class="items_title"><span class="text">Почта: <?php echo $product['mail']; ?></span><br></div>
                    <span class="items_title">Описание:</span><br>
                    <div class="block_description"><span class="text"><?php echo $product['text']; ?></span></div>
            <?php 
            }
            ?>
                </div>

    </body>