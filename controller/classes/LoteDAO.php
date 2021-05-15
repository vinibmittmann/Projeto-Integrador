<?php
    require_once "Conexao.php";
    require_once "Lote.php";

    class LoteDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from lote order by numLote");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Lote");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscar($numLote){
            try{
                $query = $this->conexao->prepare("select * from lote where numLote=:c");
                $query->bindParam(":c", $numLote, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Lote");
                return $registros[0];
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }        

        public function inserir(Lote $lote){
            try{
                $query = $this->conexao->prepare("insert into lote values (:l, :d, :e, :r, :n, :m)");
                $query->bindValue(":l", $lote->getnumLote());
                $query->bindValue(":d", $lote->getdtRecebimento());
                $query->bindValue(":e", $lote->getdtEntrega());
                $query->bindValue(":r", $lote->getnumRecebido());
                $query->bindValue(":n", $lote->getnumEntregue());
                $query->bindValue(":m", $lote->getnumMorte());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function alterar(Lote $lote){
            try{
                $query = $this->conexao->prepare("update lote set dtRecebimento = :d, dtEntrega = :e, numRecebido = :r, numEntregue = :n, numMorte = :m where numLote = :l");
                $query->bindValue(":l", $lote->getnumLote());
                $query->bindValue(":d", $lote->getdtRecebimento());
                $query->bindValue(":e", $lote->getdtEntrega());
                $query->bindValue(":r", $lote->getnumRecebido());
                $query->bindValue(":n", $lote->getnumEntregue());
                $query->bindValue(":m", $lote->getnumMorte());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function excluir($numLote){
            try{
                $query = $this->conexao->prepare("delete from lote where numLote = :c");
                $query->bindValue(":c", $numLote);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

    }

?> 