<?php

    class Servico {
        public function buscarDados()
        {
            $res = array();
            $cmd = $this->pdo->query("SELECT * FROM pessoa ORDER BY nome");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        }
    
        //FUNÇÃO PARA CADASTRAR PESSOAS NO BANCO DE DADOS
        public function cadastrarServico($nome, $tempoEstimado, $valor)
        {
            //ANTES DE CADASTRAR VERIFICAR SE JA TEM O EMAIL CADASTRADO 
            $cmd = $this->pdo->prepare("SELECT id FROM pessoa WHERE nome = :n");
            $cmd->bindValue(":n", $nome);
            $cmd->execute();
            if ($cmd->rowCount() > 0) //email ja cadastrado no banco 
            {
                return false;
            } else {
                $cmd = $this->pdo->prepare("INSERT INTO pessoa (nome,tempoEstimado,valor)
                VALUES(:n,:tmp,:vl)");
                $cmd->bindValue(":n", $nome);
                $cmd->bindValue(":tmp", $tempoEstimado);
                $cmd->bindValue(":vl", $valor);
                $cmd->execute();
                return true;
            }
        }
    }
?>