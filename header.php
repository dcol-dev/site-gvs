<!doctype html>
<html lang="pt-br">



<head>
  <title><?php bloginfo('name'); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/historia.css">

  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- Google tag (gtag.js) -->
  <script async src="<?php echo get_template_directory_uri(); ?>/https://www.googletagmanager.com/gtag/js?id=G-R6EBQB5Z33"></script>
  <style>
    html {
    margin: 0 !important;
  }
  a {text-decoration: none;
    color: rgba(0, 0, 0, 0.55);
    font-size: 15px;
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

<body>
  <header id="inicio">
    <div class="container-fluid header-topo " id="header-menu">
      <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container text-center">
          <div class="col-12 col-sm-6 col-lg-3 ">
            <a class="navbar-brand" href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/img/GrupoValdirSaraivaHead.png" alt=""
                class="img-fluid img-logo-top"></a>
          </div>

          <button class="navbar-toggler bg-light" id="button-menu" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" id="button-menu-nav"></span>
          </button>

          <div>
            <a href="https://br.linkedin.com/company/grupovaldirsaraiva " target="_blank"><img
                src="<?php echo get_template_directory_uri(); ?>/img/linkedinlogo.png" alt="" class="img-fluid  m-auto" style="width:30px"></a>
            <a href="https://www.youtube.com/@grupovaldirsaraiva" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/youtubelogo.png" alt=""
                class="img-fluid m-3 " style="width:35px"></a>
          </div>
          <div class="collapse navbar-collapse menu-links " id="navbarSupportedContent">
            <ul class="text-end navbar-nav  m-auto text-center">
             <?php wp_nav_menu(); ?>
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
          <!-- <span class="navbar-toggler-icon m-auto"></span> -->
        </button>
        <div class="collapse navbar-collapse m-auto text-center nav-empresas" id="navbarNavDarkDropdown">
          <div class="dropdown-center">

            <button class="btn btn-secondary dropdown-toggle button-css" id="empresas-toggle" type="button"
              data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/atacado.png" alt="" class="img-fluid">
              Atacado
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="emp_dimacol.php"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo/Logo Dimacol.png" alt=""></a>
              </li>
              <li><a class="dropdown-item" href="emp_vjc.php"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo/Logo-VJC.png" alt=""></a></li>
              <li><a class="dropdown-item" href="emp_mvs.php"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-mvs.png" alt=""></a></li>
            </ul>
          </div>
          <div class="collapse navbar-collapse m-auto text-center" id="navbarNavDarkDropdown">
          </div>
          <div class="collapse navbar-collapse m-auto text-center" id="navbarNavDarkDropdown">
            <div class="dropdown-center">
              <button class="btn btn-secondary dropdown-toggle" id="empresas-toggle" type="button"
                data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/varejo.png" class="img-fluid rounded-top"
                  alt="">
                Varejo
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="emp_varejos.php"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo/dimacol-varejo.png"
                      alt=""></a></li>
              </ul>
            </div>
          </div>
          <div class="collapse navbar-collapse m-auto text-center" id="navbarNavDarkDropdown">
            <div class="dropdown-center">
              <button class="btn btn-secondary dropdown-toggle" id="empresas-toggle" type="button"
                data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/cachaca.png" alt="" class="img-fluid">
                Cachaça
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="https://cachacapocodapedra.com.br"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-cachaca.png"
                      alt=""></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="collapse navbar-collapse m-auto text-center" id="navbarNavDarkDropdown">
            <div class="dropdown-center">
              <button class="btn btn-secondary dropdown-toggle" id="empresas-toggle" type="button"
                data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/bomba-de-gasolina.png" alt="">
                Posto Radar
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="emp_posto.php"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-posto-radar.png"
                      alt=""></a></li>
              </ul>
            </div>
          </div>
          <div class="collapse navbar-collapse m-auto text-center" id="navbarNavDarkDropdown">
            <div class="dropdown-center">
              <button class="btn btn-secondary dropdown-toggle jus" id="empresas-toggle" type="button"
                data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/hotel.png" alt="" class="img-fluid">
                Hotel Radar
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="emp_hotel.php"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo/Logo-Hotel.png" alt=""></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="collapse navbar-collapse m-auto text-center" id="navbarNavDarkDropdown">
            <div class="dropdown-center">
              <button class="btn btn-secondary dropdown-toggle text-center" id="empresas-toggle" type="button"
                data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/aço.png" alt="">
                Aço
              </button>
              <ul class="dropdown-menu text-center">
                <li><a class="dropdown-item" href="emp_aco.php"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo/Logo-aco.png" alt=""></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="collapse navbar-collapse m-auto text-center" id="navbarNavDarkDropdown">
            <div class="dropdown-center">
              <button class="btn btn-secondary dropdown-toggle" id="empresas-toggle" type="button"
                data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/entrega-rapida.png" alt=""
                  class="img-fluid">
                Camcam
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="emp_camcam.php"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo/Logo-Camcam.png" alt=""></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </nav>