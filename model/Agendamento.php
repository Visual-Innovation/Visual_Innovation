<?php

    include 'Conexao.php';

    class Agendamento {
        private $codAgendamento;
        private $codFuncionario;
        private $codUsuario;
        private $nomeUsuario;
        private $dataAgendamento;
        private $confirma;

        public function setCodAgendamento($cod) {
            $this -> codAgendamento = $cod;
        }

        public function getCodAgendamento() {
            return $this -> codAgendamento;        
        }

        public function setNomeCliente($nome) {
            $this -> nomeUsuario = $nome;
        }

        public function getNomeCliente() {
            return $this -> nomeUsuario;        
        }

        public function setDataAgendamento($date) {
            $this -> dataAgendamento = $date;
        }

        public function getData() {
            return $this -> dataAgendamento;        
        }

        public function setConfirma($confimacao) {
            $this -> confirma = $confimacao;
        }

        public function getConfirma() {
            return $this -> confirma;        
        }

        public function agendar($codAgendamento, $dataAgendamento) {
            global $pdo;

            $sql = "SELECT codAgendamento, dataAgendamento FROM Agendamento";
            $sql = $pdo->prepare($sql);
            $sql->execute();

            $agenda = [];

            while ($row_sql = $sql ->fetch(PDO::FETCH_ASSOC)) {
                $codAgendamento = $row_sql['codAgendameno'];
                $dataAgendamento = $row_sql['dataAgendamento'];

                $agenda[] = [
                    'codAgendamento' => $codAgendamento,
                    'dataAgendamento' => $dataAgendamento,
                ];
            }
            echo json_encode($agenda);
        }
    }
?>