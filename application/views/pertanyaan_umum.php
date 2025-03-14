<div class="pertanyaan-umum">
  <!-- PARALAX -->
  <div class="parallax"></div>
  <!-- PARALAX -->

  <!-- MAIN -->
  <div class="main mb-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-body">
              <h2 class="text-header text-center text-blue">Frequently Asked Questions</h2>
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <?php foreach($list_data as $ld) { ?> 
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <?=$ld->pertanyaan?>
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body"><?=$ld->jawaban?></div>
                  </div>
                </div>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- MAIN -->