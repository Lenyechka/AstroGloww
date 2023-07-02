<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link type="Image/x-icon" href="photo/favicon.ico" rel="icon">
    <title>AstroGlow</title>
	<script src="js/jquery-3.7.0.js" ></script>
	<script src="js/login.js"></script>
    <script src="js/registration.js"></script>
</head>
<body>
<header class="header-menu">
        <nav class="navbar">
            <a href="index.html" class="logo"><img src="photo/image 14 (1).svg" alt="logo"></a>
        </nav>
</header>
<section class="form">
	<div class="order-card">  	
			<div class="signup">
				<form name="orders" id="orders" action="php/orders.php" method="post">
					<input class="telephone" name="telephone">
					<input class="order-text" name="order-text">
					<button type="submit" class="send" >Отправить</button>
				</form>
			</div>
	</div>
</section>
<footer class="dark-footer">
	<div class="dark-footer_numbers">
		<p class="dark-footer_numbers_p">
			Звоните по номеру: <br>
			<b>+7 (000) 000-00-00</b>
		</p>
		<p class="dark-footer_numbers_p">
			Мы находимся по адресу: <br>
			<b>г. Москва, Ленинский проспект, дом 7, строение 1</b>
		</p>
		<p class="dark-footer_numbers_p">
			Пишите на почту: <br>
			<b>all@astroglow.ru</b>
		</p>
		<img class="dark-footer_icons" src="photo/icons.svg" alt="icons">
	</div>
	<p class="dark-footer_copyright">Copyright © 2023 AstroGlow</p>
</footer>
</body>
</html>