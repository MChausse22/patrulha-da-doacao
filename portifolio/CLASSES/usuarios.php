<?php

class Usuario
{
    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        try {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $usuario, $senha);
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        }
    }
    public function cadastrar($i_nome, $i_email, $i_senha, $i_cnpj, $i_segmento_descricao, $i_telefone, $i_logradouro, $i_bairro, $i_cep, $i_cidade, $i_uf)
    {
        global $pdo;

        $sql = $pdo->prepare("SELECT i_codigo FROM instituicao WHERE i_email = :iem");
        $sql->bindValue(":iem", $i_email);
        $sql->execute();
        if ($sql->rowCount() > 0) 
        
        {
            return false;
        } 
        
        else
        {
            $sql = $pdo->prepare("INSERT INTO instituicao (i_nome, i_email, i_senha, i_confSenha, i_cnpj, i_segmento_descricao, i_telefone, i_logradouro, i_bairro, i_cep, i_cidade, i_uf) 
            VALUES (:ino, :iem, :isen, :icn, :iseg, :ite, :ilo, :ico, :ice, :ici, :iuf)");
            $sql->bindValue(":ino", $i_nome);
            $sql->bindValue(":iem", $i_email);
            $sql->bindValue(":isen", md5($i_senha));
            $sql->bindValue(":icn", intval($i_cnpj), PDO::PARAM_INT);
            $sql->bindValue(":iseg", $i_segmento_descricao);
            $sql->bindValue(":ite", intval($i_telefone), PDO::PARAM_INT);
            $sql->bindValue(":ilo", $i_logradouro);
            $sql->bindValue(":ico", $i_bairro);
            $sql->bindValue(":ice", intval($i_cep), PDO::PARAM_INT);
            $sql->bindValue(":ici", $i_cidade);
            $sql->bindValue(":iuf", $i_uf);

            
            $sql->execute();
            return true;
        }
    }
    
    public function logar($i_email, $i_senha)
    {
        global $pdo;
        //verificar
        $sql = $pdo->prepare("SELECT i_codigo FROM instituicao WHERE i_email = :iem AND i_senha = :isen");
        $sql->bindValue(":iem",$i_email);
        $sql->bindValue(":isen",md5($i_senha));
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            //entrar
            $dado = $sql->fetch();
            session_start();
            $_SESSION['i_codigo'] = $dado['i_codigo']; //login com sucesso
            return true;
        }
        else
        {
            return false; //não foi possivel
        }
    }
}
?>
