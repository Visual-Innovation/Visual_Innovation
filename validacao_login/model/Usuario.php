<?php

    class Usuario 
    {
        private $codUsuario;
        private $nomeUsuario;
        private $dataNascimento;
        private $loginUsuario;
        private $senha;
       
        public function setCodUsuario($cod) {
            $this -> codUsuario = $cod;
        }

        public function getCodUsuario() {
            return $this -> codUsuario;
        }
        
         public function setNomeUsuario($nome) {
            $this -> nomeUsuario = $nome;
        }

        public function getNomeUsuario() {
            return $this -> nomeUsuario;
        }

        public function setLoginUsuario($login) {
            $this -> loginUsuario = $login;
        }

        public function getLoginUsuario() {
            return $this -> loginUsuario;
        }

        public function setSenha($senha) {
            $this -> senha = $senha;
        }

        public function getSenha() {
            return $this -> senha;
        }

        public function login($loginUsuario, $senha){
            global $pdo;

            $sql = "SELECT * FROM usuario WHERE loginUsuario = :loginUsuario AND senha = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":loginUsuario", $loginUsuario);
            $sql->bindValue(":senha", $senha);
            $sql->execute();

                if($sql->rowCount() > 0){
                    $dado = $sql->fetch();

                    $_SESSION['codUsuario'] = $dado['codUsuario'];

                     return true;
                }else{
                    return false;
            }
        }   
    }
?>