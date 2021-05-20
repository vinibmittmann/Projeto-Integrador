<?php
    require_once "Conexao.php";
    require_once "Recebimentos.php";

    class RecebimentosDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from recebimentos order by numLote");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Recebimentos");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscar($numLote){
            try{
                $query = $this->conexao->prepare("select * from recebimentos where numLote=:l");
                $query->bindParam(":l", $numLote, PDO::PARAM_INT);
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Recebimentos");
                return $registros[0];
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }        

        public function inserir(Recebimentos $recebimentos){
            try{
                $query = $this->conexao->prepare("insert into recebimentos values (:l, :vb, :p, :pl, :q, :e, :bp, :s)");
                $query->bindValue(":l", $recebimentos->getnumLote());
                $query->bindValue(":vb", $recebimentos->getvalorBaseVigente());
                $query->bindValue(":p", $recebimentos->getboniPropriedade());
                $query->bindValue(":pl", $recebimentos->getpontuacaoLote());
                $query->bindValue(":q", $recebimentos->getquiloBonificacao());
                $query->bindValue(":e", $recebimentos->getboniEmpresa());
                $query->bindValue(":bp", $recebimentos->getboniProdutor());
                $query->bindValue(":s", $recebimentos->getvalorSuino());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function alterar(Recebimentos $recebimentos){
            try{
                $query = $this->conexao->prepare("update recebimentos set valorBaseVigente = :vb, boniPropriedade = :p, pontuacaoLote = :pl, quiloBonificacao = :q, boniEmpresa = :e, boniProdutor = :bp, valorSuino = :s  where numLote = :l");
                $query->bindValue(":l", $recebimentos->getnumLote());
                $query->bindValue(":vb", $recebimentos->getvalorBaseVigente());
                $query->bindValue(":p", $recebimentos->getboniPropriedade());
                $query->bindValue(":pl", $recebimentos->getpontuacaoLote());
                $query->bindValue(":q", $recebimentos->getquiloBonificacao());
                $query->bindValue(":e", $recebimentos->getboniEmpresa());
                $query->bindValue(":bp", $recebimentos->getboniProdutor());
                $query->bindValue(":s", $recebimentos->getvalorSuino());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function excluir($numLote){
            try{
                $query = $this->conexao->prepare("delete from recebimentos where numLote = :l");
                $query->bindValue(":l", $numLote);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

    }

?> 