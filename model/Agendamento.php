<?php

    class Agendamento {

        

        public function agendar($codAgendamento, $dataAgendamento) {
            global $pdo;

            $sql = "SELECT codAgendamento, dataAgendamento FROM Agendamento";
            $sql = $pdo->prepare($sql);
            $sql->execute();

            $agenda = [];

    }
}
