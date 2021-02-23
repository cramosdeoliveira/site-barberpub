<?php
/*
  template name: Barbearia
*/
  $css_index = 'index';
  require_once('header.php');
  $barbearia = get_template_directory_uri();
?>
    
  <div class="secao-estrutura">
    <h1>A Estrutura</h1>
    <div class="barra-sublinhado"></div>
  </div>
  <div class="container" id="estrutura">
    <?php
    $args = array( 'post_type' => 'barbearia');
    $loop = new WP_Query( $args );
    if ( $loop->have_posts()) {
      while( $loop->have_posts()){
        $loop->the_post();
      }

    }
    ?>
    <div class="jumbotron" id="sobre-estrutura">
      <h3><?php echo get_the_title(159) ?></h3>
      <p><?php echo get_post_field('post_content', 159) ?></p>
    </div>
  </div>

  <div class="secao-barbearia">
    <h1>A Barbearia</h1>
    <div class="barra-sublinhado"></div>
  </div>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo  get_template_directory_uri() ?>/img/imagem-barbearia-5.jpg">
    </div>  
    
    <div class="item">
      <img src="<?php echo  get_template_directory_uri() ?>/img/imagem-barbearia-1.jpg">
    </div>
    
    <div class="item">
      <img src="<?php echo  get_template_directory_uri() ?>/img/imagem-barbearia-4.jpg">
    </div>

    <div class="item">
      <img src="<?php echo  get_template_directory_uri() ?>/img/imagem-barbearia-2.jpg">
    </div>

    <div class="item">
      <img src="<?php echo  get_template_directory_uri() ?>/img/imagem-barbearia-3.jpg">
    </div>
  </div>
</div>



  <?php get_footer() ?>
