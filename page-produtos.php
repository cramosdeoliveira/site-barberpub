<?php
/*
  template name: Barbearia
*/
  get_header();
  $produtos = get_template_directory_uri();
  ?>
    
<!-- Modal -->
<div class="modais-gerais">
  <?php
  $args = array( 'post_type' => 'produtos');
  $loop = new WP_Query( $args );
  if ( $loop->have_posts()) {
    while( $loop->have_posts()){
      $loop->the_post();
    }

  }
  ?>
  <div class="modal fade" id="exampleModal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2 class="modal-title" id="produto-titulo"><?php echo get_the_title(178) ?></h2>
        </div>
        <div class="modal-body">
          <img style="height: 60%;width: 100%;" src="<?php echo get_template_directory_uri() ?>/img/sabonete-barba-forte.jpg">
        </div>
        <div class="modal-footer">
          <h3>Descrição</h3>
          <p><?php echo get_post_field('post_content', 178) ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2 class="modal-title" id="produto-titulo"><?php echo get_the_title(198) ?></h2>
        </div>
        <div class="modal-body">
          <img style="height: 60%;width: 100%;" src="<?php echo get_template_directory_uri() ?>/img/oleo-danger-barba-forte.jpg">
        </div>
        <div class="modal-footer">
          <h3>Descrição</h3>
          <p><?php echo get_post_field('post_content', 198) ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2 class="modal-title" id="produto-titulo"><?php echo get_the_title() ?></h2>
        </div>
        <div class="modal-body">
          <img style="height: 60%;width: 100%;" src="<?php echo get_template_directory_uri(199) ?>/img/oleo-barba-forte-lumberjack-barba-e-cabelo-30ml.jpg">
        </div>
        <div class="modal-footer">
          <h3>Descrição</h3>
          <p><?php echo get_post_field('post_content', 199) ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2 class="modal-title" id="produto-titulo"><?php echo get_the_title() ?></h2>
        </div>
        <div class="modal-body">
          <img style="height: 60%;width: 100%;" src="<?php echo get_template_directory_uri(200) ?>/img/pomada-barba-forte.jpg">
        </div>
        <div class="modal-footer">
          <h3>Descrição</h3>
          <p><?php echo get_post_field('post_content', 200) ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal-5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2 class="modal-title" id="produto-titulo"><?php echo get_the_title() ?></h2>
        </div>
        <div class="modal-body">
          <img style="height: 60%;width: 100%;" src="<?php echo get_template_directory_uri(201) ?>/img/balsamo-hidratante-danger-barba-forte.jpg">
        </div>
        <div class="modal-footer">
          <h3>Descrição</h3>
          <p><?php echo get_post_field('post_content', 201) ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal-6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2 class="modal-title" id="produto-titulo"><?php echo get_the_title() ?></h2>
        </div>
        <div class="modal-body">
          <img style="height: 60%;width: 100%;" src="<?php echo get_template_directory_uri(202) ?>/img/tattoo-restorer-barba-forte.jpg">
        </div>
        <div class="modal-footer">
          <h3>Descrição</h3>
          <p><?php echo get_post_field('post_content', 202) ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal-7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2 class="modal-title" id="produto-titulo"><?php echo get_the_title() ?></h2>
        </div>
        <div class="modal-body">
          <img style="height: 60%;width: 100%;" src="<?php echo get_template_directory_uri(203) ?>/img/pomada-barba-forte-classic-pomade-lumberjack-120g.jpg">
        </div>
        <div class="modal-footer">
          <h3>Descrição</h3>
          <p><?php echo get_post_field('post_content', 203) ?></p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="exampleModal-8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2 class="modal-title" id="produto-titulo"><?php echo get_the_title() ?></h2>
        </div>
        <div class="modal-body">
          <img style="height: 60%;width: 100%;" src="<?php echo get_template_directory_uri(204) ?>/img/gel-de-barbear-barba-forte.jpg">
        </div>
        <div class="modal-footer">
          <h3>Descrição</h3>
          <p><?php echo get_post_field('post_content', 204) ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container" id="secao-produtos">
  <h1>Produtos</h1>
  <div class="barra-sublinhado"></div>

  <div class="row produtos">
    <div class="col-xs-12 col-sm-4 col-md-3 col-xl-3 col-lg-3 product text-center">
      <a class="img-thumbnail" data-toggle="modal" style="text-decoration: none;margin-bottom:20px;">
        <div class="product-img img-thumbnail" data-toggle="modal" data-target="#exampleModal-1">
          <img style="height: 100%;width: 100%;" src="<?php echo get_template_directory_uri() ?>/img/sabonete-barba-forte.jpg">
          <div style="margin-top:10px;" class="thumbnail-sem-borda text-center tamanho-fixo-texto"><?php echo get_the_title(178) ?></div>
        </div>
      </a>
    </div>

    <div class="col-xs-12 col-sm-4 col-md-3 col-xl-3 col-lg-3 product text-center">
        <a class="img-thumbnail" data-toggle="modal" style="text-decoration: none;margin-bottom:20px;">
            <div class="product-img img-thumbnail" data-toggle="modal" data-target="#exampleModal-2">
              <img style="height: 100%;width: 100%;" src="<?php echo get_template_directory_uri() ?>/img/oleo-danger-barba-forte.jpg">
              <div style="margin-top:10px;" class="thumbnail-sem-borda text-center tamanho-fixo-texto"><?php echo get_the_title(198) ?></div>
            </div>
        </a>
    </div>

    <div class="col-xs-12 col-sm-4 col-md-3 col-xl-3 col-lg-3 product text-center">
        <a class="img-thumbnail" data-toggle="modal" style="text-decoration: none;margin-bottom:20px;">
            <div class="product-img img-thumbnail" data-toggle="modal" data-target="#exampleModal-3">
              <img style="height: 100%;width: 100%;" src="<?php echo get_template_directory_uri() ?>/img/oleo-barba-forte-lumberjack-barba-e-cabelo-30ml.jpg">
              <div style="margin-top:10px;" class="thumbnail-sem-borda text-center tamanho-fixo-texto"><?php echo get_the_title(199) ?></div>
            </div>
        </a>
    </div>

    <div class="col-xs-12 col-sm-4 col-md-3 col-xl-3 col-lg-3 product text-center">
        <a class="img-thumbnail" data-toggle="modal" style="text-decoration: none;margin-bottom:20px;">
            <div class="product-img img-thumbnail" data-toggle="modal" data-target="#exampleModal-4">
              <img style="height: 100%;width: 100%;" src="<?php echo get_template_directory_uri() ?>/img/pomada-barba-forte.jpg">
              <div style="margin-top:10px;" class="thumbnail-sem-borda text-center tamanho-fixo-texto"><?php echo get_the_title(200) ?></div>
            </div>
        </a>
    </div>

  </div>
  
  <div class="row produtos">

    <div class="col-xs-12 col-sm-4 col-md-3 col-xl-3 col-lg-3 product text-center">
        <a class="img-thumbnail" data-toggle="modal" style="text-decoration: none;margin-bottom:20px;">
            <div class="product-img img-thumbnail" data-toggle="modal" data-target="#exampleModal-5">
              <img style="height: 100%;width: 100%;" src="<?php echo get_template_directory_uri() ?>/img/balsamo-hidratante-danger-barba-forte.jpg">
              <div style="margin-top:10px;" class="thumbnail-sem-borda text-center tamanho-fixo-texto"><?php echo get_the_title(201) ?></div>
            </div>
        </a>
    </div>

    <div class="col-xs-12 col-sm-4 col-md-3 col-xl-3 col-lg-3 product text-center">
        <a class="img-thumbnail" data-toggle="modal" style="text-decoration: none;margin-bottom:20px;">
            <div class="product-img img-thumbnail" data-toggle="modal" data-target="#exampleModal-6">
              <img style="height: 100%;width: 100%;" src="<?php echo get_template_directory_uri() ?>/img/tattoo-restorer-barba-forte.jpg">
              <div style="margin-top:10px;" class="thumbnail-sem-borda text-center tamanho-fixo-texto"><?php echo get_the_title(202) ?></div>
            </div>
        </a>
    </div>

    <div class="col-xs-12 col-sm-4 col-md-3 col-xl-3 col-lg-3 product text-center">
        <a class="img-thumbnail" data-toggle="modal" style="text-decoration: none;margin-bottom:20px;">
            <div class="product-img img-thumbnail" data-toggle="modal" data-target="#exampleModal-7">
              <img style="height: 100%;width: 100%;" src="<?php echo get_template_directory_uri() ?>/img/pomada-barba-forte-classic-pomade-lumberjack-120g.jpg">
              <div style="margin-top:10px;" class="thumbnail-sem-borda text-center tamanho-fixo-texto"><?php echo get_the_title(203) ?></div>
            </div>
        </a>
    </div>    
    <div class="col-xs-12 col-sm-4 col-md-3 col-xl-3 col-lg-3 product text-center">
        <a class="img-thumbnail" data-toggle="modal" style="text-decoration: none;margin-bottom:20px;">
            <div class="product-img img-thumbnail" data-toggle="modal" data-target="#exampleModal-8">
              <img style="height: 100%;width: 100%;" src="<?php echo get_template_directory_uri() ?>/img/gel-de-barbear-barba-forte.jpg">
              <div style="margin-top:10px;" class="thumbnail-sem-borda text-center tamanho-fixo-texto"><?php echo get_the_title(204) ?></div>
            </div>
        </a>
    </div>
  </div>
</div>


<?php get_footer() ?>
