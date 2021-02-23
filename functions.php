<?php

  function cadastro_conteudo(){
    $nomePlural = 'Conteúdos';
    $nomeSingular = 'Conteúdo';
    $menuName = 'Noticias';

    $labels = array(
      'name' => $nomePlural,
      'name_singular' => $nomeSingular,
      'menu_name' => $menuName,
      'add_new_item' => 'Adicionar novo' . $nomePlural,
      'edit_item' => 'Editar Conteúdo ' . $nomeSingular,
      'add_new' => 'Incluir'
    );

    $args = array(
      'labels' => $labels,
      'public' => true,
      'menu_icon' => 'dashicons-welcome-write-blog',


    );
    register_post_type( 'conteudo', $args);
  }

  add_action('init','cadastro_conteudo');

  //função para o menu

  function registrar_menu_navegacao(){
    register_nav_menus(
      array(
        'primary' => __('Menu Principal'),
      ));
  }

  add_action('init', 'registrar_menu_navegacao');



  //Meus posts types

  function meus_posts_types(){
    
    register_post_type('slide',
      array(
        'labels' => array(
        'name' => __('Slide'),
        'singular_name' => __('Slide'),
        'edit_item'          =>  'Editar slide'
        ),
        'public'        =>  true,
        'has_archive'   =>  true,
        'menu_icon'     =>  'dashicons-image-flip-horizontal',
        'supports'      =>  array('title', 'page-attributes')
      )
    );

    register_post_type('historia',
    array(
      'labels'        => array(
      'name'          => __('História'),
      'singular_name' => __('História'),
      'edit_item'     => 'Editar história'
      ),
      'public'      =>  true,
      'has_archive' =>  true,
      'menu_icon'   =>  'dashicons-media-text',
      'supports'    =>  array('title', 'editor', 'page-attributes'),
    ));

    register_post_type('equipe',
    array(
      'labels'        =>  array(
      'name'          =>  __('Equipe'),
      'singular_name' =>  __('Equipe'),
      'edit_item'     =>  'Editar equipe'
      ),
      'public'        =>  true,
      'has_archive'   =>  true,
      'menu_icon'     =>  'dashicons-groups',
      'supports'      =>  array('title', 'page-attributes', 'editor'),
    ));

    register_post_type('clientes',
    array(
      'labels'          =>  array(
        'name'          =>  __('Clientes'),
        'singular_name' =>  __('Cliente'),
        'edit_item'     =>  'Editar clientes'
      ),
      'public'        =>  true,
      'has_archive'   =>  true,
      'menu_icon'     =>  'dashicons-id-alt',
      'supports'      =>  array('title', 'page-attributes', 'editor'),
    ));

    register_post_type('servicos',
    array(
      'labels'          =>  array(
        'name'          =>  __('Serviços'),
        'singular_name' =>  __('Serviço'),
        'edit_item'     =>  'Editar serviços'
      ),
      'public'      =>  true,
      'has_archive' =>  true,
      'menu_icon'   =>  'dashicons-admin-generic',
      'supports'    =>  array('title', 'editor', 'page-attributes'),
    ));

    register_post_type('valores',
    array(
      'labels'          =>  array(
        'name'          =>  __('Valores'),
        'singular_name' =>  __('Valor'),
        'edit_item'     =>  'Editar Valores'
      ),
      'public'      =>  true,
      'has_archive' =>  true,
      'menu_icon'   =>  'dashicons-chart-line',
      'supports'    =>  array('title', 'editor', 'page-attributes'),
    ));

    register_post_type('barbearia',
    array(
      'labels'          =>  array(
        'name'          =>  __('Barbearia'),
        'singular_name' =>  __('Barbearia'),
        'edit_item'     =>  'Editar Barbearia'
      ),
      'public'      =>  true,
      'has_archive' =>  true,
      'menu_icon'   =>  'dashicons-format-image',
      'supports'    =>  array('title', 'editor', 'page-attributes'),
    ));

    register_post_type('contatos',
    array(
      'labels'          =>  array(
        'name'          =>  __('Contatos'),
        'singular_name' =>  __('Contato'),
        'edit_item'     =>  'Editar contatos'
      ),
      'public'      =>  true,
      'has_archive' =>  true,
      'menu_icon'   =>  'dashicons-email-alt',
      'supports'    =>  array('title', 'editor', 'page-attributes'),
    ));

    register_post_type('produtos',
    array(
      'labels'          =>  array(
        'name'          =>  __('Produtos'),
        'singular_name' =>  __('Produto'),
        'edit_item'     =>  'Editar descrição do produto'
      ),
      'public'      =>  true,
      'has_archive' =>  true,
      'menu_icon'   =>  'dashicons-cart',
      'supports'    =>  array('title', 'editor', 'page-attributes'),
    ));

    register_post_type('noivo',
    array(
      'labels'          =>    array(
        'name'          =>    __('Noivo'),
        'singular_name' =>    __('Noivos'),
        'edit_item'     =>    'Editar dia do noivo'
      ),
      'public'        =>  true,
      'has_archive'   =>  true,
      'menu_icon'     =>  'dashicons-star-filled',
      'supports'      =>  array('title', 'editor', 'page-attributes'),
    ));

    register_post_type('funcionamento',
    array(
      'labels'          =>  array(
        'name'          =>  __('Funcionamento'),
        'singular_name' =>  __('Funcionamento'),
        'edit_item'     =>  'Editar dias e horários'
      ),
      'public'      =>  true,
      'has_archive' =>  true,
      'menu_icon'   =>  'dashicons-clock',
      'supports'    =>  array('title', 'editor', 'page-attributes'),
    ));
  }


  add_action('init', 'meus_posts_types', 'historia', 'equipe', 'clientes', 'servicos', 'valores', 'noivo');

  function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
	wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies );
}

  function bootstrapstarter_enqueue_scripts() {
      $dependencies = array('jquery');
      wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '', true );
  }

  function load_enqueue_styles() {
    $BARBEARIA = 22;
    $SERVICOS = 114;
    $PRODUTOS = 43;
    $EVENTOS = 46;
    $CONTATOS = 48;
    $NOIVO = 216;

    $idPage = get_the_ID();

    switch ($idPage) {
      case $NOIVO:
        load_css_custom($NOIVO, "noivo");
        break;
      case $BARBEARIA:
        load_css_custom($BARBEARIA, "barbearia");
        break;
      case $PRODUTOS:
        load_css_custom($PRODUTOS, "produtos");
        break;
      case $EVENTOS:
        load_css_custom($EVENTOS, "eventos");
        break;
      case $CONTATOS:
        load_css_custom($CONTATOS, "contatos");
        break;
      case $SERVICOS:
        load_css_custom($SERVICOS, "servicos");
        break; 
      default:
        break;
    }   

}

function load_css_custom($idPage, $nameCss){
  if( is_page( $idPage) ){       
    wp_register_style('custom-style', get_template_directory_uri().'/css/'.$nameCss.'.css', array(), null);
    wp_enqueue_style( 'custom-style', get_stylesheet_uri());
  }
}

  function app_enqueue_scripts() {
      $dependencies = array('jquery');
      wp_enqueue_script('app', get_template_directory_uri().'/js/index.js', $dependencies, '', true );
  }

  
  add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
  add_action( 'wp_enqueue_scripts', 'load_enqueue_styles' );
  add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );
  add_action( 'wp_enqueue_scripts', 'app_enqueue_scripts' );

 ?>
