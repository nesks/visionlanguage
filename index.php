  <?php

  use VisaoJR\Arquivos\Model\Users;

  require_once 'Model/Users.php';

  $user = new Users();

  if (isset($_POST['submit'])) {
      $user->setEmail($_POST['email']);
      $user->setPassword($_POST['password']);
      $user->setdt_Nasc($_POST['data']);
      $user->setNome($_POST['nome']);
      $user->setdt_Nasc(date("Y-m-d",strtotime(str_replace('/','-',$_POST['data']))));
      $img=$_FILES['foto'];
      $imgNome=$img['name'];
      if(empty($imgNome)){
          $ft='icon.png';
      }else{
        $extensao = strtolower(substr($_FILES['foto']['name'], -4));
          $novo_nome = md5(time()).$extensao;
          $diretorio = 'upload/';
          move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome);
          $ft=$novo_nome;
      }
      $user->setFoto($ft);
      $user->insert();
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

      <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">


      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script src="js/vendor/modernizr-2.8.3.min.js"></script>
      <script src="js/jquery.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
      <link rel="stylesheet" href="css/font-awesome.min.css">

      <link rel="stylesheet" href="css/main.css">

      <!-- Botão BACK TO TOP -->
      <style>
          a[href="#top"]{
              padding:10px;
              position:fixed;
              top: 90%;
              right:50px;
              display:none;
              font-size: 30px;
              color: #ca3438;
          }
          a[href="#top"]:hover{
              text-decoration:none;
          }
      </style>

  </head>
  <body>

  <!-- MENU -->
      <nav class="navbar navbar-default" id="top">
          <div class="container-fluid">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Visao" style="margin-top: -20px;"></a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li><a href="#sobrenos">Sobre nós</a></li>
                  <li><a href="#servicos">Serviços</a></li>
                  <li><a href="#cadastro">Cadastro</a></li>
                  <li><a href="#contato">Contato</a></li>
                  <li><a href="login.php">Login</a></li>
              </ul>
          </div>
      </div>
  </nav>
  <!-- FIM MENU -->

  <!-- SLIDESHOW -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <div class="carousel-inner">
          <div class="item active">
              <img src="img/banner-1.jpg" alt="Banner 1">
          </div>

          <div class="item">
              <img src="img/banner-1.jpg" alt="Banner 2">
          </div>

      </div>

      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="fa fa-chevron-left" style="margin-top: 150%;"></span>
          <span class="sr-only"> < </span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="fa fa-chevron-right" style="margin-top: 150%;"></span>
          <span class="sr-only"> > </span>
      </a>
  </div>
  <!-- FIM SLIDESHOW -->

    <div class="container-fluid" align="center" id="sobrenos">
        <div class="row">
            <div class="col-md-4">
                <h1>Missão</h1>
                <p>Auxiliar e contribuir para o fortalecimento intelectual de cada indivíduo, tornando extremamente simples a sua comunicação com pessoas de todas as partes do mundo, através do ensino de idiomas por método próprio, original e inovador, capaz de fazer do aprendizado uma experiência única e prazerosa. </p>
            </div>
            <div class="col-md-8">
                <img src="img/missao.jpg" class="img-responsive" alt="missao">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row" id="servicos">
            <div class="col-md-6">
                 <img src="img/post.jpg" class="img-responsive" alt="Post">
            </div>
            <div class="col-md-6">
                <p><br/><br/>A Vision Language, sabe da necessidade de se aprender novos idiomas e, compreende que um dos maiores problemas enfrentados pelos alunos de prosseguir e/ou se dedicar nos cursos extracurriculares, é a falta de empenho e motivação. Além de que, estes enfrentam dificuldades em conciliar dinheiro, nota e tempo. Visando isso, proporcionamos a melhor ferramenta tecnológica, buscando estimular nossos estudantes, e diminuir, ou até mesmo solucionar seus problemas: um sistema web.</p>
                <h3>Nosso sistema conta com uma variedade de aplicações:</h3>
                <ul>
                    <li><h4>Painel de controle de notas;</h4></li>
                    <li><h4>Calendário acadêmico;</h4></li>
                    <li><h4>Dicionário atualizado;</h4></li>
                    <li><h4>Área com objetivos/metas;</h4></li>
                    <li><h4>Área de comunicação</h4></li>
                    <li><h4>Áreas com exercícios, provas e simulados selecionados por nossos professores.</h4></li>
                    <li><h4>E muito mais!</h4></li>
                </ul>
            </div>
        </div>
      </div>

        <div class="container-fluid" id="cadastro">    
            <div class="row">
                <div class="col-md-6" align="center" id="formulario">
                    <h2>Teste Nossa Plataforma</h2><br/>
                    <form action="index.php" method="post" enctype="multipart/form-data">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nome" size="40" name="nome">
                        </div>
                        <p>
                        
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Usuário" size="40" name="email">
                        </div>
                        <p>
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Senha" size="40" name="password">
                        </div>
                        <p>
                        <div class="input-group">
                        <input type="date" class="form-control" placeholder="Data de Nascimento" size="40" name="data">
                        </div>
                        <p>
                        <div class="input-group">
                          <h4>Enviei uma foto para o perfil:</h4>
                            <input type="file" name="foto">
                        </div>
                        <p><br/>
                        <div class="input-group">
                            <input type="submit" class="btn btn-success" name="submit" id="submit">
                        </div>
                    </form>
                    <br/><br/>
                </div>
                <div class="col-md-6" id="maps">
                <h2>Nossa Localização</h2>
                    <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3753.0981247703676!2d-43.17069888546314!3d-19.835800640508467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa507513d245fe3%3A0x86586b79387537f9!2sUFOP+-+ICEA!5e0!3m2!1spt-BR!2sbr!4v1502406097983"></iframe>
                    </div>
                </div>
            </div>
        </div>

    <div class="container-fluid"">
        <a href="#top" class="glyphicon glyphicon-chevron-up"></a>
        <div class="row" id="contato">
            <div class="col-md-5">
                <p><br/> <i class="fa fa-map-marker fa-2x"></i> 
                   Bloco A, 2º Piso, Sala A211</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp; Rua 36, Nº115, Bairro Loanda, João Monlevade, MG</p><br>

                <p><i class="fa fa-phone fa-2x"></i>
                   (31) 9 9196-6155</p><br>
                <p><i class="fa fa-send fa-2x"></i>
                   contato@visaojr.com.br</p><br>
            </div>

            <div class="col-md-4"></div>

            <div class="col-md-3">
              <br/>
                <a href="https://www.facebook.com/visaojrufop/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>&nbsp;&nbsp;
                <a href="https://www.instagram.com/visaojrufop/" target="_blank"><i
                      class="fa fa-instagram fa-2x" style="color: white;"></i></a>&nbsp;&nbsp;
                <a href="https://www.youtube.com/channel/UCdGF3UbUWEejpDYJZbCfeIQ" target="_blank"><i class="fa fa-youtube-play fa-2x" style="color: #fff;"></i></a>&nbsp;&nbsp;
                <a href="https://www.linkedin.com/company-beta/10651873/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
            </div>
        </div>
    </div>
    <div class="copy-section">
        <div class="container">
            <div class="copy-left"></div>

            <div class="copy-right">
                <a href="http://visaojr.com.br/site/" target="_blank"><img
                  style="height: 30px; width: 30px; margin-top: 5px;"
                  src="img/marcavisaobranca.png"
                  alt="www.visaojr.com.br"></a>
                </div>
                <div class="clearfix"></div>
            </div>
    </div>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script><script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
    $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $('a[href="#top"]').fadeIn();
    } else {
        $('a[href="#top"]').fadeOut();
    }
    });

    $('a[href="#top"]').click(function(){
    $('html, body').animate({scrollTop : 0},800);
        return false;
    });
    });
</script>
<script>
    $(document).ready(function(){
    $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $('a[href="#top"]').fadeIn();
    } else {
        $('a[href="#top"]').fadeOut();
    }
    });
    });
</script>
<script>
$(document).ready(function(){
$('a').on('click', function(event){
  if(this.hash != ""){
  event.preventDefault();
  var hash=this.hash;

  $('html,body').animate({
  scrollTop: $(hash).offset().top
  },800,function(){

  window.location.hash = hash;
  });
  }
  });
  });
</script>
</body>
</html>
