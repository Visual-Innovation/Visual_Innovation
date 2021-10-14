<?php

    class Usuario {


        private $codUsuario;
        private $login;
        private $senha;
       
        public function setCodUsuario($cod) {
            $this -> codUsuario = $cod;
        }

        public function getCodUsuario() {
            return $this -> codUsuario;
        }

        public function setLogin($login) {
            $this -> login = $login;
        }

        public function getLogin() {
            return $this -> login;
        }

        public function setSenha($senha) {
            $this -> senha = $senha;
        }

        public function getSenha() {
            return $this -> senha;
        }

    
    /**
     * Método Para Cadastrar Novos Usuários
     *  @param string $usuario & $senha
     *  @return boolean
     */
        public function cadastrar($login,$senha) {
            
            $cmd = $this->pdo->prepare("SELECT codUsuario FROM Usuario WHERE loginusuario = :logUs");
            $cmd->bindValue(":logUs",$login);
            $cmd->execute();
            if($cmd->rowCount() > 0)//Nome do cliente já existe...
            {
                return false;
            }
            else
            {
                $cmd = $this->pdo->prepare("INSERT INTO usuario (loginUsuario,senha) VALUES (logUs,senha)");
                $cmd->bindValue(":logUs", $login);
                $cmd->bindValue(":senha", $senha);
                $cmd->execute();
                return true;
            }    
        }

    }

   
    
?>