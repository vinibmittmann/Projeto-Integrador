<main>

<div class="erro_cadastro">
  <?php
  if(isset($erros) && count($erros) !=0){
    echo "<ul>";
    foreach($erros as $e)
      echo "<li>$e</li>";
  }
  $numLote = isset($_POST['field_numLote']) ? $_POST['field_numLote'] : $gastos->getnumLote();
  $gtVeterinario = isset($_POST['field_gtVeterinario']) ? $_POST['field_gtVeterinario'] : $gastos->getgtVeterinario();
  $gtMedicamento = isset($_POST['field_gtMedicamento']) ? $_POST['field_gtMedicamento'] : $gastos->getgtMedicamento();
  $descMortalidade = isset($_POST['field_descMortalidade']) ? $_POST['field_descMortalidade'] : $gastos->getdescMortalidade();
  $gtRacao = isset($_POST['field_gtRacao']) ? $_POST['field_gtRacao'] : $gastos->getgtRacao();
  $txFunrural = isset($_POST['field_txFunrural']) ? $_POST['field_txFunrural'] : $gastos->gettxFunrural();
  $manPropriedade = isset($_POST['field_manPropriedade']) ? $_POST['field_manPropriedade'] : $gastos->getmanPropriedade();
  $descAbate = isset($_POST['field_descAbate']) ? $_POST['field_descAbate'] : $gastos->getdescAbate();
?>
</div>

<?php require_once("../includes/header.php");?>

<form action="" class="container-historicos" method="post" enctype="multipart/form-data">

  <h2>Editar Gastos do Lote</h2>
  
  <div class="div-metade">
    <label class="label-cadastra" for="id_numLote">Número do lote </label>
    <input type="number" name="field_numLote" id="id_numLote" value="<?=$numLote?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_gtVeterinario">Gastos com Veterinário </label>
    <input type="number" name="field_gtVeterinario" id="id_gtVeterinario" value="<?=$gtVeterinario?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_gtMedicamento">Gastos com Medicamento </label>
    <input type="number" name="field_gtMedicamento" id="id_gtMedicamento" value="<?=$gtMedicamento?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_descMortalidade">Desconto da Mortalidade </label>
    <input type="number" step="0.01" name="field_descMortalidade" id="id_descMortalidade" value="<?=$descMortalidade?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_gtRacao">Gastos com Ração </label>
    <input type="number" name="field_gtRacao" id="id_gtRacao" value="<?=$gtRacao?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_txFunrural">Taxa Funrural </label>
    <input type="number" name="field_txFunrural" id="id_txFunrural" value="<?=$txFunrural?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_manPropriedade">Manutenção da Propriedade </label>
    <input type="number" name="field_manPropriedade" id="id_manPropriedade" value="<?=$manPropriedade?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_descAbate">Desconto de Abate </label>
    <input type="number" name="field_descAbate" id="id_descAbate" value="<?=$descAbate?>" required>
  </div>
  <button name="adiciona" class="button-form" type="submit">Salvar</button>
  
</form>