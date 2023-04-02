<?php require '../../bootstrap.php'; ?>

<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section_marrakech">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Section Marrakech</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo URLROOT; ?>">Accueil</a></li>
                <li class="active">Marrakech</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->


<!--section 1 membre-->

<div class="section padding_layout_1">
  <div class="container">
    <div class="full margin_bottom_30">
      <div class="accordion border_circle">
        <div class="info_section">

          <!-- INFO SECTION -->
          <div classe="wrapper mr-4 mb-4">
            <div class="counterSection mr-3 mb-2">
              <i class="bi bi-mortarboard-fill"></i>
              <span class="num" data-val="62">000</span>
              <span class="text mt-1">Etudiants </span>
            </div>
            <div class="counterSection mr-3 mb-2">
              <i class="bi bi-building"></i>
              <a class="text" href="http://www.uca.ac.ma" target="_blank"><span class="mt-1">Université Cadi Ayyad</span></a>
            </div>
            <div class="infoSection mr-2">
              <h4>Contacts :</h4>
              <i class="bi bi-instagram"></i><a href="https://www.instagram.com/acem_marrakech_officiel_/?hl=fr" title="Instagram ACEM" target="_blank"> acem_marrakech_officiel_</a> <br>
              <i class="bi bi-envelope-plus"></i><a href="mailto:acemmarrakech2021@gmail.com"> acemmarrakech2021@gmail.com</a>
            </div>
          </div>
          <!-- END INFO SECTION -->

        </div>
        <div class="bs-example">
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading mt-3">
                <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">HISTORIQUE DE LA SECTION DE MARRAKECH <i class="fa fa-angle-down"></i></a> </p>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">

                  <p class="text-danger">
                    <span>Pas encore édité</span>
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row rowX">
      <!--- premiere ligne-->
      <div class="row">

        <div class="col-md-4 col-sm-6">
          <div class="full team_blog_colum">
            <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/Marrakech/NASSEAU_MOÏSE.jpg" alt="#"> </div>
            <div class="team_feature_head">
              <h4>SECRETAIRE GENERALE<br>Hasnaa Mohamed </h4>
              <button type="button" class="btn btn-primary"><a href="mailto:ridhoinehasnaa@gmail.com">Contacter</a></button>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="full team_blog_colum">
            <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/Marrakech/Houmais_Said.jpg" alt="#"> </div>
            <div class="team_feature_head">
              <h4>CHARGE SOCIO-CULTUREL<br>Amine Ahamada Kari</h4>
              <button type="button" class="btn btn-primary"><a href="mailto:aak47babyes@gmail.com">Contacter</a></button>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="full team_blog_colum">
            <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/Marrakech/Hikmat_C.jpg" alt="#"> </div>
            <div class="team_feature_head">
              <h4>CONTROLEUR GENERALE<br>CHEDLI CHAMOU</h4>
              <button type="button" class="btn btn-primary"><a href="mailto:chedlichamou@gmail.com">Contacter</a></button>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="row rowX">


      <!--- deuxieme ligne-->
      <div class="row">

        <div class="col-md-4 col-sm-6">
          <div class="full team_blog_colum">
            <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/Marrakech/Noura_ahmed.jpeg" alt="#"> </div>
            <div class="team_feature_head">
              <h4>TRESORIERE GENERALE<br>Anzlati Ismael Imani</h4>
              <button type="button" class="btn btn-primary"><a href="mailto:ismailanzlat@gmail.com">Contacter</a></button>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="full team_blog_colum">
            <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/Marrakech/Alhadad_Moussa.jpg" alt="#"> </div>
            <div class="team_feature_head">
              <h4>CHARGE SPORTIF<br>ASSADILLAH MOHAMED</h4>
              <button type="button" class="btn btn-primary"><a href="mailto:mohamedassadillah145@gmail.com">Contacter</a></button>
            </div>
          </div>
        </div>

        <!-- <div class="col-md-4 col-sm-6">
          <div class="full team_blog_colum">
            <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/Marrakech/Alhadad_Moussa.jpg" alt="#"> </div>
            <div class="team_feature_head">
              <h4>CHARGE DE LA COMMUNICATION<br></h4>
              <button type="button" class="btn btn-primary"><a href="mailto:">Contacter</a></button>
            </div>
          </div>
        </div> -->

      </div>
    </div>
  </div>
</div>
</div>
<!-- end section1 Membre-->



<!-- Actualite section -->
<?php require APPROOT . '/includes/actualite_section.php'; ?>
<!-- end section -->

<?php require APPROOT . '/includes/footer.php'; ?>