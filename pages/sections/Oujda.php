<?php require '../../bootstrap.php'; ?>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section_oujda">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Secion Oujda</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo URLROOT; ?>">Accueil</a></li>
                <li class="active">Oujda</li>
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
              <span class="num" data-val="55">000</span>
              <span class="text mt-1">Etudiants </span>
            </div>
            <div class="counterSection mr-3 mb-2">
              <i class="bi bi-building"></i>
              <a class="text" href="http://www.ump.ac.ma" target="_blank"><span class="mt-1">Université Mohammed Premier</span></a>
            </div>
            <div class="infoSection mr-2">
              <h4>Contacts :</h4>
              <i class="bi bi-instagram"></i><a href="https://www.instagram.com/acemoujda_officiel/?hl=fr" title="Instagram ACEM" target="_blank"> acemoujda_officiel</a> <br>
              <i class="bi bi-envelope-plus"></i><a href="mailto:acemoujda18@gmail.com"> acemoujda18@gmail.com</a>
            </div>
          </div>
          <!-- END INFO SECTION -->

        </div>
        <div class="bs-example">
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading mt-3">
                <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">HISTORIQUE DE LA SECTION D'OUJDA <i class="fa fa-angle-down"></i></a> </p>
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
      <!--- deuxieme ligne-->
      <div class="row">

        <div class="col-md-4 col-sm-6">
          <div class="full team_blog_colum">
            <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/oujda/1.jpg" alt="#"> </div>
            <div class="team_feature_head">
              <h4>SECRETAIRE GENERAL<br>El-Yamine Youssouf </h4>
              <button type="button" class="btn btn-primary"><a href="mailto:alyamine92@gmail.com">Contacter</a></button>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="full team_blog_colum">
            <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/oujda/2.jpg" alt="#"> </div>
            <div class="team_feature_head">
              <h4>CHARGE SOCIO-CULTUREL<br>Naki Mohamed Ben Ali</h4>
              <button type="button" class="btn btn-primary"><a href="mailto:elnakisto269@gmail.com">Contacter</a></button>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="full team_blog_colum">
            <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/oujda/3.jpg" alt="#"> </div>
            <div class="team_feature_head">
              <h4>CONTROLEUR GENERAL<br>Soilihi Abdoulatuf</h4>
              <button type="button" class="btn btn-primary"><a href="mailto:iamsirham09@gmail.com ">Contacter</a></button>
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
            <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/oujda/4.jpg" alt="#"> </div>
            <div class="team_feature_head">
              <h4>TRESORERIE GENERAL<br>Mohamed Bacar </h4>
              <button type="button" class="btn btn-primary"><a href="mailto:Mohamedlewis72@gmail.com">Contacter</a></button>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="full team_blog_colum">
            <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/oujda/5.jpg" alt="#"> </div>
            <div class="team_feature_head">
              <h4>CHARGE SPORTIF ET COMMUNICATION<br>Abdou Andhum</h4>
              <button type="button" class="btn btn-primary"><a href="mailto:abdouandhum11@gmail.com">Contacter</a></button>
            </div>
          </div>
        </div>


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