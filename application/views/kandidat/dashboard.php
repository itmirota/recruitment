<div class="halaman-user">
  <!-- PARALAX -->
  <div class="parallax"></div>
  <!-- PARALAX -->
  <div class="main">
    <div class="container">
      <h2 class="text-blue">Informasi</h2>
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-body d-flex flex-wrap justify-content-center">
              <?php if (isset($pelamar->status_pelamar)){?>
              <div class="p-2">
                <span style="font-size:50px;" class="text-<?= ($pelamar->status_pelamar == 0 ? 'primary': ($pelamar->status_pelamar == 1 ? 'success' : 'danger')) ?>">
                  <i class="fa fa-solid <?= ($pelamar->status_pelamar == 0 ?'fa-circle-info': ($pelamar->status_pelamar == 1 ? 'fa-circle-check' : 'fa-circle-xmark')) ?>"></i>
                </span>
              </div>
              <div class="p-2">
                <h1 class="text-header <?= $pelamar->status_pelamar == 2 ? 'text-center' : ''?> text-<?= ($pelamar->status_pelamar == 0 ? 'primary':($pelamar->status_pelamar == 1 ? 'success' : 'danger')) ?> mb-0">
                  <?= ($pelamar->status_pelamar == 0 ?'Selamat! Anda Lolos Ke Tahap': ($pelamar->status_pelamar == 1 ? 'Selamat! Anda Lolos' : 'Maaf, Anda Belum Terpilih dalam Seleksi Ini. Tetap Semangat & Pantang Menyerah!')) ?>
                </h1>
                <?php if ($pelamar->status_pelamar != 2) {?>
                <h1 class="text-header text-<?= ($pelamar->status_pelamar == 0 ?'primary':($pelamar->status_pelamar == 1 ? 'success' : 'danger')) ?> m-0">
                  <?= $pelamar->keterangan ?>
                </h1>
                <p class="text-<?= ($pelamar->status_pelamar == 0 ? 'primary': ($pelamar->status_pelamar == 1 ? 'success' : 'danger')) ?> mt-0">
                <?= $pelamar->nama_lowongan ?>
                </p>
                <?php }?>
              </div>
              <?php } else { ?> 
              tidak ada informasi
              <?php } ?>
            </div>
          </div>
          </div>
          <div class="col-md-6 mb-4">
          <div class="card">
            <div class="card-body d-flex flex-wrap justify-content-center">
              <div class="p-2">
                <span style="font-size:50px; color:#0D67BB">
                  <i class="fa fa-solid fa-file-lines"></i>
                </span>
              </div>
              <div class="p-2">
                <h1 class="text-header text-blue mb-0">
                  Ujian Psikotes Online
                </h1>
                <a href="<?= base_url('psikotes-online')?>" class="btn btn-sm btn-biru mt-2">Mulai Ujian</a>
              </div>
              <!-- <div class="p-0">
                <span class="text-grey">
                  belum ada informasi psikotest
                </span>
              </div> -->
            </div>
          </div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h2 class="text-blue">Riwayat Lamaran</h2>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Posisi</th>
                  <th scope="col">Tanggal melamar</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach($histori_pelamar as $data){ ?>
                <tr>
                  <th scope="row"><?= $no ?></th>
                  <td><?= $data->nama_lowongan ?></td>
                  <td><?= mediumdate_indo($data->tgl_melamar).' '.$data->waktu_melamar?></td>
                </tr>
                <?php 
                $no++;
                } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
