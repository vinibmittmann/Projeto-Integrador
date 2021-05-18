<?php
include_once "../controller/classes/LoteDAO.php";
if(!isset($_GET['acao'])){
    $obj = new LoteDAO();
    $lista = $obj->listar();
    include "views/cadastraLote.php";
}
else {    
	switch($_GET['acao']){

        case 'adiciona':
            if(!isset($_POST['adiciona'])){ 
                include "views/cadastraLote.php";              
            }
            else{
                $obj = new Lote();
                $obj->setnumLote($_POST['field_numLote']);
                $obj->setdtRecebimento($_POST['field_dtRecebimento']);
                $obj->setdtEntrega($_POST['field_dtEntrega']);
                $obj->setnumRecebido($_POST['field_numRecebido']);
                $obj->setnumEntregue($_POST['field_numEntregue']);
                $obj->setnumMorte($_POST['field_numMorte']);
                $erros = $obj->validate();
                if(count($erros) != 0){ 
                    include "views/cadastraLote.php";                       
                }
                else{
                    $bd = new LoteDAO();
                    if($bd->inserir($obj))
                        header("Location: loteController.php"); 
                }
            }
            break;
        
        case 'altera':
            if(!isset($_POST['altera'])){ 
                $obj = new LoteDAO();
                $lote = $obj->buscar($_GET['numLote']);
                include "views/alteraLote.php";
            }
            else{ 
                $obj = new Lote();
                $obj->setnumLote($_POST['field_numLote']);
                $obj->setdtRecebimento($_POST['field_dtRecebimento']);
                $obj->setdtEntrega($_POST['field_dtEntrega']);
                $obj->setnumRecebido($_POST['field_numRecebido']);
                $obj->setnumEntregue($_POST['field_numEntregue']);
                $obj->setnumMorte($_POST['field_numMorte']);
                $erros = $obj->validate();
                if(count($erros) != 0){
                    include "views/alteraLote.php";                      
                }
            }
            break;

        case 'exclui':
            $bd = new LoteDAO();
            if($bd->excluir($_GET['numLote']))
                header("Location: loteController.php"); 
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>