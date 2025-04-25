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
              <h4>Selamat Datang, <?=$nama_lengkap?></h4>
              <p></p>
          </div>
          <div class="card card-primary">
              <div class="card-body">
              <h3 class="card-title">Data Diri</h3>

              <div class="row">
                  <div class="col-sm-6">
                  <table class="table">
                      <tr>
                          <th>Nama</th>
                          <td><?=$nama_lengkap?></td>
                      </tr>
                      <tr>
                          <th>Nama Ujian</th>
                          <td></td>
                      </tr>
                      <tr>
                          <th>Jumlah Test</th>
                          <td></td>
                      </tr>
                      <tr>
                          <th>Waktu</th>
                          <td></td>
                      </tr>
                  </table>
                  </div>
                  <div class="col-sm-6">
                      <div class="card card-solid">
                          <div class="card-body pb-0">
                              <div class="alert alert-info" role="alert">
                              <a href="<?= base_url('detail-ujian?test='.$ujian->kategoriPsikotes_id.'&&subtest='.$ujian->id_ujian)?>" class="btn btn-success btn-lg mb-4">
                                  <i class="fa fa-pencil"></i> Mulai
                              </a>
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
