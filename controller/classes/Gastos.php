<?php
    class Gastos{

        private $codGasto;
        private $numLote;
        private $gtVeterinario;
        private $gtMedicamento;
        private $descMortalidade;
        private $gtRacao;
        private $txFunrural;
        private $manPropriedade;
        private $descAbate;

        public function getcodGasto(){
            return $this->codGasto;
        }

        public function setcodGasto($codGasto){
            $this->codGasto = $codGasto;
        }

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
                $erros[] = "?? necess??rio informar o n??mero do lote";
            if(empty($this->getgtVeterinario()))
                $erros[] = "?? necess??rio informar o gasto com veterin??rio";
            if(empty($this->getgtMedicamento()))
                $erros[] = "?? necess??rio informar o gasto com medicamentos";
            if(empty($this->getdescMortalidade()))
                $erros[] = "?? necess??rio informar o desconto com mortalidade";
            if(empty($this->getgtRacao()))
                $erros[] = "?? necess??rio informar o gasto com ra????o";
            if(empty($this->gettxFunrural()))
                $erros[] = "?? necess??rio informar o gasto com o funrural";
            if(empty($this->getmanPropriedade()))
                $erros[] = "?? necess??rio informar o gasto com a manute????o da propriedade";
            if(empty($this->getdescAbate()))
                $erros[] = "?? necess??rio informar o desconto de abate"; 
            return $erros;                                 
        }

    }
?>