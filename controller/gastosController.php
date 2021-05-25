<?php
include_once "../controller/classes/GastosDAO.php";
if(!isset($_GET['acao'])){
    $obj = new GastosDAO();
    $lista = $obj->listar();
    include "../controller/views/listaGasto.php";
}
else {    
	switch($_GET['acao']){

        case 'adiciona':
            if(!isset($_POST['adiciona'])){ 
                include "views/cadastraGasto.php";              
            }
            else{
                $obj = new Gastos();
                $obj->setnumLote($_POST['field_numLote']);
                $obj->setgtVeterinario($_POST['field_gtVeterinario']);
                $obj->setgtMedicamento($_POST['field_gtMedicamento']);
                $obj->setdescMortalidade($_POST['field_descMortalidade']);
                $obj->setgtRacao($_POST['field_gtRacao']);
                $obj->settxFunrural($_POST['field_txFunrural']);
                $obj->setmanPropriedade($_POST['field_manPropriedade']);
                $obj->setdescAbate($_POST['field_descAbate']);
                $erros = $obj->validate();
                if(count($erros) != 0){ 
                    include "views/cadastraGasto.php";                       
                }
                else{
                    $bd = new GastosDAO();
                    if($bd->inserir($obj))
                        header("Location: gastosController.php"); 
                }
            }
            break;
        
        case 'altera':
            if(!isset($_POST['altera'])){ 
                $obj = new GastosDAO();
                $gastos = $obj->alterar($_GET['codGastos']);
                include "views/alteraGasto.php";
            }
            else{ 
                $obj = new Gastos();
                $obj->setcodGasto($_POST['field_codGasto']);
                $obj->setnumLote($_POST['field_numLote']);
                $obj->setgtVeterinario($_POST['field_gtVeterinario']);
                $obj->setgtMedicamento($_POST['field_gtMedicamento']);
                $obj->setdescMortalidade($_POST['field_descMortalidade']);
                $obj->setgtRacao($_POST['field_gtRacao']);
                $obj->settxFunrural($_POST['field_txFunrural']);
                $obj->setmanPropriedade($_POST['field_manPropriedade']);
                $obj->setdescAbate($_POST['field_descAbate']);
                $erros = $obj->validate();
                if(count($erros) != 0){
                    include "views/alteraGasto.php";                      
                }
            }
            break;

        case 'exclui':
            $bd = new GastosDAO();
            if($bd->excluir($_GET['codGasto']))
                header("Location: gastosController.php"); 
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>