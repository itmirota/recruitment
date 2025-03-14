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
                      <h2 class="text-header text-light">Mirota Nutrition Advisor (MiNA Area Banyuwangi)</h2>
                    </div>

                    <div class="card-body">
                      <div class="d-flex flex-wrap justify-content-between">
                        <div class="p-2">
                        <span class="text-red"><strong>Lokasi</strong></span>
                        <p class="mb-3 text-light">Banyuwangi</p>
                        </div>
                        <div class="p-2">
                        <span class="text-red"><strong>Bidang Pekerjaan</strong></span>
                        <p class="mb-3 text-light">Marketing</p>
                        </div>
                        <div class="p-2">
                        <span class="text-red"><strong>Jenjang Karir</strong></span>
                        <p class="mb-3 text-light">SMA/SMK</p>
                        </div>
                      </div>



                    </div>
                  </div>
                </div>
                <span><strong>Job Description</strong></span>
                <p class="mb-4">Melakukan kunjungan ke rumah sakit/ bidan/ puskesmas/ tempat layanan kesehatan lainnya dan melakukan penawaran kerja sama serta pengenalan produk dengan bidang terkait. Melakukan penawaran langsung dengan calon konsumen di tempat pelayanan kesehatan juga dimungkinkan.
                </p>
                <span><strong>Job Requirement</strong></span>
                <p  class="mb-4">
                Diutamakan Wanita Maksimal usia 30 tahun.
                Pendidikan min.D3 Semua jurusan. Diutamakan bidang gizi, farmasi/kesehatan.
                Memiliki pengalaman marketing FnB, Produk Dairy atau Farmasi minimal 2 tahun.
                Memiliki pengalaman sebagai Medical Representative/Area Representative menjadi nilai lebih.
                Memiliki interpersonal yang baik, Komunikatif, dan jujur.
                Lulusan baru dipersilahkan melamar.
                Mampu Mengoperasikan Word dan Microsoft Excel.
                Menyukai pekerjaan lapangan.
                Penempatan Banyuwangi
                </p>
              </div>
              <div class="d-flex justify-content-end mb-4">
                <button class="btn btn-md btn-biru" data-bs-toggle="modal" data-bs-target="#exampleModal">Lamar Pekerjaan</button>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form action="<?= base_url('kandidat/save');?>" method="post">
        <div class="mb-3">
          <label class="form-label">nama</label>
          <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
          <span style="color:red"><?= form_error('nama_kandidat'); ?></span>
</div>
           <div class="mb-3">
           <label for="exampleFormControlTextarea1" class="form-label">Alamat Domisili Sekarang</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          <span style="color:red">
           <?= form_error('domisili'); ?>
          </span>
        </div>
        <div class="mb-3">
           <label class="form-label">Alamat Email</label>
           <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
          <span style="color:red">
           <?= form_error('email'); ?>
          </span>
        </div>
        <div class="mb-3">
          <label class="form-label">Nomor yang bisa dihubungi (Whatsupp)</label>
          <input class="form-control form-control-lg" type="number" name="whatsupp" placeholder="Nomor yang bisa dihubungi" />
          <span style="color:red">
          <?= form_error('password'); ?>
          </span>
        </div>
        <div class="mb-3">
         <label for="formFile" class="form-label">Surat Lamaran Kerja (Pdf)</label>
         <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
      <label for="formFile" class="form-label">CV (Pdf)</label>
     <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
      <label for="formFile" class="form-label">ijazah (Pdf)</label>
      <input class="form-control" type="file" id="formFile">
      </div>
  <div class="mb-3">
    <label for="formFile" class="form-label">Lampiran Pendukung (Pdf)</label>
    <input class="form-control" type="file" id="formFile">
</div>
      </form>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>