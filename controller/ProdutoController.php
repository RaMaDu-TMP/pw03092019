<?php
    class ProdutoController {
        
        public static function getAll() {
            require_once 'Database.php';

            $conn = new Database()->connection();
            $stm = $conn->prepare('SELECT * FROM produto');
            $stm->execute();

            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            return $result;
        }

        public static function getByCod($codProd) {
            require_once 'Database.php';

            $conn = new Database()->connection();
            $stm = $conn->prepare('SELECT * FROM produto WHERE codProd = :codProd');
            $stm->bindValue(':codProd', $codProd);
            $stm->execute();

            $result = $stm->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>