<?php
$css_index = 'index';
require_once('header.php');

?>

<!--Slide de imagens do carousel-->
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <?php
      $post_slide = array( 'post_type' => 'slide');
      $loop = new WP_Query( $post_slide );

      if ( $loop->have_posts() ) {
        while( $loop->have_posts()){
          $loop->the_post();
        }
      }
    ?>
   <div class='item active'>
     <img src="<?php echo get_template_directory_uri(); ?>/img/acessorios-barbearia-2.jpg">

     <div class="carousel-caption">
       <h3><?php echo get_the_title(128); ?></h3>
     </div>
   </div>

   <div class="item">
     <img src="<?php echo get_template_directory_uri(); ?>/img/acessorios-barbearia-20.jpg">

     <div class="carousel-caption">
       <h3><?php echo get_the_title(130); ?></h3>
     </div>
   </div>
   <?php wp_reset_postdata();?>
 </div>

<!--Controle direção da imagem-->
   <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
  </div>
<!--Fim do Carousel-->



<!--Seção historia-->
  <div class="container">
    <div class="jumbotron" id="historia">

      <img src="<?php echo get_template_directory_uri() ?>/img/logo-barberpub-branca.png" id="logo" align='left'>
      <?php
      $args = array( 'post_type' => 'historia');
      $loop = new WP_Query( $args );
      if ( $loop->have_posts()) {
        while( $loop->have_posts()){
          $loop->the_post();
        }

      }
      ?>
      <h2><?php the_title() ?></h2>
      <?php the_content();?>
    </div>
  </div>
<!--Fim Seção historia-->

  <div class="container" id="barberpub-rdwc">
    <div id="secao-barbearia">


          <div class="progamacao">
            <div class="box">
              <?php
              $args = array( 'post_type' => 'funcionamento');
              $loop = new WP_Query( $args );
              if ( $loop->have_posts()) {
                while( $loop->have_posts()){
                  $loop->the_post();
                }

              }
              ?>
              <span class="dia"><?php echo get_the_title(179) ?></span>
              <br>
              <span class="horario"><?php echo get_post_field('post_content', 179)  ?></span>
            </div>
            <div class="box">
              <span class="dia"><?php echo get_the_title(180) ?></span>
              <br>
              <span class="horario"><?php echo get_post_field('post_content', 180)  ?></span>
            </div>
            <div class="box">
              <span class="dia"><?php echo get_the_title(181) ?></span>
              <br>
              <span class="horario"><?php echo get_post_field('post_content', 181)  ?></span>
            </div>
            <div class="box">
              <span class="dia"><?php echo get_the_title(182) ?></span>
              <br>
              <span class="horario"><?php echo get_post_field('post_content', 182) ?></span>
            </div>
            <div class="box">
              <span class="dia"><?php echo get_the_title(183) ?></span>
              <br>
              <span class="horario"><?php echo get_post_field('post_content', 183) ?></span>
            </div>
            <div class="box">
              <span class="dia"><?php echo get_the_title(184); ?></span>
              <br>
              <span class="horario"><?php echo get_post_field('post_content', 184) ?></span>
            </div>
          </div>

      </div>
    </div>


<!--Seção da Equipe-->
<div class="container-fluid" id="nossa-equipe">
  <h1>Nossa Equipe</h1>
  <div class="barra-sublinhado"></div>
      
  <div class="row" id="fotos-da-equipe-1">
    <div class="col-xs-12 col-md-4 col-sm-12">
      <div class="thumbnail equipe">
        <img class="foto-equipe" src="<?php echo get_template_directory_uri(); ?>/img/equipe-raniere.jpg" alt="Raniere">
        <figcaption class="descricao-equipe">Raniere</figcaption>
      </div>
    </div>

    <div class="col-xs-12 col-md-4 col-sm-12">
      <div class="thumbnail equipe">
        <img class="foto-equipe" src="<?php echo get_template_directory_uri(); ?>/img/equipe-wellington.jpg" alt="Wellington">
        <figcaption class="descricao-equipe">Wellington</figcaption>
      </div>
    </div>

    <div class="col-xs-12 col-md-4 col-sm-12">
      <div class="thumbnail equipe">
        <img class="foto-equipe" src="<?php echo get_template_directory_uri(); ?>/img/equipe-camila.jpg" alt="Camila">
        <figcaption class="descricao-equipe">Camila</figcaption>          
      </div>
    </div>
  </div>

  <div class="row" id="fotos-da-equipe-2">
    <div class="col-xs-12 col-md-4 col-sm-12">
      <div class="thumbnail equipe">
        <img class="foto-equipe" src="<?php echo get_template_directory_uri(); ?>/img/equipe-emerson.jpg" alt="Emerson">
        <figcaption class="descricao-equipe">Emerson</figcaption>          
      </div>
    </div>


    <div class="col-xs-12 col-md-4 col-sm-12">
      <div class="thumbnail equipe">
        <img class="foto-equipe" src="<?php echo get_template_directory_uri(); ?>/img/equipe-rogerio.jpg" alt="Rogerio">
        <figcaption class="descricao-equipe">Rogerio</figcaption>
      </div>              
    </div>              
  </div>  
