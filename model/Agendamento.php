<?php
    class agendar
{
        private $pdo;
        
        
        public function __construct($dbname, $host, $user, $senha)
        {
            try 
            {
                $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $user, $senha);
            } 
                catch (PDOException $e)
                 {
                        echo "Erro com banco de dados".$e->getMessage();
                        exit();
                 }
                        catch(Exception $e)
                        {
                                echo "Erro sem relação ao banco de dados".$e->getMessage();
                                exit();
                        }
        }
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