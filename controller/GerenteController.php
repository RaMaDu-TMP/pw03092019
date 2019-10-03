<?php
    class GerenteController {
        
        public static function insert($ger) {
            require_once 'Database.php';
            $conn = Database::connection();

            $stm = $conn->prepare('INSERT INTO gerente('.
                                    'nomeGer, emailGer, senhaGer, dataNascimentoGer'.
                                ') VALUES('.
                                    ':nomeGer, :emailGer, :senhaGer, :dataNascimentoGer'.
                                ')');

            $stm->bindValue(":nomeGer", $ger->getNomeGer());
            $stm->bindValue(":emailGer", $ger->getEmailGer());
            $stm->bindValue(":senhaGer", $ger->getSenhaGer());
            $stm->bindValue(":dataNascimentoGer", $ger->getDataNascimentoGer());
            $stm->execute();
        }

        public static function getAll() {
            require_once 'Database.php';
            $conn = Database::connection();
            
            $stm = $conn->prepare('SELECT * FROM gerente');
            $stm->execute();

            $result = $stm->fetchAll();
            return $result;
        }

        public static function getByCod($codGer) {
            require_once 'Database.php';
            $conn = Database::connection();

            $stm = $conn->prepare('SELECT * FROM gerente WHERE codGer = :codGer');
            $stm->bindValue(":codGer", $codGer);
            $stm->execute();

            $result = $stm->fetchAll();
            if (is_null($result) || empty($result)) {
                return NULL;
            }
            return $result[0];
        }

        public static function update($ger) {
            require_once 'Database.php';
            $conn = Database::connection();
            
            $stm = $conn->prepare('UPDATE gerente SET'.
                                    'nomeGer = :nomeGer, emailGer = :emailGer, senhaGer = :senhaGer, dataNascimentoGer = :dataNascimentoGer'.
                                ' WHERE codGer = :codGer'
                            );

            $stm->bindValue(":nomeGer", $ger->getNomeGer());
            $stm->bindValue(":emailGer", $ger->getEmailGer());
            $stm->bindValue(":senhaGer", $ger->getSenhaGer());
            $stm->bindValue(":dataNascimentoGer", $ger->getDataNascimentoGer());

            $stm->bindValue(":codGer", $ger->getCodGer());
            $stm->execute();
        }

        public static function delete($ger) {
            require_once 'Database.php';
            $conn = Database::connection();
            
            $stm = $conn->prepare('DELETE gerente WHERE codGer = :codGer');
            $stm->bindValue(":codGer", $ger->getCodGer());
            $stm->execute();
        }
    }
?>