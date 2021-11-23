<?php
require_once '../../conexao/conexao.php';
?>

<?php
class Servico
{

    public function buscarDados()
    {
        global $pdo;
        $res = array();
        $cmd = $pdo->query("SELECT * FROM servico ORDER BY nomeServico");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    //FUNÇÃO PARA CADASTRAR PESSOAS NO BANCO DE DADOS
    public function cadastrarServico($nome, $tempoEstimado, $valor)
    {
        global $pdo;

        //ANTES DE CADASTRAR VERIFICAR SE JA TEM O EMAIL CADASTRADO 
        $cmd = $pdo->prepare("SELECT codServico FROM servico WHERE nomeServico = :n");
        $cmd->bindValue(":n", $nome);
        $cmd->execute();
        if ($cmd->rowCount() > 0) //email ja cadastrado no banco 
        {
            echo "<script>alert('Serviço já está cadastrado!');</script>";
            return false;
        } else {
            $cmd = $pdo->prepare("INSERT INTO servico (nomeServico,tempoEstimado,valor)
                VALUES(:n,:tmp,:vl)");
            $cmd->bindValue(":n", $nome);
            $cmd->bindValue(":tmp", $tempoEstimado);
            $cmd->bindValue(":vl", $valor);
            $cmd->execute();
            return true;
        }
    }
}
