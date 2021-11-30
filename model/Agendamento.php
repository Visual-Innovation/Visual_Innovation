<?php
require_once '../model/Conexao.php';

class Agendamento {

      
            public function agendar($nomeUsuario, $nomeServico, $precoServico, $dataAgendamento)
            { 
                                $cmd = $this->pdo->prepare("INSERT INTO agendamento(nomeUsuario, nomeServico, precoServico, dataAgendamento) 
                                    VALUES (:nu, :ns, :ps, :da)");
                                $cmd->bindValue(":nu", $nomeUsuario);
                                $cmd->bindValue(":ns", $nomeServico);
                                $cmd->bindValue(":ps", $precoServico);
                                $cmd->bindValue(":da", $dataAgendamento);
                                $cmd->execute();
                                return true;
                            }
  
            }

?>
