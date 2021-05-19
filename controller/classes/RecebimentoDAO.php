<?php
    require_once "Conexao.php";
    require_once "Recebimento.php";

    class RecebimentoDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from recebimento order by numLote");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Recebimento");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscar($numLote){
            try{
                $query = $this->conexao->prepare("select * from recebimento where numLote=:c");
                $query->bindParam(":c", $numLote, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Recebimento");
                return $registros[0];
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }        

        public function inserir(Recebimento $recebimento){
            try{
                $query = $this->conexao->prepare("insert into recebimento values (:l, :vb, :p, :pl, :q, :e, :bp, :s)");
                $query->bindValue(":l", $recebimento->getnumLote());
                $query->bindValue(":vb", $recebimento->getvalorBaseVigente());
                $query->bindValue(":p", $recebimento->getboniPropriedade());
                $query->bindValue(":pl", $recebimento->getpontuacaoLote());
                $query->bindValue(":q", $recebimento->getquiloBonificacao());
                $query->bindValue(":e", $recebimento->getboniEmpresa());
                $query->bindValue(":bp", $recebimento->getboniProdutor());
                $query->bindValue(":s", $recebimento->getvalorSuino());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function alterar(Recebimento $recebimento){
            try{
                $query = $this->conexao->prepare("update recebimento set valorBaseVigente = :vb, boniPropriedade = :p, pontuacaoLote = :pl, quiloBonificacao = :q, boniEmpresa = :e, boniProdutor = :bp, valorSuino = :s  where numLote = :l");
                $query->bindValue(":l", $recebimento->getnumLote());
                $query->bindValue(":vb", $recebimento->getvalorBaseVigente());
                $query->bindValue(":p", $recebimento->getboniPropriedade());
                $query->bindValue(":pl", $recebimento->getpontuacaoLote());
                $query->bindValue(":q", $recebimento->getquiloBonificacao());
                $query->bindValue(":e", $recebimento->getboniEmpresa());
                $query->bindValue(":bp", $recebimento->getboniProdutor());
                $query->bindValue(":s", $recebimento->getvalorSuino());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function excluir($numLote){
            try{
                $query = $this->conexao->prepare("delete from recebimento where numLote = :l");
                $query->bindValue(":c", $numLote);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

    }

?> 