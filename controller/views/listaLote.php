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
    <h3>VER LOTE</h3>
    <div class="lista_lote">
        
        <button class="button-form-adicionar-lote" onclick="window.location.href='loteController.php?acao=adiciona'">Adicionar novo lote</button>

          <?php
          require_once "../controller/classes/LoteDAO.php";
          $obj = new LoteDAO();
          $lista = $obj->listar(); 
          if(count($lista) == 0){
              echo "Nenhum dado encontrado.";
          }else{
              foreach ($lista as $lote){
          ?>
             

          <div class="lote">
              <div class="label">
                  <div class="lote_descricao">
                      <strong>Número do lote: </strong> <?=$lote->getnumLote()?> <br>
                      <strong>Data de recebimento: </strong> <?=date('d/m/Y', strtotime("+0 days",strtotime($lote->getDtRecebimento())));?>
                      <strong>Data de entrega: </strong> <?=date('d/m/Y', strtotime("+0 days",strtotime($lote->getDtEntrega())));?>
                      <strong>Número de leitões recebidos: </strong> <?=$lote->getnumRecebido() ?> <br>
                      <strong>Número de leitões entregue: </strong>  <?=$lote->getnumEntregue() ?> <br>
                      <strong>Número de leitões mortos: </strong>  <?=$lote->getnumMorte() ?> <br>
                  </div>
                  <div class = "lote_button">
                      <button class="button-edit" onclick="window.location.href='loteController.php?acao=altera&numLote=<?=$lote->getnumLote() ?>'"><i class="fa fa-edit fa-1x"></i></button>
                      <button class="button-delete" onclick='verificarExcluir(<?=$lote->getnumLote()?>)'><i class="fa fa-trash-alt fa-1x"></i></button>
                  </div>
              </div>
          </div>
            
      <?php
          }
        }
      ?>

    </div>

    <?php require_once("../includes/footer.php");?>

    