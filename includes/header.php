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
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/assets/css/bootstrap.min.css" />

  <!-- Site css -->
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/assets/css/style.css" />
  <!-- responsive css -->
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/assets/css/responsive.css" />
  <!-- colors css -->
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/assets/css/colors1.css" />
  <!-- custom css -->
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/assets/css/custom.css" />
  <!-- wow Animation css -->
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/assets/css/animate.css" />
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/assets/css/main.css" />


  <!-- revolution slider css -->
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/revolution/css/settings.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/revolution/css/layers.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/assets/revolution/css/navigation.css" />

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
                  <li style="font-size:25px;"> <span class="topbar-label"></span> <span class="topbar-hightlight">Association des Comoriens Étudiant au Maroc</span> </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 right_section_header_top">
            <div class="float-left">
              <div class="social_icon">
                <ul class="list-inline">
                  <li><a class="fa fa-facebook" href="https://web.facebook.com/profile.php?id=100010335430962" title="Facebook ACEM" target="_blank"></a></li>

                  <li><a class="fa fa-youtube" href="https://www.youtube.com/channel/UCMOQ_y1cG15Trx3aznd-uYw" title="Youtube ACEM" target="_blank"></a></li>
                  <li><a class="fa fa-instagram" href="https://www.instagram.com/acem_officiel/?hl=fr" title="Instagram ACEM" target="_blank"></a></li>
                </ul>
              </div>
            </div>
            <div class="float-right">
              <div class="make_appo">
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
          <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <!-- logo start -->
            <div class="logo"> <a href="<?php echo URLROOT; ?>"><img src="<?php echo URLROOT; ?>/assets/images/acem-logo.png" alt="logo" /></a>

            </div>

            <!-- logo end -->
          </div>
          <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <!-- menu start -->
            <div class="menu_side">
              <div id="navbar_menu">
                <ul class="first-ul">

                  <li> <a href="<?php echo URLROOT; ?>">Acceuil</a> </li>
                  <li> <a href="<?php echo URLROOT; ?>/pages/comite">C.Scientifique</a> </li>

                  <li><a href="#">Sections</a>
                    <ul>
                      <li><a href="<?php echo URLROOT; ?>/pages/sections/Agadir">Agadir</a></li>
                      <li><a href="<?php echo URLROOT; ?>/pages/sections/Casablanca">Casablanca </a></li>
                      <li><a href="<?php echo URLROOT; ?>/pages/sections/Eljadida">El jadida</a></li>
                      <li><a href="<?php echo URLROOT; ?>/pages/sections/Fes">Fès</a></li>
                      <li><a href="<?php echo URLROOT; ?>/pages/sections/Kenitra">Kenitra </a></li>
                      <li><a href="<?php echo URLROOT; ?>/pages/sections/Marrakech">Marrakech</a></li>
                      <li><a href="<?php echo URLROOT; ?>/pages/sections/Meknes">Meknès</a></li>
                      <li><a href="<?php echo URLROOT; ?>/pages/sections/Mohamedia">Mohammedia </a></li>
                      <li><a href="<?php echo URLROOT; ?>/pages/sections/Oujda">Oujda </a></li>
                      <li><a href="<?php echo URLROOT; ?>/pages/sections/Rabat_sale">Rabat-Salé</a></li>
                      <li><a href="<?php echo URLROOT; ?>/pages/sections/Settat">Settat</a></li>
                      <li><a href="<?php echo URLROOT; ?>/pages/sections/Tanger_Tetouan">Tanger</a></li>
                    </ul>
                  </li>


                  <li> <a href="#">Vies estudiantines</a>
                    <ul>
                      <li><a href="<?php echo URLROOT; ?>/assets/docs/pdfs/Enseignement_superieur.pdf" target="_blank">Enseignement suprieur</a></li>
                      <li><a href="<?php echo URLROOT; ?>/pages/LesEnsa" target="_blank">ENSA</a></li>
                      <li><a href="<?php echo URLROOT; ?>/pages/amci.php">Bourse AMCI</a></li>
                      <li><a href="<?php echo URLROOT; ?>/pages/assurance">Assurance AMCI</a></li>
                    </ul>
                  </li>
                  <li> <a href="#">Annexe</a>
                    <ul>
                      <li><a href="http://www.acemtech.org/apropos" target="_blank">Acem Tech</a></li>
                      <li> <a href="<?php echo URLROOT; ?>/pages/AcemfaQ">ACEM faQ</a> </li>
                    </ul>
                  </li>
                  <li> <a href="#">Bibliothèque</a>
                    <ul>
                      <li><a href="<?php echo URLROOT; ?>/pages/article">Articles</a></li>
                      <li><a href="<?php echo URLROOT; ?>/pages/documents">Documents</a></li>
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