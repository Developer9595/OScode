<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Регистрация</title>
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
				<form action="/signup.php" method="POST" class="login100-form validate-form">
				<h5 style="text-align: center; padding-bottom: 20px; font-size: 1rem; font-weight: 600; color: #555;">Зарегистрируйтесь  для доступа <br> к <span style="color: green;"> Личному Кабинету </span></h5>
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
						<input class="input100" type="password" name="password" value="<?php echo @$data['password']; ?>" placeholder="Введите пароль">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Пароль нельзья оставит пустым!">
						<input class="input100" type="password" name="repassword" value="<?php echo @$data['repassword']; ?>" placeholder="Повторите пароль">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" name="do_signup" class="login100-form-btn">
							Регистрация
						</button>
					</div><br>
					<?php
						require "db.php";
						
						$data = $_POST;
						if( isset($data['do_signup']))
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
							if( $data['password'] == '') {
								$errors[] = 'Введите Пароль!';
							}
							if( $data['repassword'] != $data['password']) {
								$errors[] = 'Повторный пароль введён не верно!';
								if( R::count('signup', "email = ?", array($data['email'])) > 0 ) {
									$errors[] = 'Пользователь с такой почтой существует!';
								}
							}
							if( empty($errors)) {
								$user = R::dispense('signup');
								$user->name = $data['name'];
								$user->surname = $data['surname'];
								$user->email  = $data['email'];
								$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
								$user->repassword = password_hash($data['repassword'], PASSWORD_DEFAULT);
							R::store($user);
							echo '<div class="reg-result">Вы успешно зарегестрированы!</div>';
							} else {
								echo '<div>'.array_shift($errors).'</div>';
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
				<a href="index.php"><img src="images/img-01.png" alt="IMG"></a>
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