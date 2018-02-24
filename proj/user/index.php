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
	<?php 
		session_start();
	?>
	<div class="jumbotron">
		<div class="container">
				<h1>Bem Vindo <?php echo $_SESSION['name_user']." ".$_SESSION['surname_user']; ?></h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form class="form-group" method="post" action="">	

					<label>Em que ano você nasceu?</label>
					<input type="date" name="data_user" class="form-control" placeholder="Idade">
					<input type="submit" name="" class="btn btn-default btn-block" value="Verificar">
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		<?php 
			$anoNas = $_POST['data_user']?? 0 ;
			function idade($dataNas) {
		    	if ($dataNas != 0) {    		
					$dn = new DateTime($dataNas);
					$agora = new DateTime();
					$idade = $agora->diff($dn);
					echo "<p> Você tem ".$idade->y." anos </p>";
	    		} else {
	    			echo "<p> Informe sua data de nascimento!</p>";
	    		}
	    	}
	    	idade($anoNas);
		?>
	</div>
	

	<footer>
		<script src="assets/js/jquery.js"></script>		
		<script src="assets/js/bootstrap.js"></script>
		<script src="assets/js/script.js"></script>
	</footer>
	<br><br><br><br>
</body>
</html>
