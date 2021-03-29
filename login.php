<?php
use VisaoJR\Arquivos\Model\Users;

require_once 'Model/Users.php';

$user = new Users();

if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = sha1($_POST['password']);
  $user->setEmail($email);
  $usuario = $user->view();
  if(is_object($usuario)){
  if($usuario->password == $password){
    ?><div class="alert alert" role="alert" id="alertaVerde">
  Login efetuado com sucesso.
  <?php 
      session_start();
   $_SESSION['usuario'] = $usuario;
        header('Location:pos-login.php');
   ?>
</div><?php
  } else {
   ?><div class="alert alert-danger" role="alert" id="alertaVermelho">
  ! Corrija a senha.
</div><?php
  }
}else{
 ?><div class="alert alert-danger" role="alert" id="alertaVermelho">
 ! Corrija o endereço de email.
</div><?php
  }
}
?>

<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vision Language</title>
      <meta name="description" content="Conheça uma das melhores escolas de idiomas do país.">
  <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

<style>
    #alertaVerde{
      font-size: 30px;
      background-color: #ccffc1;
              color: #333333;
    }
    #alertaVermelho{
       font-size: 30px;
              color: #333333;
              
    }


</style>


</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Visao" style="margin-top: -20px;"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
  <div class="row">
    <center><h1>Entre em sua conta</h1></center>
    <div class="col-md-6 col-md-offset-4">
      <form action="login.php" method="post">
        <div class="input-group">
          <label>E-mail</label>
          <input type="email" class="form-control" placeholder="joao@gmail.com" size="40" name="email" required>
        </div>
        <p>
          <div class="input-group">
            <label>Senha</label>
            <input type="password" class="form-control" placeholder="********" size="40" name="password" required>
          </div>
          <p>
            <div class="input-group">
              <input type="submit" class="btn btn-success" value="Entrar" name="submit" id="submit">
            </div>
          </form>
        </div>
      </div>
    </div>

<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>

<!-- Latest compiled and minified JavaScript -->
<script src="js/vendor/modernizr-2.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function (b, o, i, l, e, r) {
    b.GoogleAnalyticsObject = l;
    b[l] || (b[l] =
    function () {
      (b[l].q = b[l].q || []).push(arguments)
    });
      b[l].l = +new Date;
      e = o.createElement(i);
      r = o.getElementsByTagName(i)[0];
      e.src = 'https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
      ga('create', 'UA-XXXXX-X', 'auto');
      ga('send', 'pageview');
</script>
</body>
</html>