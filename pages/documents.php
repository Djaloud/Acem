<?php require '../bootstrap.php'; ?>
<!-- section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Documents officiels de l'ACEM.</h2>

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
          <h5 class="card-title">ACEM</h5>
          <p class="card-text">Le Statut de l'ACEM (Présentation et articles).</p>
          <a href="<?php echo URLROOT; ?>/assets/docs/pdfs/Statut_ACEM.pdf" target="_blank" class="btn btn-primary">Consulter</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6" style="margin-bottom: 20px;">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Comité Scientifique Central</h5>
          <p class="card-text">Document cadre du CSC (Objectifs, Missions, domaine d'actions, ...).</p>
          <a href="<?php echo URLROOT; ?>/assets/docs/pdfs/Statut_CS.pdf" target="_blank" class="btn btn-primary">Consulter</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<?php require APPROOT . '/includes/footer.php'; ?>