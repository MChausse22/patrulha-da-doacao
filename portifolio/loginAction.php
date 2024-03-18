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

<?php
require_once 'CLASSES/usuarios.php';
$u = new Usuario;

?>

<body>

	<?php
        $_SERVER = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "patrulhadoacao";

        $conexao = new mysqli($servername, $username, $password, $dbname);
        if ($conexao->connect_error) {
            die("Connection failed: " . $conexao->connect_error);
        }

        if ($conexao->query($sql) === TRUE) {
            echo '
            <a href="index.html">
            </a> 
            ';
            
        } else {
            echo '
            <a href=".php">
                <h1 class="w3-button w3-teal">ERRO! </h1>
            </a> 
            ';
        }
        $conexao->close();
     if (isset($_POST['i_email'])) {
            $i_email = addslashes($_POST['i_email']);
            $i_senha = addslashes($_POST['i_senha']);

            if (!empty($i_email) && !empty($i_senha)) {
                $u->conectar("patrulhadoacao", "localhost", "root", "");

                if ($u->msgErro == "") {
                    if ($u->logar($i_email, $i_senha)) {
                        header("location: areaPrivada.php");
                    } else {
        ?>
                        <div class="msg-erro">
                            Email e/ou senha estão incorretos!
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

        <div id="dropDownSelect1"></div>

    </div>

</body>

</html>