</div>
<!--Fim da Seção Equipe-->


<!--Seção Frases-->
<div class="container" id="filosofia-da-empresa">
  <div id="nossa-filosofia">
    <h3>Filosofia da Empresa</h3>
    <div class="barra-sublinhado-servicos"></div>
      <div class="frases">
        <div id="frase-fixa">
          Na Barbearia,
          <span id="frases-aleatorias"></span>
          <span id="cursor">|</span>
        </div>
      </div>
  </div>
</div>
<!--Fim da Seção Serviços-->

<div class="container-fluid" id="galeria-de-fotos">
  <h1>Nossas Fotos</h1>
  <div class="barra-sublinhado"></div>

  <div id="slide-fotos" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo  get_template_directory_uri() ?>/img/barbearia-1.jpg">
      </div>
      <div class="item">
        <img src="<?php echo  get_template_directory_uri() ?>/img/barbearia-9.jpg">
      </div>

      <div class="item">
        <img src="<?php echo  get_template_directory_uri() ?>/img/barbearia-25.jpg">
      </div>
    </div>
  </div>
</div>

<!--Seção fotos clientes-->
  <div class="container-fluid" id="secao-dos-clientes">
    
    <h1>Nossos Clientes</h1>
    <div class="barra-sublinhado"></div>
    <div class="row" id="fotos-dos-clientes">

      <div class="col-xs-12 col-md-3 col-sm-12">
          <div class="img-comp-container album">
            <div class="img-comp-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/depois-1.jpg" alt="...">
            </div>
            <div class="img-comp-img img-comp-overlay">
              <img src="<?php echo get_template_directory_uri(); ?>/img/antes-1.jpg" alt="...">
            </div>
          </div>
      </div>

      <div class="col-xs-12 col-md-3 col-sm-12">
        <div class="img-comp-container album">
          <div class="img-comp-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/depois-2.jpg" alt="...">
          </div>
          <div class="img-comp-img img-comp-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/img/antes-2.jpg" alt="...">
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-3 col-sm-12">
        <div class="img-comp-container album">
          <div class="img-comp-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/depois-3.jpg" alt="...">
          </div>
          <div class="img-comp-img img-comp-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/img/antes-3.jpg" alt="...">
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-3 col-sm-12">
        <div class="img-comp-container album">
          <div class="img-comp-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/depois-4.jpg" alt="...">
          </div>
          <div class="img-comp-img img-comp-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/img/antes-4.jpg" alt="...">
          </div>
        </div>
      </div>
    </div>
  </div>
<!--Fim da Seção fotos clientes-->

  <?php get_footer(); ?>

  <script type="text/javascript">
  var div = document.getElementById('frases-aleatorias');
  var textos = ['amamos o que fazemos', 'fazemos com qualidade', 'tenha novas experiências', 'tem um ambiente descontraído'];


  function escrever(str, done) {
  var char = str.split('').reverse();
  var typer = setInterval(function() {
      if (!char.length) {
          clearInterval(typer);
          return setTimeout(done, 800);
      }
      var next = char.pop();
      div.innerHTML += next;
  }, 100);
  }

  function limpar(done) {
  var char = div.innerHTML;
  var nr = char.length;
  var typer = setInterval(function() {
      if (nr-- == 0) {
          clearInterval(typer);
          return done();
      }
      div.innerHTML = char.slice(0, nr);
  }, 150);
  }

  function rodape(conteudos, el) {
  var atual = -1;
  function prox(cb){
      if (atual < conteudos.length - 1) atual++;
      else atual = 0;
      var str = conteudos[atual];
      escrever(str, function(){
          limpar(prox);
      });
  }
  prox(prox);
  }
  rodape(textos);

  </script>
