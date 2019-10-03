<?php
    class FuncionarioController {
        
        public static function insert($func) {
            require_once 'Database.php';
            $conn = Database::connection();

            $stm = $conn->prepare('INSERT INTO funcionario('.
                                    'nomeFunc, emailFunc, senhaFunc, dataNascFunc'.
                                ') VALUES('.
                                    ':nomeFunc, :emailFunc, :senhaFunc, :dataNascFunc'.
                                ')');

            $stm->bindValue(":nomeFunc", $func->getNomeFunc());
            $stm->bindValue(":emailFunc", $func->getEmailFunc());
            $stm->bindValue(":senhaFunc", $func->getSenhaFunc());
            $stm->bindValue(":dataNascFunc", $func->getDataNascFunc());
            $stm->execute();
        }

        public static function getAll() {
            require_once 'Database.php';
            $conn = Database::connection();
            
            $stm = $conn->prepare('SELECT * FROM funcionario');
            $stm->execute();

            $result = $stm->fetchAll();
            return $result;
        }

        public static function getByCod($codFunc) {
            require_once 'Database.php';
            $conn = Database::connection();

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
            require_once 'Database.php';
            $conn = Database::connection();
            
            $stm = $conn->prepare('UPDATE funcionario SET '.
                                    'nomeFunc = :nomeFunc, emailFunc = :emailFunc, senhaFunc = :senhaFunc, dataNascFunc = :dataNascFunc'.
                                ' WHERE codFunc = :codFunc'
                            );

            $stm->bindValue(":nomeFunc", $func->getNomeFunc());
            $stm->bindValue(":emailFunc", $func->getEmailFunc());
            $stm->bindValue(":senhaFunc", $func->getSenhaFunc());
            $stm->bindValue(":dataNascFunc", $func->getDataNascFunc());

            $stm->bindValue(":codFunc", $func->getCodFunc());
            $stm->execute();
        }

        public static function delete($func) {
            require_once 'Database.php';
            $conn = Database::connection();
            
            $stm = $conn->prepare('DELETE FROM funcionario WHERE codFunc = :codFunc');
            $stm->bindValue(":codFunc", $func->getCodFunc());
            $stm->execute();
        }
    }
?> 