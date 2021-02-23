<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php $path = get_template_directory_uri(); ?>
    <link rel="stylesheet" href="<?=  $path;?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=  $path;?>/css/header.css">
    <link rel="stylesheet" href="<?=  $path;?>/css/index.css">
    <link rel="stylesheet" href="<?=  $path;?>/fontello/css/fac.css">    
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, user-scalable=no">
  </head>

<body>
  <header>

  <!-- Tirar todo este código -->
  
  <!-- <nav class="navbar navbar-default" style="background-color: #582425;">
  
  <div class="container-fluid">    
    <div class="navbar-header">
      <button id="botao-mobile" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true">Menu</span>
      </button>
      <a class="navbar-brand" href="<?php echo get_option('home'); ?>">
      <img id="icone-logo" src="<?php echo get_template_directory_uri() ?>/img/logo-icone.png" />
      </a>
    </div>

    Collect the nav links, forms, and other content for toggling 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav menu">
      <?php wp_nav_menu( array( 'menu' => 'Principal' ) ); ?>
          
      </ul>      
      
    </div> /.navbar-collapse 
  </div> /.container-fluid 
</nav>-->


<nav id="menu" class="navbar navbar-default" style="background-color: #582425;">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button id="botao" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>        
      </button>
      <a class="navbar-brand" href="<?php echo get_option('home'); ?>">
        <img id="icone-logo" src="<?php echo get_template_directory_uri() ?>/img/logo-icone.png" />
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php wp_nav_menu( array( 'menu' => 'Principal' ) ); ?>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-->
</nav>

</header> 

