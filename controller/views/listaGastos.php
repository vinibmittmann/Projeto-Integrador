<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="../css/style.css" rel="stylesheet">
</head>

    <?php require_once("../../includes/header.php");?>
    <h3>VER GASTOS</h3>
    <div class="lista_lote">
        
        <button class="button-form-adicionar-lote" onclick="window.location.href='gastosController.php?acao=adiciona'">Ver gastos</button>

          <?php
          require_once "../classes/GastosDAO.php";
          $obj = new GastosDAO();
          $lista = $obj->listar(); 
          if(count($lista) == 0){
              echo "Nenhum dado encontrado.";
          }else{
              foreach ($lista as $gastos){
          ?>
             

          <div class="lote">
              <div class="label">
                  <div class="lote_descricao">
                      <strong>Número do lote: </strong> <?=$gastos->getnumLote()?> <br>
                      <strong>Gt veterinário: </strong> <?=$gastos->getgtVeterinario() ?> <br>
                      <strong>Gt medicamento: </strong> <?=$gastos->getgtMedicamento() ?> <br>
                      <strong>Desc mortalidade: </strong> <?=$gastos->getdescMortalidade() ?> <br>
                      <strong>Gt ração: </strong>  <?=$gastos->getgtRacao() ?> <br>
                      <strong>Tx funrural: </strong>  <?=$gastos->gettxFunrural() ?> <br>
                      <strong>Man propriedade: </strong> <?=$gastos->getmanPropriedade() ?> <br>
                      <strong>Desc abate: </strong> <?=$gastos->getdescAbate() ?> <br>
                  </div>
                  <div>
                      <button class="button-edit" onclick="window.location.href='gastosController.php?acao=altera&numLote=<?=$gastos->getnumLote() ?>'"><i class="fa fa-edit fa-1x"></i></button>
                      <button class="button-delete" onclick='verificarExcluir(<?=$gastos->getnumLote()?>)'><i class="fa fa-trash-alt fa-1x"></i></button>
                  </div>
              </div>
          </div>
            
      <?php
          }
        }
      ?>

    </div>

    <?php require_once("../../includes/footer.php");?>