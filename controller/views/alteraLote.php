<main>

<div class="erro_cadastro">
  <?php
  if(isset($erros) && count($erros) !=0){
    echo "<ul>";
    foreach($erros as $e)
      echo "<li>$e</li>";
  }
  $numLote = isset($_POST['field_numLote']) ? $_POST['field_numLote'] : $lote->getnumLote();
  $dtRecebimento = isset($_POST['field_dtRecebimento']) ? $_POST['field_dtRecebimento'] : $lote->getdtRecebimento();
  $dtEntrega = isset($_POST['field_dtEntrega']) ? $_POST['field_dtEntrega'] : $lote->getdtEntrega();
  $numRecebido = isset($_POST['field_numRecebido']) ? $_POST['field_numRecebido'] : $lote->getnumRecebido();
  $numEntregue = isset($_POST['field_numEntregue']) ? $_POST['field_numEntregue'] : $lote->getnumEntregue();
  $numMorte = isset($_POST['field_numMorte']) ? $_POST['field_numMorte'] : $lote->getnumMorte();
?>
</div>

<?php require_once("../includes/header.php");?>
<input type="hidden" name="field_numLote" value="<?=$numLote ?>">

<form action="" class="container-alterar" method="post" enctype="multipart/form-data">

  <h2>Editar Lote</h2>
  
  <div class="div-metade">
    <label class="label-cadastra" for="id_numLote">Número do lote </label>
    <input type="number" name="field_numLote" id="id_numLote" value="<?=$numLote?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_dtRecebimento">Data de Recebimento </label>
    <input type="date" name="field_dtRecebimento" maxlength="100" id="id_dtRecebimento" value="<?=$dtRecebimento?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_dtEntrega">Data de Entrega </label>
    <input type="date" name="field_dtEntrega" maxlength="100" id="id_dtEntrega" value="<?=$dtEntrega?>" required>
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_numRecebido">Núm de leitões recebidos </label>
    <input type="number" step="0.01" name="field_numRecebido" id="id_numRecebido" value="<?=$numRecebido?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_numEntregue">Núm de leitões entregues </label>
    <input type="number" name="field_numEntregue" id="id_numEntregue" value="<?=$numEntregue?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_numMorte">Núm de leitões mortos </label>
    <input type="number" name="field_numMorte" id="id_numMorte" value="<?=$numMorte?>" required>
  </div>
  <button name="altera" class="button-form" type="submit">Alterar</button>
  
</form>


