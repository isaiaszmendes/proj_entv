// Pegar os valores do formulário 

$(document).ready(function() {

	$('.btn-register').click(function() { /* Função inicia ao clicar no botão Cadastrar */
		
		$.post("assets/action/action.php",
			{
				metodo:"register",
				name_user:$('#register_name_user').val(),
				surname_user:$('#register_surname_user').val(),
				email_user:$('#register_email_user').val(),
				account_user:$('#register_account_user').val(),
				password_user:$('#register_password_user').val()
			},
			function(valor){
				$('.return-post-msg.register-msg').html(valor);
			}
		)

	});
	$('.btn-login').click(function() { /* Função inicia ao clicar no botão Entrar */
		
		$.post("assets/action/action.php",
			{
				metodo:"login",
				account_user:$('#login_account_user').val(),
				password_user:$('#login_password_user').val()
			},
			function(valor){
				$('.return-post-msg.login-msg').html(valor);
			}
		)

	});

});