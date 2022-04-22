<!DOCTYPE html>
<html>
	<head>
            <meta charset="UTF-8">
			<title>NeDwigka22.RF</title>
			<link href="css\styles.css" rel="stylesheet" type="text/css">
			<link rel="shortcut icon" href="img/mshkfrd.jpg" type="image/x-icon">
			<script src="script.js"></script>
	</head>
	<body>
		<div class="вход">
			<form action="check_login.php" method="post">
                <a class="close" onclick="window.location.href = 'index.php';"><img src="img/close.png" width="30px"></a>
				<h1 id="вх">Вход</h1>
				<input type="text" autocomplete="off" name="login" class="login" placeholder="Логин..."><br/>
				<input type="password" autocomplete="off" name="password" class="login" placeholder="Пароль..."><br/>
                <button type="submit" id="enter">Вход</button>
				<img id="line" src="img/line.png" width="400x" height="40px">
				<a class ="voiti"href="reg.php">Нет аккаунта? Создать</a><br><br>
			</form>
	    </div>
	</body>
 </html>
	

	