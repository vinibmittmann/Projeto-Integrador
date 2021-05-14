<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="Vinícius Mittmann">
  <meta name="description" content="Sistema de controle administrativo para Produção de Suínos">
  <meta name="keywords" content="sistema, controle, administrativo, suínos">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/login.css">
  <title>Login</title>
</head>

<div class="erro_cadastro">
  <?php
  if(isset($erros) && count($erros) !=0){
      echo "<ul>";
      foreach($erros as $e)
          echo "<li>$e</li>";
      echo "</ul>";
  }

  $nomeLogin = isset($_POST['field_nomeLogin']) ? $_POST['field_nomeLogin'] : "";
  $senha = isset($_POST['field_senha']) ? $_POST['field_senha'] : "";
  ?>
</div>

<body>

  //<form  onsubmit="return validarLogin()">
                                            //
    <div class="container-login">
      <div>
        <label class="label-cadastra" for="id_nomeLogin">Login</label>
        <input type="text" id="id_nomeLogin" name="field_nomeLogin" value="" required>
      </div>
      <div>
        <label class="label-cadastra" for="id_senha">Senha</label>
        <input type="password" id="id_senha" name="field_senha" value="" required>
      </div>
      <button class="button-form" type="submit">Entrar</button>
      <div class="login-a"><a href="controller/usuarioController.php?acao=adiciona">Cadastre-se</a></div>
    </div>
  </form>

  <script src="/js/login.js"></script>

</body>

</html>