<?php
require_once '../../conexao/conexao.php';


class Agendamento
{
    public function buscarDados()
    {
        global $pdo;
        $res = array();
        $cmd = $pdo->query("SELECT s.codServico,s.nomeServico, s.dataServico,s.tempoEstimado
         FROM servico AS s ORDER BY dataServico");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
}
?>