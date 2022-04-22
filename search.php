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
        <?php 
        $search = filter_var(trim($_POST['search']), FILTER_SANITIZE_STRING);
        require "connect.php";
        $result = $mysql->query("SELECT * FROM `product` WHERE `category` RLIKE '$search' OR `location` RLIKE '$search' OR `name` RLIKE '$search'");
        ?>
        <div class="exit_info">
            <a class="exit_a" href="index.php"><img src="img/back.png" height="20px" alt=""> Вернуться на главную</a>
            <span class="ei">NeDwigka22.RF.</span>
        </div>

        <div class="block_search">
                <span class="заголовок_правила">Поиск по запросу: "<?php echo $search?>"</span><br>
        </div>

        <div class="products_add">
            <div class="product_add" >
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
            </div>
        </div>
</body>