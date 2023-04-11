<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

  <!-- site metas -->
  <title>Site officiel ACEM</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- site icons -->
  <link rel="icon" href="favicon.ico" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="<?= URLROOT ?>/assets/css/bootstrap.min.css" />
  <!-- bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <!-- Site css -->
  <link rel="stylesheet" href="<?= URLROOT ?>/assets/css/style.css" />
  <!-- responsive css -->
  <link rel="stylesheet" href="<?= URLROOT ?>/assets/css/responsive.css" />
  <!-- colors css -->
  <link rel="stylesheet" href="<?= URLROOT ?>/assets/css/colors1.css" />
  <!-- custom css -->
  <link rel="stylesheet" href="<?= URLROOT ?>/assets/css/custom.css" />
  <!-- wow Animation css -->
  <link rel="stylesheet" href="<?= URLROOT ?>/assets/css/animate.css" />
  <link rel="stylesheet" href="<?= URLROOT ?>/assets/css/main.css" />
  <!-- counter css -->
  <link rel="stylesheet" href="<?= URLROOT ?>/assets/css/counter.css" />

  <!-- revolution slider css -->
  <link rel="stylesheet" type="text/css" href="<?= URLROOT ?>/assets/revolution/css/settings.css" />
  <link rel="stylesheet" type="text/css" href="<?= URLROOT ?>/assets/revolution/css/layers.css" />
  <link rel="stylesheet" type="text/css" href="<?= URLROOT ?>/assets/revolution/css/navigation.css" />

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<!-- 
  TO DO LIST
    - adding open graph tags
-->

<body id="default_theme" class="it_service">
  <!---<div class="bg_load"> <img class="loader_animation" src="images/fevicon/log_acem.png" /> </div>-->

  <!-- header -->
  <header id="default_header" class="header_style_1">
    <!-- header top -->
    <div class="header_top">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="full">
              <div class="topbar-left">
                <ul class="list-inline">
                  <li style="font-size:130%;"> <span class="topbar-label"></span> <span class="topbar-hightlight">Association des Comoriens Étudiant au Maroc</span> </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 right_section_header_top">
            <div class="float-left">
              <div class="social_icon">
                <ul class="list-inline">
                  <li><a class="fa fa-facebook" href="https://www.facebook.com/acemmaroc" title="Facebook ACEM" target="_blank"></a></li>
                  <li><a class="fa fa-youtube" href="https://www.youtube.com/channel/UCMOQ_y1cG15Trx3aznd-uYw" title="Youtube ACEM" target="_blank"></a></li>
                  <li><a class="fa fa-instagram" href="https://www.instagram.com/acem_officiel/?hl=fr" title="Instagram ACEM" target="_blank"></a></li>
                </ul>
              </div>
            </div>
            <div class="float-right">
              <div class="make_appo mt-1">
                <a class="btn white_btn" href="mailto:acemaroc@gmail.com">Contact</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end header top -->
    <!-- header bottom -->
    <div class="header_bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12">
            <!-- logo start -->
            <div class="logo"> <a href="<?= URLROOT ?>"><img src="<?= URLROOT ?>/assets/images/acem-logo.png" alt="logo" /></a>

            </div>

            <!-- logo end -->
          </div>
          <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
            <!-- menu start -->
            <div class="menu_side">
              <div id="navbar_menu">
                <ul class="first-ul">

                  <li> <a href="<?= URLROOT ?>"><i class="bi bi-house-door-fill"></i> Accueil</a> </li>
                  <li> <a href="<?= URLROOT ?>/comite"><i class="bi bi-people"></i> C.Scientifique</a> </li>

                  <li><a href="#"><i class="bi bi-inboxes"></i> Sections</a>
                    <ul>
                      <li><a href="<?= URLROOT ?>/sections/Agadir">Agadir</a></li>
                      <li><a href="<?= URLROOT ?>/sections/Beni_mellal">Béni Mellal</a></li>
                      <li><a href="<?= URLROOT ?>/sections/Casablanca">Casablanca </a></li>
                      <li><a href="<?= URLROOT ?>/sections/Eljadida">El jadida</a></li>
                      <li><a href="<?= URLROOT ?>/sections/Fes">Fès</a></li>
                      <li><a href="<?= URLROOT ?>/sections/Kenitra">Kenitra </a></li>
                      <li><a href="<?= URLROOT ?>/sections/Marrakech">Marrakech</a></li>
                      <li><a href="<?= URLROOT ?>/sections/Meknes">Meknès</a></li>
                      <li><a href="<?= URLROOT ?>/sections/Mohamedia">Mohammedia </a></li>
                      <li><a href="<?= URLROOT ?>/sections/Oujda">Oujda </a></li>
                      <li><a href="<?= URLROOT ?>/sections/Rabat_sale">Rabat-Salé</a></li>
                      <li><a href="<?= URLROOT ?>/sections/Settat">Settat</a></li>
                      <li><a href="<?= URLROOT ?>/sections/Tanger">Tanger</a></li>
                      <li><a href="<?= URLROOT ?>/sections/Tetouan">Tétouan</a></li>
                    </ul>
                  </li>


                  <li> <a href="#"><i class="bi bi-mortarboard"></i> Vies estudiantines</a>
                    <ul>
                      <li><a href="<?= URLROOT ?>/EnsSup">Enseignement supérieur</a></li>
                      <li><a href="<?= URLROOT ?>/LesEnsa">ENSA</a></li>
                      <li><a href="<?= URLROOT ?>/amci.php">Bourse AMCI</a></li>
                      <li><a href="<?= URLROOT ?>/assurance">Assurance AMCI</a></li>
                    </ul>
                  </li>
                  <li> <a href="#"><i class="bi bi-diagram-2"></i> Annexes</a>
                    <ul>
                      <li><a href="http://acemtech.org/" target="_blank">ACEM Tech</a></li>
                      <li> <a href="<?= URLROOT ?>/AcemfaQ">ACEM FaQ</a> </li>
                    </ul>
                  </li>
                  <li> <a href="#"><i class="bi bi-ui-radios"></i> Activités</a>
                    <ul>
                      <li><a href="http://acemtech.org/wsc-marrakech-2022/" target="_blank">Weekend Scientifique & Culturel</a></li>
                      <li><a href="">Colloque</a></li>
                    </ul>
                  </li>
                  <li> <a href="#"><i class="bi bi-bookshelf"></i> Bibliothèque</a>
                    <ul>
                      <li><a href="<?= URLROOT ?>/article">Articles Statut</a></li>
                      <li><a href="<?= URLROOT ?>/documents">Documents</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- menu end -->
          </div>
        </div>
      </div>
    </div>
    <!-- header bottom end -->
  </header>