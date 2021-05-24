<?php
    require_once "Conexao.php";
    require_once "Gastos.php";

    class GastosDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from gastos order by codGasto");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Gastos");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscar($codGasto){
            try{
                $query = $this->conexao->prepare("select * from gastos where codGasto=:c");
                $query->bindParam(":c", $codGasto, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Gastos");
                return $registros[0];
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }        

        public function inserir(Gastos $gastos){
            try{
                $query = $this->conexao->prepare("insert into gastos values (NULL, :l, :v, :m, :d, :r, :tx, :p, :a)");
                $query->bindValue(":l", $gastos->getnumLote());
                $query->bindValue(":v", $gastos->getgtVeterinario());
                $query->bindValue(":m", $gastos->getgtMedicamento());
                $query->bindValue(":d", $gastos->getdescMortalidade());
                $query->bindValue(":r", $gastos->getgtRacao());
                $query->bindValue(":tx", $gastos->gettxFunrural());
                $query->bindValue(":p", $gastos->getmanPropriedade());
                $query->bindValue(":a", $gastos->getdescAbate());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function alterar(Gastos $gastos){
            try{
                $query = $this->conexao->prepare("update gastos set numLote = :l, gtVeterinario = :v, gtMedicamento = :m, descMortalidade = :d, gtRacao = :r, txFunrural = :tx, manPropriedade = :p, descAbate = :a where codGasto = :c");
                $query->bindValue(":c", $gastos->getcodGasto());
                $query->bindValue(":l", $gastos->getnumLote());
                $query->bindValue(":v", $gastos->getgtVeterinario());
                $query->bindValue(":m", $gastos->getgtMedicamento());
                $query->bindValue(":d", $gastos->getdescMortalidade());
                $query->bindValue(":r", $gastos->getgtRacao());
                $query->bindValue(":tx", $gastos->gettxFunrural());
                $query->bindValue(":p", $gastos->getmanPropriedade());
                $query->bindValue(":a", $gastos->getdescAbate());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function excluir($numLote){
            try{
                $query = $this->conexao->prepare("delete from gastos where numLote = :l");
                $query->bindValue(":l", $numLote);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

    }

?> 