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
        <div class="header">
            <ul class="header_block">
                <form action="search.php" method="post">
                        <li class="hb"><a class="main"href="index.php">Главная</a></li>
                        <li class="hb"><a class="main"href="info.html">О нас</a></li>
                        <li class="hb"><span class="tittle">NeDwigka22.RF</span></li>
                        <li class="hb"><input type="text" autocomplete="off" class="search" name="search" placeholder="Введите название, категорию или город...">
                        <button class="transparent_button" type="submit"><img class="icon_search"src="img/search.png" height="30x"></button></li>
                        <li class="hb"><a class="text" href="reg.php"><img class="img_user" src="img/user.png"></a></li>
                </form> 
            </ul>
            <button class="add" onclick="window.location.href = 'create.php';"><img class="img_plus" src="img/plus.png">Создать объявление</button>
        </div>
        
        <div class="products">
           
            <?php
                require "connect.php";
                $result = $mysql->query("SELECT * FROM `product`");
                $home = $mysql->query("SELECT * FROM `product` WHERE `category` = 'Бытовая техника'");
                $electronics = $mysql->query("SELECT * FROM `product` WHERE `category` = 'Электроника'");
                $apartments = $mysql->query("SELECT * FROM `product` WHERE `category` = 'Недвижимость'");
                $transport = $mysql->query("SELECT * FROM `product` WHERE `category` = 'Транспорт'");
            ?> 
        </div>

        <div class="ads">
            <ul type="square" class="category">
                <span class="select_category" >Выберите категорию:</span><br></li>
                <li class="ct"><button class="category_text show_btn_ct" id="btn_ct"onclick="AllCategories()">Все категории</button><br></li>
                <li class="ct"><button class="category_text" onclick="Home()">Бытовая техника</button><br></li>
                <li class="ct"><button class="category_text" onclick="Electronics()">Электроника</button><br></li>
                <li class="ct"><button class="category_text" onclick="Apartments()">Недвижимость</button><br></li>
                <li class="ct"><button class="category_text" onclick="Transport()">Транспорт</button><br></li>
            </ul>
        </div>
            
        <div class="product" >
            <ul class="ul_items show" id="all">
            <?php 
                while ( ($product = mysqli_fetch_assoc($result)) )
                {
                    ?>
                    <li class="li_items" >
                        <img class="product_img" src="img/<?php echo $product['url'];?>" alt="">
                        <div class="content">
                            <span class="text"><?php echo $product['location']; ?></span><br>
                            <span class="items"><?php echo $product['name'] ?></span><br>
                            <span class="items"><?php echo $product['price'] . ' р'; ?></span><br>
                            <button class="view" onClick="RedirectView(<?= $product["id"]; ?>);">
                            <img class="view_img" src="img/eye.png" height="30px">
                            <span class="basket_text">Просмотреть</span> </a></button><br>
                            <span class="text"><?php echo $product['date']; ?></span><br>
                        </div>
                    </li>
                    <?php 
                }
                ?>
            </ul>

            <ul class="ul_items" id="home">
            <?php 
                while ( ($product = mysqli_fetch_assoc($home)) )
                {
                    ?>
                    <li class="li_items" >
                        <img class="product_img" src="img/<?php echo $product['url'];?>" alt="">
                        <div class="content">
                            <span class="text"><?php echo $product['location']; ?></span><br>
                            <span class="items"><?php echo $product['name'] ?></span><br>
                            <span class="items"><?php echo $product['price'] . ' р'; ?></span><br>
                            <button class="view" onClick="RedirectView(<?= $product["id"]; ?>);">
                            <img class="view_img" src="img/eye.png" height="30px">
                            <span class="basket_text">Просмотреть</span> </a></button><br>
                            <span class="text"><?php echo $product['date']; ?></span><br>
                        </div>
                    </li>
                    <?php 
                }
                ?>
            </ul>

            <ul class="ul_items" id="electronics">
            <?php 
                while ( ($product = mysqli_fetch_assoc($electronics)) )
                {
                    ?>
                    <li class="li_items" >
                        <img class="product_img" src="img/<?php echo $product['url'];?>" alt="">
                        <div class="content">
                            <span class="text"><?php echo $product['location']; ?></span><br>
                            <span class="items"><?php echo $product['name'] ?></span><br>
                            <span class="items"><?php echo $product['price'] . ' р'; ?></span><br>
                            <button class="view" onClick="RedirectView(<?= $product["id"]; ?>);">
                            <img class="view_img" src="img/eye.png" height="30px">
                            <span class="basket_text">Просмотреть</span> </a></button><br>
                            <span class="text"><?php echo $product['date']; ?></span><br>
                        </div>
                    </li>
                    <?php 
                }
                ?>
            </ul>

            <ul class="ul_items" id="apartments">
            <?php 
                while ( ($product = mysqli_fetch_assoc($apartments)) )
                {
                    ?>
                    <li class="li_items" >
                        <img class="product_img" src="img/<?php echo $product['url'];?>" alt="">
                        <div class="content">
                            <span class="text"><?php echo $product['location']; ?></span><br>
                            <span class="items"><?php echo $product['name'] ?></span><br>
                            <span class="items"><?php echo $product['price'] . ' р'; ?></span><br>
                            <button class="view" onClick="RedirectView(<?= $product["id"]; ?>);">
                            <img class="view_img" src="img/eye.png" height="30px">
                            <span class="basket_text">Просмотреть</span> </a></button><br>
                            <span class="text"><?php echo $product['date']; ?></span><br>
                        </div>
                    </li>
                    <?php 
                }
                ?>
            </ul>

            <ul class="ul_items" id="transport">
                <?php 
                while ( ($product = mysqli_fetch_assoc($transport)) )
                {
                    ?>
                    <li class="li_items" >
                        <img class="product_img" src="img/<?php echo $product['url'];?>" alt="">
                        <div class="content">
                            <span class="text"><?php echo $product['location']; ?></span><br>
                            <span class="items"><?php echo $product['name'] ?></span><br>
                            <span class="items"><?php echo $product['price'] . ' р'; ?></span><br>
                            <button class="view" onClick="RedirectView(<?= $product["id"]; ?>);">
                            <img class="view_img" src="img/eye.png" height="30px">
                            <span class="basket_text">Просмотреть</span> </a></button><br> 
                            <span class="text"><?php echo $product['date']; ?></span><br> 
                        </div>
                    </li>
                    <?php 
                }
                ?>
            </ul>
        </div>
            
        <div class="footer">
            <span class="ft">Компания © NeDwigka22.RF. Все права защищены.</span>
        </div>
    </body>
 </html>
