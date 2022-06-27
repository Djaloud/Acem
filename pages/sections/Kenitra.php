<?php require '../../bootstrap.php'; ?>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section_kenitra">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">SECTION</h1>
              <ol class="breadcrumb">
                <li><a href="i<?php echo URLROOT; ?>">Acceuil</a></li>
                <li class="active">Kenitra</li>
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
          <i class="fa fa-users" aria-hidden="true"> Membres</i> : 120 <br>
          <a class="fa fa-instagram" href="https://www.instagram.com/acem_kenitra/?hl=fr" title="Instagram ACEM" target="_blank"> acem_kenitra</a> <br>
          <i class="fa fa-envelope-o"> acemkenitra@gmail.com</i>
        </div>
        <div class="bs-example">
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">HISTORIQUE DE LA SECTION DE KENITRA <i class="fa fa-angle-down"></i></a> </p>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in show">
                <div class="panel-body">
                  <p class="large"> Soucieux de vouloir créer l’harmonie sociale de tout natif comorien résidant à Kenitra. Compte tenu de la nécessité d’avoir une structure associative au sein de la communauté estudiantine comorienne à Kenitra, sous la base du respect mutuel, de l’honneur, et de la dignité. L’ACEM (Association Comorienne des Etudiants au Maroc) a su mobiliser l’intérêt d’un vaste groupe des jeunes étudiant Comoriens au Maroc.</p>

                  <p class="large">En 2012, l’ACEM-Kenitra a accueilli la 10ème édition de la journée scientifique et culturelle de l’étudiant comorien au Maroc et puis en 2018 la 16ème édition. En 2017, l’ACEM-Kenitra a initié un colloque sur l’étudiant comorien au Maroc dont la première Edition est organisé à Kenitra du 02 au 3 sept 2017 sous le thème : «Le devenir de l’étudiant comorien au Maroc » à l’Université Ibn Tofail.
                  </p>
                  <p class="large">Aujourd’hui l’ACEM-Kenitra a pu créer une harmonie au sein de la communauté comorienne au Royaume Chérifien du Maroc à Kenitra. Elle rassemble plus de 150 adhérents bénévoles résidants à Kenitra.
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
            <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/kenitra/1.jpeg" alt="#"> </div>
            <div class="team_feature_head">
              <h4>SECRETAIRE GENERAL<br>Youssouf Mohamed Mhoma Mahamoud </h4>
              <button type="button" class="btn btn-primary"><a href="mailto:mahamoudissa20@gmail.com">Contacter</a></button>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="full team_blog_colum">
            <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/kenitra/2.jpeg" alt="#"> </div>
            <div class="team_feature_head">
              <h4>CHARGE SOCIO-CULTUREL<br>Aboubacar Omar Soueffou </h4>
              <button type="button" class="btn btn-primary"><a href="mailto:Aboubacaromar1999@gmail.com">Contacter</a></button>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="full team_blog_colum">
            <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/kenitra/3.jpeg" alt="#"> </div>
            <div class="team_feature_head">
              <h4>CONTROLEUR GENERAL<br>Yassem Youssouf Abdillah </h4>
              <button type="button" class="btn btn-primary"><a href="mailto:yastyga@gmail.com">Contacter</a></button>
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
            <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/kenitra/4.jpg" alt="#"> </div>
            <div class="team_feature_head">
              <h4>TRESORIER GENERAL<br>Said Abdallah Rifki Said Mohamed </h4>
              <button type="button" class="btn btn-primary"><a href="mailto:saidrifki96@gmail.com">Contacter</a></button>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="full team_blog_colum">
            <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/kenitra/5.jpeg" alt="#"> </div>
            <div class="team_feature_head">
              <h4>CHARGE SPORTIF ET COMMUNICATION<br>Abderemane Mahamdou Boina </h4>
              <button type="button" class="btn btn-primary"><a href="mailto:boina.abdereman@gmail.com">Contacter</a></button>
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