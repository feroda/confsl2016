<?php defined('_JEXEC') or die('Restricted access');

$base_url = $this->baseurl."/templates/".$this->template;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ConfSL 2016</title>

    <link href="<?php echo $base_url; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/css/stylish-portfolio.css" rel="stylesheet">

    <link href="<?php echo $base_url; ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/slick/slick-theme.css"/>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >ConfSL 2016</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#guests" onclick = $("#menu-close").click(); >Ospiti</a>
            </li>
            <li>
                <a href="#schedule" onclick = $("#menu-close").click(); >Sessioni</a>
            </li>
            <!-- <li>
                <a href="#map" onclick = $("#menu-close").click(); >Dove</a>
            </li> -->
            <li>
                <a href="#sponsors" onclick = $("#menu-close").click(); >Credits</a>
            </li>
            <!-- <li>
                <a href="<?php echo $this->baseurl; ?>/paper-submission">Paper submission</a> 
            </li>
            <li>
                <a href="<?php echo $this->baseurl; ?>/sponsorships">Come sponsorizzare</a> 
            </li>
            <li>
                <a href="<?php echo $this->baseurl; ?>/past-editions">Edizioni passate</a> 
            </li>
            <li>
                <a href="https://it.wikipedia.org/w/index.php?title=Conferenza_Italiana_sul_Software_Libero" target="_blank">CONFSL su Wikipedia</a> 
            </li> -->
        </ul>
    </nav>

    <header id="top" class="header">
        <div class="text-vertical-center">
            <a href="#about" class="btn btn-dark btn-lg">
                <img src="<?php echo $base_url; ?>/img/confsl.png" />
                <h1>ConfSL 2016</h1>
                <h3>24/25/26 Giugno - Palermo</h3>
            </a>
        </div>
    </header>

    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>... Roadmap to the Future...</h2>
                    <hr class="small">
                </div>

                <div class="col-lg-12 text-center">
                    <p class="lead">Dal 2007 la Conferenza Italiana sul Software Libero è il punto di incontro della vasta comunità freesoftware italiana: una occasione per scoprire, approfondire, e magari cambiare il mondo del software libero.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="guests" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Ospiti</h2>
                    <hr class="small">
                </div>
            </div>

            <div class="row">
                <div class="responsive-carousel">
                    <div class="col-lg-3">
                        <p><img src="<?php echo $base_url; ?>/img/sullivan.jpg" class="img-responsive" /></p>
                        <p>John Sullivan</p>
                        <p>Direttore Esecutivo Free Software Foundation</p>
                    </div>
                    <div class="col-lg-3">
                        <p><img src="<?php echo $base_url; ?>/img/rubini.jpg" class="img-responsive" /></p>
                        <p>Alessandro Rubini</p>
                        <p>Vice Presidente Free Software Foundation Europe</p>
                    </div>
                    <div class="col-lg-3">
                        <p><img src="<?php echo $base_url; ?>/img/vignoli.jpg" class="img-responsive" /></p>
                        <p>Italo Vignoli</p>
                        <p>Presidente Onorario LibreItalia</p>
                    </div>
                    <div class="col-lg-3">
                        <p><img src="<?php echo $base_url; ?>/img/aliprandi.jpg" class="img-responsive" /></p>
                        <p>Simone Aliprandi</p>
                        <p>Avvocato</p>
                    </div>
                    <div class="col-lg-3">
                        <p><img src="<?php echo $base_url; ?>/img/montegiove.jpg" class="img-responsive" /></p>
                        <p>Sonia Montegiove</p>
                        <p>Presidente LibreItalia</p>
                    </div>
                    <div class="col-lg-3">
                        <p><img src="<?php echo $base_url; ?>/img/tiralongo.jpg" class="img-responsive" /></p>
                        <p>Corrado Tiralongo</p>
                        <p>Psicologo e councelor</p>
                    </div>
                    <div class="col-lg-3">
                        <p><img src="<?php echo $base_url; ?>/img/sileo.jpg" class="img-responsive" /></p>
                        <p>Gen. Camillo Sileo</p>
                        <p>Coordinatore progetto LibreDifesa</p>
                    </div>
                    <div class="col-lg-3">
                        <p><img src="<?php echo $base_url; ?>/img/chiodi.jpg" class="img-responsive" /></p>
                        <p>Prof. Marchello Chiodi</p>
                        <p>Scienze Statistiche - Università di Palermo</p>
                    </div>
                    <div class="col-lg-3">
                        <p><img src="<?php echo $base_url; ?>/img/bassetti.jpg" class="img-responsive" /></p>
                        <p>Nanni Bassetti</p>
                        <p>Esperto in informatica forense</p>
                    </div>
                    <div class="col-lg-3">
                        <p><img src="<?php echo $base_url; ?>/img/virgilio.jpg" class="img-responsive" /></p>
                        <p>Vincenzo Virgilio</p>
                        <p>Presidente Sputnix</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="schedule" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Sessioni</h2>
                    <hr class="small">
                </div>

                <!-- <div class="col-lg-12 text-center">
                    <p class="lead"><a href="<?php echo $this->baseurl; ?>/programma">Vedi il programma completo</a></p>
                </div> -->

                <div class="col-lg-12 text-center">
                <p class="lead">
                    <strong>Industry</strong><br />
                    <strong>Stati Generali dell'Innovazione</strong><br />
                    <span class="small">FOIA, Open Data, Sw libero nella PA</span><br />
                    <strong>oPen Cyber Security</strong><br />
                    <strong>Dossier Scuola Libera</strong><br />
                    <strong>Digital Freedom Championship</strong><br />
                    <strong>GnuHealth.It</strong><br />
                    <strong>LibreItalia</strong><br />
                    <strong>Mozilla &amp; Wordpress</strong><br />
                    <strong>ADI - Free Software for Scientific Research</strong><br />
                    </p>
                </div>

                <!--
                <div class="col-lg-12 text-center">
                    <h3>Venerdi 24</h3>
                    <hr class="small">
                </div>
                
                <div class="col-lg-12 text-center">
                    <h4>Mattino - 9:00 / 13:00</h4>
                </div>

                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sessione Plenaria</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Saluti iniziali</td>
                            </tr>
                            <tr>
                                <td>Apertura</td>
                            </tr>
                            <tr>
                                <td>I have a free software dream</td>
                            </tr>
                            <tr>
                                <td>Artifici giuridici per limitare (???)</td>
                            </tr>
                            <tr>
                                <td>Guardie e ladri</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-lg-12 text-center">
                    <h4>Pomeriggio - 14:30 / 18:30</h4>
                </div>

                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>oPen Cyber Security</th>
                                <th>ADI - FreeSoftware 4 Scientific Reaserch</th>
                                <th>Industria Italiana del Software Libero</th>
                                <th>Dossier Scuola Libera</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>Strumenti e metodi</td>
                                <td>A complete free software</td>
                                <td>Industria</td>
                                <td>Dossier Scuola</td>
                            </tr>
                            <tr>
                                <td>Penetration testing</td>
                                <td>Exploring Google Earth</td>
                                <td>Responsabilità digitale</td>
                                <td>Making in cattedra</td>
                            </tr>
                            <tr>
                                <td>Attacking WAF</td>
                                <td>Open tools and databases</td>
                                <td>Lubit</td>
                                <td>Linux nei laboratori</td>
                            </tr>
                            <tr>
                                <td>Cloud forensics</td>
                                <td>Evaluation of the access</td>
                                <td>LibrERP</td>
                                <td>Migrazione scuola</td>
                            </tr>
                            <tr>
                                <td>Kernel security</td>
                                <td></td>
                                <td>pagoPA</td>
                                <td>So.Di.Linux</td>
                            </tr>
                            <tr>
                                <td>Veramente cybersecurity</td>
                                <td></td>
                                <td>SPID</td>
                                <td>Creative Commons</td>
                            </tr>
                            <tr>
                                <td>OpenWRT</td>
                                <td></td>
                                <td>SocialBusinessWorld</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>ipfire</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="col-lg-12 text-center">
                    <h3>Sabato 25</h3>
                    <hr class="small">
                </div>
                
                <div class="col-lg-12 text-center">
                    <h4>Mattino - 9:00 / 13:00</h4>
                </div>
                
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sessione Plenaria</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Saluti iniziali</td>
                            </tr>
                            <tr>
                                <td>LibreDifesa</td>
                            </tr>
                            <tr>
                                <td>Digital Champion</td>
                            </tr>
                            <tr>
                                <td>ReNeware - il rinnovo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="col-lg-12 text-center">
                    <h4>Pomeriggio - 14:30 / 18:30</h4>
                </div>
                
                <div class="col-lg-12 text-center">
                    <h3>Domenica 26</h3>
                    <hr class="small">
                </div>
                
                <div class="col-lg-12 text-center">
                    <h4>Mattino - 9:00 / 13:00</h4>
                </div>
                
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sessione Plenaria</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FSF</td>
                            </tr>
                            <tr>
                                <td>Conclusioni</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                -->
            </div>
        </div>
    </section>

    <!-- <section id="map" class="map">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Dove</h2>
                    <hr class="small">
                </div>
                <div class="col-lg-12 text-center">
                    <p class="lead"><a href="http://www.unipa.it" target="_blank">Università degli Studi di Palermo</a></p>
                </div>
                
            </div>
        </div>
        <div class="col-lg-12 text-center">
        <iframe width="90%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://umap.openstreetmap.fr/it/map/confsl-2016_72737#15/38.1048/13.3490" style="border: 1px solid black"></iframe>
        </div>
        <div class="col-lg-12 text-center">
            <p class="lead"><a href="<?php echo $this->baseurl; ?>/where">Vedi altre attrazioni a Palermo</a></p>
        </div>
    </section>
    -->
    
    <section id="sponsors" class="map">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Organizzato da</h2>
                    <hr class="small">
                </div>
            </div>

            <div class="row icons">
                <div class="col-lg-2 col-lg-offset-5">
                    <a href="http://www.sputnix.it/"><img class="img-sponsor" src="<?php echo $base_url; ?>/img/sputnix.png" /></a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Con il Contributo di</h2>
                    <hr class="small">
                </div>
            </div>
            
            <div class="row icons">
                <div class="col-lg-2 col-lg-offset-3">
                    <a href="http://www.industriasoftwarelibero.it/"><img class="img-sponsor" src="<?php echo $base_url; ?>/img/industria.png" /></a>
                </div>
                <div class="col-lg-2">
                    <a href="http://www.libreitalia.it/"><img class="img-sponsor" src="<?php echo $base_url; ?>/img/libreitalia.png" /></a>
                </div>
                <div class="col-lg-2">
                    <a href="http://www.statigeneralinnovazione.it/"><img class="img-sponsor" src="<?php echo $base_url; ?>/img/statigenerali.png" /></a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Con il Sostegno di</h2>
                    <hr class="small">
                </div>
            </div>

            <div class="row icons">
                <div class="col-lg-2 col-lg-offset-3">
                    <a href="http://www.befair.it/"><img class="img-sponsor" src="<?php echo $base_url; ?>/img/befair.png" /></a>
                </div>
                <div class="col-lg-2">
                    <a href="https://socialbusinessworld.org/"><img class="img-sponsor" src="<?php echo $base_url; ?>/img/sbw.png" /></a>
                </div>
                <div class="col-lg-2">
                    <a href="https://www.ils.org/"><img class="img-sponsor" src="<?php echo $base_url; ?>/img/ils.png" /></a>
                </div>
                <div class="col-lg-2">
                    <a href="http://www.reneware.it"><img class="img-sponsor" src="http://www.reneware.it/jit321/images/logo300.png" /></a>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Media Partners</h2>
                    <hr class="small">
                </div>
            </div>

            <div class="row icons">
                <div class="col-lg-2 col-lg-offset-4">
                    <a href="http://www.younipa.it/"><img class="img-sponsor" src="<?php echo $base_url; ?>/img/younipa.png" /></a>
                </div>
                <div class="col-lg-2">
                    <a href="http://www.rosalio.it/"><img class="img-sponsor" src="<?php echo $base_url; ?>/img/rosalio.png" /></a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <!--
                    <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">name@example.com</a>
                        </li>
                    </ul>
                    -->
                    <hr class="small">
                    <p class="text-muted">Template HTML Powered by <a href="http://startbootstrap.com/template-overviews/stylish-portfolio/">Start Bootstrap</a></p>
                    <p class="text-muted">Foto di copertina: <a href="https://www.flickr.com/photos/ru_boff/6695991111/in/photolist-bcGGSB-mCSXtp-e12rBz-BLfMmk-h2WHkh-aesADK-nhZ9x1-GXaAxe-kKwe4v-iZ72P5-dZABe6-x7fEiG-fFsNXR-e3FCHU-poRHCD-bApzdT-CnSZGo-dS4aMN-dzPtWb-jZvp1u-dwqKHx-pRA68Y-bnuHVm-e8DN2v-dZ2svd-e7wXQ6-jrMaNX-bGy63t-AWQG7U-eGSQUG-hQNvoM-sKLoa-DvjbE3-e34Shw-93Uqod-f26xyk-dHSG6K-ekBNkC-aXeDnH-aCqNV1-6sr1bQ-kgb4QM-dZoiyE-hNVwza-dpJ4PM-i4WQHH-6hF4L-dvv2re-b4huyP-b1VTaz">CC-BY-2.0 Dimitri B</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?php echo $base_url; ?>/js/jquery.js"></script>
    <script src="<?php echo $base_url; ?>/js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->

    <script type="text/javascript" src="<?php echo $base_url; ?>/slick/slick.min.js"></script>

    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
        $('.responsive-carousel').slick({
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                  slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                  slidesToScroll: 1,
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });
    });
    </script>

</body>

</html>
