<?php 
	# Bloco para Testar 
	/*
		echo "<script> alert('".$_POST['metodo']." - Entrou no action.php'); </script>";
		echo "<pre>"; 
		print_r($_POST); 
		echo "</pre>";
	*/

	function conecta(){
		$servername = "mysql:host=localhost;dbname=sistema_login";
		$username = "root";
		$password = "";

		try { // Tentar
			$conn = new PDO($servername, $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
			$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			return $conn;
		}
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}
	}

	// Condição para cadastrar
	if($_POST['metodo'] == "register"){

		$conn = conecta();

		$sql = "INSERT INTO user (name_user, surname_user, email_user, account_user, password_user) VALUES (?,?,?,?,?);";
		$stmt = $conn->prepare($sql);
		$stmt->execute(array(
			$_POST['name_user'],
			$_POST['surname_user'],
			$_POST['email_user'],
			$_POST['account_user'],
			$_POST['password_user'],
			)
		);

		echo "Dados inseridos com sucesso!";
		$conn = null;
	}

	// condição para Entrar
	if($_POST['metodo'] == "login"){

		$conn = conecta();

		$sql = "SELECT * FROM user WHERE account_user = ? OR email_user = ? AND password_user = ?;";
		$stmt = $conn->prepare($sql);
		$stmt->execute(array(
			$_POST['account_user'],
			$_POST['account_user'],
			$_POST['password_user'],
			)
		);
		$user = $stmt->fetch();

		if(!empty($_POST['account_user']) && !empty($_POST['password_user'])){
			if (($_POST['account_user'] == $user['account_user']) || ($_POST['account_user'] == $user['email_user'])) {
				if ($_POST['password_user'] == $user['password_user']) {
					session_start();

					$_SESSION = $user;
					echo "<script>window.location.replace('user');</script>";
				}else{
					echo "Senha inválida.";
				}
			}else{
				echo "Usuário / e-mail não encontrado";
			}
		}else{
			echo "Preencha os campos";
		}

		$conn = null;

	}
?>