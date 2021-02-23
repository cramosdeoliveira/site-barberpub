<?php
/*
  template name: Barbearia
*/
  $css_index = 'index';
  require_once('header.php');

?>

   
  <div id='secao-dia-do-noivo'>
  </div>    
    

  <h1>Pacotes</h1>
  <div class="barra-sublinhado"></div>
  <div class="row">
    <div class="col-sm-4 col-md-4">
      <div class="thumbnail">
        <img src="<?php echo get_template_directory_uri() ?>/img/icone-ouro.jpg">
        <div class="caption">
          <h3><?php echo get_the_title(223)?></h3>
          <div class='barra-sublinhado-pacotes'></div>
          <p><?php echo get_post_field('post_content', 223)?></p>        
        </div>
      </div>
    </div>
  
    <div class="col-sm-4 col-md-4">
      <div class="thumbnail">
        <img src="<?php echo get_template_directory_uri() ?>/img/icone-prata.jpg">
        <div class="caption">
          <h3><?php echo get_the_title(224)?></h3>
          <div class='barra-sublinhado-pacotes'></div>
          <p><?php echo get_post_field('post_content', 224)?></p>        
        </div>
      </div>
    </div>
    
    <div class="col-sm-4 col-md-4">
      <div class="thumbnail">
        <img src="<?php echo get_template_directory_uri() ?>/img/icone-bronze.jpg">
        <div class="caption">
          <h3><?php echo get_the_title(226)?></h3>
          <div class='barra-sublinhado-pacotes'></div>
          <p><?php echo get_post_field('post_content', 226)?></p>        
        </div>
      </div>
    
    </div>
    
  </div>

<?php get_footer() ?>

