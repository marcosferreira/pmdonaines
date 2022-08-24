<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Prefeitura Municipal de Dona Inês</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <div class="container-fluid accessibility bg-primary">
    <div class="container">
      <div class="navbar navbar-expand-lg d-flex justify-content-between align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="https://transparencia.pmdonaines.pb.gov.br/" target="_blank">Transparência</a></li>
          <li class="nav-item"><a class="nav-link" href="http://webmail.pmdonaines.pb.gov.br/" target="_blank">Webmail</a></li>
          <li class="nav-item"><a class="nav-link" href="https://donaines-sistemas.online/" target="_blank">Sistemas</a></li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">+A</a></li>
          <li class="nav-item"><a class="nav-link" href="#">-A</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Alto Contraste</a></li>
        </ul>
      </div>
    </div>
  </div>
  <header class="menubar">
    <nav class="navbar container navbar-expand-lg navbar-light bg-white rounded-top justify-content-between align-items-center pt-3 pb-3">

      <div class="menu-logo d-flex justify-content-between align-items-center">
        <button id="button-menu" class="btn button-menu m-1" onclick="openMenu()">
          <i id="button-menu-icon" class="fa fa-bars" aria-hidden="true"></i>
        </button>

        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        ?>

        <a class="logo-link" href="<?php echo get_home_url(); ?>">
          <?php
          if (has_custom_logo()) {
            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"/>';
          } else {
            // echo '<h1>' . get_bloginfo('name') . '</h1>';
            echo '<img src="https://pmdonaines.pb.gov.br/wp-content/uploads/2022/05/logo-1-425x71.png">';
          }
          ?>
        </a>
      </div>

      <div class="d-flex align-items-center">
        <ul class="navbar-nav navbar-mobile justify-content-center align-items-center pt-2 pb-2">
          <li class="nav-item"><a class="nav-link" href="http://esic.pmdonaines.pb.gov.br/" target="_blank">Acesso à Informação</a></li>
          <li class="nav-item"><a class="nav-link" href="https://pmdonaines.pb.gov.br/carta-de-servicos/" target="_blank">Carta de Serviços</a></li>
          <li class="nav-item"><a class="nav-link btn" href="https://transparencia.pmdonaines.pb.gov.br" target="_blank">Portal da Transparência</a></li>
        </ul>

        <a class="btn-search-menu nav-link text-primary" href="https://pmdonaines.pb.gov.br/?s" target="_blank">
          <span class="material-icons-outlined">search</span>
        </a>
      </div>
    </nav>
    <div class="menu-float menu-close">
      <div class="container">
        <div class="row m-0">
          <ul class="navbar-mobile-menu justify-content-center align-items-center">
            <li><a class="btn w-100" href="#">Acesso à Informação</a></li>
            <li><a class="btn w-100" href="#">Carta de Serviços</a></li>
            <li><a class="btn w-100" href="#">Portal da Transparência</a></li>
          </ul>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <ul class="p-2">
              <li>
                <h4>Acesso à Informação</h4>
              </li>
              <li><a href="https://esic.pmdonaines.pb.gov.br/" target="_blank">Informação ao Cidadão</a></li>
              <li><a href="https://transparencia.pmdonaines.pb.gov.br/" target="_blank">Portal da Transparência</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/category/diario-oficial/" target="_blank">Diário Oficial do Município</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <ul class="p-2">
              <li>
                <h4>Coronavírus</h4>
              </li>
              <li><a href="https://pmdonaines.pb.gov.br/covid-19/" target="_blank">Transparência Covid-19</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/relatorios-covid-19/" target="_blank">Relatórios Covid-19</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <ul class="p-2">
              <li>
                <h4>Município</h4>
              </li>
              <li><a href="https://pmdonaines.pb.gov.br/historia-do-municipio/" target="_blank">História do Município</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/hino/" target="_blank">Hino do Município</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/feriados-municipais/" target="_blank">Feriados Municipais</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/links-uteis/" target="_blank">Links Úteis</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <ul class="p-2">
              <li>
                <h4>Governo</h4>
              </li>
              <li><a href="https://pmdonaines.pb.gov.br/a-prefeitura/" target="_blank">Prefeitura</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/o-prefeito/" target="_blank">Prefeito</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/o-vice-prefeito/" target="_blank">Vice-prefeito</a></li>
              <li><a href="#" target="_blank">Secretários e Diretores</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <ul class="p-2">
              <li>
                <h4>Secretarias e Orgãos</h4>
              </li>
              <li><a href="https://pmdonaines.pb.gov.br/secretarias-e-orgaos/gabinete-do-prefeito/" target="_blank">Gabinete do Prefeito</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/secretarias-e-orgaos/secretaria-municipal-de-administracao-e-financas/" target="_blank">Administração e Finanças</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/10/CLIQUE-AQUI-PARA-ACESSAR-O-EDITAL-2.png" target="_blank">Assistência Social e Habitação</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/secretarias-e-orgaos/secretaria-municipal-de-cultura-e-turismo/" target="_blank">Cultura e Turismo</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/secretarias-e-orgaos/secretaria-municipal-de-educacao-e-desporto/" target="_blank">Educação e Desporto</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/secretarias-e-orgaos/secretaria-de-infraestrutura-agricultura-e-meio-ambiente/" target="_blank">Infraestrutura e Meio Ambiente</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/secretarias-e-orgaos/secretaria-municipal-de-saude/" target="_blank">Saúde</a></li>
              <li><a href="#">Impresp</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <ul class="p-2">
              <li>
                <h4>Departamentos</h4>
              </li>
              <li><a href="#">Agricultura</a></li>
              <li><a href="#">Obras</a></li>
              <li><a href="#">Limpeza Pública</a></li>
              <li><a href="#">Tecnologia da Informação</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <ul class="p-2">
              <li>
                <h4>Setores</h4>
              </li>
              <li><a href="#">Sala do Empreendedor</a></li>
              <li><a href="#">Tecnologia</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <ul class="p-2">
              <li>
                <h4>Legislação</h4>
              </li>
              <li><a href="https://pmdonaines.pb.gov.br/category/leis" target="_blank">Leis Municipais</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/leis-municipais/" target="_blank">Leis na Câmera Municipal</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/lei-organica-do-municipio-de-dona-ines-pb/" target="_blank">Lei Orgânica do Município</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/category/decretos/" target="_blank">Decretos</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/lc-01-codigo-tributario/" target="_blank">Código Tributário</a></li>
              <li><a href="http://www.acessoainformacao.gov.br/assuntos/conheca-seu-direito/a-lei-de-acesso-a-informacao" target="_blank">Regulamento da LAI</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/category/ldo/" target="_blank">LDO</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/category/loa/" target="_blank">LOA</a></li>
              <li><a href="https://pmdonaines.pb.gov.br/category/ppa/" target="_blank">PPA</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </header>

  <main>
    <section class="container-search">
      <div class="bg-image-search w-100 h-100" style="background-image: url('wp-content/themes/pmdonaines/assets/images/bg-search-2.jpg'); ">
        <div class="bg-opacity-search w-100 h-100 m-0">
          <form action="#" method="get">
            <div class="form-group">
              <label for="searchFormControlInput">Encontre o que está procurando aqui:</label>
              <div class="d-flex">
                <input type="text" class="form-control mr-2" id="searchFormControlInput" placeholder="O que você procura? Exemplo: Notícias, contra-cheque, contratos, licitações">
                <button class="btn" type="submit">Buscar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="page-title">
        <h1>Início</h1>
      </div>
    </section>
    <section class="container-fluid pt-4 pb-4 quick-access">
      <div class="container">
        <h3 class="title-section">Acesso Rápido</h3>
        <div class="row d-flex justify-content-center align-items-start">
          <div class="card-icon">
            <a href="https://transparencia.pmdonaines.pb.gov.br/#covid19" target="_blank">
              <div class="rounded-circle m-2">
                <span class="material-icons-outlined">
                  coronavirus
                </span>
              </div>
              Transparência Covid-19
            </a>
          </div>
          <div class="card-icon">
            <a href="https://esic.pmdonaines.pb.gov.br" target="_blank">
              <div class="rounded-circle m-2">
                <span class="material-icons-outlined">
                  info
                </span>
              </div>
              Acesso à Informação
            </a>
          </div>
          <div class="card-icon">
            <a href="https://transparencia.pmdonaines.pb.gov.br" target="_blank">
              <div class="rounded-circle m-2">
                <span class="material-icons-outlined">
                  manage_search
                </span>
              </div>
              Portal da Transparência
            </a>
          </div>
          <div class="card-icon">
            <a href="https://tributos.elmartecnologia.com.br/portais/donaines/" target="_blank">
              <div class="rounded-circle m-2">
                <span class="material-icons-outlined">
                  paid
                </span>
              </div>
              Portal do Contribuinte
            </a>
          </div>
          <div class="card-icon">
            <a href="https://pmdonaines.pb.gov.br/category/diario-oficial/" target="_blank">
              <div class="rounded-circle m-2">
                <span class="material-icons-outlined">
                  feed
                </span>
              </div>
              Diário Oficial Municipal
            </a>
          </div>
          <div class="card-icon">
            <a href="https://pmdonaines.pb.gov.br/ouvidoria/" target="_blank">
              <div class="rounded-circle m-2">
                <span class="material-icons-outlined">
                  campaign
                </span>
              </div>
              Ouvidoria Municipal
            </a>
          </div>
          <div class="card-icon">
            <a href="#">
              <div class="rounded-circle m-2">
                <span class="material-icons-outlined">
                  edit_note
                </span>
              </div>
              Licitações e Contratos
            </a>
          </div>
          <div class="card-icon">
            <a href="#">
              <div class="rounded-circle m-2">
                <span class="material-icons-outlined">
                  person_search
                </span>
              </div>
              Folha de Pagamento
            </a>
          </div>
          <div class="card-icon">
            <a href="#">
              <div class="rounded-circle m-2">
                <span class="material-icons-outlined">
                  ballot
                </span>
              </div>
              Contracheque Online
            </a>
          </div>
          <div class="card-icon">
            <a href="#">
              <div class="rounded-circle m-2">
                <span class="material-icons-outlined">
                  attach_email
                </span>
              </div>
              Carta de Serviço
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="container pt-4 pb-4">
      <div class="row">
        <div class="col">
          <div class="card-vacina-covid19 mt-2 mb-2 p-3 rounded">
            <div class="row">
              <div class="col-lg-4">
                <div class="h-100 d-flex flex-column justify-content-around align-items-center">
                  <h3 class="card-title-more">DONA INÊS <b>NO COMBATE AO COVID-19</b></h3>
                  <div class="w-100 d-flex justify-content-around align-items-center">
                    <p class="mt-3 w-100 ">Previna-se e tire suas dúvidas</p>
                    <div>
                      <a href="https://pmdonaines.pb.gov.br/category/boletim-epidemiologico-codiv-19/" target="_blank" class="btn card-btn-more w-100  m-2">BOLETINS</a>
                      <a href="https://pmdonaines.pb.gov.br/relatorios-covid-19/" target="_blank" class="btn card-btn-more w-100  m-2">RELATÓRIOS</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="row">
                  <div class="col">
                    <h2>Vacinas Aplicadas</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <div class="rounded panel mt-1 p-3">
                      <small>
                        Total de doses únicas aplicadas
                      </small>
                      <h4>146</h4>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="rounded panel mt-1 p-3">
                      <small>
                        Total de 1ª doses aplicadas
                      </small>
                      <h4>8.753</h4>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="rounded panel mt-1 p-3">
                      <small>
                        Total de 2ª doses aplicadas
                      </small>
                      <h4>8.589</h4>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="rounded panel mt-1 p-3">
                      <small>
                        Percentual da população vacinada
                      </small>
                      <h4>84%</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-4">
        <div class="col-sm btn-group">
          <div class="row h-100 m-0">
            <div class="col-lg-4 p-0">
              <a href="https://pmdonaines.pb.gov.br/nfs/" target="_blank" class="w-100 h-100 btn btn-outlined mb-2">
                <span class="material-icons-outlined">
                  receipt_long
                </span>
                Nota Fiscal Eletronica
              </a>
            </div>
            <div class="col-lg-4 p-0">
              <a href="http://transparencia.pb.gov.br/" target="_blank" class="w-100 h-100 btn btn-outlined mb-2">
                <span class="material-icons-outlined">
                  manage_search
                </span>
                Transparência do Estado
              </a>
            </div>
            <div class="col-lg-4 p-0">
              <a href="https://pmdonaines.pb.gov.br/perguntas-frequentes/" target="_blank" class="w-100 h-100 btn btn-outlined mb-2">
                <span class="material-icons-outlined">
                  forum
                </span>
                Perguntas Frequentes
              </a>
            </div>
            <div class="col-lg-4 p-0">
              <a href="https://tce.pb.gov.br/sagres-online" target="_blank" class="w-100 h-100 btn btn-outlined mb-2">
                <span class="material-icons-outlined">
                  price_check
                </span>
                Sagres Online
              </a>
            </div>
            <div class="col-lg-4 p-0">
              <a href="#" class="w-100 h-100 btn btn-outlined mb-2">
                <span class="material-icons-outlined">
                  group
                </span>
                Convênios
              </a>
            </div>
            <div class="col-lg-4 p-0">
              <a href="https://pmdonaines.pb.gov.br/ouvidoria/" target="_blank" class="w-100 h-100 btn btn-outlined mb-2">
                <span class="material-icons-outlined">
                  campaign
                </span>
                Ouvidoria
              </a>
            </div>
            <div class="col-lg-4 p-0">
              <a href="#" class="w-100 h-100 btn btn-outlined mb-2">
                <span class="material-icons-outlined">
                  plagiarism
                </span>
                Consultar Ofício
              </a>
            </div>
            <div class="col-lg-4 p-0">
              <a href="https://donaines-sistemas.online/" target="_blank" class="w-100 h-100 btn btn-outlined mb-2">
                <span class="material-icons-outlined">
                  grid_view
                </span>
                Sistemas Interno
              </a>
            </div>
            <div class="col-lg-4 p-0">
              <a href="http://webmail.pmdonaines.pb.gov.br/" target="_blank" class="w-100 h-100 btn btn-outlined mb-2">
                <span class="material-icons-outlined">
                  email
                </span>
                Webmail
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card-esic">
            <div class="row m-0">
              <div class="col-lg-7 card-esic-content p-3 border rounded">
                <h3>SIC PRESENCIAL</h3>
                <p>Faça seu pedido presencialmente</p>
                <address>
                  Av. Major Augusto Bezerra, 02 <br> Centro - Dona Inês/PB
                </address>
              </div>
              <div class="col-lg-5 card-esic-content card-esic-hover p-3 border rounded">
                <a href="https://esic.pmdonaines.pb.gov.br" target="_blank">
                  <div class="row">
                    <div class="col">
                      <div class="d-flex">
                        <span class="material-icons-outlined mr-2" style="font-size: 2rem;">
                          info
                        </span>
                        <h3>e-SIC</h3>
                      </div>
                      <small>
                        Sistema Eletrônico do serviço de informação ao cidadão
                      </small>
                      <br>
                      <div class="text-right">
                        <span class="material-icons-outlined text-right" style="font-size: 3rem;">
                          touch_app
                        </span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="row m-0 d-flex align-items-center card-esic-content border rounded">
              <div class="col-lg-8 p-3">
                <small>
                  <b>Atendimento:</b> Segunda à Sexta, das 8h00 às 12h00.
                </small>
              </div>
              <div class="col-lg-4 p-3 ">
                <a href="https://esic.pmdonaines.pb.gov.br" target="_blank" class="btn btn-sm roudend-pill">
                  Abrir/Consultar
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="container mb-4 ">
      <!-- <div class="slides w-100 h-100 rounded">
                <ul>
                    <li class="d-flex justify-content-center align-items-center">
                        <img class="img-fluid rounded" src="https://www.gov.br/pt-br/conteudos-externos/saude-e-vigilancia-sanitaria/coronavirus/@@images/image" alt="coronavirus">
                        <a href="#">
                            <h3>Titulo do Slide</h3>
                            <p>Texto descritivo do slide</p>
                        </a>
                    </li>
                    <li></li>
                    <li></li>
                </ul>
            </div> -->
      <?php echo do_shortcode('[slide-anything id="5"]'); ?>
      <!-- <div id="carouselInterval" class="carousel slide" data-ride="carousel">
        <div id="carouselMainCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselMainCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselMainCaptions" data-slide-to="1"></li>
            <li data-target="#carouselMainCaptions" data-slide-to="2"></li>
            <li data-target="#carouselMainCaptions" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/11/CLIQUE-AQUI-PARA-ACESSAR-O-EDITAL-3.png" class="d-block w-100" alt="...">
              <a href="#" class="carousel-caption d-none d-md-block">
                <h5>Canal Oficial da Ouvidoria no WhatsApp</h5>
                <p>Acesse aqui: t.me/secomgovernodobrasil</p>
              </a>
            </div>
            <div class="carousel-item">
              <img src="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/02/nova-COVID-1100x275-1-1100x275.png" class="d-block w-100" alt="...">
              <a href="#" class="carousel-caption d-none d-md-block">
                <h5>Governo Completa Mil dias</h5>
                <p>Data celebra conquistas que ajudaram a melhorar a qualidade de vida da população</p>
              </a>
            </div>
            <div class="carousel-item">
              <img src="https://www.gov.br/pt-br/conteudos-externos/saude-e-vigilancia-sanitaria/coronavirus/@@images/image" class="d-block w-100" alt="...">
              <a href="#" class="carousel-caption d-none d-md-block">
                <h5>Vacinação, prevenção e controle</h5>
                <p>Confira o que o Governo Federal está fazendo no combate à Covid-19</p>
              </a>
            </div>
            <div class="carousel-item">
              <img src="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/02/nova-COVID-1100x275-1-1100x275.png" class="d-block w-100" alt="...">
              <a href="#" class="carousel-caption d-none d-md-block">
                <h5>Governo Completa Mil dias</h5>
                <p>Data celebra conquistas que ajudaram a melhorar a qualidade de vida da população</p>
              </a>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselMainCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselMainCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div> -->
    </section>
    <section class="container">
      <h3 class="title-section-two">Notícias em Destaque</h3>
      <div class="container-news-featured">
        <?php
        // query_posts('cat=4', 'posts_per_page=3');
        $id_category = 3;
        $args = array('posts_per_page' => $id_category, 'cat' => '4');
        $query = new WP_Query($args);
        if (have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>
            <article>
              <header>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              </header>
              <a href="<?php the_permalink(); ?>">
                <div class="content">
                  <p class="tag">
                    <?php foreach ((get_the_category()) as $category) { ?>
                      <a href="<?php echo get_category_link($category->cat_ID) ?>">
                        <?php echo '&nbsp;&bull; ' .$category->cat_name; ?>
                      </a>
                    <?php } ?>
                  </p>
                  <h2>
                    <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                  </h2>
                </div>
              </a>
            </article>
        <?php
          // the_content();

          endwhile;
        else :
          _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif;

        wp_reset_query();

        ?>
        <!-- <article>
          <a href="#">
            <header>
              <img class="" src="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/09/Snapshot_16-1024x576.png" alt="">
            </header>
          </a>
          <div class="content">
            <p class="tag">
              <a href="#">Assistência Social</a>
            </p>
            <h2>
              <a href="#"> Cadastro Único na campanha Setembro Verde. Cadastro Único na campanha Setembro Verde. </a>
            </h2>
          </div>
        </article>

        <article>
          <a href="#">
            <header>
              <img class="" src="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/09/Snapshot_16-1024x576.png" alt="">
            </header>
          </a>
          <div class="content">
            <p class="tag">
              <a href="#">Assistência Social</a>
            </p>
            <h2>
              <a href="#"> Cadastro Único na campanha Setembro Verde. Cadastro Único na campanha Setembro Verde. </a>
            </h2>
          </div>
        </article>

        <article>
          <a href="#">
            <header>
              <img class="" src="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/09/Snapshot_16-1024x576.png" alt="">
            </header>
          </a>
          <div class="content">
            <p class="tag">
              <a href="#">Assistência Social</a>
            </p>
            <h2>
              <a href="#"> Cadastro Único na campanha Setembro Verde. Cadastro Único na campanha Setembro Verde. </a>
            </h2>
          </div>
        </article> -->
      </div>
    </section>
    <section class="container container-news-more">
      <?php
      $cat_id = get_cat_ID('Administração e Finanças');
      $category_link = get_category_link($cat_id);
      $category_name = get_cat_name($cat_id);
      ?>
      <h3 class="title-section-two"><?php echo $category_name; ?></h3>
      <div class="row">
        <?php
        // query_posts('cat=4', 'posts_per_page=3');
        // $id_category = '18';

        $posts_per_page = 4;

        $args = array('posts_per_page' => $posts_per_page, 'cat' => $cat_id);
        $query = new WP_Query($args);
        if (have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>
            <div class="col-lg-6 mb-4">
              <article class="d-flex">
                <header>
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                  </a>
                </header>
                <div class="content">
                  <p class="tag">
                    <?php

                    // echo $category_name; // It will print your category name
                    ?>
                    <a href="<?php echo $category_link; ?>">
                      <?php echo $category_name; ?>
                    </a>
                  </p>
                  <h2>
                    <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                  </h2>
                  <small>Publicado em: <?php echo get_the_date(); ?></small>
                  <p class="text">
                    <a href="<?php the_permalink(); ?>">
                      <?php echo wp_trim_words(get_the_content(), 20); ?>
                    </a>
                  </p>
                  <p>
                    <a class="btn btn-more" href="<?php the_permalink(); ?>">leia mais</a>
                  </p>
                </div>
              </article>
            </div>
        <?php
          // the_content();
          endwhile;
        else :
          _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif;
        wp_reset_query();
        ?>
      </div>
    </section>

    <section class="container container-news-more">
      <?php
      $cat_id = get_cat_ID('Assistência Social e Habitação');
      $category_link = get_category_link($cat_id);
      $category_name = get_cat_name($cat_id);
      ?>
      <h3 class="title-section-two"><?php echo $category_name; ?></h3>
      <div class="row">
        <?php
        // query_posts('cat=4', 'posts_per_page=3');
        // $id_category = '18';

        $posts_per_page = 4;

        $args = array('posts_per_page' => $posts_per_page, 'cat' => $cat_id);
        $query = new WP_Query($args);
        if (have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>
            <div class="col-lg-6 mb-4">
              <article class="d-flex">
                <header>
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                  </a>
                </header>
                <div class="content">
                  <p class="tag">
                    <?php

                    // echo $category_name; // It will print your category name
                    ?>
                    <a href="<?php echo $category_link; ?>">
                      <?php echo $category_name; ?>
                    </a>
                  </p>
                  <h2>
                    <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                  </h2>
                  <small>Publicado em: <?php echo get_the_date(); ?></small>
                  <p class="text">
                    <a href="<?php the_permalink(); ?>">
                      <?php echo wp_trim_words(get_the_content(), 20); ?>
                    </a>
                  </p>
                  <p>
                    <a class="btn btn-more" href="<?php the_permalink(); ?>">leia mais</a>
                  </p>
                </div>
              </article>
            </div>
        <?php
          // the_content();
          endwhile;
        else :
          _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif;
        wp_reset_query();
        ?>
      </div>
    </section>

    <section class="container container-news-more">
      <?php
      $cat_id = get_cat_ID('Educação e Desporto');
      $category_link = get_category_link($cat_id);
      $category_name = get_cat_name($cat_id);
      ?>
      <h3 class="title-section-two"><?php echo $category_name; ?></h3>
      <div class="row">
        <?php
        // query_posts('cat=4', 'posts_per_page=3');
        // $id_category = '18';

        $posts_per_page = 4;

        $args = array('posts_per_page' => $posts_per_page, 'cat' => $cat_id);
        $query = new WP_Query($args);
        if (have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>
            <div class="col-lg-6 mb-4">
              <article class="d-flex">
                <header>
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                  </a>
                </header>
                <div class="content">
                  <p class="tag">
                    <?php

                    // echo $category_name; // It will print your category name
                    ?>
                    <a href="<?php echo $category_link; ?>">
                      <?php echo $category_name; ?>
                    </a>
                  </p>
                  <h2>
                    <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                  </h2>
                  <small>Publicado em: <?php echo get_the_date(); ?></small>
                  <p class="text">
                    <a href="<?php the_permalink(); ?>">
                      <?php echo wp_trim_words(get_the_content(), 20); ?>
                    </a>
                  </p>
                  <p>
                    <a class="btn btn-more" href="<?php the_permalink(); ?>">leia mais</a>
                  </p>
                </div>
              </article>
            </div>
        <?php
          // the_content();
          endwhile;
        else :
          _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif;
        wp_reset_query();
        ?>
      </div>
    </section>

    <section class="container container-news-more">
      <?php
      $cat_id = get_cat_ID('Saúde');
      $category_link = get_category_link($cat_id);
      $category_name = get_cat_name($cat_id);
      ?>
      <h3 class="title-section-two"><?php echo $category_name; ?></h3>
      <div class="row">
        <?php
        // query_posts('cat=4', 'posts_per_page=3');
        // $id_category = '18';

        $posts_per_page = 4;

        $args = array('posts_per_page' => $posts_per_page, 'cat' => $cat_id);
        $query = new WP_Query($args);
        if (have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>
            <div class="col-lg-6 mb-4">
              <article class="d-flex">
                <header>
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                  </a>
                </header>
                <div class="content">
                  <p class="tag">
                    <?php

                    // echo $category_name; // It will print your category name
                    ?>
                    <a href="<?php echo $category_link; ?>">
                      <?php echo $category_name; ?>
                    </a>
                  </p>
                  <h2>
                    <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                  </h2>
                  <small>Publicado em: <?php echo get_the_date(); ?></small>
                  <p class="text">
                    <a href="<?php the_permalink(); ?>">
                      <?php echo wp_trim_words(get_the_content(), 20); ?>
                    </a>
                  </p>
                  <p>
                    <a class="btn btn-more" href="<?php the_permalink(); ?>">leia mais</a>
                  </p>
                </div>
              </article>
            </div>
        <?php
          // the_content();
          endwhile;
        else :
          _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif;
        wp_reset_query();
        ?>
      </div>
    </section>
  </main>
  <footer>

    <?php wp_footer(); ?>

    <script>
      function openMenu() {
        menu = document.querySelector('.menu-float');
        menu.classList.toggle('menu-close');

        button = document.querySelector('#button-menu-icon');

        if (button.className === 'fa fa-bars') {
          button.classList.remove('fa-bars');
          button.classList.add('fa-close');
        } else {
          button.classList.remove('fa-close');
          button.classList.add('fa-bars');
        }
      }
    </script>
  </footer>
</body>

</html>