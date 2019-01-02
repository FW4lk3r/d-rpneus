<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style-frontend.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css3-animate-it-master/css/animations.css');?>" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.ico');?>" sizes="32x32">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  <?= $definicoes['titulo'];  ?> </title>
  </head>
  <body>
    <div class="grey">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
                  <a href="<?= base_url();?>"><img src="<?= base_url('assets/img/logo.png');?>" alt="logo" class="logo"/></a> 
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 icon pull-right">
            <div class="right">
              <span class="glyphicon glyphicon-earphone telefone"></span>
              <div class="ajuda">
                <div class="help">
                  <?= htmlspecialchars($definicoes['precisa_ajuda']);  ?>
                </div>
                <div class="n_tel">
                    <?= htmlspecialchars($definicoes['telemovel']);  ?>
                </div>
              </div>
            </div>
          </div>   
        </div>
      </div>
    </div>
    <nav class="navbar fixed-top navbar-inverse navigation sticky-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <!--<a class="navbar-brand" href="#">D&R PNEUS</a>-->
                <button class ="navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
              </div>
              
              <?php $url = "http://".$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
              <div class="collapse navbar-collapse navHeaderCollapse" id="centro">
              <ul class="nav navbar-nav menu">
                <li class="<?php echo base_url() == $url ? 'current' : '' ?>" id="changePaginaInicial"><a href="<?php echo base_url() == $url ? '#paginainicial' : base_url().'#paginainicial' ?>" onclick="changePaginaInicial();"><?= htmlspecialchars($definicoes['pagina_inicial']);  ?></a></li>
                <li id="changeServicos"><a href="<?php echo base_url() == $url ? '#servicos' : base_url().'#servicos' ?>" onclick="changeServicos();" class="scroll"><?= htmlspecialchars($definicoes['servico']);  ?></a></li>
                <!--<li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                          Pneus <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li>Pneus Carros</li>
                          <li>Pneus Motos</li>
                        </ul>
                      </li>-->
                <li id="changePneus"><a href="<?php echo base_url() == $url ? '#pneus' : base_url().'#pneus' ?>" class="palavra scroll" onclick="changePneus();"><?= htmlspecialchars($definicoes['pneu']);  ?></a></li>
                <li id="changeEmpresa"><a href="<?php echo base_url() == $url ? '#empresa' : base_url().'#empresa' ?>" class="palavra scroll" onclick="changeEmpresa();"><?= htmlspecialchars($definicoes['jante']);  ?></a></li>
                <li id="changeContactos"><a href="<?php echo base_url() == $url ? '#contactos' : base_url().'#contactos' ?>" onclick="changeContactos();" class="scroll"><?= htmlspecialchars($definicoes['contacto']);  ?></a></li>
              </ul>
              </div>
            </div>
          </nav>

