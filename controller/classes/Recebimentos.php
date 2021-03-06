<?php
    class Recebimentos{

        private $codRecebimento;
        private $numLote;
        private $valorBaseVigente;
        private $boniPropriedade;
        private $pontuacaoLote;
        private $quiloBonificacao;
        private $boniEmpresa;
        private $boniProdutor;
        private $valorSuino;

        public function getcodRecebimento(){
            return $this->codRecebimento;
        }

        public function setcodRecebimento($codRecebimento){
            $this->codRecebimento = $codRecebimento;
        }

        public function getnumLote(){
            return $this->numLote;
        }

        public function setnumLote($numLote){
            $this->numLote = $numLote;
        }

        public function getvalorBaseVigente(){
            return $this->valorBaseVigente;
        }

        public function setvalorBaseVigente($valorBaseVigente){
            $this->valorBaseVigente = $valorBaseVigente;
        }

        public function getboniPropriedade(){
            return $this->boniPropriedade;
        }

        public function setboniPropriedade($boniPropriedade){
            $this->boniPropriedade = $boniPropriedade;
        }

        public function getpontuacaoLote(){
            return $this->pontuacaoLote;
        }

        public function setpontuacaoLote($pontuacaoLote){
            $this->pontuacaoLote = $pontuacaoLote;
        }
        
        public function getquiloBonificacao(){
            return $this->quiloBonificacao;
        }

        public function setquiloBonificacao($quiloBonificacao){
            $this->quiloBonificacao = $quiloBonificacao;
        }  

        public function getboniEmpresa(){
            return $this->boniEmpresa;
        }

        public function setboniEmpresa($boniEmpresa){
            $this->boniEmpresa = $boniEmpresa;
        } 

        public function getboniProdutor(){
            return $this->boniProdutor;
        }

        public function setboniProdutor($boniProdutor){
            $this->boniProdutor = $boniProdutor;
        }

        public function getvalorSuino(){
            return $this->valorSuino;
        }

        public function setvalorSuino($valorSuino){
            $this->valorSuino = $valorSuino;
        }

        public function validate(){
            $erros = array();
            if(empty($this->getnumLote()))
                $erros[] = "?? necess??rio informar o n??mero do lote";
            if(empty($this->getvalorBaseVigente()))
                $erros[] = "?? necess??rio informar o recebimento base vigente";
            if(empty($this->getboniPropriedade()))
                $erros[] = "?? necess??rio informar a bonifica????o da propriedade";
            if(empty($this->getpontuacaoLote()))
                $erros[] = "?? necess??rio informar a pontua????o do lote";
            if(empty($this->getquiloBonificacao()))
                $erros[] = "?? necess??rio informar a bonifica????o por quilo";
            if(empty($this->getboniEmpresa()))
                $erros[] = "?? necess??rio informar a bonifica????o dada pela empresa";
            if(empty($this->getboniProdutor()))
                $erros[] = "?? necess??rio informar a bonifica????o do produtor";
            if(empty($this->getvalorSuino()))
                $erros[] = "?? necess??rio informar o valor recebido por su??no"; 
            return $erros;                                 
        }

    }
?>