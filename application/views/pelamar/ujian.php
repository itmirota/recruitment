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
                    <h5 class="card-title"><?= $ld->nama_ujian?></h5>
                    <p class="card-text m-0"> Kategori : <?=$ld->nama_kategoriPsikotes?></p>
                    <p class="card-text m-0"> Soal : <?=$ld->jumlah_soal?> Soal</p>
                    <p class="card-text m-0"> Waktu Pengerjaan : <?=$ld->waktu?> Menit</p>
                    <div class="d-flex justify-content-end mt-2">
                        <?php
                        $cek = $this->psikotes_model->getHasilUjianWhere(['ujian_id' => $ld->id_ujian, 'kandidat_id' => $kandidat_id]);
                        if(empty($cek->num_rows())){?>
                        <a href="<?= base_url('detail-ujian/').$ld->id_ujian?>" type="button" class="btn btn-solid btn-primary btn-sm"><i class="fa fa-pencil"></i> Mulai Ujian</a>
                        <?php } else{ ?>
                        <button type="button" class="btn btn-sm btn-secondary" disabled>Sudah Mengikuti</button>
                        <?php } ?>
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
