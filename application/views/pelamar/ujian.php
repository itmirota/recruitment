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


                  <!-- .MODAL EDIT DATA ---->
                  <div class="modal fade" id="progress">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Edit Progress</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body"> 
                          <form action="<?= base_url('Lowongan/UpdateProgres')?>" method="post">
                          <div class="mb-3 row">
                            <label for="keterangan" class="col-sm-4 col-form-label">Progress</label>
                            <div class="col-sm-8">
                              <input type="hidden" class="form-control-plaintext" name="id_kandidat" value="<?=$data->id_kandidat?>" readonly>
                              <input type="text" readonly class="form-control" name="keterangan">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                            <div class="col-sm-8">
                              <input type="datetime-local" class="form-control" id="tanggal">
                            </div>
                          </div>
                          </form>
                        </div>
                        <div class="modal-footer"></div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.MODAL EDIT DATA ---->