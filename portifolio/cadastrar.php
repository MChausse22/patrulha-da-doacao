<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>CADASTRO - Patrulha da Doação</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="imagens/icones/indexIcones.ico">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="robots" content="noindex, follow">
</head>

<body style="background-color: #999999;">

    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more" style="background-image: url('imagens/images/logo_vetor.png');"></div>
            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">

                <form class="login100-form validate-form" method="POST">
                    <span class="login100-form-title p-b-59">
                        Cadastre-se! 
                    </span>
                    
                    <div class="wrap-input100 validate-input" data-validate="Este campo requer um nome!">
                        <span class="label-input100">Nome da instituição</span>
                        <input class="input100" type="text" name="i_nome" required placeholder="Nome">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Requer um e-mail válido! Ex: abc@gmail.com">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="i_email" required placeholder="Email">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Este campo requer uma senha!">
                        <span class="label-input100">Senha</span>
                        <input class="input100" type="text" name="i_senha" required placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Este campo requer a repetição da senha!">
                        <span class="label-input100">Repita a senha</span>
                        <input class="input100" type="text" name="i_confSenha" required placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="É necessário informar o CNPJ.">
                        <span class="label-input100">CNPJ</span>
                        <input class="input100" type="number" name="i_cnpj" required placeholder="CNPJ">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="validate-input">
                        <span class="label-input100">Seguimento</span><br>
                            <select name="i_segmento_descricao" id="Seguimento">
                                <option value="" selected class="seg "></option> 
                                    <option value="Animais">Animais</option> 
                                    <option value="Crianças e Adolescentes">Crianças e Adolescentes</option> 
                                    <option value="Idosos">Idosos</option> 
                                    <option value="Deficientes">Deficientes</option> 
                                    <option value="Dependentes Químicos">Dependentes Químicos</option> 
                                    <option value="Alimentos e Higiene">Alimentos e Higiene</option> 
                            </select> <br><br>
                        
                    </div>

                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">Telefone Comercial</span>
                        <input class="input100" type="tel" name="i_telefone"
                        required placeholder="(XX) XXXX-XXXX">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="É necessário informar o endereço, com número e complemento.">
                        <span class="label-input100">Endereço</span>
                        <input class="input100" type="text" name="i_logradouro" required placeholder="Endereço">
                        <span class="focus-input100"></span>
                    </div>


                        <div class="wrap-input100 validate-input div1" data-validate="É necessário informar o bairro.">
                            <span class="label-input100">Bairro</span>
                            <input class="input100" type="text" name="i_bairro" placeholder="Bairro">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input div2" data-validate="É necessário informar o CEP.">
                            <span class="label-input100">CEP</span>
                            <input class="input100" type="text" onkeypress="$(this).mask('00000-000')" name="i_cep" >
                            <span class="focus-input100"></span>
                        </div>
                    

                        <div class="wrap-input100 validate-input div1" data-validate="Informe a cidade">
                            <span class="label-input100">Cidade</span>
                            <input class="input100" type="text" name="i_cidade" placeholder="Cidade">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input div2" data-validate="É necessário informar o UF.">
                            <span class="label-input100">UF</span>
                            <input class="input100" type="text" placeholder="UF" name="i_uf" >
                            <span class="focus-input100"></span>
                        </div>
                        
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit">
                                Cadastrar
                            </button>
                        </div>
                    </div>

                    <div class="flex-m w-full p-b-33">
                        <div class="contact100-form-checkbox">
                            <input class="" name="regist">
                                <label class="" for="ckb1">
                                    <span class="txt1">
                        Já é cadastrado?
                            <a href="index.php" class="txt hov1">
                        Faça seu login!
                            </a>
                                    </span>
                                </label>
                        </div>
                    </div>
                    <div id="back">
                        <a href="index.html">
                        <span class="txt hov1">
                        Voltar à página principal
                            </span>
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="vendor/animsition/js/animsition.min.js"></script>

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/select2/select2.min.js"></script>

    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>

    <script src="vendor/countdowntime/countdowntime.js"></script>

    <script src="js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>


    <!--FAZ O CADASTRO-->
    <?php

    //verificar
    if (isset($_POST['i_nome'])) {
        require_once 'CLASSES/usuarios.php';
        $u = new Usuario;

        $i_nome = addslashes($_POST['i_nome']);
        $i_email = addslashes($_POST['i_email']);
        $i_senha = addslashes($_POST['i_senha']);
        $i_confSenha = addslashes($_POST['i_confSenha']);
        $i_cnpj = addslashes($_POST['i_cnpj']);
        $i_segmento_descricao = addslashes($_POST['i_segmento_descricao']);
        $i_telefone = addslashes($_POST['i_telefone']);
        $i_logradouro = addslashes($_POST['i_logradouro']);
        $i_bairro = addslashes($_POST['i_bairro']);
        $i_complemento = addslashes($_POST['i_cep']);
        $i_cidade = addslashes($_POST['i_cidade']);
        $i_uf = addslashes($_POST['i_uf']);

        //verifica se foi preenchido
        if (!empty($i_nome) && !empty($i_email) && !empty($i_senha) && !empty($i_confSenha) && !empty($i_cnpj) && !empty($i_segmento_descricao) && !empty($i_telefone) 
        && !empty($i_logradouro) && !empty($i_bairro) && !empty($i_cep) && !empty($i_cidade) && !empty($i_uf)) {
            $u->conectar("patrulhadoacao", "localhost", "root", "");

            if ($u->msgErro == "") { //esta certo
                if ($i_senha == $i_confSenha) {
                    if ($u->cadastrar($i_nome, $i_email, $i_senha, $i_cnpj, $i_segmento_descricao, $i_telefone, $i_logradouro, $i_bairro, $i_cep, $i_cidade, $i_uf)){?>
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