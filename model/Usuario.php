<?php
session_start();
require_once '../../conexao/conexao.php';
?>

<?php
class Usuario
{

    private $codUsuario;
    private $nomeUsuario;
    private $dataNascimento;
    private $loginUsuario;
    private $senha;
    private $validaSenha;

    public function setCodUsuario($codUsuario)
    {
        $this->codUsuario = $codUsuario;
    }

    public function getCodUsuario()
    {
        return $this->codUsuario;
    }
    public function setNomeUsuario($nomeUsuario)
    {
        $this->nomdUsuario = $nomeUsuario;
    }

    public function getNomeUsuario()
    {
        return $this->nomeUsuario;
    }

    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function setLoginUsuario($loginUsuario)
    {
        $this->loginUsuario = $loginUsuario;
    }

    public function getLoginUsuario()
    {
        return $this->loginUsuario;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setValidaSenha($validaSenha)
    {
        $this->validaSenha = $validaSenha;
    }

    public function getValidaSenha()
    {
        return $this->validaSenha;
    }


    public function cadastrar($nomeUsuario, $loginUsuario, $dataNascimento, $senha)
    {
        global $pdo;

        $cmd = $pdo->prepare("SELECT codUsuario FROM tb_usuario WHERE loginUsuario = :l");
        $cmd->bindValue(":l", $loginUsuario);
        $cmd->execute();
        if ($cmd->rowCount() > 0) //Nome do cliente já existe...
        {
            //$_SESSION['msg'] = "<p style='color=blue;'>Usuário Já Cadastrado</p>";
            echo "<script>alert('Usuário Já Cadastrado!')</script>";
            return false;
        } else {

            $cmd = $pdo->prepare("INSERT INTO tb_usuario(nomeUsuario,dataNascimento,loginUsuario,senha) 
                VALUES (:n,:dtN,:l,:s)");
            $cmd->bindValue(":n", $nomeUsuario);
            $cmd->bindValue(":dtN", $dataNascimento);
            $cmd->bindValue(":l", $loginUsuario);
            $cmd->bindValue(":s", $senha);
            $cmd->execute();
            return true;
        }
    }
}
