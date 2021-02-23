<?php $footer = get_template_directory_uri();?>

<link rel="stylesheet" href="<?=  $footer;?>/css/footer.css">
<footer class="footer">
  <div class="borda-secao"></div>
  <div class="container-fluid">
    <a href="https://www.facebook.com/barberpubrdwc/">
      <span class="icone icon-facebook-squared"></span>
    </a>

    <a href="https://www.instagram.com/barberpubrdwc/">
      <span class="icone icon-instagram"></span>
    </a>

    <a href='#'>
      <span class="icone icon-collapse"></span>
    </a>
  </div>
</footer>

  <script type="text/javascript">
  // Faz animação para subir ao topo

  jQuery(document).ready(function() {
    var body = jQuery('html', 'body');
    jQuery('#voltar-ao-topo').click(function(event) {
      event.preventDefault();
      body.animate({
        scrollTop: 0,
        behavior: "smooth"
      },5000);
    });

  });

  </script>
</body>
</html>
<?php wp_footer(); ?>
