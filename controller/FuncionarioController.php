<?php
    class FuncionarioController {
        
        public static function insert($func) {
            $conn = FuncionarioController::prepareConnection();

            $stm = $conn->prepare('INSERT INTO funcionario('.
                                    'nomeFunc, emailFunc, senhaFunc, dataNascimentoFunc'.
                                ') VALUES('.
                                    ':nomeFunc, :emailFunc, :senhaFunc, :dataNascimentoFunc'.
                                ')');

            $stm->bindValue(":nomeFunc", $func->getNomeFunc());
            $stm->bindValue(":emailFunc", $func->getEmailFunc());
            $stm->bindValue(":senhaFunc", $func->getSenhaFunc());
            $stm->bindValue(":dataNascimentoFunc", $func->getDataNascimentoFunc());
            $stm->execute();
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

        public static function update($func) {
            $conn = FuncionarioController::prepareConnection();
            
            $stm = $conn->prepare('UPDATE funcionario SET'.
                                    'nomeFunc = :nomeFunc, emailFunc = :emailFunc, senhaFunc = :senhaFunc, dataNascimentoFunc = :dataNascimentoFunc'.
                                ' WHERE codFunc = :codFunc'
                            );

            $stm->bindValue(":nomeFunc", $func->getNomeFunc());
            $stm->bindValue(":emailFunc", $func->getEmailFunc());
            $stm->bindValue(":senhaFunc", $func->getSenhaFunc());
            $stm->bindValue(":dataNascimentoFunc", $func->getDataNascimentoFunc());

            $stm->bindValue(":codFunc", $func->getCodFunc());
            $stm->execute();
        }

        public static function delete($func) {
            $conn = FuncionarioController::prepareConnection();
            
            $stm = $conn->prepare('DELETE funcionario WHERE codFunc = :codFunc');
            $stm->bindValue(":codFunc", $func->getCodFunc());
            $stm->execute();
        }

        private static function prepareConnection() {
            require_once 'Database.php';

            $db = new Database();
            $conn = $db->connection();
            return $conn;
        }
    }
?> 