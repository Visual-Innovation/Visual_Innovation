<?php
require_once('connect.php');
    Class Usuario {
        
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
        
       

        public function cadastrar($login,$senha) {
            global $pdo;

            $cmd = $pdo->prepare("SELECT id FROM usuario WHERE loginusuario = :logUs");
            $cmd->bindValue(":logUs",$login);
            $cmd->execute();
            if($cmd->rowCount() > 0)//Nome do cliente já existe...
            {
                return false;
            }
            else
            {
                $cmd = $pdo->prepare("INSERT INTO usuario(loginUsuario,senha) VALUES ('$login','$senha')");
                $cmd->execute();
                return true;
            }    
        }

    }

?>