<?php require '../../bootstrap.php'; ?>
      <!-- inner page banner -->
      <div id="inner_banner" class="section inner_banner_section_jadida">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="full">
                <div class="title-holder">
                  <div class="title-holder-cell text-left">
                    <h1 class="page-title">SECTION</h1>
                    <ol class="breadcrumb">
                      <li><a href="index.html">Acceuil</a></li>
                      <li class="active">El-jadida</li>
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
              <i class="fa fa-users" aria-hidden="true"> Membres</i> : 26  <br>
              <a class="fa fa-instagram" href="https://www.instagram.com/acem_casablanca/?hl=fr" title="Instagram ACEM" target="_blank"> acem_eljadidaofficiel</a> <br>
              <i class="fa fa-envelope-o"> acemeljadida@gmail.com</i>
            </div>
            <div class="bs-example">
              <div class="panel-group" id="accordion">
               <div class="panel panel-default">
                <div class="panel-heading">
                  <p class="panel-title" > <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">SECTION EL JADIDA <i class="fa fa-angle-down"></i></a> </p>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in show">
                  <div class="panel-body">
                    
                 
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
                  <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/jadida/1.jpg" alt="#"> </div>
                  <div class="team_feature_head">
                    <h4>SECRETAIRE GENERAL<br>MMADI IBOUROI SAID </h4>
                    <button type="button" class="btn btn-primary"><a href="mailto:Mmadisaid99@gmail.com">Contacter</a></button>
                  </div>  
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="full team_blog_colum">
                  <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/jadida/2.jpg" alt="#"> </div>
                  <div class="team_feature_head">
                    <h4>CHARGE SOCIO-CULTUREL<br>Abdou Ahamed</h4>
                    <button type="button" class="btn btn-primary"><a href="mailto:abdou.ahamed96@gmail.com">Contacter</a></button>
                  </div>  
                </div>
              </div> 

              <div class="col-md-4 col-sm-6">
                <div class="full team_blog_colum">
                  <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/jadida/3.jpg" alt="#"> </div>
                  <div class="team_feature_head">
                    <h4>CONTROLEUR GENERAL<br>Abdoulfatah Issihaka</h4>
                    <button type="button" class="btn btn-primary"><a href="mailto:aissihaka23@gmail.com">Contacter</a></button>
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
                  <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/jadida/4.jpg" alt="#"> </div>
                  <div class="team_feature_head">
                    <h4>TRESORIER GENERAL<br>Fayad halidi yahaya Naieche</h4>
                    <button type="button" class="btn btn-primary"><a href="mailto:fayadhalidiyahayanaieche@gmail.com">Contacter</a></button>
                  </div>  
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="full team_blog_colum">
                  <div class="it_team_img"> <img class="img-responsive" src="<?php echo URLROOT; ?>/assets/images/photo/jadida/5.jpg" alt="#"> </div>
                  <div class="team_feature_head">
                    <h4>CHARGE SPORTIF ET COMMUNICATION<br> Aboubacar Faissoil</h4>
                    <button type="button" class="btn btn-primary"><a href="mailto:faissoilaboubacar42@gmail.com">Contacter</a></button>
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