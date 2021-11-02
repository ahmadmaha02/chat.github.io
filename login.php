<!DOCTYPE html>
<html lang="PT-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/icon.png">
	<title>TIChat - Login</title>
	<!-- Bootstrap 4 -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.min.css">
	<!-- CSS3 -->
	<link rel="stylesheet" href="assets/css/login.css">
	<!-- GoogleFonts - OpenSans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!-- Fontawesome 5.0-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>

	<!-- Init of Bootstrap -->

	<div class="container">

		<div class="col-md-12 col-md-offset-6">
			<h1> CHAT - TI Lvl UP</h1>

			<!-- Form for Login -->
			<form method="POST" id="login" class="log" action="controller/loginController.php">

				<br><br>
				<p>LOGIN:</p><br>

				<!-- Input for E-mail -->
				<input type="email" name="email" class="form-control field" placeholder="example@email.com" autofocus required><br>

				<!-- Input for Password -->
				<input type="password" name="password" class="form-control field" placeholder="********" required><br>

				<!-- Button for Login -->
				<button class="btn btn-default" type="submit">
					<i class="fa fa-lock"></i> MASUK
				</button><br>

				<!-- Button of Show Form Register -->
				<a onclick="showRegister()">
					Daftar akun <i class="fa fa-user-plus"></i>
				</a>

			</form>


			<!-- Form for Register -->

			<form method="POST" id="register" class="log" action="controller/userController.php">
				<br>
				<p>Daftar akun</p><br>

				<input type="text" name="name" class="form-control field" placeholder="Nama" required autofocus><br>

				<input type="email" name="email" class="form-control field" placeholder="example@email.com" required><br>

				<input type="password" name="password" class="form-control field" placeholder="***********" required><br>

				<button class="btn btn-default" type="submit">
					Daftar :)
				</button><br>
				<a onclick="hideRegister()">kembali</a>
			</form>

			<!-- Copyright Marcos André -->

			<p id="credits">&copy; Ahmad maha & kevin julianto - <?php echo date("Y"); ?></p>


		</div>

	</div>

	<!-- JQuery - Script's for Functions -->

	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>

</body>

</html>