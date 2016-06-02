<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio</title>
	<link rel="Stylesheet" href="main.css">
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
	<div id="container">
		<div id="block-left">
			<div id="info">
				<div id="maininfo">
					<h1>Luuk van den Berg</h1>
					<hr>
					<h2>My name is Luuk van den Berg, and I am a web developer</h2>
						<a class="icon-github" href="https://github.com/LuukvandenBerg" target="_blank"><div id="github"><img src="images/github-mark.png"></div></li>
				</div>
			</div>
		</div>
		<div id="block-right">
			<a class="mywork-link" href="mywork.php">MY WORK</a>
			<a class="contact-link">CONTACT</a>
			<a class="about-link">ABOUT</a>
			<a class="login-link">LOGIN</a>
			<div class="about-info">
				<h1>About me</h1>
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue sed velit eu bibendum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a feugiat eros. Sed molestie justo sed commodo tristique. Morbi sapien magna, imperdiet eget nunc eu, ultrices condimentum ligula. Nullam nec faucibus mauris, quis varius quam. Morbi non convallis leo, accumsan tincidunt sem. In neque lorem, hendrerit quis rhoncus ut, egestas vitae nibh. Morbi vitae mi elementum, tincidunt turpis eu, tincidunt ante. </p>
			</div>
			<div class="login">
			<h1>Login</h1>
			<hr>
			<form method="post" action="phpfiles/login.php">
				Username:<br> <input type="text" name="username" placeholder="Username"><br>
				Password:<br> <input type="password" name="password" placeholder="Password"><br>
				<input type="submit" name="submit" value="login">
			</form>
			Register <a class="register-link">here</a>
			</div>
			<div class="register">
				<h1>Register</h1>
				<hr>
				<form method="POST" action="phpfiles/register.php">
					Name:<br> <input type="text" name="naam"><br>
					Lastname:<br> <input type="text" name="achternaam"><br>
					Username:<br> <input type="text" name="username"><br>
					Password:<br> <input type="password" name="password"><br>
					Repeat password:<br><input type="password" name="repassword"><br>
					Email:<br> <input type="email" name="email"><br>
					Date of birth:<br> <input type="date" name="date"><br>
					<input type="submit" name="submit" value="register">
				</form>

				Or login <a class="login-link2">here</a>
			</div>
			<div class="contact">
				<h1>Contact</h1>
				<hr>
				<form method="POST" action="phpfiles/comment.php">
					Name:<br> <input type="text" name="name"><br>
					Subject:<br> <input type="text" name="subject"><br>
					Message:<br> <textarea name="comment"></textarea><br>
					<input type="submit" name="submit" value="Sent">
				</form>
			</div>
		</div>
	</div>
</body>
</html>