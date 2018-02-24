<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Projeto</title>
	<!-- Style CSS Junto com o Bootstrap  -->
	<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
</head>
<body>

	<div class="jumbotron">
		<div class="container">
			<h1>Sitema de Login com PHP PDO</h1>
			<p>By Isaías Mendes</p>			
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6"> <!-- Start col-md-6 -->
				<h3>Cadastra-se</h3>
				<div class="form-group">

					<label>Nome</label>
					<input type="text" id="register_name_user" class="form-control" placeholder="Isaias">

				</div>
				<div class="form-group">

					<label>Sobrenome</label>
					<input type="text" id="register_surname_user" class="form-control" placeholder="Mendes">

				</div>
				<div class="form-group">

					<label>E-mail</label> <!-- E-mail -->
					<input type="text" id="register_email_user" class="form-control" placeholder="example@email.com">

				</div>
				<div class="form-group">

					<label>Usuário</label>
					<input type="text" id="register_account_user" class="form-control" placeholder="IsaiasMendes">

				</div>
				<div class="form-group">

					<label>Senha</label>
					<input type="password" id="register_password_user" class="form-control" placeholder="*******">

				</div>
				<span class="return-post-msg register-msg"></span>
				<button class="btn btn-info btn-block btn-register">Cadastrar<i class="fa fa-sign-in"></i></button>
			</div> <!-- End of col-md-6 -->
			<!-- -->
			<div class="col-md-6"> 
				<h3>Entrar</h3>
				<div class="form-group">

					<label>Usuário</label>
					<input type="text" id="login_account_user" class="form-control" placeholder="IsaiasMendes">

				</div>
				<div class="form-group">

					<label>Senha</label>
					<input type="password" id="login_password_user" class="form-control" placeholder="*******">

				</div>
				<span class="return-post-msg login-msg"></span>
				<button class="btn btn-success btn-block btn-login">Entrar <i class="fa fa-sign-in"></i></button>
			</div>
		</div>		
	</div>
	
<br>

	<footer>
		<script src="assets/js/jquery.js"></script>		
		<script src="assets/js/bootstrap.js"></script>
		<script src="assets/js/script.js"></script>
	</footer>
	<br><br>
</body>
</html>

