<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <title>Justica - Lawyer and Attorney Website Template</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="160x160">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Justica - Lawyer and Attorney Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrapper">
        <div id="topbar" class="topbar-noborder">
            <div class="container">
                <div class="topbar-left sm-hide">
                    <span class="topbar-widget tb-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </span>
                </div>
                <div class="topbar-right">
                    <div class="topbar-right">
                        <span class="topbar-widget"><a href="#">Política de Privacidade</a></span>
                        <span class="topbar-widget"><a href="#">Solicitar cotação</a></span>
                        <span class="topbar-widget"><a href="#">FAQ</a></span>
                    </div>
                </div>
                <div class="clearfix"></div>
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                 @endif
            </div>
        </div>
        <!-- header begin -->
        <header class="transparent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="/">
                                        <img alt="" class="logo" src="images/logo-light.png"  width="220" height="60"/>
                                        <img alt="" class="logo-2" src="images/logo.png"  width="220" height="60" />
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu">
                                    <li><a href="/">Home</a>    
                                    </li>
                                    <li><a>Sobre nos</a>
                                        <ul>
                                            <li><a href="/sobre_nos">Sobre</a></li>
                                            <li><a href="/equipe">Equipe</a></li>
                                            <li><a href="/faq">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/areas">Área de Atuação </a>
                                    </li>
                                    <li><a href="/blog">blog</a>
                                    </li>
                                    <li><a href="/contato">Contato</a></li>
                                </ul>
                                <!-- mainmenu close -->
                            </div>
                            <div class="de-flex-col">
                            <button type="button" class="btn btn-outline-secondary ">Solicite analisis</button>
                            <div class="h-phone md-hide"><span>Precisa &nbsp;de auxilio?</span><i class="fa fa-phone"></i>(41)36187989</div>
                                <span id="menu-btn"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section aria-label="section" class="jarallax vh-100 no-padding text-light">
                <!-- @if(session()->has('message'))
                <p class="alert alert-success"> {{ session()->get('message') }}</p>
                @endif -->
                <img src="images/background/5.png" class="jarallax-img" alt="">
                <div class="v-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h3 class="id-color wow fadeInUp" data-wow-delay=".4s">Precisa de ajuda fiscal?</h3>
                                <h1 class="wow fadeInUp" data-wow-delay=".6s">Conheça nossas soluções de revisões fiscais</h1>
                                <p class="lead wow fadeInUp" data-wow-delay=".8s">Vai continuar deixando o dinheiro da sua empresa na mesa até quando?.</p>
                                <div class="spacer-20"></div>
                                <a class="btn-custom wow fadeInUp" data-wow-delay="1s" href="/contato">Contate-nos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section aria-label="section" class="no-padding bg-color">
                <div class="container-fluid">
                    <div class="row no-gutters align-items-center" style="background-color:#0c2022">
                        <div class="col-lg-3 col-md-6 text-center text-light">
                            <h3 class="padding40 no-margin">Área de Atuação</h3>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="feature-box f-boxed style-3 text-center">
                                <i class="id-color icofont-worker"></i>
                                <div class="text" nowrap>
                                    <h4>Recuperação de Crédito Previdenciário</h4>
                                    A recuperação de crédito do INSS possibilita reduzir os custos envolvendo o pagamento de tributos e, assim, melhorar a saúde financeira do negócio;
                                </div>
                                <i class="wm icofont-worker"></i>
                                <div class="spacer-single"></div>
                                <a href="#" class="btn-custom btn-black">Lẽr mais</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="feature-box f-boxed style-3 text-center">
                                <i class="id-color icofont-medical-sign-alt"></i>
                                <div class="text" nowrap>
                                    <h4>Recuperação de Crédito <br>Fiscal</h4>
                                    Brasil, recordista mundial na tributação de empresas. Ranking da OCDE mostra como o setor produtivo deve estar atento à revisão fiscal e à recuperação...
                                </div>
                                <i class="wm icofont-medical-sign-alt"></i>
                                <div class="spacer-single"></div>
                                <a href="#" class="btn-custom btn-black">Lẽr mais</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="feature-box f-boxed style-3 text-center">
                                <i class="id-color icofont-law-order"></i>
                                <div class="text" nowrap>
                                    <h4>Depósitos <br> Recursais</h4>
                                    Quando uma empresa deseja recorrer de uma sentença desfavorável em um processo trabalhista é obrigada a efetuar judicialmente o depósito ...
                                </div>
                                <i class="wm icofont-law-order"></i>
                                <div class="spacer-single"></div>
                                <a href="#" class="btn-custom btn-black">Lẽr mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section-highlight" class="relative" data-bgcolor="#f2f2f2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <span class="p-title">Bem-Vindo</span><br>
                            <h2>
                            Reputação, <br>Respeito & Resultado!
                            </h2>
                            <div class="small-border sm-left"></div>
                        </div>
                        <div class="col-md-8">
                            <p>A Essencial Jus é uma consultoria fiscal que chega ao mercado atuando de maneira ágil, inovadora e multidisciplinar, através de tecnologia de ponta e profissionais qualificados. Com inquietude na busca por alternativas seguras e inovadoras, nossas soluções atendem as demandas reais dos nossos clientes.
                            </p>
                        </div>
                    </div>
                    <div class="spacer-double"></div>
                </div>
            </section>
            <section class="no-top relative z1000">
                <div class="container">
                    <div class="row mt-100">
                        <div class="col-md-4 wow fadeInRight" data-wow-delay=".2s">
                            <div class="mask">
                                <div class="cover">
                                    <div class="c-inner">
                                    
                                        <h3 style="color:#0c2022">Ebook Recuperação de Créditos Fiscais</h3>
                                        <p>Solução aplicável às empresas tributadas pelo Lucro Real e Lucro Presumido.</p>
                                        <div class="spacer20"></div>
                                        <a href="{{ asset('pdf/EbookRecuperacoesFiscais_EssencialJus_.pdf') }}"  target="_blank" class="btn-custom capsule">Download</a>
                                    </div>
                                </div>
                                <img src="images/services/1_1.png" alt="" class="img-responsive" />
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInRight" data-wow-delay=".4s">
                            <div class="mask">
                                <div class="cover">
                                    <div class="c-inner">
                                        <h3 style="color:#0c2022">Ebook Recuperação de Créditos Previdenciários</h3>
                                        <p>Temos assertividade e tecnologia mining tech para minerar, identificar, analisar e recuperar, com segurança e rapidez</p>
                                        <div class="spacer20"></div>
                                        <a href="{{ asset('pdf/Ebook_CreditosPrevidenciarios_.pdf') }}"  target="_blank" class="btn-custom capsule">Download</a>
                                    </div>
                                </div>
                                <img src="images/services/1_2.png" alt="" class="img-responsive" />
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInRight" data-wow-delay=".6s">
                            <div class="mask">
                                <div class="cover" style="color:#f5c88e;">
                                    <div class="c-inner" >
                                        <h3 style="color:#0c2022 !important;">Ebook Recuperação de Depósitos Recursais</h3>
                                        <p>Depósitos recursais são os valores que as empresas precisam disponibilizar junto à Justiça do Trabalho para recorrer nas ações trabalhistas.</p>
                                        <div class="spacer20"></div>
                                        <a href="{{ asset('pdf/EbookDepositosRecursaisEssencialJus.pdf') }}"  target="_blank" class="btn-custom capsule">Download</a>
                                    </div>
                                </div>
                                <img src="images/services/1_3.png" alt="" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-bgcolor="#0c2022">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 offset-lg-7">
                            <span class="p-title">Serviço</span><br>
                            <h2  style="color:white">
                                MINERAÇÃO DE CRÉDITOS TRIBUTÁRIOS
                            </h2>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <!-- <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Nossa Segurança</a>
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Our Expertise</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Our Firm</a>
                                </li> -->
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>EssencialJus através da Assertif possuem seguro de Erros e Omissões com a seguradora americana Berkley, através da corretora inglesa AON, e ainda promove o suporte na defesa administrativa e/ou judicial, caso exista alguma glosa dos créditos aprovados pela contratante e compensados pela Assertif. Vale destacar nosso conservadorismo e prudência, não tivemos nenhum caso de glosa até aqui.</p>
                                </div>
                                <!-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <p>Ad pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex. Aute sunt incididunt amet commodo est sint nisi deserunt pariatur do. Aliquip ex eiusmod voluptate exercitation cillum id incididunt elit sunt. Qui minim sit magna Lorem id et dolore velit Lorem amet exercitation duis deserunt. Anim id labore elit adipisicing ut in id occaecat pariatur ut ullamco ea tempor duis.</p>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <p>Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit aliquip nostrud. Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure officia elit do ipsum ullamco Lorem.</p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jarallax image-container col-md-6 pull-right">
                    <img src="images/background/9.png" class="jarallax-img" alt="">
                </div>
            </section>
            <section id="section-testimonial">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h2>TODAS AS ÁREAS DE ATUAÇÃO</h2>
                                <div class="small-border"></div>
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-3 text-center">
                            <p>Atuamos dentro das normas da LGPD tanto no diagnóstico e mapeamento de atividades de tratamento de dados pessoais quanto na adequação às normas legais.</p>
                        </div>
                        <div class="spacer-single"></div>
                        <div class="col-md-4">
                            <ul class="ul-style-2 wow fadeInRight" data-wow-delay=".2s">
                                <li>Revisão Fiscal para empresas de Lucro Presumido</li>
                                <li>Revisão Fiscal para empresas de Lucro Real</li>
                                <li>Revisão Previdenciária para empresas de Lucro Presumido</li>
                                <li>Revisão Previdenciária para empresas de Lucro Real</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="ul-style-2 wow fadeInRight" data-wow-delay=".4s">
                                <li>Recuperação de Depósitos Recursais</li>
                                <li>Compliance Tributário Fiscal</li>
                                <li>Oportunidades Tributárias</li>
                                <li>Consultoria Tributária</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="ul-style-2 wow fadeInRight" data-wow-delay=".6s">
                                <li>Consultivo Trabalhista</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section aria-label="section" style="background-color: rgb(12, 32, 34)">
                <div class="container">
                    <div class="row" >
                        <div class="col-md-12 text-center">
                            <h2 style="color: white">Nossa Equipe</h2>
                            <div class="small-border"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                            <div class="f-profile text-center">
                                <div class="fp-wrap f-invert">
                                    <div class="fpw-overlay">
                                        <div class="fpwo-wrap">
                                            <div class="fpwow-icons">
                                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fpw-overlay-btm"></div>
                                </div>
                                <h4 style="color: white">Josiane Schimiloski</h4>
                                Sócia Administrador
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".4s">
                            <!-- <div class="f-profile text-center">
                                <div class="fp-wrap f-invert">
                                    <div class="fpw-overlay">
                                        <div class="fpwo-wrap">
                                            <div class="fpwow-icons">
                                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fpw-overlay-btm"></div>
                                    <img src="images/team/2.jpg" class="fp-image img-fluid" alt="">
                                </div>
                                <h4>Sasha Welsh</h4>
                                Senior Partner
                            </div> -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".6s">
                            <div class="f-profile text-center">
                                <div class="fp-wrap f-invert">
                                    <div class="fpw-overlay">
                                        <div class="fpwo-wrap">
                                            <div class="fpwow-icons">
                                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fpw-overlay-btm"></div>
                                    
                                </div>
                                <h4 style="color: white">Daniel Schmidt</h4>
                                Sócio Administrador
                            </div>
                        </div>
                        <img src="images/background/nossaequipe.jpg" class="fp-image img-fluid" alt="">
                    </div>
                </div>
            </section>
            <section aria-label="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <h2>BLOG</h2>
                                <div class="small-border"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="bloglist item">
                                <div class="post-content">
                                    <div class="date-box">
                                        <div class="m">10</div>
                                        <div class="d">NOV</div>
                                    </div>
                                    <div class="post-image">
                                        <img alt="" src="images/news/1.jpg">
                                    </div>
                                    <div class="post-text">
                                        <span class="p-tagline">Law Firm</span>
                                        <h4><a href="news-single.html">The Lawyer European Awards shortlist<span></span></a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <span class="p-author">Fynley Wilkinson</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="bloglist item">
                                <div class="post-content">
                                    <div class="date-box">
                                        <div class="m">15</div>
                                        <div class="d">NOV</div>
                                    </div>
                                    <div class="post-image">
                                        <img alt="" src="images/news/2.jpg">
                                    </div>
                                    <div class="post-text">
                                        <span class="p-tagline">Law Firm</span>
                                        <h4><a href="news-single.html">Six firms that are setting the trend<span></span></a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <span class="p-author">Fynley Wilkinson</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="bloglist item">
                                <div class="post-content">
                                    <div class="date-box">
                                        <div class="m">20</div>
                                        <div class="d">NOV</div>
                                    </div>
                                    <div class="post-image">
                                        <img alt="" src="images/news/3.jpg">
                                    </div>
                                    <div class="post-text">
                                        <span class="p-tagline">Law Firm</span>
                                        <h4><a href="news-single.html">When it comes to law firm mergers<span></span></a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <span class="p-author">Fynley Wilkinson</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="widget">
                            <a href="/"><img alt="" class="img-fluid mb20" src="images/logo-light.png"></a>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>Av. República Argentina, 2275 – SALA 1205- Água Verde – Curitiba, Paraná CEP 80610260</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>+55(41)3618-7989</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contato@essencialjus.com</a></span>
                                <!-- <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span> -->
                            </address>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5 class="id-color mb20">Área de Atuação</h5>
                        <ul class="ul-style-2">
                            <li>Revisão Fiscal para empresas de Lucro Presumido</li>
                            <li>Revisão Fiscal para empresas de Lucro Real</li>
                            <li>Revisão Previdenciária para empresas de Lucro Presumido</li>
                            <li>Revisão Previdenciária para empresas de Lucro Real</li>
                            <li>Recuperação de Depósitos Recursais</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget">
                            <h5 class="id-color">Boletim de Notícias</h5>
                            <p>Inscreva-se em nossa newsletter para receber as últimas notícias, atualizações e ofertas especiais em sua caixa de entrada.</p>
                            <form action="{{ route('subscribe.send') }}" method="post">
                                @csrf       
                                <div class="col text-center">
                                    <input class="form-control" id="email" name="email" placeholder="Digite seu e-mail" type="text" /> <button type=submit><i class="fa fa-long-arrow-right"></i></button>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>Seu e-mail está seguro com a gente. Nós não fazemos spam.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                <p> &copy; Copyright 2022 - <a href="/">Essencial Jus </a> by <a href="https://modofuturo.com/">Modo Futuro</a></p>
                                </div>
                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="https://www.instagram.com/essencialjus"><i class="fa fa-instagram fa-lg"></i></a>
                                        <a href="https://www.facebook.com/profile.php?id=100087669453621"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://www.linkedin.com/company/essencial-jus/"><i class="fa fa-linkedin fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
        <div id="preloader">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    
    <style>
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
        font-size:30px;
            box-shadow: 2px 2px 3px #999;
        z-index:100;
        }

        .my-float{
            margin-top:16px;
        }
    </style>
    <a href="https://encurtador.com.br/aeyTW" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- Javascript Files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/enquire.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.plugin.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/jarallax.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/jarallax.js"></script>
    <script src="js/designesia.js"></script>
</body>

</html>