<!doctype html>
<html lang="pt-br">



<head>
  <title><?php bloginfo('name'); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/historia.css">

  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
  <?php if (is_singular() && get_option('thread_comments'))
    wp_enqueue_script('comment-reply');
  wp_head(); ?>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- Google tag (gtag.js) -->
  <script async
    src="<?php echo get_template_directory_uri(); ?>/https://www.googletagmanager.com/gtag/js?id=G-R6EBQB5Z33"></script>
  <style>
    html {
      margin: 0 !important;
    }
  </style>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/estilo.css">
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-R6EBQB5Z33');
  </script>
</head>


<header id="inicio">
  <div class="container-fluid header-topo " id="header-menu">
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
      <div class="container text-center">
        <div class="col-12 col-sm-6 col-lg-3 ">
          <a class="navbar-brand" href="index.php"><img
              src="<?php echo get_template_directory_uri(); ?>/img/GrupoValdirSaraivaHead.png" alt=""
              class="img-fluid img-logo-top"></a>
        </div>

        <button class="navbar-toggler bg-light" id="button-menu" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" id="button-menu-nav"></span>
        </button>

        <div>
          <a href="https://br.linkedin.com/company/grupovaldirsaraiva " target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/img/linkedinlogo.png" alt="" class="img-fluid  m-auto"
              style="width:30px"></a>
          <a href="https://www.youtube.com/@grupovaldirsaraiva" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/img/youtubelogo.png" alt="" class="img-fluid m-3 "
              style="width:35px"></a>
        </div>
        <div class="collapse navbar-collapse menu-links" id="navbarSupportedContent">
          <ul class="text-end navbar-nav m-auto text-center d-flex">
                     <?php
            // Exibe o menu do Header
            wp_nav_menu(array(
              'theme_location' => 'header-menu',
              'container' => 'ul',
              'menu_class' => 'navbar-nav ',
              'fallback_cb' => false
            ));
            ?>
          </ul>
        </div>


      </div>
    </nav>
  </div>

</header>

<!-- Barra de Empresas -->
<nav class="navbar navbar-expand-lg navbar-dark " id="nav-empresas">
  <div class="container-fluid botao-empresas text-center">
    <div class="container">
      <button class="navbar-toggler botao-empresas " type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
        aria-label="Toggle navigation">Empresas do Grupo
      </button>
      <div class="collapse navbar-collapse m-auto text-center nav-empresas" id="navbarNavDarkDropdown">
        <?php
        // Exibe o menu de empresas criado no WordPress
        wp_nav_menu(array(
          'theme_location' => 'menu-empresas',
          'container' => 'ul',
          'menu_class' => 'navbar-nav',
          'fallback_cb' => false
        ));
        ?>
      </div>
    </div>
  </div>
</nav>