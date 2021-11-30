
<?php
require_once '../../conexao/conexao.php';

class Usuario
{

    public function cadastrar($nomeUsuario, $loginUsuario, $dataNascimento, $senha)
    {
        global $pdo;

        $cmd = $pdo->prepare("SELECT codUsuario FROM tb_usuario WHERE loginUsuario = :l");
        $cmd->bindValue(":l", $loginUsuario);
        $cmd->execute();
        if ($cmd->rowCount() > 0) //Nome do cliente já existe...
        {
            ?>
            <div class="alert alert-danger text-center mt-2" role="alert">
            Usuário já está cadastrado!
            </div>
            <?php
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
