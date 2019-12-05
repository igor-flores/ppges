<!DOCTYPE html>
<html lang="en">
<head>
	<title>[PPGES] Área Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../assets/bootstrap-4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <script src="../assets/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/bootstrap-4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/bootstrap-4.1.3/js/bootstrap.js"></script>

    <?php
    include "../function.php";
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: index.php");
        exit;
    }
    if(isset($_GET['msg']) && $_GET['msg'] = true){
        alertModal("Ops", "Algo deu errado... Confira seus dados e tente novamente!");
    }
    ?>
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(../assets/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						[PPGES] Área Admin
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="validaLogin.php">
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Entre com seu email" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Senha</span>
						<input class="input100" type="password" name="senha" placeholder="Entre com sua senha" required>
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>