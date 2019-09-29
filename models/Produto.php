<?php
    class Produto {

        private $codProd;
        private $nomeProd;
        private $descricaoProd;
        private $qtdProd;
        private $precoProd;

        function __contruct($codProd, $nomeProd, $descricaoProd, $qtdProd, $precoProd) {
            setCodProd($codProd);
            setNomeProd($nomeProd);
            setDescricaoProd($descricaoProd);
            setQtdProd($qtdProd);
            setPrecoProd($precoProd);
        }

        function getCodProd() {
            return $this->codProd;
        }

        function setCodProd($codProd) {
            $this->codProd=$codProd;
        }

        function getNomeProd() {
            return $this->nomeProd;
        }

        function setNomeProd($nomeProd) {
            $this->nomeProd=$nomeProd;
        }

        function getDescricaoProd() {
            return $this->descricaoProd;
        }

        function setDescricaoProd($descricaoProd) {
            $this->descricaoProd=$descricaoProd;
        }

        function getQtdProd() {
            return $this->qtdProd;
        }

        function setQtdProd($qtdProd) {
            $this->qtdProd=$qtdProd;
        }

        function getPrecoProd() {
            return $this->precoProd;
        }

        function setPrecoProd($precoProd) {
            $this->precoProd=$precoProd;
        }

        function printInfo() {
            echo '<br>---------------[PRODUTO]---------------';
            echo '<br>Cod: '.$this->getCodProd();
            echo '<br>Nome: '.$this->getNomeProd();
            echo '<br>Descrição: '.$this->getDescricaoProd();
            echo '<br>QTDE: '.$this->getQtdProd();
            echo '<br>';
        }

        public static function fromPDO($pDBO) {
            $product = new Produto();
            $product->setCodProd($pDBO['codProd']);
            $product->setNomeProd($pDBO['nomeProd']);
            $product->setDescricaoProd($pDBO['descricaoProd']);
            $product->setQtdProd($pDBO['qtdProd']);
            $product->setPrecoProd($pDBO['precoProd']);

            return $product;
        }
    }
?>