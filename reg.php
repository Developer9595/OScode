<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Регистрация</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/assets/images/logo.png"/>
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
				<form action="/signup.php" method="POST" class="login100-form validate-form">
					
				<div class="wrap-input100 validate-input" data-validate = "Имя нельзья оставит пустым!">
						<input class="input100" type="text" name="name" value="<?php echo @$data['name']; ?>" placeholder="Имя">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Фамилия нельзья оставит пустым!">
						<input class="input100" type="text" name="surname" value="<?php echo @$data['surname']; ?>" placeholder="Фамилия">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Введите правильный Email">
						<input class="input100" type="text" name="email" value="<?php echo @$data['email']; ?>" placeholder="Почтовый ящик">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Пароль нельзья оставит пустым!">
						<input class="input100" type="password" name="pass" value="<?php echo @$data['pass']; ?>" placeholder="Введите пароль">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Пароль нельзья оставит пустым!">
						<input class="input100" type="password" name="repass" value="<?php echo @$data['repass']; ?>" placeholder="Повторите пароль">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" name="do_reg" class="login100-form-btn">
							Регистрация
						</button>
					</div><br>
					<?php
						require "db.php";
						
						$data = $_POST;
						if( isset($data['do_reg']))
						 {
							$errors = array();
							if( trim($data['name']) == '') {
								$errors[] = 'Введите Имя!';
							}
							if( trim($data['surname']) == '') {
								$errors[] = 'Введите Фамилия!';
							}
							if( trim($data['email']) == '') {
								$errors[] = 'Введите Почту!';
							}
							if( $data['pass'] == '') {
								$errors[] = 'Введите Пароль!';
							}
							if( $data['repass'] != $data['pass']) {
								$errors[] = 'Повторный пароль введён не верно!';
								if( R::count('signup', "email = ?", array($data['email'])) > 0 ) {
									$errors[] = 'Пользователь с таким почтой существует!';
								}
							}
							if( empty($errors)) {
								$user = R::dispense('signup');
								$user->user_name = $data['name'];
								$user->user_surname = $data['surname'];
								$user->user_email  = $data['email'];
								$user->user_password = password_hash($data['user_password'], PASSWORD_DEFAULT);
								$user->user_repassword = password_hash($data['user_repassword'], PASSWORD_DEFAULT);
							R::store($user);
							echo '<div stle="color: green;">Вы успешно зарегестрированы!</div>';
							} else {
								echo '<div stle="color: red;">'.array_shift($errors).'</div>';
							}
						}
					?>

					<div class="text-center p-t-136">
						<a class="txt2" href="login.php">
							Войти
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
				<div class="login100-pic_reg js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
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