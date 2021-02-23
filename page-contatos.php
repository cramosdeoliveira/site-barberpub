<?php
/*
  template name: Barbearia
*/
  get_header();
  $contatos = get_template_directory_uri();
?>
  
  <div class="container" id="secao-contato">
    <?php
    $args = array( 'post_type' => 'contatos');
    $loop = new WP_Query( $args );
    if ( $loop->have_posts()) {
      while( $loop->have_posts()){
        $loop->the_post();
      }

    }
    ?>
    <div class="row">
      <h1>Contate-nos</h1>
      <div class="barra-sublinhado"></div>
      <div class="col-md-4 icones">
        <img src="<?php echo $contatos; ?>/img/location-map.png" alt="">
        <figcaption class="descricao-contatos"><?php echo get_post_field('post_content', 161) ?></figcaption>
      </div>
      <div class="col-md-4 icones">
        <img src="<?php echo $contatos; ?>/img/telephone.png" alt="">
        <figcaption class="descricao-contatos"><?php echo get_post_field('post_content', 163) ?></figcaption>
      </div>
      <div class="col-md-4 icones">
        <img src="<?php echo $contatos; ?>/img/mail.png" alt="">
        <figcaption class="descricao-contatos"><?php echo get_post_field('post_content', 164) ?></figcaption>
      </div>
    </div>
  </div>

  <div class="container" id="contato">
    <form class="form-horizontal">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="Nome">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputPassword3" placeholder="E-mail">
        </div>
      </div>

      <div class="form-group">
        <label for="inputMessage3" class="col-sm-2 control-label" ></label>
        <div class="col-sm-10">
          <textarea class="form-control" rows="3" id="inputMessage3" placeholder="Mensagem..."></textarea>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn">Enviar</button>
        </div>
      </div>
    </form>
  </div>

  <div class="container" id="secao-mapa">
    <h1>Encontre-nos</h1>
    <div class="barra-sublinhado"></div>
    <?php echo get_post_field('post_content', 168) ?>
  </div>

<?php get_footer() ?>
