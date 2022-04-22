<!DOCTYPE html>
<html>
	<head>
            <meta charset="UTF-8">
			<title>NeDwigka22.RF</title>
			<link href="css\styles.css" rel="stylesheet" type="text/css">
			<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
			<script src="script.js"></script>
	</head>
	<body>

    <?php 
		if($_COOKIE['user'] == ''):
	?>

        <div class="вход">
            <a class="close_need_login" onclick="window.location.href = 'index.php';"><img src="img/close.png" width="30px"></a>
            <span class="text">Необходимо авторизоваться</span><br><br>
            <a class ="voiti" href="login.php">Вход</a><br><br>
            <a class ="voiti" href="reg.php">Регистрация</a><br>
        </div>

    <?php else:?>
        
        <?php
        require "connect.php";
        $login = $_COOKIE['user'];
        $user = $mysql->query("SELECT * FROM `user` WHERE `login` = '$login'");
        //$all_product = $mysql->query("SELECT * FROM `product`,`user` AS `product`.`id`= 'prod_id' WHERE `user`.`id`=`product`.`user_id` AND `user`.`login`='$login'");

        $all_product = $mysql->query("SELECT `product`.`id` AS `prod_id`, `url`, `location`, `name`, `price`, `login`, `telephon`, `mail` FROM `product`,`user` WHERE `user`.`id`=`product`.`user_id` AND `user`.`login`='$login'");

        ?> 
        
        <div class="создать">
            <form action="check_create.php" method="post">
                <a class="close_create" onclick="window.location.href = 'index.php';"><img src="img/close.png" width="30px"></a>
                <h1 id="вх">Создание объявления</h1>
                <input type="text" autocomplete="off" name="name" class="login" placeholder="Введите название..."><br/>
                <input type="text" autocomplete="off" name="category" class="login" placeholder="Введите категорию..."><br/>
                <input type="text" autocomplete="off" name="price" class="login" placeholder="Введите сумму..."><br/>
                <input type="text" autocomplete="off" name="location" class="login" placeholder="Введите населенный пункт..."><br/>
                <textarea cols="40" rows="5" name="text" class="text" placeholder="Введите описание..."></textarea><br>
                <button type="submit" class="enter_create">Создать</button>
            </form>
        </div>

    <?php endif;?> 

    </body>