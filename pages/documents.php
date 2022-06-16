<?php require '../bootstrap.php'; ?>
<!-- section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Quelques Documents utils.</h2>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->

<!--  section documents-->
<div class="container">
  <div class="row">

    <div class="col-sm-6" style="margin-bottom: 20px;">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Acem</h5>
          <p class="card-text">L'ensemble des documents liés à l'ACEM (Presentation et article de l'ACEM).</p>
          <!-- <a href="https://drive.google.com/drive/folders/1GTpR33u5S1gWhqyWm4wYPJu2Sh3Oh08C?usp=sharing" class="btn btn-primary">Consulter</a> -->
          <a href="<?php echo URLROOT; ?>/assets/docs/pdfs/STATUTS-DE-L-ACEM-2.pdf" target="_blank" class="btn btn-primary">Consulter</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6" style="margin-bottom: 20px;">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Comite Scientifique</h5>
          <p class="card-text">Objectifs , Missions , domaine d'actions , qualité de membre du comité scientifique.</p>
          <!-- <a href="https://drive.google.com/drive/folders/1qWeDICWgzX6Tt-F6v8PTfryxsaRnJVB5?usp=sharing" class="btn btn-primary">Consulter</a> -->
          <a href="<?php echo URLROOT; ?>/assets/docs/pdfs/Statut_CS.pdf" target="_blank" class="btn btn-primary">Consulter</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<?php require APPROOT . '/includes/footer.php'; ?>