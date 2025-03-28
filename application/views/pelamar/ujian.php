<div class="lowongan">
  <!-- PARALAX -->
  <div class="parallax">
  <div class="header-lowongan">
    <h1 class="text-tittle text-center text-light">Psikotes Online</h1>
  </div>
  </div>
  <!-- PARALAX -->

  <!-- MAIN -->
  <div class="main">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <?php foreach ($list_data as $ld) { ?>
            <div class="col">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $ld->nama_kategoriPsikotes?></h5>
                    <div class="d-flex justify-content-end mt-2">
                        <a href="<?= base_url('detail-ujian?test='.$ld->kategoriPsikotes_id.'&&subtest='.$ld->id_ujian)?>" type="button" class="btn btn-solid btn-primary btn-sm"><i class="fa fa-pencil"></i> Mulai Ujian</a>
                    </div>
                </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
  </div>
  <!-- MAIN -->
</div>
