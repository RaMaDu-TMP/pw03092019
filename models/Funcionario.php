<?php
    class Funcionario {
        
        private $codFunc;
        private $nomeFunc;
        private $emailFunc;
        private $senhaFunc;
        private $dataNascimentoFunc;

        function __contruct($codFunc, $nomeFunc, $emailFunc, $senhaFunc) {
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
        
        function getDataNascimentoFunc() {
            return $this->dataNascimentoFunc;
        }

        function setDataNascimentoFunc($dataNascimentoFunc) {
            $this->dataNascimentoFunc=$dataNascimentoFunc;
        }

        function printInfo() {
            echo '<br>---------------[FUNCIONÁRIO]---------------';
            echo '<br>Cod: '.$this->getCodFunc();
            echo '<br>Nome: '.$this->getNomeFunc();
            echo '<br>e-mail: '.$this->getEmailFunc();
            echo '<br>senha: '.$this->getSenhaFunc();
            echo '<br>senha: '.$this->getDataNascimentoFunc();
            echo '<br>';
        }

        public static function fromPDO($fPDO) {
            $employee = new Funcionario();
            $employee->setCodFunc($fPDO['codFunc']);
            $employee->setNomeFunc($fPDO['nomeFunc']);
            $employee->setEmailFunc($fPDO['emailFunc']);
            $employee->setSenhaFunc($fPDO['senhaFunc']);
            $employee->setDataNascimentoFunc($fPDO['DataNascimentoFunc']);

            return $employee;
        }
    }
?>
