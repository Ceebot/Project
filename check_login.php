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
            $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
            $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
        
            //$password = md5($password."asd343313r3435");

            require "connect.php";

            $result = $mysql->query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");

            $user = $result->fetch_assoc();

            if(count($user) == 0)
            {
                ?>
                <div class="вход">
                    <span class="text">Неправильные логин или пароль!<br><br>  Повторите попытку.</span><br><br>
                    <a class ="voiti" href="login.php">Назад</a><br>
                </div>
                <?php
                exit();
            }

            setcookie('user', $user['login'], time() + 3600* 24, "/");
            
            header('Location: index.php');
        ?>
            
    </body>