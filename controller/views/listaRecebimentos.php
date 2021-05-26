<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="../css/style.css" rel="stylesheet">
</head>

    <?php require_once("../includes/header.php");?>
    <h3>VER RECEBIMENTOS</h3>
    <div class="lista_lote">
        
        <button class="button-form-adicionar-lote" onclick="window.location.href='recebimentosController.php?acao=adiciona'">Adicionar novos recebimentos</button>

          <?php
          require_once "../controller/classes/RecebimentosDAO.php";
          $obj = new RecebimentosDAO();
          $lista = $obj->listar(); 
          if(count($lista) == 0){
              echo "Nenhum dado encontrado.";
          }else{
              foreach ($lista as $recebimentos){
          ?>
             

          <div class="lote">
              <div class="label">
                  <div class="lote_descricao">
                      <strong>Número do lote: </strong> <?=$recebimentos->getnumLote()?> <br>
                      <strong>Valor base bigente: </strong> <?=$recebimentos->getvalorBaseVigente() ?> <br>
                      <strong>Bonif propriedade: </strong> <?=$recebimentos->getboniPropriedade() ?> <br>
                      <strong>Pont do lote: </strong> <?=$recebimentos->getpontuacaoLote() ?> <br>
                      <strong>KG bonif: </strong>  <?=$recebimentos->getquiloBonificacao() ?> <br>
                      <strong>Bonif empresa: </strong>  <?=$recebimentos->getboniEmpresa() ?> <br>
                      <strong>Bonif produtor: </strong> <?=$recebimentos->getboniProdutor() ?> <br>
                      <strong>Valor por suino: </strong> <?=$recebimentos->getvalorSuino() ?> <br>
                  </div>
                  <div class = "lote_button">
                      <button class="button-edit" onclick="window.location.href='recebimentosController.php?acao=altera&codRecebimento=<?=$recebimentos->getcodRecebimento() ?>'"><i class="fa fa-edit fa-1x"></i></button>
                      <button class="button-delete" onclick="window.location.href='recebimentosController.php?acao=exclui&codRecebimento=<?=$recebimentos->getcodRecebimento() ?>'"><i class="fa fa-trash-alt fa-1x"></i></button>
                  </div>
              </div>
          </div>
            
      <?php
          }
        }
      ?>

    </div>

    <?php require_once("../includes/footer.php");?>