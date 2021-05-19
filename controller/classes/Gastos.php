<?php
    class Gastos{

        private $numLote;
        private $gtVeterinario;
        private $gtMedicamento;
        private $descMortalidade;
        private $gtRacao;
        private $txFunrural;
        private $manPropriedade;
        private $descAbate;


        public function getnumLote(){
            return $this->numLote;
        }

        public function setnumLote($numLote){
            $this->numLote = $numLote;
        }

        public function getgtVeterinario(){
            return $this->gtVeterinario;
        }

        public function setgtVeterinario($gtVeterinario){
            $this->gtVeterinario = $gtVeterinario;
        }

        public function getgtMedicamento(){
            return $this->gtMedicamento;
        }

        public function setgtMedicamento($gtMedicamento){
            $this->gtMedicamento = $gtMedicamento;
        }

        public function getdescMortalidade(){
            return $this->descMortalidade;
        }

        public function setdescMortalidade($descMortalidade){
            $this->descMortalidade = $descMortalidade;
        }

        public function getDataMorte(){
            return $this->dataMorte;
        }

        public function setDataMorte($dataMorte){
            $this->dataMorte = $dataMorte;
        }

        public function getMotivoMorte(){
            return $this->motivoMorte;
        }

        public function setMotivoMorte($motivoMorte){
            $this->motivoMorte = $motivoMorte;
        }     
        
        public function getgtRacao(){
            return $this->gtRacao;
        }

        public function setgtRacao($gtRacao){
            $this->gtRacao = $gtRacao;
        }  

        public function gettxFunrural(){
            return $this->txFunrural;
        }

        public function settxFunrural($txFunrural){
            $this->txFunrural = $txFunrural;
        } 

        public function getmanPropriedade(){
            return $this->manPropriedade;
        }

        public function setmanPropriedade($manPropriedade){
            $this->manPropriedade = $manPropriedade;
        }

        public function getdescAbate(){
            return $this->descAbate;
        }

        public function setdescAbate($descAbate){
            $this->descAbate = $descAbate;
        }

        public function validate(){
            $erros = array();
            if(empty($this->getnumLote()))
                $erros[] = "É necessário informar o número do lote";
            if(empty($this->getgtVeterinario()))
                $erros[] = "É necessário informar o gasto com veterinário";
            if(empty($this->getgtMedicamento()))
                $erros[] = "É necessário informar o gasto com medicamentos";
            if(empty($this->getdescMortalidade()))
                $erros[] = "É necessário informar o desconto com mortalidade";
            if(empty($this->getgtRacao()))
                $erros[] = "É necessário informar o gasto com ração";
            if(empty($this->gettxFunrural()))
                $erros[] = "É necessário informar o gasto com o funrural";
            if(empty($this->getmanPropriedade()))
                $erros[] = "É necessário informar o gasto com a manuteção da propriedade";
            if(empty($this->getdescAbate()))
                $erros[] = "É necessário informar o desconto de abate"; 
            return $erros;                                 
        }

    }
?>