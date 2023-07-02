<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link type="Image/x-icon" href="photo/favicon.ico" rel="icon">
    <title>AstroGlow</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
				<form name="register" id="register">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button type="submit" class="reg" >Sign up</button>
				</form>
			</div>

			<div class="login">
				<form name="login" method="post" id="loginform">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button type="submit" class="reg" >Login</button>
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