<?php
    class Gerente {
        
        private $codGer;
        private $nomeGer;
        private $emailGer;
        private $senhaGer;
        private $dataNascimentoGer;

        function __contruct($codGer, $nomeGer, $emailGer, $senhaGer) {
            setCodGer($codGer);
            setNomeGer($nomeGer);
            setEmailGer($emailGer);
            setSenhaGer($senhaGer);
        }

        function getCodGer() {
            return $this->codGer;
        }

        function setCodGer($codGer) {
            $this->codGer=$codGer;
        }

        function getNomeGer() {
            return $this->nomeGer;
        }

        function setNomeGer($nomeGer) {
            $this->nomeGer=$nomeGer;
        }

        function getEmailGer() {
            return $this->emailGer;
        }

        function setEmailGer($emailGer) {
            $this->emailGer=$emailGer;
        }

        function getSenhaGer() {
            return $this->senhaGer;
        }

        function setSenhaGer($senhaGer) {
            $this->senhaGer=$senhaGer;
        }
        
        function getDataNascimentoGer() {
            return $this->dataNascimentoGer;
        }

        function setDataNascimentoGer($dataNascimentoGer) {
            $this->dataNascimentoGer=$dataNascimentoGer;
        }

        function printInfo() {
            echo '<br>---------------[GERENTE]---------------';
            echo '<br>Cod: '.$this->getCodGer();
            echo '<br>Nome: '.$this->getNomeGer();
            echo '<br>e-mail: '.$this->getEmailGer();
            echo '<br>senha: '.$this->getSenhaGer();
            echo '<br>data de nascimento: '.$this->getDataNascimentoGer();
            echo '<br>';
        }

        public static function fromPDO($mPDO) {
            $manager = new Gerente();
            $manager->setCodGer($mPDO['codGer']);
            $manager->setNomeGer($mPDO['nomeGer']);
            $manager->setEmailGer($mPDO['emailGer']);
            $manager->setSenhaGer($mPDO['senhaGer']);
            $manager->setDataNascimentoGer($mPDO['dataNascimentoGer']);

            return $manager;
        }
    }
?>
