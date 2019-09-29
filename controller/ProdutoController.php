<?php
    class ProdutoController {
        
        public static function getAll() {
            require_once 'Database.php';

            $db = new Database();
            $conn = $db->connection();
            $stm = $conn->prepare('SELECT * FROM produto');
            $stm->execute();

            $result = $stm->fetchAll();
            return $result;
        }

        public static function getByCod($codProd) {
            require_once 'Database.php';

            $db = new Database();
            $conn = $db->connection();
            $stm = $conn->prepare('SELECT * FROM produto WHERE codProd = :codProd');
            $stm->bindValue(':codProd', $codProd);
            $stm->execute();

            $result = $stm->fetchAll();
        }
    }
?>