<?php
include 'Includes/conecta.php';
?>
<html lang="pt-br">
    <head>
        <title>SGAUTO - Sistema de Gerenciamento para Auto Escola</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="Scripts/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="Scripts/css/style.css">
    </head>
    <?php
include './Controllers/logica_usuario.php';

if(isset($_SESSION["success"])){?>
	<p class="alert-success"><?=$_SESSION["success"]?></p>
<?php
	unset($_SESSION["success"]);
}

if(isset($_SESSION["danger"])){?>
	<p class="alert-danger"><?=$_SESSION["danger"]?> </p>
<?php
	unset($_SESSION["danger"]);
}
?>
    
<!--<body class="login">
  <fieldset id="acesso">
        <h1>Login</h1>
    <br/><br/>
    <form action="Models/login.php" method="post">       
            <table border="0" class="table">
                <tr><td><font color="black">Login</font></td><td><input type="text" name="login" class="form-control" id="form_login" placeholder="Seu nome de usuário"></td></tr>
                <tr><td><font color="black">Senha</font></td><td><input type="password" name="senha" class="form-control" id="form_login" placeholder="Sua senha de acesso"></td></tr>
                <tr><td colspan="2"><div align="right"><button class="btn btn-primary">Logar</button></div></td></tr>
            </table>
        </fieldset>    
    </form>
    </body>
</html>-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Corlate</title>
  
  <!-- core CSS -->
    <link href="Scripts/css/bootstrap.min.css" rel="stylesheet">
    <link href="Scripts/css/font-awesome.min.css" rel="stylesheet">
    <link href="Scripts/css/animate.min.css" rel="stylesheet">
    <link href="Scripts/css/prettyPhoto.css" rel="stylesheet">
    <link href="Scripts/css/main.css" rel="stylesheet">
    <link href="Scripts/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="Scripts/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="Scripts/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="Scripts/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="Scripts/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="Scripts/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

  <header id="header">
    <nav class="navbar navbar-inverse" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
             <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="Scripts/images/logo.png" alt="logo" class="logo"></a>
        </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
         
            <form class="form-inline" role="form">
              <div class="form-group">
                <label for="text">Nome de usuário:</label>
                <input type="text" name="login" class="form-control" id="form_login">
              </div>
              <div class="form-group">
                <label for="pwd">Senha:</label>
                <input type="password" name="senha" class="form-control" id="form_login">
              </div>
              <button type="submit" class="btn btn-primary">Entrar</button>
            </form>

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    
    </header><!--/header-->

    <section id="main-slider" class="no-margin">
      <div class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="#main-slider" data-slide-to="0" class="active"></li>
          <li data-target="#main-slider" data-slide-to="1"></li>
        </ol>
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(Scripts/images/slider/bg1.jpg)">
          <div class="container">
            <div class="row slide-margin">
              <div class="col-sm-6">
                <div class="carousel-content">
                  <h1 class="animation animated-item-1">SG Auto</h1>
                  <h2 class="animation animated-item-2">O novo sistema que veio para facilitar sua vida</h2>
                </div>
              </div>
              <div class="col-sm-6 hidden-xs animation animated-item-4">
                <div class="slider-img">
                  <img src="Scripts/images/slider/img4.png" class="img-responsive">
                </div>
              </div>
            </div>
          </div>
        </div><!--/.item-->
        <div class="item" style="background-image: url(Scripts/images/slider/bg2.jpg)">
          <div class="container">
            <div class="row slide-margin">
              <div class="col-sm-6">
                <div class="carousel-content">
                  <h1 class="animation animated-item-1">Textinho aqui</h1>
                  <h2 class="animation animated-item-2">Textinho aqui...</h2>
                  <a class="btn-slide animation animated-item-3" href="#link">Saiba mais</a>
                </div>
              </div>
              <div class="col-sm-6 hidden-xs animation animated-item-4">
                <div class="slider-img">
                  <img src="Scripts/images/slider/img5.png" class="img-responsive">
                </div>
              </div>
            </div>
          </div>
        </div><!--/.item-->
      </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
  </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <a name="link"></a>
                <h2>Sobre o SG Auto</h2>
                <p class="lead">O <b>Sistema de Gerencimento para Auto-Escolas</b> 
                 foi feito para facilitar ... <ADICIONAR ALGUMAS LINHAS SOBRE O SISTEMA AQUI> </p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Fácil de usar</h2>
                            <h3>Descrição nesse linha</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Acessível</h2>
                            <h3>O SG Auto pode ser utilizado em desktops, tablets ou em seu smartphone</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cogs"></i>
                            <h2>Alguma outra coisa aqui</h2>
                            <h3>Descrição nesse linha</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->


    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Nossos parceiros</h2>
                <p class="lead"></p>
            </div>    

            <div class="partners">
                <ul><!-- VOU EDITAR AS IMAGENS E COLOCAR AQUI
                    <li> <a href="#"><img class="img-responsive wow fadeInDown partner" data-wow-duration="1000ms" data-wow-delay="300ms" src="Scripts/images/partners/partner1.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="Scripts/images/partners/partner2.jpg"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="Scripts/images/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="Scripts/images/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="Scripts/images/partners/partner5.png"></a></li>
             -->   </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 SG AUTO - Todos os Direitos Reservados 
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <!--REDES SOCIAIS AKI-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="Scripts/javaScript/jquery.js"></script>
    <script src="Scripts/javaScript/bootstrap.min.js"></script>
    <script src="Scripts/javaScript/jquery.prettyPhoto.js"></script>
    <script src="Scripts/javaScript/jquery.isotope.min.js"></script>
    <script src="Scripts/javaScript/main.js"></script>
    <script src="Scripts/javaScript/wow.min.js"></script>
</body>
</html>




<?php
require 'Includes/rodape.php';
?>
