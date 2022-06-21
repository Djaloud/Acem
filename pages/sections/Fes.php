<?php require '../../bootstrap.php'; ?>

<!-- inner page banner -->
      <div id="inner_banner" class="section inner_banner_section_fes">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="full">
                <div class="title-holder">
                  <div class="title-holder-cell text-left">
                    <h1 class="page-title">SECTION</h1>
                    <ol class="breadcrumb">
                      <li><a href="<?php echo URLROOT; ?>">Acceuil</a></li>
                      <li class="active">Fès</li>
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

          
      <div class="section padding_layout_1">
        <div class="container">

          <div class="full margin_bottom_30">
           <div class="accordion border_circle">
             <div class="info_section">
              <i class="fa fa-users" aria-hidden="true"> Membres</i> :  <br>
              <a class="fa fa-instagram" href="https://www.instagram.com/acem_casablanca/?hl=fr" title="Instagram ACEM" target="_blank"> acem_fes</a> <br>
              <i class="fa fa-envelope-o">acemfes7@gmail.com</i>
            </div>
            <div class="bs-example">
              <div class="panel-group" id="accordion">
               <div class="panel panel-default">
                <div class="panel-heading">
                  <p class="panel-title" > <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">HISTORIQUE DE LA SECTION DE FES <i class="fa fa-angle-down"></i></a> </p>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in show">
                  <div class="panel-body">
                    <p class="large"> L’ACEM section régionale de Fès est parmi les premiers sections crée(2002).
Depuis Fès a toujours été le berceau des comoriens au Maroc.
Il fut premier Secrétaire général de l’ACEM-FES Mr Soilahoudine Saandi
(2002-2003)</p> 

                    <p class="large">Depuis la creation de la section regionale de Fes, a été realisé comme activité
Nationale les activités suivantes : <br>
- Journée Culturelle sous le mandat de Soilahoudine Saandi en 2002-2003 <br>
- Journée Culturelle sous le mandat de Mamadou Taki en 2007-2008 <br>
- Journée Culturelle sous le mandat d’Imrane Issa en 2012-2013 <br>
- 2
ème Edition du colloque de l’étudiant comorien au maroc sous le mandat
de Moutanlim Hassani en 2017-2018   
                    </p><br>
                 
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
                  <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/fes/1.jpg" alt="#"> </div>
                  <div class="team_feature_head">
                    <h4>SECRETAIRE GENERAL<br>ALI MOHAMED</h4>
                    <button type="button" class="btn btn-primary"><a href="mailto:Aliboinamohamed95@gmail.com">Contacter</a></button>
                  </div>  
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="full team_blog_colum">
                  <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/fes/2.jpg" alt="#"> </div>
                  <div class="team_feature_head">
                    <h4>CHARGE SOCIO-CULTUREL<br>SOILAHOUDINE  
                      MOHAMED 
                    </h4>
                    <button type="button" class="btn btn-primary"><a href="mailto:fodjosoilahou@gmail.com">Contacter</a></button>
                  </div>  
                </div>
              </div> 

              <div class="col-md-4 col-sm-6">
                <div class="full team_blog_colum">
                  <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/fes/3.jpg" alt="#"> </div>
                  <div class="team_feature_head">
                    <h4>CONTROLEUR GENERAL<br>ALI MOHAMED  </h4>
                    <button type="button" class="btn btn-primary"><a href="mailto:mohamedaligach@gmail.com">Contacter</a></button>
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
                  <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/fes/4.jpg" alt="#"> </div>
                  <div class="team_feature_head">
                    <h4>TRESORERIE GENERAL<br>SAANDI 
                      MAHAMOUD  ABDALLAH
                    </h4>
                    <button type="button" class="btn btn-primary"><a href="mailto:Saandi.ma@gmail.com">Contacter</a></button>
                  </div>  
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="full team_blog_colum">
                  <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/fes/5.jpg" alt="#"> </div>
                  <div class="team_feature_head">
                    <h4>CHARGE SPORTIF ET COMMUNICATION<br>IDAROUSSI ABDILLAH  MMADI </h4>
                    <button type="button" class="btn btn-primary"><a href="mailto:Idaroussi1994@gmail.com">Contacter</a></button>
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