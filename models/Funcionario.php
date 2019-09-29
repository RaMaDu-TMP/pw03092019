<?php
    class Funcionario {
        
        private $codFunc;
        private $nomeFunc;
        private $emailFunc;
        private $senhaFunc;

        function __construct($codFunc, $nomeFunc, $emailFunc, $senhaFunc) {
            setCodFunc($codFunc);
            setNomeFunc($nomeFunc);
            setEmailFunc($emailFunc);
            setSenhaFunc($senhaFunc);
        }

        function getCodFunc() {
            return $this->codFunc;
        }

        function setCodFunc($codFunc) {
            $this->codFunc=$codFunc;
        }

        function getNomeFunc() {
            return $this->nomeFunc;
        }

        function setNomeFunc($nomeFunc) {
            $this->nomeFunc=$nomeFunc;
        }

        function getEmailFunc() {
            return $this->emailFunc;
        }

        function setEmailFunc($emailFunc) {
            $this->emailFunc=$emailFunc;
        }

        function getSenhaFunc() {
            return $this->senhaFunc;
        }

        function setSenhaFunc($senhaFunc) {
            $this->senhaFunc=$senhaFunc;
        }
    }
?>