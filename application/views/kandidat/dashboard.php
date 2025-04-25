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
                <div class="p-2">
                  <span style="font-size:50px; color:grey">
                    <i class="fa fa-solid fa-circle-check"></i>
                  </span>
                </div>
                <div class="p-2">
                  <h1 class="text-header text-grey mb-0">
                    Berkas Lamaran
                  </h1>
                  <h1 class="text-header text-grey mt-0">
                    Terkirim
                  </h1>
                </div>
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
                  <a href="<?= base_url('psikotes-online')?>" class="btn btn-sm btn-biru mt-2">Psikotest Online</a>
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
                  <th scope="col">Status</th>
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
                  <td><span class="badge text-bg-<?= $data->progres_lamaran == 0 ? 'secondary':($data->progres_lamaran == 1 ? 'info':($data->progres_lamaran == 2 ? 'success':'danger'))?>"> <?= $data->progres_lamaran == 0 ? 'lamaran dikirim':($data->progres_lamaran == 1 ? 'lamaran diperiksa':($data->progres_lamaran == 2 ? 'lolos '.$data->keterangan_progres:'gagal '.$data->keterangan_progres))?></span></td>
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
