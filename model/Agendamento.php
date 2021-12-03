<?php

require_once '../../conexao/conexao.php';

class Agendamento
{


    public function agendar($nomeUsuario, $nomeServico, $precoServico, $dataAgendamento)
    {
        global $pdo;
        $cmd = $pdo->prepare("INSERT INTO agendamento(nomeUsuario, nomeServico, precoServico, dataAgendamento) 
                                    VALUES (:nu, :ns, :ps, :da)");
        $cmd->bindValue(":nu", $nomeUsuario);
        $cmd->bindValue(":ns", $nomeServico);
        $cmd->bindValue(":ps", $precoServico);
        $cmd->bindValue(":da", $dataAgendamento);
        $cmd->execute();
        return true;
    }
}


