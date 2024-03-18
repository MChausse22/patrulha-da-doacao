<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>LOGIN - Patrulha da Doação</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="imagens/icones/indexIcones.ico">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>

	<div class="limiter">

		<div class="login" style="background: rgb(168, 218, 220);
		background: radial-gradient(circle, rgba(69,123,157,1) 0%, rgb(2, 48, 71) 100%);">

			<div class="img1">
				<img src="imagens/images/login_page.jpg">
			</div>

			<div class="wrap-login100">

				<div>
					<!-- AQUI ESTÁ LINKANDO COM A loginAction. VERIFICAR-->
					<form class="login100-form validate-form" action="loginAction.php" method="POST">

						<!-- NÃO PRECISA MODIFICAR AQUI-->
						<span class="subtitle">
							Bem-vindo de volta!
						</span>

						<!-- NÃO PRECISA MODIFICAR AQUI-->
						<span class="login100-formtit">
							Login
						</span>

						<!-- PARTE DO EMAIL, VERIFICAR-->
						<div class="wrap-input100 validate-input" data-validate="Insira seu e-mail!">
							<input class="input100" type="email" name="i_email" placeholder="E-mail">
						</div>

						<!-- PARTE DA SENHA, VERIFICAR-->
						<div class="wrap-input100 validate-input" data-validate="Insira a sua senha!">
							<input class="input100" type="password" name="i_senha" placeholder="Senha">
						</div>

						<!-- NÃO PRECISA MODIFICAR AQUI-->
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
							<label class="label-checkbox100" for="ckb1">
								Lembrar-se
							</label>
						</div>

						<!-- VINCULAR ESSE BOTÃO DE LOGIN AO PORTFÓLIO-->
						<div class="container-login100-form-btn">
							<button class="login100-form-btn" type="submit" value="ACESSAR">
								Login
							</button>
						</div>

						</div>

						<!-- AQUI ESTÁ FUNCIONANDO-->
						<div class="subscrible">
							<span> Ainda não é inscrito? </span>
							<a href="cadastrar.php">
								<strong>
									Cadrastre-se!
								</strong>
							</a>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

</body>

</html>