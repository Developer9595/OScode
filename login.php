<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Вход</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/assets/images/logo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form action="login.php" method="POST" class="login100-form validate-form">
					
					<div class="wrap-input100 validate-input" data-validate = "Введите правильный Email!">
						<input class="input100" type="text" name="email" value="<?php echo @$data['email']; ?>" placeholder="Почтовый ящик">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Введите правильный Пароль!">
						<input class="input100" type="password" name="password" value="<?php echo @$data['password']; ?>" placeholder="Введите пароль">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" name="do_login" class="login100-form-btn">
							ВОЙТИ
						</button>
					</div><br>
					<?php 
						require "db.php";

						$data = $_POST;
						if( isset($data['do_login'])) {
							$errors = array();
							$user = R::findOne('signup', 'email = ?', array($data['email']));
							if( $user ) {
								if( password_verify($data['password'], $user->password)) {
									$_SESSION['logged_user'] = $user;
									echo '<div class="login-result"> Вы авторизованы! <br> Можете перейти на <a href="cn/cabinet.php"> ЛИЧНЫЙ КАБИНЕТ</a></div>';
								} else {
									$errors[] = 'Неверно введён пароль!';
								}
								} else {
									$errors[] = 'Неверно введён почтовый ящик!';
							}
							if( ! empty($errors))
							{
								echo '<div class="login-result">'.array_shift($errors).'</div><br>';
							}
						}
					?>
					<div class="text-center p-t-12">
						<span class="txt1">
							Забыли : 
						</span>
						<a class="txt2" href="forgot.php">
							Логин или Пароль?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="signup.php">
							Регистрация
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>