<?php
/* Smarty version 3.1.33, created on 2019-10-22 16:42:09
  from 'C:\wamp64\www\dtc11\themes\dtc-theme\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5daf2351059835_02698709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86f9ca440584c6650a71a16f41871c9453e1647b' => 
    array (
      0 => 'C:\\wamp64\\www\\dtc11\\themes\\dtc-theme\\templates\\page.tpl',
      1 => 1571758605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5daf2351059835_02698709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12711966895daf23510516e9_12899189', 'content');
}
/* {block 'page_content'} */
class Block_18961025765daf2351054468_10026441 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

                        <?php
}
}
/* {/block 'page_content'} */
/* {block 'content'} */
class Block_12711966895daf23510516e9_12899189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12711966895daf23510516e9_12899189',
  ),
  'page_content' => 
  array (
    0 => 'Block_18961025765daf2351054468_10026441',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Digital Training Center</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon">
        <link href="./img/favicon.ico" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
              rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="../lib/style.css" rel="stylesheet">

        <!-- =======================================================
          Theme Name: Rapid
          Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
          Author: BootstrapMade.com
          License: https://bootstrapmade.com/license/
        ======================================================= -->
    </head>

    <body>
    <!--==========================
    Header
    ============================-->
    <header id="header">

        <div id="topbar">
            <div class="container">
                <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->

                <a href="#header" class="scrollto"><img src="/dtc11/img/dtc/logo-digital.png" alt="" class="img-fluid"></a>
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#intro">ACCUEIL</a></li>
                    <li><a href="#about">QUI SOMMES NOUS</a></li>
                    <li><a href="#team">equipe</a></li>
                    <li><a href="#portfolio">GALLERIE</a></li>
                    <li><a href="#clients">PARTENAIRES</a></li>
                    <li><a href="#footer">CONTACT</a></li>
                </ul>
            </nav><!-- .main-nav -->

        </div>
    </header><!-- #header -->

    <!--==========================
      Intro Section
    ============================-->

    <section id="intro" class="clearfix">
        <div class="transp">
            <div class="container d-flex h-100">
                <div class="row justify-content-center align-self-center">
                    <div class="col-md-9 intro-info order-md-first order-last">
                        <h2 style=" color: #21A29E;     word-spacing: 7px;  letter-spacing: 0.2rem; "> DIGITAL TRAINING
                            CENTER PAR DECOD.FR</h2>
                        <h1 style="color: white ;     word-spacing: 7px; letter-spacing: 0.2rem; font-weight: bold;">LA
                            PREMIERE ECOLE 3D INTÉGRÉE
                            DANS L'ENTREPRISE EN TUNISIE !</h1>
                        <div>
                            <a href="#about" class="btn-get-started scrollto">REJOIGNER-NOUS</a>
                        </div>
                    </div>

                    <div class="col-md-3 intro-img order-md-last order-first" style="padding-top: 80px;">
                        <img src="/dtc11/img/dtc/logo-digital.png" alt="" class="img-fluid"
                             STYLE="margin: auto ;   margin-left:28px;">
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #intro -->

    <main id="main">

        <!--==========================
          QUI SOMMES NOUS Section
        ============================-->
        <section id="about">

            <div class="container-fluid">
                <div class="row" style="height: 30rem;">

                    <div class="col-lg-6 col-md-6" style="padding: 0px!important;">



                        <iframe width="100%" height="100%"  src="https://www.youtube.com/embed/AgbkpAoRpjg" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                    </div>

                    <div class="col-lg-6 col-md-6 description1">
                        <div>
                            <img src="/dtc11/img/dtc/01.png" style="    width: 18%;">
                            <h5 style="color: #21A29E; font-weight: 600;font-size: 24px;">QUI SOMMES NOUS</h5>
                            <h3 style="color: #21A29E ;     text-shadow: 0px 1px grey;">Avec Mr Thomas Griggoin<br> Fondateur de Decod.</h3>
                            <p style="   font-size: 20px;">Changeons le monde du 3D en Tunisie , écouter Mr<br> Thomas
                                Giffoin le fondateur de Decod pour<br> plus d'information !</p>
                        </div>


                    </div>
                </div>

                <div class="row" style="    height: 30rem;">

                    <div class="col-lg-6 col-md-6 description2">
                        <div>
                            <img src="/dtc11/img/dtc/02.png" style="    width: 18%;">
                            <h5 style="color: #21A29E; font-weight: 600;font-size: 24px;">A PROPOS DE DTC</h5>
                            <h3 style="color: #21A29E; text-shadow: 0px 1px grey; ">Avec Sami Ben Attia General<br> Manager de 3Dfordeco</h3>
                            <p style="color: #C7C4C4   ;  font-size: 20px;"> Anticiper et Mr Sami Ben Attia General Manager <br>
                                de 3Dfordeco pour plus d'information !</p>


                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6" style="padding: 0px!important;">

                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/lvsTM2DMrZw"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                    </div>


                </div>


            </div>

        </section><!-- #about -->


        <!--==========================
          Services Section
        ============================-->
        <section class="background_blue">
            <section class="background_blue2">


                <header class="section-header"><br><br>
                    <h3 style="color: white !important;">NOS MODULES</h3>
                    <p style="color: white !important;">Découvrir le monde de 3D avec DTC</p>
                </header>

                <div class="row">

                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class=""><img src="/dtc11/img/dtc/Modules/Modelisation.png"
                                               style="color: #ff689b;"></div>
                            <br>
                            <h4 class="title" style="color: white !important;">Modelisation</h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class=""><img src="/dtc11/img/dtc/Modules/Textures.png"
                                               style="color: #e98e06;"></div>
                            <br>
                            <h4 class="title" style="color: white !important;">Textures</h4>
                            <p class="description"></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class=""><img src="/dtc11/img/dtc/Modules/Lumières.png"
                                               style="color: #3fcdc7;"></div>
                            <br>
                            <h4 class="title" style="color: white !important;">Lumières</h4>
                            <p class="description"></p>
                        </div>
                    </div>


                </div>

            </section>
        </section>

        <section id="team" class="section-bg">
            <div class="container">
                <div class="section-header">
                    <h3>Un Bon résultat est toujours basé sur la bonne fondation </h3>
                    <p>RENCONTRER NOS EXPERTS</p>
                </div>

                <div class="row">

                    <div class="col-lg-2 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="/dtc11/img/dtc/Team/bilel.png" class="img-fluid" alt="" style="cursor: pointer">

                            <div class="member-info-content">
                                <h4>Bilel TEBOURBI</h4>
                                <span>Responsable du centre </span>
                                <div class="social">
                                    <a href="" style="color: #0a98c0"><i class="fa fa-twitter"></i></a>
                                    <a href="" style="color: #4267B2"><i class="fa fa-facebook"></i></a>
                                    <a href="" style="color:#b23121"><i class="fa fa-google-plus"></i></a>
                                    <a href="" style="color:#2867B2"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="/dtc11/img/dtc/Team/aymentrabelsi.png" class="img-fluid" alt=""
                                 style="cursor: pointer">

                            <div class="member-info-content">
                                <h4>Aymen TRABELSI</h4>
                                <span>Formateur </span>
                                <div class="social">
                                    <a href="" style="color: #0a98c0"><i class="fa fa-twitter"></i></a>
                                    <a href="" style="color: #4267B2"><i class="fa fa-facebook"></i></a>
                                    <a href="" style="color:#b23121"><i class="fa fa-google-plus"></i></a>
                                    <a href="" style="color:#2867B2"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="member">
                            <img src="/dtc11/img/dtc/Team/marwa.png" class="img-fluid" alt="" style="cursor: pointer">

                            <div class="member-info-content">
                                <h4>Marwa Bayoudh </h4>
                                <span>Formatrice</span>
                                <div class="social">
                                    <a href="" style="color: #0a98c0"><i class="fa fa-twitter"></i></a>
                                    <a href="" style="color: #4267B2"><i class="fa fa-facebook"></i></a>
                                    <a href="" style="color:#b23121"><i class="fa fa-google-plus"></i></a>
                                    <a href="" style="color:#2867B2"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="member">
                            <img src="/dtc11/img/dtc/Team/skan.png" class="img-fluid" alt="" style="cursor: pointer">

                            <div class="member-info-content">
                                <h4>Skander Mallouki</h4>
                                <span>Formateur</span>
                                <div class="social">
                                    <a href="" style="color: #0a98c0"><i class="fa fa-twitter"></i></a>
                                    <a href="" style="color: #4267B2"><i class="fa fa-facebook"></i></a>
                                    <a href="" style="color:#b23121"><i class="fa fa-google-plus"></i></a>
                                    <a href="" style="color:#2867B2"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="member">
                            <img src="/dtc11/img/dtc/Team/hamza.png" class="img-fluid" alt="" style="cursor: pointer">

                            <div class="member-info-content">
                                <h4>Hamza Rouini</h4>
                                <span>Formateur</span>
                                <div class="social">
                                    <a href="" style="color: #0a98c0"><i class="fa fa-twitter"></i></a>
                                    <a href="" style="color: #4267B2"><i class="fa fa-facebook"></i></a>
                                    <a href="" style="color:#b23121"><i class="fa fa-google-plus"></i></a>
                                    <a href="" style="color:#2867B2"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #equipe -->

        <!--==========================
            GALLERIE Section
          ============================-->
        <section id="portfolio" class="section-bg">
            <div class="container-fluid">

                <header class="section-header">
                    <h3 class="section-title"> GALLERIE</h3>
                    <p> Les Réalisations de nos condidats</p>
                </header>

                <!--            <div class="row">
                                <div class="col-lg-12">
                                    <ul id="portfolio-flters">
                                        <li data-filter="*" class="filter-active">All</li>
                                        <li data-filter=".filter-app">SCENE</li>
                                        <li data-filter=".filter-card">CANAPES</li>
                                             <li data-filter=".filter-web">Web</li>
                                    </ul>
                                </div>
                            </div> !-->

                <div class="row portfolio-container-fluid">

                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/dtc11/img/dtc/Galleries/1.jpg" class="img-fluid2" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">App 1</a></h4>
                                <p>App</p>
                                <div>
                                    <a href="/dtc11/img/dtc/Galleries/1.jpg" data-lightbox="GALLERIE" data-title="App 1"
                                       class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <img src="/dtc11/img/dtc/Galleries/2.jpg" class="img-fluid2" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Web 3</a></h4>
                                <p>Web</p>
                                <div>
                                    <a href="/dtc11/img/dtc/Galleries/2.jpg" class="link-preview"
                                       data-lightbox="GALLERIE"
                                       data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <img src="/dtc11/img/dtc/Galleries/3.jpg" class="img-fluid2" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">App 2</a></h4>
                                <p>App</p>
                                <div>
                                    <a href="/dtc11/img/dtc/Galleries/3.jpg" class="link-preview"
                                       data-lightbox="GALLERIE"
                                       data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="/dtc11/img/dtc/Galleries/4.jpg" class="img-fluid2" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Card 2</a></h4>
                                <p>Card</p>
                                <div>
                                    <a href="/dtc11/img/dtc/Galleries/4.jpg" class="link-preview"
                                       data-lightbox="GALLERIE"
                                       data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <img src="/dtc11/img/dtc/Galleries/5.jpg" class="img-fluid2" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Web 2</a></h4>
                                <p>Web</p>
                                <div>
                                    <a href="/dtc11/img/dtc/Galleries/5.jpg" class="link-preview"
                                       data-lightbox="GALLERIE"
                                       data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <img src="/dtc11/img/dtc/Galleries/6.jpg" class="img-fluid2" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">App 3</a></h4>
                                <p>App</p>
                                <div>
                                    <a href="/dtc11/img/dtc/Galleries/6.jpg" class="link-preview"
                                       data-lightbox="GALLERIE"
                                       data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="/dtc11/img/dtc/Galleries/7.jpg" class="img-fluid2" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Card 1</a></h4>
                                <p>Card</p>
                                <div>
                                    <a href="/dtc11/img/dtc/Galleries/7.jpg" class="link-preview"
                                       data-lightbox="GALLERIE"
                                       data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <img src="/dtc11/img/dtc/Galleries/8.jpg" class="img-fluid2" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Card 3</a></h4>
                                <p>Card</p>
                                <div>
                                    <a href="/dtc11/img/dtc/Galleries/8.jpg" class="link-preview"
                                       data-lightbox="GALLERIE"
                                       data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <img src="/dtc11/img/dtc/Galleries/9.jpg" class="img-fluid2" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Card 3</a></h4>
                                <p>Card</p>
                                <div>
                                    <a href="/dtc11/img/dtc/Galleries/9.jpg" class="link-preview"
                                       data-lightbox="GALLERIE"
                                       data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <img src="/dtc11/img/dtc/Galleries/10.jpg" class="img-fluid2" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Web 1</a></h4>
                                <p>Web</p>
                                <div>
                                    <a href="/dtc11/img/dtc/Galleries/10.jpg" class="link-preview"
                                       data-lightbox="GALLERIE"
                                       data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <img src="/dtc11/img/dtc/Galleries/11.jpg" class="img-fluid2" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Web 1</a></h4>
                                <p>Web</p>
                                <div>
                                    <a href="/dtc11/img/dtc/Galleries/11.jpg" class="link-preview"
                                       data-lightbox="GALLERIE"
                                       data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <img src="/dtc11/img/dtc/Galleries/12.jpg" class="img-fluid2" alt="">
                            <div class="portfolio-info">
                                <h4><a href="#">Web 1</a></h4>
                                <p>Web</p>
                                <div>
                                    <a href="/dtc11/img/dtc/Galleries/12.jpg" class="link-preview"
                                       data-lightbox="GALLERIE"
                                       data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i
                                                class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #GALLERIE -->

        <section id="why-us" class="wow fadeIn">
            <div class="container-fluid">

                <header class="section-header">
                    <h3>POUR CHANGER LE MONDE DU 3D, SOON !</h3>

                </header>

            </div>

            <!-- <div class="container">
             <div class="row counters">

               <div class="col-lg-3 col-6 text-center">
                 <span data-toggle="counter-up">274</span>
                 <p>Clients</p>
               </div>

               <div class="col-lg-3 col-6 text-center">
                 <span data-toggle="counter-up">421</span>
                 <p>Projects</p>
               </div>

               <div class="col-lg-3 col-6 text-center">
                 <span data-toggle="counter-up">1,364</span>
                 <p>Hours Of Support</p>
               </div>

               <div class="col-lg-3 col-6 text-center">
                 <span data-toggle="counter-up">18</span>
                 <p>Hard Workers</p>
               </div>

             </div>

           </div> !-->
        </section>

        <!--==========================
          Call To Action Section
        ============================-->
        <!--   <section id="call-to-action" class="wow fadeInUp">
             <div class="container">
               <div class="row">
                 <div class="col-lg-9 text-center text-lg-left">
                   <h3 class="cta-title">Call To Action</h3>
                   <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                 </div>
                 <div class="col-lg-3 cta-btn-container text-center">
                   <a class="cta-btn align-middle" href="#">Call To Action</a>
                 </div>
               </div> !-->

        </div>
        </section><!-- #call-to-action -->

        <!--==========================
          Features Section
        ============================-->
        <section id="">
            <div class="container">

                <div class="row feature-item">

                    <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
                        <h4>APP TESTING</h4>
                        <p style="    line-height: 2.6;">
                            DTC c’est une équipe transdisciplinaire composée de professionnels de la 3D, du design et de
                            l’amménagement. Leurs compétences sont mobilisées individuellement ou collectivement.
                        </p>

                    </div>


                    <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                        <h4>AR/VR !</h4>
                        <p style="    line-height: 2.6;">
                            DTC c’est une équipe transdisciplinaire composée de professionnels de 3D, du design et de
                            l’amménagement. Leurs compétences sont mobilisées individuellement ou collectivement.
                        </p>

                    </div>
                </div>

                <div class="row feature-item mt-5 pt-5">
                    <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
                        <img src="/dtc11/img/dtc/centre.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 wow fadeInUp">
                        <img src="/dtc11/img/dtc/team.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- #about -->


        <!--==========================
          Clients Section
        ============================-->


        <!--==========================
          equipe Section
        ============================-->


        <!--==========================
          Clients Section
        ============================-->
        <section id="clients" class="wow fadeInUp">
            <div class="container">

                <header class="section-header">
                    <h3>NOS PARTENAIRES</h3>
                </header>

                <div class="owl-carousel clients-carousel">
                    <img src="/dtc11/img/dtc/3dfordeco_logo.png" alt="">
                    <img src="/dtc11/img/dtc/logo_Decod.png" alt="">
                    <img src="/dtc11/img/dtc/3dfordeco_logo.png" alt="">
                    <img src="/dtc11/img/dtc/logo_Decod.png" alt="">
                    <img src="/dtc11/img/dtc/3dfordeco_logo.png" alt="">
                    <img src="/dtc11/img/dtc/logo_Decod.png" alt="">

                </div>

            </div>
        </section><!-- #clients -->


        <!--==========================
          Pricing Section
        ============================-->
        <section id="pricing" class="wow fadeInUp section-bg">

            <div class="container">

                <header class="section-header">
                    <h3>NOS PROGRAMMES</h3>

                </header>

                <div class="row flex-items-xs-middle flex-items-xs-center">

                    <!-- Basic Plan  -->
                    <div class="col-xs-12 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3><span class="currency">Formation Basique</span></h3>
                            </div>
                            <div class="card-block">
                                <h5 class="card-title">
                                    80 heures de formation a 500 TND suivi d'un test d’évaluation pour accéder a la
                                    formation avancée

                                </h5>


                            </div>
                        </div>
                    </div>

                    <!-- Regular Plan  -->
                    <div class="col-xs-12 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3><span class="currency">Formation Avancée</span></h3>
                            </div>
                            <div class="card-block">
                                <h5 class="card-title">
                                    320 heures, <span class="card-title" style="color: red">
                                        financé * en intégralité par 3DFordéco
                                    </span> , a condition de réussir le test technique et l'entretient
                                </h5>


                            </div>
                        </div>

                    </div>


                    <!-- Premium Plan  -->


                </div>
                <br>
                <p style="color: red"><i class="fa fa-warning" style="font-size:30px;color:#ff0000;"></i> Financé * :
                    sous
                    réserve d'un engagement de deux ans avec le studio 3Dfordeco.</p>
            </div>

        </section><!-- #pricing -->

        <!--==========================
          Frequently Asked Questions Section
        ============================-->
        <section id="faq">
            <div class="container">
                <header class="section-header">
                    <h3>les questions les plus posées</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </header>

                <ul id="faq-list" class="wow fadeInUp">
                    <li>
                        <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus
                            urna duis? <i class="ion-android-remove"></i></a>
                        <div id="faq1" class="collapse" data-parent="#faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                non.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim
                            nunc faucibus a pellentesque? <i class="ion-android-remove"></i></a>
                        <div id="faq2" class="collapse" data-parent="#faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing
                            elit pellentesque habitant morbi? <i class="ion-android-remove"></i></a>
                        <div id="faq3" class="collapse" data-parent="#faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam
                            eleifend mi in nulla? <i class="ion-android-remove"></i></a>
                        <div id="faq4" class="collapse" data-parent="#faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam
                            aliquam sem et tortor consequat? <i class="ion-android-remove"></i></a>
                        <div id="faq5" class="collapse" data-parent="#faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare.
                            Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="ion-android-remove"></i></a>
                        <div id="faq6" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus.
                                Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                </ul>

            </div>
        </section><!-- #faq -->

    </main>

    <!--==========================
      Footer
    ============================-->
    <footer id="footer" class="section-bg">
        <div class="footer-top">
            <div class="container">

                <div class="row">

                    <div class="col-lg-7">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18961025765daf2351054468_10026441', 'page_content', $this->tplIndex);
?>

                        <div class="form">

                            <h2 style="color: white"><b>APPELER NOTRE RESPONSABLE
                                    BILEL TEBOURBI SUR<span style="color: #0a98c0"> +216 29 901 386 </span></b></h2>
                            <h6 style="color: white">Contacter notre responsable du centre Bilel Tebourbi , il est
                                disponible pour vous répondre a tout moment et pour toutes informations ,<span
                                        style="color: #0a98c0">Inscrivez-vous </span></h6>
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                           placeholder="Your Name"
                                           data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Your Email" data-rule="email"
                                           data-msg="Please enter a valid email"/>
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                           placeholder="Subject" data-rule="minlen:4"
                                           data-msg="Please enter at least 8 chars of subject"/>
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                          data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>

                                <div id="sendmessage">Your message has been sent. Thank you!</div>
                                <div id="errormessage"></div>

                                <div class="text-center">
                                    <button type="submit" title="Send Message">Send Message</button>
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="col-lg-5">

                        <img src="/dtc11/img/dtc/directeur.png" class="bilel">

                    </div>


                </div>

            </div>
        </div>
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="100%" height="500" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=Digital%20Training%20Center&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://www.embedgooglemap.net/blog/elementor-pro-discount-code-review/"></a></div>
            <style>.mapouter {
                    position: relative;
                    text-align: center;
                    height: 500px;
                    width: 100%;

                }

                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 500px;
                    width: 100%;
                }</style>
        </div>
        <div class="container">
            <div class="copyright">
                Copyright @ 2019 Digital Center Training. All Rights Reserved
            </div>

        </div>
    </footer>
    <!-- #footer -->


    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <?php echo '<script'; ?>
 src="../lib/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../lib/jquery/jquery-migrate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../lib/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../lib/easing/easing.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../lib/mobile-nav/mobile-nav.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../lib/wow/wow.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../lib/waypoints/waypoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../lib/counterup/counterup.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../lib/owlcarousel/owl.carousel.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../lib/isotope/isotope.pkgd.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../lib/lightbox/js/lightbox.min.js"><?php echo '</script'; ?>
>
    <!-- Contact Form JavaScript File -->
    <?php echo '<script'; ?>
 src="../lib/contactform/contactform.js"><?php echo '</script'; ?>
>

    <!-- Template Main Javascript File -->
    <?php echo '<script'; ?>
 src="../js/main.js"><?php echo '</script'; ?>
>

    </body>
    </html>
<?php
}
}
/* {/block 'content'} */
}
