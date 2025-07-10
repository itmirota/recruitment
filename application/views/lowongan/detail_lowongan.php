<div class="detail-pekerjaan">
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
              <div class="row deskripsi mb-4">
                <div class="col-md-12 mb-4">
                  <div class="card syarat">
                    <div class="card-header">
                      <h2 class="text-header text-light"><?= $detail->nama_lowongan ?></h2>
                    </div>

                    <div class="card-body">
                      <div class="d-flex flex-wrap justify-content-between">
                        <div class="p-2">
                        <span class="text-red"><strong>Lokasi</strong></span>
                        <p class="mb-3 text-light"><?= $detail->wilayah ?></p>
                        </div>
                        <div class="p-2">
                        <span class="text-red"><strong>Bidang Pekerjaan</strong></span>
                        <p class="mb-3 text-light"><?= $detail->divisi ?></p>
                        </div>
                        <div class="p-2">
                        <span class="text-red"><strong>Jenjang Karir</strong></span>
                        <p class="mb-3 text-light"><?= $detail->pendidikan ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <span><strong>Job Description</strong></span>
                <p class="mb-4">Melakukan kunjungan ke rumah sakit/ bidan/ puskesmas/ tempat layanan kesehatan lainnya dan melakukan penawaran kerja sama serta pengenalan produk dengan bidang terkait. Melakukan penawaran langsung dengan calon konsumen di tempat pelayanan kesehatan juga dimungkinkan.
                </p>
                <span><strong>Job Requirement</strong></span>
                <?= $detail->deskripsi ?>
              </div>
              <div class="d-flex justify-content-end mb-4">
                <?php 

                if (isset($kandidat)) {?>
                <button class="btn btn-md btn-biru" data-bs-toggle="modal" data-bs-target="#exampleModal">Lamar Pekerjaan</button>
                <?php }else{?>
                <button class="btn btn-md btn-biru" data-bs-toggle="modal" data-bs-target="#login">Lamar Pekerjaan</button>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- MAIN -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
       <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Lamar Pekerjaan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('lowongan/submit_lowongan');?>" method="post"  enctype="multipart/form-data">
          <div class="mb-3">
            <label class="form-label">nama</label>
            <input class="form-control-plaintext" type="text" name="nama_kandidat" value="<?= $nama_lengkap ?>" aria-label="readonly input example" readonly>
            <input class="form-control-plaintext" type="hidden" name="id_lowongan" value="<?= $detail->id_lowongan ?>" readonly>
            <span style="color:red"><?= form_error('nama_kandidat'); ?></span>
          </div>
          <div class="mb-3">
            <label for="alamat_domisili" class="form-label">Alamat Domisili Sekarang</label>
            <textarea class="form-control" name="alamat_domisili" id="alamat_domisili" rows="3"><?=$kandidat->alamat_domisili?></textarea>
            <span style="color:red">
            <?= form_error('domisili'); ?>
            </span>
          </div>
          <div class="mb-3">
            <label class="form-label">Alamat Email</label>
            <input class="form-control-plaintext" type="text" name="email" value="<?=$kandidat->email?>" aria-label="readonly input example" readonly>
            <span style="color:red">
            <?= form_error('email'); ?>
            </span>
          </div>
          <div class="mb-3">
            <label class="form-label">Nomor yang bisa dihubungi (Whatsapp)</label>
            <input class="form-control form-control" type="number" name="nomor_hp" placeholder="Nomor yang bisa dihubungi" value="<?=$kandidat->nomor_hp?>" />
            <span style="color:red">
            <?= form_error('password'); ?>
            </span>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Surat Lamaran Kerja (Pdf)</label>
            <input class="form-control" type="file" name="file_lamaran" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">CV (Pdf)</label>
            <input class="form-control" type="file" name="file_cv" id="file_cv">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">ijazah (Pdf)</label>
            <input class="form-control" type="file" name="file_ijazah" id="file_ijazah">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Lampiran Pendukung (Pdf)</label>
            <input class="form-control" type="file" name="file_lampiran" id="file_lampiran">
          </div>
          <div class="mb-3">
          <button type="submit" class="btn btn-primary">Kirim Lamaran</button>
          </div>
      </div>
      </form>
    </div>
  </div>
</div>
</div>