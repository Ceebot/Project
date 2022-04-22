<!DOCTYPE html>
<html>
	<head>
            <meta charset="UTF-8">
			<title>NeDwigka22.RF</title>
			<link href="css\styles.css" rel="stylesheet" type="text/css">
			<link rel="shortcut icon" href="img/mshkfrd.jpg" type="image/x-icon">
			<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
			<script src="script.js"></script>
	</head>
	<body>
	<?php if($_COOKIE['user'] == ''): ?>

		<div class="вход">
			<form action="check_reg.php" method="post">
                <a class="close" onclick="window.location.href = 'index.php';"><img src="img/close.png" width="30px"></a>
				<h1 id="вх">Регистрация</h1>
				<input type="text" autocomplete="off" name="login" class="login" placeholder="Логин..."><br/>
				<input type="password" autocomplete="off" name="password" class="login" placeholder="Пароль..."><br/>
				<input type="text" autocomplete="off" name="telephone" class="login" placeholder="Номер телефона..."><br/>
                <input type="text" autocomplete="off" name="mail" class="login" placeholder="Почта..."><br/>
                <button type="submit" id="enter">Регистрация</button>
				<img id="line" src="img/line.png" width="400x" height="40px">
				<a class ="voiti"href="login.php">Есть аккаунт? Войти</a><br><br>
			</form>
	    </div>
	<?php else:?> 
		
		<?php
			require "connect.php";
			$login = $_COOKIE['user'];
            $user = $mysql->query("SELECT * FROM `user` WHERE `login` = '$login'");
			$all_product = $mysql->query("SELECT `product`.`id` AS `prod_id`, `url`, `location`, `name`, `price`, `login`, `telephon`, `mail`, `date` FROM `product`,`user` WHERE `user`.`id`=`product`.`user_id` AND `user`.`login`='$login'");
		?> 

		<div class="exit_info">
            <a class="exit_a" href="index.php"><img src="img/back.png" height="20px" alt=""> Вернуться на главную</a>
            <span class="ei">NeDwigka22.RF.</span>
        </div>

		<?php
			while ( ($user_info = mysqli_fetch_assoc($user)) )
			{
		?>      
				<div class="product_img_pick_block"><img class="product_img_pick" src="img/<?php echo $product['url'];?>" alt=""></div>
				<br>
				<span class="viewing22">Мои объявления</span><br>
				<span class="page_user">Страница пользователя</span><br>
				<div class="viewing33">
					<img class="user2" src="img/user2.png" height="60px">
					<span class="items_title"><?php echo $user_info['login'] ?></span><br><br>
					<div class="block_telephon"> <span class="items_title"><span class="text">Телефон: </span><?php echo $user_info['telephon']; ?></span><br></div>
					<div class="block_mail"> <span class="items_title"><span class="text">Почта: <?php echo $user_info['mail']; ?></span><br></div>
					<span class="exit_account"><a class="main" href="exit.php">Выйти из аккаунта</a></span> 
				</div>
				<?php 
			}
        		?>
			
		<div class="product2">
			<ul class="ul_items show" id="all">
			<?php 
				while ( ($product = mysqli_fetch_assoc($all_product)) )
				{
					?>
					<li class="li_items" >
						<img class="product_img" src="img/<?php echo $product['url'];?>" alt="">
						<div class="content">
							<span class="text"><?php echo $product['location']; ?></span><br>
							<span class="items"><?php echo $product['name'] ?></span><br>
							<span class="items"><?php echo $product['price'] . ' р'; ?></span><br>
							<button class="view" onClick="RedirectDelete(<?= $product["prod_id"]; ?>);">
							<img class="delete_img" src="img/delete.png" height="30px">
							<span class="basket_text">Удалить</span> </a></button><br>
							<span class="text"><?php echo $product['date']; ?></span><br>
					</li>
					<?php 
				}
				?>
			</ul>
		</div>

	<?php endif;?> 

	</body>
 </html>
	

	