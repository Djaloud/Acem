<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="author" content="colorlib.com">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
  <link href="css/main.css" rel="stylesheet" />
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
  <link rel="icon" href="images/fevicon/log_acem.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Site css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- responsive css -->
  <link rel="stylesheet" href="css/responsive.css" />
  <!-- colors css -->
  <link rel="stylesheet" href="css/colors1.css" />
  <!-- custom css -->
  <link rel="stylesheet" href="css/custom.css" />
  <!-- wow Animation css -->
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/main.css" />
  <!-- revolution slider css -->
  <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />
  <link rel="stylesheet" type="text/css" href="revolution/css/layers.css" />
  <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css" />

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body id="default_theme" class="it_service">
      <!---<div class="bg_load"> <img class="loader_animation" src="images/fevicon/log_acem.png" /> </div>-->
      <!-- header -->
      <?php 
      include('Header.php'); 
      include("connectDB.php");
      ?>
      <!-- end header -->
      <!-- inner page banner -->

      <style type="text/css">
        
        body {
         background: url('images/it_service/bgg.png'); 
       }
     </style>




     <!-- section -->
     <div class="section padding_layout_1 " style="border-top: 2mm solid #ededed;">
      <div class="container">   
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="main_heading1 text_align_center">
                <p class="large"><h3>Recuperer le code de votre bourse.<h3></p>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="s003">
                <form method="post">
                  <div class="inner-form"> 
                    <div class="input-field second-wrap">
                      <input name="search" type="text" placeholder="tester avec: 20170961 " required />
                    </div>
                    <div class="input-field third-wrap">
                      <button class="btn-search" type="submit" name="btn">
                        <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
             
              <?php 
              $ligne="";
              if(isset($_POST["btn"])){                         
               try {
                $con=Connect();
                $stmt=$con->prepare("SELECT * FROM etudiant_code  where  matricule_amci='".$_POST["search"]."'") ;
                $stmt->execute();
                $ligne=$stmt->fetch();
              }catch(PDOException $e)
              {
               echo  $e->getMessage();
             }
             if(!empty($ligne)){
              
              echo '<table  class="table table-bordered">';
              echo '<tr class="bg-success"> <th>Nom et Prenom</th><th>Code</th></tr>';
              echo "<tr>";
              echo "<td>".$ligne["nom_prenom"]."</td>";
              echo "<td>".$ligne["code_amci"]."</td>"; 
              echo "</tr>";
              echo "<tr>";
              echo "<td>Suivez-nous sur les réseaux sociaux et abonnez-vous à nos pages.</td>";
              echo '<td><li><a class="fa fa-youtube" href="https://www.youtube.com/channel/UCMOQ_y1cG15Trx3aznd-uYw" title="ACEM FAQ" target="_blank"></a></li>
              <li><a class="fa fa-instagram" href="https://www.instagram.com/acem_officiel/?hl=fr" title="Instagram" target="_blank"></a></li> 
              <li><a class="fa fa-facebook" href="https://web.facebook.com/profile.php?id=100010335430962" title="Facebook" target="_blank"></a></li></td> '

              ; 
              echo "</tr>";
              
            }else
            {
             echo '<h1 style="text-align:center;color:#63c76a;">Votre code de bourse n est pas diponible ou bien veuillez vérifier que c est le bon matricule .</h1>';
           }
         }
         ?>
         

       </table>

     </div>
   </div>
 </div>
</div>

<!-----FIN LES ENSAS ---------!-->

<?php include("footer.php") ?>

<!-- js section -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="js/menumaker.js"></script>
<!-- wow animation -->
<script src="js/wow.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<!-- revolution js files -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- map js -->

<!-- google map js -->

<!-- end google map js -->
</body>
</html>
