<?php
include_once "../controller/classes/RecebimentosDAO.php";
if(!isset($_GET['acao'])){
    $obj = new RecebimentosDAO();
    $lista = $obj->listar();
    include "views/listaRecebimentos.php";
}
else {    
	switch($_GET['acao']){

        case 'adiciona':
            if(!isset($_POST['adiciona'])){ 
                include "views/cadastraRecebimento.php";              
            }
            else{
                $obj = new Recebimentos();
                $obj->setnumLote($_POST['field_numLote']);
                $obj->setvalorBaseVigente($_POST['field_valorBaseVigente']);
                $obj->setboniPropriedade($_POST['field_boniPropriedade']);
                $obj->setpontuacaoLote($_POST['field_pontuacaoLote']);
                $obj->setquiloBonificacao($_POST['field_quiloBonificacao']);
                $obj->setboniEmpresa($_POST['field_boniEmpresa']);
                $obj->setboniProdutor($_POST['field_boniProdutor']);
                $obj->setvalorSuino($_POST['field_valorSuino']);
                $erros = $obj->validate();
                if(count($erros) != 0){ 
                    include "views/cadastraRecebimento.php";                       
                }
                else{
                    $bd = new RecebimentosDAO();
                    if($bd->inserir($obj))
                        header("Location: recebimentosController.php"); 
                }
            }
            break;
        
        case 'altera':
            if(!isset($_POST['altera'])){ 
                $obj = new RecebimentosDAO();
                $recebimentos = $obj->buscarAltera($_GET['codRecebimento']);
                include "views/alteraRecebimento.php";
            }
            else{ 
                $obj = new Recebimentos();
                $obj->setcodRecebimento($_POST['field_codRecebimento']);
                $obj->setnumLote($_POST['field_numLote']);
                $obj->setvalorBaseVigente($_POST['field_valorBaseVigente']);
                $obj->setboniPropriedade($_POST['field_boniPropriedade']);
                $obj->setpontuacaoLote($_POST['field_pontuacaoLote']);
                $obj->setquiloBonificacao($_POST['field_quiloBonificacao']);
                $obj->setboniEmpresa($_POST['field_boniEmpresa']);
                $obj->setboniProdutor($_POST['field_boniProdutor']);
                $obj->setvalorSuino($_POST['field_valorSuino']);
                $erros = $obj->validate();
                if(count($erros) != 0){
                    include "views/alteraRecebimento.php";                      
                }else{
                    $bd = new RecebimentosDAO();
                    if($bd->alterar($obj))
                        header("Location: recebimentosController.php");
                }
            }
            break;

        case 'exclui':
            $bd = new RecebimentosDAO();
            if($bd->excluir($_GET['codRecebimento']))
                header("Location: recebimentosController.php"); 
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>