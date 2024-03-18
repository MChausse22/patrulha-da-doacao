<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>CADASTRO - Patrulha da Doação</title>
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

<div class="limiter2">

    <div id="corpo-form-cad">
        <h1>Cadastrar</h1>

        <div class="cadastro" style="background: rgb(168, 218, 220);
		background: radial-gradient(circle, rgba(69,123,157,1) 0%, rgb(2, 48, 71) 100%);">

			<div class="wrap-cadastro100">

				<div>

                <form method="POST" class="cadastro100-form validadeCad-form">

                    <div class="wrap-cadastro100 validadeCad-input"> 
                        <br class="nameCad">Nome completo da Instituição</br>
                            <input type="text" name="i_nome" placeholder="Nome Completo" >
                    </div>    

                    <div class="wrap-cadastro100 validadeCad-input"> 
                        <br class="nameEnd">Endereço</br>
                    <input type="text" name="i_logradouro" placeholder="Logradouro" >
                    </div>

                    <div class="wrap-cadastro100 validadeCad-input"> 
                            <span class="nameCad">Número</span>
                        <input type="text" name="i_numero" placeholder="Numero" >

                            <span class="nameCad">Complemento</span>
                        <input type="text" name="i_complemento" placeholder="Complemento">

                            <span class="nameCad">Cidade</span>
                        <input type="text" name="i_cidade" placeholder="Cidade">
                    </div>


            <label for="uf">UF</label> 
            <select name="i_uf" id="uf"> 
            <option value="" selected></option> 
            <option value="AC">AC</option> 
            <option value="AL">AL</option> 
            <option value="AP">AP</option> 
            <option value="AM">AM</option> 
            <option value="BA">BA</option> 
            <option value="CE">CE</option> 
            <option value="DF">DF</option> 
            <option value="ES">ES</option> 
            <option value="GO">GO</option> 
            <option value="MA">MA</option> 
            <option value="MT">MT</option> 
            <option value="MS">MS</option> 
            <option value="MG">MG</option> 
            <option value="PA">PA</option> 
            <option value="PB">PB</option> 
            <option value="PR">PR</option> 
            <option value="PE">PE</option> 
            <option value="PI">PI</option>
            <option value="RJ">RJ</option> 
            <option value="RN">RN</option> 
            <option value="RS">RS</option> 
            <option value="RO">RO</option> 
            <option value="RR">RR</option> 
            <option value="SC">SC</option> 
            <option value="SP">SP</option> 
            <option value="SE">SE</option> 
            <option value="TO">TO</option> 
        </select> 
            <input type="text" name="i_cep" placeholder="Cep" maxlength="9">
            <input type="text" name="i_telefone" placeholder="Telefone" maxlength="12">
            <input type="text" name="i_cnpj" placeholder="CNPJ" maxlength="15">
            <input type="text" name="i_site" placeholder="Site" maxlength="40">
            
            
            <label for="i_segmento_descricao">Seguimento</label> 
        <select name="i_segmento_descricao" id="Seguimento"> 
            <option value="" selected></option> 
            <option value="Animais">Animais</option> 
            <option value="Crianças e Adolescentes">Crianças e Adolescentes</option> 
            <option value="Idosos">Idosos</option> 
            <option value="Deficientes">Deficientes</option> 
            <option value="Dependentes Químicos">Dependentes Químicos</option> 
            <option value="Alimentos e Higiene">Alimentos e Higiene</option> 
        </select> 
            <input type="email" name="i_email" placeholder="Email" maxlength="80">
            <input type="password" name="i_senha" placeholder="Senha" maxlength="15">
            <input type="password" name="i_confSenha" placeholder="Confirmar Senha" maxlength="15">
            <input type="submit" value="CADASTRAR">

        </form>
    </div>
    </div>

    <?php

    //verificar
    if (isset($_POST['i_nome'])) {
        require_once 'CLASSES/usuarios.php';
        $u = new Usuario;

        $i_nome = addslashes($_POST['i_nome']);
        $i_logradouro = addslashes($_POST['i_logradouro']);
        $i_numero = addslashes($_POST['i_numero']);
        $i_complemento = addslashes($_POST['i_complemento']);
        $i_cidade = addslashes($_POST['i_cidade']);
        $i_uf = addslashes($_POST['i_uf']);
        $i_cep = addslashes($_POST['i_cep']);
        $i_telefone = addslashes($_POST['i_telefone']);
        $i_cnpj = addslashes($_POST['i_cnpj']);
        $i_site = addslashes($_POST['i_site']);
        //$i_data_cadastro = addslashes($_POST['i_data_cadastro']);
        $i_segmento_descricao = addslashes($_POST['i_segmento_descricao']);
        $i_email = addslashes($_POST['i_email']);
        $i_senha = addslashes($_POST['i_senha']);
        $i_confSenha = addslashes($_POST['i_confSenha']);

        //verifica se foi preenchido
        if (!empty($i_nome) && !empty($i_logradouro) && !empty($i_numero) && !empty($i_cidade) && !empty($i_uf) && !empty($i_cep) && !empty($i_telefone) && !empty($i_cnpj) && !empty($i_site) && !empty($i_email) && !empty($i_senha) && !empty($i_confSenha)) {
            $u->conectar("patrulhadoacao", "localhost", "root", "");

            if ($u->msgErro == "") { //esta certo
                if ($i_senha == $i_confSenha) {
                    if ($u->cadastrar($i_nome, $i_logradouro, $i_numero, $i_complemento, $i_cidade, $i_uf, $i_cep, $i_telefone, $i_cnpj, $i_site, $i_segmento_descricao, $i_email, $i_senha)) {?>
                        <div id="msg-sucesso">
                            Cadastro com sucesso! Acesse para entrar!

                        </div>
                    <?php
                    } else {
                        ?>
                        <div class="msg-erro">
                            Email já cadastrado
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="msg-erro">
                        Confimação de Senha incorreto!
                    </div>
                <?php
                }
            } else {
                ?>
                <div class="msg-erro">
                    <?php echo "Erro: " . $u->msgErro; ?>
                </div>
            <?php
            }
        } else {
            ?>
            <div class="msg-erro">
                Preencha todos os campos!
            </div>
    <?php
        }
    }
    ?>
</body>

</html>