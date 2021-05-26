<!DOCTYPE html>
<html lang="pt-br">

<?php
//if(isset($_POST['logar'])){
//    $nomeLogin = $_POST['nomeLogin'];
//    $senha = $_POST['senha'];
//
//    if($nomeLogin == 'vini'){  
//        if(password_verify($senha, 'dG9tYW5vY3U=')){ 
//            session_start();
//            $_SESSION['logado'] = true;
//            $_SESSION['inicio'] = date("d/m/Y h:i:s");
//            header("Location: /controller/usuarioController.php");
//        }
//        else{
//            $erro = "Senha incorreta";
//        }
//    }
//    else{ 
//        $erro = "Login incorreto";
//    }
//}
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="Vinícius Batirola Mittmann">
  <meta name="description" content="Sistema de controle para produção de suínos">
  <meta name="keywords" content="sistema, controle, produção, suínocultura, suíno">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/style.css" rel="stylesheet"/>
  <link href="../css/login.css" rel="stylesheet"./>
  <link href="../css/adicionar.css" rel="stylesheet"./>

  <title>LOGIN</title>
</head>

<div class="erro_cadastro">
<?php
  if(isset($erros) && count($erros) !=0){
    echo "<ul>";
    foreach($erros as $e)
      echo "<li>$e</li>";
  }
  $nomeLogin = isset($_POST['nomeLogin']) ? ($_POST['nomeLogin']) : "";
  $senha = isset($_POST['senha']) ? ($_POST['senha']) : "";
?>
</div>

<body>

  <br>
  <br>
  <br>
  <br>


  <form action="/controller/usuarioController.php?acao=logar" class="container-altera" method="post" enctype="multipart/form-data">
    <div class="div-inteira">
      <label class="label-cadastra" for="id_nomeLogin">Login</label>
      <input type="text" id="id_nomeLogin" name="nomeLogin" value="<?=$nomeLogin?>" required>
    </div>
    <div class="div-inteira">
      <label class="label-cadastra" for="id_senha">Senha</label>
      <input type="password" id="id_senha" name="senha" value="<?=$senha ?>" required>
    </div>
    <button class="button-form-voltar" type="button"><a href="index.php">Voltar</a></button>
    <button name="logar" class="button-form-altera" onclick= "validarLogin()" type="submit">Login</button>
  </form>

</body>
</html>