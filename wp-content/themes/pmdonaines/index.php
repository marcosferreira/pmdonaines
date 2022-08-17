<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
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

<body>
  <header>
    <div class="container-fluid accessibility bg-primary">
      <div class="container">
        <div class="navbar navbar-expand-lg d-flex justify-content-between align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Sistemas</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Webmail</a></li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">+A</a></li>
            <li class="nav-item"><a class="nav-link" href="#">-A</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Alto Contraste</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container menubar">
      <nav class="navbar navbar-expand-lg navbar-light bg-white rounded-top align-items-center pt-3 pb-3">
        <div class=" menu-logo d-flex justify-content-between align-items-center">
          <button class="btn button-menu m-1" onclick="openMenu()">
            <i class="fa fa-bars" aria-hidden="true"></i>
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

        <ul class="navbar-nav navbar-mobile justify-content-center align-items-center pt-2 pb-2">
          <li class="nav-item"><a class="nav-link" href="#">Acesso à Informação</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Carta de Serviços</a></li>
          <li class="nav-item"><a class="nav-link btn" href="https://transparencia.pmdonaines.pb.gov.br" target="_blank">Portal da Transparência</a></li>
        </ul>
      </nav>
    </div>
    <div class="menu-float menu-toggle">
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
                <h4>Coronavírus</h4>
              </li>
              <li><a href="#">Transparência Covid-19</a></li>
              <li><a href="#">Relatórios Covid-19</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <ul class="p-2">
              <li>
                <h4>Município</h4>
              </li>
              <li><a href="#">História do Município</a></li>
              <li><a href="#">Hino do Município</a></li>
              <li><a href="#">Feriados Municipais</a></li>
              <li><a href="#">Links Úteis</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <ul class="p-2">
              <li>
                <h4>Governo</h4>
              </li>
              <li><a href="#">A Prefeitura</a></li>
              <li><a href="#">O Prefeito</a></li>
              <li><a href="#">O Vice-prefeito</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <ul class="p-2">
              <li>
                <h4>Secretarias</h4>
              </li>
              <li><a href="#">Administração e Finanças</a></li>
              <li><a href="#">Assistência Social e Habitação</a></li>
              <li><a href="#">Cultura e Turismo</a></li>
              <li><a href="#">Educação e Cultura</a></li>
              <li><a href="#">Infraestrutura</a></li>
              <li><a href="#">Saúde</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <ul class="p-2">
              <li>
                <h4>Órgão</h4>
              </li>
              <li><a href="#">Gabinete de Prefeito</a></li>
              <li><a href="#">IMPRESP</a></li>
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
              <li><a href="#">Leis Municipais</a></li>
              <li><a href="#">Leis na Câmera Municipal</a></li>
              <li><a href="#">Decretos</a></li>
              <li><a href="#">Diário Oficial</a></li>
              <li><a href="#">Código Tributário</a></li>
              <li><a href="#">Regulamento da LAI</a></li>
              <li><a href="#">Lei Orgânica do Município</a></li>
              <li><a href="#">LDO</a></li>
              <li><a href="#">LOA</a></li>
              <li><a href="#">PPA</a></li>
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
            <a href="#">
              <div class="rounded-circle m-2">
                <span class="material-icons-outlined">
                  coronavirus
                </span>
              </div>
              Transparência Covid-19
            </a>
          </div>
          <div class="card-icon">
            <a href="#">
              <div class="rounded-circle m-2">
                <span class="material-icons-outlined">
                  info
                </span>
              </div>
              Acesso à Informação
            </a>
          </div>
          <div class="card-icon">
            <a href="#">
              <div class="rounded-circle m-2">
                <span class="material-icons-outlined">
                  manage_search
                </span>
              </div>
              Portal da Transparência
            </a>
          </div>
          <div class="card-icon">
            <a href="#">
              <div class="rounded-circle m-2">
                <span class="material-icons-outlined">
                  paid
                </span>
              </div>
              Portal do Contribuinte
            </a>
          </div>
          <div class="card-icon">
            <a href="#">
              <div class="rounded-circle m-2">
                <span class="material-icons-outlined">
                  feed
                </span>
              </div>
              Diário Oficial Municipal
            </a>
          </div>
          <div class="card-icon">
            <a href="#">
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
                    <p class="mt-3">Previna-se e tire suas dúvidas</p>
                    <a href="#" class="btn card-btn-more m-2">SAIBA MAIS</a>
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
                      <h4>2400</h4>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="rounded panel mt-1 p-3">
                      <small>
                        Total de 1ª doses aplicadas
                      </small>
                      <h4>2400</h4>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="rounded panel mt-1 p-3">
                      <small>
                        Total de 2ª doses aplicadas
                      </small>
                      <h4>2400</h4>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="rounded panel mt-1 p-3">
                      <small>
                        Percentual da população vacinada
                      </small>
                      <h4>2400</h4>
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
              <a href="#" class="w-100 h-100 btn btn-outlined mb-2">
                <span class="material-icons-outlined">
                  receipt_long
                </span>
                Nota Fiscal Eletronica
              </a>
            </div>
            <div class="col-lg-4 p-0">
              <a href="#" class="w-100 h-100 btn btn-outlined mb-2">
                <span class="material-icons-outlined">
                  manage_search
                </span>
                Transparência do Estado
              </a>
            </div>
            <div class="col-lg-4 p-0">
              <a href="#" class="w-100 h-100 btn btn-outlined mb-2">
                <span class="material-icons-outlined">
                  forum
                </span>
                Perguntas Frequentes
              </a>
            </div>
            <div class="col-lg-4 p-0">
              <a href="#" class="w-100 h-100 btn btn-outlined mb-2">
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
              <a href="#" class="w-100 h-100 btn btn-outlined mb-2">
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
              <a href="#" class="w-100 h-100 btn btn-outlined mb-2">
                <span class="material-icons-outlined">
                  grid_view
                </span>
                Sistemas Interno
              </a>
            </div>
            <div class="col-lg-4 p-0">
              <a href="#" class="w-100 h-100 btn btn-outlined mb-2">
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
                <a href="#">
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
                <a href="#" class="btn btn-sm roudend-pill">
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
      <div id="carouselInterval" class="carousel slide" data-ride="carousel">
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
    </section>
    <section class="container container-news-featured">
      <div class="row mb-4">
        <div class="col-lg-6">
          <article class="featured">
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
        </div>
        <div class="col-lg-6">
          <div class="row mb-4">
            <div class="col">
              <article>
                <a href="#">
                  <header>
                    <img class="" src="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/09/WhatsApp-Image-2021-09-23-at-13.29.57-1-1024x1024.jpeg" alt="">
                  </header>
                </a>
                <div class="content">
                  <p class="tag">
                    <a href="#">Saúde</a>
                  </p>
                  <h2>
                    <a href="#"> Oficina sobre fluxos e aprimoramento da integração da rede de serviços. </a>
                  </h2>
                </div>
              </article>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <article>
                <a href="#">
                  <header>
                    <img class="" src="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/09/WhatsApp-Image-2021-09-28-at-16.24.50-1024x1024.jpeg" alt="">
                  </header>
                </a>
                <div class="content">
                  <p class="tag">
                    <a href="#">Administração</a>
                  </p>
                  <h2>
                    <a href="#"> Veículos do Leilão desta sexta-feira. </a>
                  </h2>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="container container-news-more">
      <h3 class="title-section-two">Administração e Finanças</h3>
      <div class="row">
        <div class="col-lg-6 mb-4">
          <article class="d-flex">
            <header>
              <a href="#">
                <img class="rounded" src="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/09/WhatsApp-Image-2021-09-28-at-16.24.50-1024x1024.jpeg" alt="">
              </a>
            </header>
            <div class="content">
              <p class="tag">
                <a href="#">Administração</a>
              </p>
              <h2>
                <a href="#"> Veículos do Leilão desta sexta-feira. </a>
              </h2>
              <small>Publicado em: 07 de outubro de 2021</small>
              <p class="text">
                <a href="#">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. In eligendi sit ad commodi voluptatem pariatur, est adipisci neque eaque officiis rem sed officia doloremque, dolorum veritatis? Beatae rerum cupiditate fugiat!
                </a>
              </p>
              <p>
                <a class="btn btn-more" href="<?php echo get_home_url(); ?>">leia mais</a>
              </p>
            </div>
          </article>
        </div>
        <div class="col-lg-6 mb-4">
          <article class="d-flex">
            <header>
              <a href="#">
                <img class="rounded" src="https://pmdonaines.pb.gov.br/wp-content/uploads/2022/04/WhatsApp-Image-2022-04-26-at-10.23.26-1024x682.jpeg" alt="">
              </a>
            </header>
            <div class="content">
              <p class="tag">
                <a href="#">Educação</a>
              </p>
              <h2>
                <a href="#"> Reunião mensal com os gestores escolares da rede municipal de ensino.. </a>
              </h2>
              <small>Publicado em: 07 de outubro de 2021</small>
              <p class="text">
                <a href="#">
                  Na manhã desta terça-feira (26/04), ocorreu mais uma reunião mensal com os gestores escolares da rede municipal de ensino.

                  No momento, foi abordado as seguintes pautas: Organização do 2º Encontro Pedagógico; Entrega dos kits escolares aos discentes; Informações da Nutricionista da SEMED; Orientações da equipe de Coordenação Pedagógica.
                </a>
              </p>
              <p>
                <a class="btn btn-more" href="<?php echo get_home_url(); ?>">leia mais</a>
              </p>
            </div>
          </article>
        </div>
        <div class="col-lg-6 mb-4">
          <article class="d-flex">
            <header>
              <a href="#">
                <img class="rounded" src="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/09/WhatsApp-Image-2021-09-23-at-13.29.57-1-1024x1024.jpeg" alt="">
              </a>
            </header>
            <div class="content">
              <p class="tag">
                <a href="#">Administração</a>
              </p>
              <h2>
                <a href="#"> Veículos Veículos do Leilão desta sexta-feira. </a>
              </h2>
              <small>Publicado em: 07 de outubro de 2021</small>
              <p class="text">
                <a href="#">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. In eligendi sit ad commodi voluptatem pariatur, est adipisci neque eaque officiis rem sed officia doloremque, dolorum veritatis? Beatae rerum cupiditate fugiat!
                </a>
              </p>
              <p>
                <a class="btn btn-more" href="<?php echo get_home_url(); ?>">leia mais</a>
              </p>
            </div>
          </article>
        </div>

        <div class="col-lg-6 mb-4">
          <article class="d-flex">
            <header>
              <a href="#">
                <img class="rounded" src="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/09/WhatsApp-Image-2021-09-23-at-13.29.57-1-1024x1024.jpeg" alt="">
              </a>
            </header>
            <div class="content">
              <p class="tag">
                <a href="#">Administração</a>
              </p>
              <h2>
                <a href="#"> Veículos do Leilão desta sexta-feira. </a>
              </h2>
              <small>Publicado em: 07 de outubro de 2021</small>
              <p class="text">
                <a href="#">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. In eligendi sit ad commodi voluptatem pariatur, est adipisci neque eaque officiis rem sed officia doloremque, dolorum veritatis? Beatae rerum cupiditate fugiat!
                </a>
              </p>
              <p>
                <a class="btn btn-more" href="<?php echo get_home_url(); ?>">leia mais</a>
              </p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="container container-news-more">
      <h3 class="title-section-two">Assistência Social e Habitação</h3>
      <div class="row">
        <div class="col-lg-6 mb-4">
          <article class="d-flex">
            <header>
              <a href="#">
                <img class="rounded" src="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/09/WhatsApp-Image-2021-09-28-at-16.24.50-1024x1024.jpeg" alt="">
              </a>
            </header>
            <div class="content">
              <p class="tag">
                <a href="#">Administração</a>
              </p>
              <h2>
                <a href="#"> Veículos do Leilão desta sexta-feira. </a>
              </h2>
              <small>Publicado em: 07 de outubro de 2021</small>
              <p class="text">
                <a href="#">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. In eligendi sit ad commodi voluptatem pariatur, est adipisci neque eaque officiis rem sed officia doloremque, dolorum veritatis? Beatae rerum cupiditate fugiat!
                </a>
              </p>
              <p>
                <a class="btn btn-more" href="<?php echo get_home_url(); ?>">leia mais</a>
              </p>
            </div>
          </article>
        </div>
        <div class="col-lg-6 mb-4">
          <article class="d-flex">
            <header>
              <a href="#">
                <img class="rounded" src="https://pmdonaines.pb.gov.br/wp-content/uploads/2022/04/WhatsApp-Image-2022-04-26-at-10.23.26-1024x682.jpeg" alt="">
              </a>
            </header>
            <div class="content">
              <p class="tag">
                <a href="#">Educação</a>
              </p>
              <h2>
                <a href="#"> Reunião mensal com os gestores escolares da rede municipal de ensino.. </a>
              </h2>
              <small>Publicado em: 07 de outubro de 2021</small>
              <p class="text">
                <a href="#">
                  Na manhã desta terça-feira (26/04), ocorreu mais uma reunião mensal com os gestores escolares da rede municipal de ensino.

                  No momento, foi abordado as seguintes pautas: Organização do 2º Encontro Pedagógico; Entrega dos kits escolares aos discentes; Informações da Nutricionista da SEMED; Orientações da equipe de Coordenação Pedagógica.
                </a>
              </p>
              <p>
                <a class="btn btn-more" href="<?php echo get_home_url(); ?>">leia mais</a>
              </p>
            </div>
          </article>
        </div>
        <div class="col-lg-6 mb-4">
          <article class="d-flex">
            <header>
              <a href="#">
                <img class="rounded" src="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/09/WhatsApp-Image-2021-09-23-at-13.29.57-1-1024x1024.jpeg" alt="">
              </a>
            </header>
            <div class="content">
              <p class="tag">
                <a href="#">Administração</a>
              </p>
              <h2>
                <a href="#"> Veículos Veículos do Leilão desta sexta-feira. </a>
              </h2>
              <small>Publicado em: 07 de outubro de 2021</small>
              <p class="text">
                <a href="#">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. In eligendi sit ad commodi voluptatem pariatur, est adipisci neque eaque officiis rem sed officia doloremque, dolorum veritatis? Beatae rerum cupiditate fugiat!
                </a>
              </p>
              <p>
                <a class="btn btn-more" href="<?php echo get_home_url(); ?>">leia mais</a>
              </p>
            </div>
          </article>
        </div>

        <div class="col-lg-6 mb-4">
          <article class="d-flex">
            <header>
              <a href="#">
                <img class="rounded" src="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/09/WhatsApp-Image-2021-09-23-at-13.29.57-1-1024x1024.jpeg" alt="">
              </a>
            </header>
            <div class="content">
              <p class="tag">
                <a href="#">Administração</a>
              </p>
              <h2>
                <a href="#"> Veículos do Leilão desta sexta-feira. </a>
              </h2>
              <small>Publicado em: 07 de outubro de 2021</small>
              <p class="text">
                <a href="#">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. In eligendi sit ad commodi voluptatem pariatur, est adipisci neque eaque officiis rem sed officia doloremque, dolorum veritatis? Beatae rerum cupiditate fugiat!
                </a>
              </p>
              <p>
                <a class="btn btn-more" href="<?php echo get_home_url(); ?>">leia mais</a>
              </p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="container container-news-more">
      <h3 class="title-section-two">Educação e Desporto</h3>
      <div class="row">
        <div class="col-lg-6 mb-4">
          <article class="d-flex">
            <header>
              <a href="#">
                <img class="rounded" src="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/09/WhatsApp-Image-2021-09-28-at-16.24.50-1024x1024.jpeg" alt="">
              </a>
            </header>
            <div class="content">
              <p class="tag">
                <a href="#">Administração</a>
              </p>
              <h2>
                <a href="#"> Veículos do Leilão desta sexta-feira. </a>
              </h2>
              <small>Publicado em: 07 de outubro de 2021</small>
              <p class="text">
                <a href="#">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. In eligendi sit ad commodi voluptatem pariatur, est adipisci neque eaque officiis rem sed officia doloremque, dolorum veritatis? Beatae rerum cupiditate fugiat!
                </a>
              </p>
              <p>
                <a class="btn btn-more" href="<?php echo get_home_url(); ?>">leia mais</a>
              </p>
            </div>
          </article>
        </div>
        <div class="col-lg-6 mb-4">
          <article class="d-flex">
            <header>
              <a href="#">
                <img class="rounded" src="https://pmdonaines.pb.gov.br/wp-content/uploads/2022/04/WhatsApp-Image-2022-04-26-at-10.23.26-1024x682.jpeg" alt="">
              </a>
            </header>
            <div class="content">
              <p class="tag">
                <a href="#">Educação</a>
              </p>
              <h2>
                <a href="#"> Reunião mensal com os gestores escolares da rede municipal de ensino.. </a>
              </h2>
              <small>Publicado em: 07 de outubro de 2021</small>
              <p class="text">
                <a href="#">
                  Na manhã desta terça-feira (26/04), ocorreu mais uma reunião mensal com os gestores escolares da rede municipal de ensino.

                  No momento, foi abordado as seguintes pautas: Organização do 2º Encontro Pedagógico; Entrega dos kits escolares aos discentes; Informações da Nutricionista da SEMED; Orientações da equipe de Coordenação Pedagógica.
                </a>
              </p>
              <p>
                <a class="btn btn-more" href="<?php echo get_home_url(); ?>">leia mais</a>
              </p>
            </div>
          </article>
        </div>
        <div class="col-lg-6 mb-4">
          <article class="d-flex">
            <header>
              <a href="#">
                <img class="rounded" src="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/09/WhatsApp-Image-2021-09-23-at-13.29.57-1-1024x1024.jpeg" alt="">
              </a>
            </header>
            <div class="content">
              <p class="tag">
                <a href="#">Administração</a>
              </p>
              <h2>
                <a href="#"> Veículos Veículos do Leilão desta sexta-feira. </a>
              </h2>
              <small>Publicado em: 07 de outubro de 2021</small>
              <p class="text">
                <a href="#">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. In eligendi sit ad commodi voluptatem pariatur, est adipisci neque eaque officiis rem sed officia doloremque, dolorum veritatis? Beatae rerum cupiditate fugiat!
                </a>
              </p>
              <p>
                <a class="btn btn-more" href="<?php echo get_home_url(); ?>">leia mais</a>
              </p>
            </div>
          </article>
        </div>

        <div class="col-lg-6 mb-4">
          <article class="d-flex">
            <header>
              <a href="#">
                <img class="rounded" src="https://pmdonaines.pb.gov.br/wp-content/uploads/2021/09/WhatsApp-Image-2021-09-23-at-13.29.57-1-1024x1024.jpeg" alt="">
              </a>
            </header>
            <div class="content">
              <p class="tag">
                <a href="#">Administração</a>
              </p>
              <h2>
                <a href="#"> Veículos do Leilão desta sexta-feira. </a>
              </h2>
              <small>Publicado em: 07 de outubro de 2021</small>
              <p class="text">
                <a href="#">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. In eligendi sit ad commodi voluptatem pariatur, est adipisci neque eaque officiis rem sed officia doloremque, dolorum veritatis? Beatae rerum cupiditate fugiat!
                </a>
              </p>
              <p>
                <a class="btn btn-more" href="<?php echo get_home_url(); ?>">leia mais</a>
              </p>
            </div>
          </article>
        </div>
      </div>
    </section>
  </main>
  <footer>

    <?php wp_footer(); ?>

    <script>
      function openMenu() {
        menu = document.querySelector('.menu-float');
        menu.classList.toggle('menu-toggle')
      }
    </script>
  </footer>
</body>

</html>