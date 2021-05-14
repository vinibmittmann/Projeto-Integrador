<?php
    class Lote{

        private $numLote;
        private $dtRecebimento;
        private $dtEntrega;
        private $numRecebido;
        private $numEntregue;
        private $numMorte;

        public function getnumLote(){
            return $this->numLote;
        }

        public function setnumLote($numLote){
            $this->numLote = $numLote;
        }

        public function getdtRecebimento(){
            return $this->dtRecebimento;
        }

        public function setdtRecebimento($dtRecebimento){
            $this->dtRecebimento = $dtRecebimento;
        }

        public function getdtEntrega(){
            return $this->dtEntrega;
        }

        public function setdtEntrega($dtEntrega){
            $this->dtEntrega = $dtEntrega;
        }

        public function getnumRecebido(){
            return $this->numRecebido;
        }

        public function setnumRecebido($numRecebido){
            $this->numRecebido = $numRecebido;
        }     
        
        public function getnumEntregue(){
            return $this->numEntregue;
        }

        public function setnumEntregue($numEntregue){
            $this->numEntregue = $numEntregue;
        }  

        public function getnumMorte(){
            return $this->numMorte;
        }

        public function setnumMorte($numMorte){
            $this->numMorte = $numMorte;
        } 

        public function validate(){
            $erros = array();
            if(empty($this->getnumLote()))
                $erros[] = "É necessário informar o número do lote";
            if(empty($this->getdtRecebimento()))
                $erros[] = "É necessário informar a data de recebimento do lote";
            if(empty($this->getdtEntrega()))
                $erros[] = "É necessário informar a data de entrega do lote";
            if(empty($this->getnumRecebido()))
                $erros[] = "É necessário informar o número de leitões recebidos";
            if(empty($this->getnumEntregue()))
                $erros[] = "É necessário informar o número de leitões entregues";
            if(empty($this->getnumMorte()))
                $erros[] = "É necessário informar o número de leitões mortos";
            return $erros;                                 
        }

    }
?>