<?php 
require 'connectDB.php';
require '../bootstrap.php'; 
?>

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
                $stmt=$con->prepare("SELECT * FROM etudiant_matricule_amci  where  matricule_amci='".$_POST["search"]."'") ;
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
              echo "<td>".$ligne["cd1"]." | ".$ligne["cd2"]."</td>";  
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

<?php require APPROOT . '/includes/footer.php'; ?>