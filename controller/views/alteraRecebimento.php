<main>

<div class="erro_cadastro">
  <?php
  if(isset($erros) && count($erros) !=0){
    echo "<ul>";
    foreach($erros as $e)
      echo "<li>$e</li>";
  }
  $numLote = isset($_POST['field_numLote']) ? $_POST['field_numLote'] : $recebimentos->getnumLote();
  $valorBaseVigente = isset($_POST['field_valorBaseVigente']) ? $_POST['field_valorBaseVigente'] : $recebimentos->getvalorBaseVigente();
  $boniPropriedade = isset($_POST['field_boniPropriedade']) ? $_POST['field_boniPropriedade'] : $recebimentos->getboniPropriedade();
  $pontuacaoLote = isset($_POST['field_pontuacaoLote']) ? $_POST['field_pontuacaoLote'] : $recebimentos->getpontuacaoLote();
  $quiloBonificacao = isset($_POST['field_quiloBonificacao']) ? $_POST['field_quiloBonificacao'] : $recebimentos->getquiloBonificacao();
  $boniEmpresa = isset($_POST['field_boniEmpresa']) ? $_POST['field_boniEmpresa'] : $recebimentos->getboniEmpresa();
  $boniProdutor = isset($_POST['field_boniProdutor']) ? $_POST['field_boniProdutor'] : $recebimentos->getboniProdutor();
  $valorSuino = isset($_POST['field_valorSuino']) ? $_POST['field_valorSuino'] : $recebimentos->getvalorSuino();
?>
</div>

<?php require_once("../includes/header.php");?>

<form action="" class="container-historicos" method="post" enctype="multipart/form-data">

  <h2>Editar Recebimentos do Lote</h2>
  
  <div class="div-metade">
    <label class="label-cadastra" for="id_numLote">Número do lote </label>
    <input type="number" name="field_numLote" id="id_numLote" value="<?=$numLote?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_valorBaseVigente">Valor Base Vigente </label>
    <input type="number" name="field_valorBaseVigente" id="id_valorBaseVigente" value="<?=$gtvalorBaseVigente?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_boniPropriedade">Bonificação da Propriedade </label>
    <input type="number" name="field_boniPropriedade" id="id_boniPropriedade" value="<?=$boniPropriedade?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_pontuacaoLote">Pontuação do Lote </label>
    <input type="number" step="0.01" name="field_pontuacaoLote" id="id_pontuacaoLotee" value="<?=$pontuacaoLote?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_quiloBonificacao">Bonificação por KG </label>
    <input type="number" name="field_quiloBonificacao" id="id_quiloBonificacao" value="<?=$quiloBonificacao?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_boniEmpresa">Bonificação da Empresa </label>
    <input type="number" name="field_boniEmpresa" id="id_boniEmpresa" value="<?=$boniEmpresa?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_boniProdutor">Bonificação do Produtor </label>
    <input type="number" name="field_boniProdutor" id="id_boniProdutor" value="<?=$boniProdutor?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_valorSuino">Valor por Suíno </label>
    <input type="number" name="field_valorSuino" id="id_valorSuino" value="<?=$valorSuino?>" required>
  </div>
  <button name="adiciona" class="button-form" type="submit">Salvar</button>
  
</form>