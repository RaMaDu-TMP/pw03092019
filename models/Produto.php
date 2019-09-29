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
    }
?>