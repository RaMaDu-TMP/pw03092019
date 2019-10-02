<?php
    class FuncionarioController {
        
        public static function insert($func) {
            $conn = FuncionarioController::prepareConnection();
            $stm = $conn->prepare('INSERT INTO funcionario() VALUES()');
            $stm->bindValue(":codFunc", $codFunc);
        }

        public static function getAll() {

            $conn = FuncionarioController::prepareConnection();
            $stm = $conn->prepare('SELECT * FROM funcionario');
            $stm->execute();

            $result = $stm->fetchAll();
            return $result;
        }

        public static function getByCod($codFunc) {

            $conn = FuncionarioController::prepareConnection();
            $stm = $conn->prepare('SELECT * FROM funcionario WHERE codFunc = :codFunc');
            $stm->bindValue(":codFunc", $codFunc);
            $stm->execute();

            $result = $stm->fetchAll();
            if (is_null($result) || empty($result)) {
                return NULL;
            }
            return $result[0];
        }

        private static function prepareConnection() {
            require_once 'Database.php';

            $db = new Database();
            $conn = $db->connection();
            return $conn;
        }
    }
?> 