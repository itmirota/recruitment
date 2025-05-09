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
        <div class="card card-content p-4">
          <div class="alert alert-info" role="alert">
            <div class="row">
                <div class="col-md-12">
                <h4>Selamat <?=$nama_lengkap?>,</h4>
                <p class="m-0 mt-2">Anda lolos pada tahap seleksi administrasi. Selanjutnya anda akan diminta untuk mengerjakan PSIKOTES yang wajib anda ikuti dengan peraturan sebagai berikut:</p>
                <p class="m-0 mt-2">1. Izinkan <strong>penggunaan kamera</strong> pada browser yang anda gunakan.</p>
                <p class="m-0">2. Pastikan anda sedang dalam waktu senggang dan <strong>tidak sedang melakukan aktifitas lain</strong>.</p>
                <p class="m-0">3. Pengerjaan psikotes <strong>tidak boleh</strong> diwakilkan oleh siapapun.</p>
                </div>
            </div>
          </div>
          <div class="card card-primary">
              <div class="card-body">
              <div class="row">
                  <div class="col-sm-6">
                  <h3 class="card-title">Informasi</h3>
                  <table class="table">
                      <tr>
                          <th>Nama</th>
                          <td><?=$nama_lengkap?></td>
                      </tr>
                      <tr>
                          <th>Posisi yang dilamar</th>
                          <td><?=$pelamar->nama_lowongan?></td>
                      </tr>
                      <tr>
                          <th>Area Kerja</th>
                          <td><?=$pelamar->wilayah?></td>
                      </tr>
                  </table>
                  </div>
                  <div class="col-sm-6">
                      <div class="card card-solid">
                          <div class="card-body pb-0">
                              <div class="alert alert-info" role="alert">
                              <p>Jika anda sudah mempersiapkan segalanya anda dapat memulai dengan menekan tombol dibawah ini</p>
                              <?php if(is_null($cek_psikotes)){?>
                                <a href="<?= base_url('detail-ujian?test='.$ujian->kategoriPsikotes_id.'&&subtest='.$ujian->id_ujian.'&&posisi='.$pelamar->id_lowongan)?>" class="btn btn-success btn-md mb-4">
                                 Mulai Psikotest
                                </a>
                              <?php }else{ ?>
                                  <span style="color:red">Anda Telah Mengerjakan Ujian Psikotes Online</span>
                              <?php } ?>
                              
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<script src="<?= base_url().'assets/dist/js/webcam.js'?>"></script>

