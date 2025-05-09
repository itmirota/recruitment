<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-start">
        <div class="p-2">
          <a href="<?=base_url('hasil-psikotes')?>" class="btn btn-sm btn-warning"><i class="fa fa-solid fa-arrow-left"></i> Kembali</a>
        </div>
      </div>
      <div class="d-flex flex-fill justify-content-start">
        <div class="p-2">
          <h2 class="text-blue">Detail Hasil Psikotes</h2>

          <form>
            <div class="row mb-1">
              <label for="inputEmail3" class="col-sm-6 col-form-label">Nama Kandidat</label>
              <div class="col-sm-6">
                <input readonly type="text" class="form-control-plaintext" value=": <?= $pelamar->nama_kandidat?>">
              </div>
            </div>
            <div class="row mb-1">
              <label for="inputPassword3" class="col-sm-6 col-form-label">Posisi</label>
              <div class="col-sm-6">
                <input readonly type="text" class="form-control-plaintext" value=": <?= $pelamar->nama_lowongan?>" >
              </div>
            </div>
          </form>
        </div>
      </div>

      <table class="table"id="dataTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th>Test</th>
            <th>Subtest</th>
            <th>Jumlah Benar</th>
            <th>Nilai</th>
            <th class="text-center">Hasil</th>
            <!-- <th class="text-center" >Aksi</th> -->
          </tr>
        </thead>
        <tbody>
          <?php if(isset($detail_hasil)){ ?>
            <?php $no = 1;?>
            <?php foreach($detail_hasil as $dh): ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$dh->nama_kategoriPsikotes?></td>
                <td><?=$dh->nama_ujian?></td>
                <td><?=$dh->jml_benar?> Soal</td>
                <td><?=$dh->nilai?></td>
                <td class="text-center"><a href="<?= base_url('detail-jawaban?pelamar='.$dh->kandidat_id.'&&subtest='.$dh->ujian_id)?>"><i class="fa fa-solid fa-eye"></i></a></td>
            </tr>
            <?php $no++; ?>
          <?php endforeach;?>
          <?php }else { ?>
            <td colspan="7" align="center"><strong>Data Kosong</strong></td>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>