<?php
  /*
    template name: Barbearia
  */
  $servicos = get_template_directory_uri();
  get_header();
 ?>


<!--Seção Acessórios-->

<div class="row secao-acessorios">
  <h1>Nossos Serviços</h1>
  <div class="barra-sublinhado"></div>
  <?php
  $args = array( 'post_type' => 'servicos');
  $loop = new WP_Query( $args );
  if ( $loop->have_posts()) {
    while( $loop->have_posts()){
      $loop->the_post();
    }

  }
  ?>
   <div class="col-sm-6 col-md-4">
     <div class="thumbnail acessorios">
       <img class="img-tesoura" src="<?php echo get_template_directory_uri(); ?>/img/icone-tesoura.png">
       <h3 class="titulo-descricao-acessorio"><?php echo get_the_title(143) ?></h3>
       <figcaption class="descricao-acessorio"><?php echo get_post_field('post_content', 143) ?></figcaption>
     </div>
   </div>

   <div class="col-sm-6 col-md-4">
     <div class="thumbnail acessorios">
       <img class="img-pente" src="<?php echo get_template_directory_uri(); ?>/img/icone-pente.png">
       <h3 class="titulo-descricao-acessorio"><?php echo get_the_title(144) ?></h3>
       <figcaption class="descricao-acessorio"><?php echo get_post_field('post_content', 144) ?></figcaption>     
      </div>
    </div>

    <div class="col-sm-6 col-md-4">
      <div class="thumbnail acessorios">
        <img class="img-tesoura" src="<?php echo get_template_directory_uri(); ?>/img/icone-bigode.png">
        <h3 class="titulo-descricao-acessorio"><?php echo get_the_title(145) ?></h3>
        <figcaption class="descricao-acessorio"><?php echo get_post_field('post_content', 145) ?></figcaption>
      </div>
    </div>

</div>

<div class="row secao-acessorios">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail acessorios">
      <img class="img-pente" src="<?php echo get_template_directory_uri(); ?>/img/icone-navalha.png">
      <h3 class="titulo-descricao-acessorio"><?php echo get_the_title(146) ?></h3>
      <figcaption class="descricao-acessorio"><?php echo get_post_field('post_content', 146) ?></figcaption>    
    </div>
  </div>


  <div class="col-sm-6 col-md-4">
    <div class="thumbnail acessorios">
      <img class="img-pente" src="<?php echo get_template_directory_uri(); ?>/img/icone-product.png">
      <h3 class="titulo-descricao-acessorio"><?php echo get_the_title(158) ?></h3>
      <figcaption class="descricao-acessorio"><?php echo get_post_field('post_content', 158) ?></figcaption>    
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail acessorios">
      <img class="img-pente" src="<?php echo get_template_directory_uri(); ?>/img/icone-pincel.png">
      <h3 class="titulo-descricao-acessorio"><?php echo get_the_title(193) ?></h3>
      <figcaption class="descricao-acessorio"><?php echo get_post_field('post_content', 193) ?></figcaption>    
    </div>
  </div>
  
</div>
<!--Fim da seção acessórios-->

<!--Seção da lista de preços-->
   <div class="container" id="precos">
     <div id="lista-preco">
       <img src="<?php echo get_template_directory_uri(); ?>/img/barber-logo.png" id="logo-lista-preco">
       <?php
       $args = array( 'post_type' => 'valores');
       $loop = new WP_Query( $args );
       if ( $loop->have_posts()) {
         while( $loop->have_posts()){
           $loop->the_post();
         }

       }
       ?>
       <div class="valores">
         <div class="itens"><?php echo get_the_title(149) ?></div>
         <div class="separador"></div>
         <div class="valor"><?php echo get_post_field('post_content', 149) ?></div>
       </div>

       <div class="valores">
         <div class="itens"><?php echo get_the_title(150) ?></div>
         <div class="separador"></div>
         <div class="valor"><?php echo get_post_field('post_content', 150) ?></div>
       </div>

       <div class="valores">
         <div class="itens"><?php echo get_the_title(151) ?></div>
         <div class="separador"></div>
         <div class="valor"><?php echo get_post_field('post_content', 151) ?></div>
       </div>

       <div class="valores">
         <div class="itens"><?php echo get_the_title(152) ?></div>
         <div class="separador"></div>
         <div class="valor"><?php echo get_post_field('post_content', 152) ?></div>
       </div>

       <div class="valores">
         <div class="itens"><?php echo get_the_title(153) ?></div>
         <div class="separador"></div>
         <div class="valor"><?php echo get_post_field('post_content', 153) ?></div>
       </div>

       <div class="valores">
         <div class="itens"><?php echo get_the_title(156) ?></div>
         <div class="separador"></div>
         <div class="valor"><?php echo get_post_field('post_content', 156) ?></div>
       </div>

       <div class="valores">
         <div class="itens"><?php echo get_the_title(157) ?></div>
         <div class="separador"></div>
         <div class="valor"><?php echo get_post_field('post_content', 157) ?></div>
       </div>

       <div class="valores">
         <div class="itens"><?php echo get_the_title(155) ?></div>
         <div class="separador"></div>
         <div class="valor"><?php echo get_post_field('post_content', 155) ?></div>
       </div>

       <div class="valores">
         <div class="itens"><?php echo get_the_title(154) ?></div>
         <div class="separador"></div>
         <div class="valor"><?php echo get_post_field('post_content', 154) ?></div>
       </div>
     </div>
   </div>
   <?php
    get_footer();
   ?>
<!--Fim da seção lista de preços-->
