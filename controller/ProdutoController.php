<?php
    class ProdutoController {
        
        public static function insert($prod) {
            require_once 'Database.php';
            $conn = Database::connection();

            $stm = $conn->prepare('INSERT INTO produto('.
                                    'nomeProd, descricaoProd, qtdeProd, precoProd'.
                                ') VALUES('.
                                    ':nomeProd, :descricaoProd, :qtdeProd, :precoProd'.
                                ')');

            $stm->bindValue(":nomeProd", $prod->getNomeProd());
            $stm->bindValue(":descricaoProd", $prod->getDescricaoProd());
            $stm->bindValue(":qtdeProd", $prod->getQtdeProd());
            $stm->bindValue(":precoProd", $prod->getPrecoProd());
            $stm->execute();
        }

        public static function getAll() {
            require_once 'Database.php';
            $conn = Database::connection();

            $stm = $conn->prepare('SELECT * FROM produto');
            $stm->execute();

            $result = $stm->fetchAll();
            return $result;
        }

        public static function getByCod($codProd) {
            require_once 'Database.php';
            $conn = Database::connection();
            
            $stm = $conn->prepare('SELECT * FROM produto WHERE codProd = :codProd');
            $stm->bindValue(':codProd', $codProd);
            $stm->execute();

            $result = $stm->fetchAll();
            if (is_null($result) || empty($result)) {
                return NULL;
            }
            return $result[0];
        }

        public static function update($prod) {
            require_once 'Database.php';
            $conn = Database::connection();
            
            $stm = $conn->prepare('UPDATE Prodionario SET'.
                                    'nomeProd = :nomeProd, descricaoProd = :descricaoProd, qtdeProd = :qtdeProd, precoProd = :precoProd'.
                                ' WHERE codProd = :codProd'
                            );

            $stm->bindValue(":nomeProd", $prod->getNomeProd());
            $stm->bindValue(":descricaoProd", $prod->getDescricaoProd());
            $stm->bindValue(":qtdeProd", $prod->getQtdeProd());
            $stm->bindValue(":precoProd", $prod->getPrecoProd());

            $stm->bindValue(":codProd", $prod->getCodProd());
            $stm->execute();
        }

        public static function delete($prod) {
            require_once 'Database.php';
            $conn = Database::connection();
            
            $stm = $conn->prepare('DELETE produto WHERE codProd = :codProd');
            $stm->bindValue(":codProd", $prod->getCodProd());
            $stm->execute();
        }
    }
?>