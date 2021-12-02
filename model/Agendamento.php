<?php

    include 'Conexao.php';

    class Agendamento {
        

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