<?php
    require_once "Conexao.php";
    require_once "Gasto.php";

    class GastoDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from gasto order by numLote");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Gasto");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscar($numLote){
            try{
                $query = $this->conexao->prepare("select * from gasto where numLote=:c");
                $query->bindParam(":c", $numLote, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Gasto");
                return $registros[0];
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }        

        public function inserir(Gasto $gasto){
            try{
                $query = $this->conexao->prepare("insert into gasto values (:l, :v, :m, :d, :r, :tx, :p, :a)");
                $query->bindValue(":l", $gasto->getnumLote());
                $query->bindValue(":v", $gasto->getgtVeterinario());
                $query->bindValue(":m", $gasto->getgtMedicamento());
                $query->bindValue(":d", $gasto->getdescMortalidade());
                $query->bindValue(":r", $gasto->getgtRacao());
                $query->bindValue(":tx", $gasto->gettxFunrural());
                $query->bindValue(":p", $gasto->getmanPropriedade());
                $query->bindValue(":a", $gasto->getdescAbate());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function alterar(Gasto $gasto){
            try{
                $query = $this->conexao->prepare("update gasto set gtVeterinario = :v, gtMedicamento = :m, descMortalidade = :d, gtRacao = :r, txFunrural = :tx, manPropriedade = :p, descAbate = :a where numLote = :l");
                $query->bindValue(":l", $gasto->getnumLote());
                $query->bindValue(":v", $gasto->getgtVeterinario());
                $query->bindValue(":m", $gasto->getgtMedicamento());
                $query->bindValue(":d", $gasto->getdescMortalidade());
                $query->bindValue(":r", $gasto->getgtRacao());
                $query->bindValue(":tx", $gasto->gettxFunrural());
                $query->bindValue(":p", $gasto->getmanPropriedade());
                $query->bindValue(":a", $gasto->getdescAbate());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function excluir($numLote){
            try{
                $query = $this->conexao->prepare("delete from gasto where numLote = :l");
                $query->bindValue(":c", $numLote);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

    }

?> 