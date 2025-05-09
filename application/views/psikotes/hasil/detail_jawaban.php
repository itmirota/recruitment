<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-start">
        <div class="p-2">
          <a href="<?=base_url('detail-hasil?pelamar='.$id_pelamar)?>" class="btn btn-sm btn-warning"><i class="fa fa-solid fa-arrow-left"></i> Kembali</a>
        </div>
      </div>
      <div class="d-flex flex-fill justify-content-start">
        <div class="p-2">
          <h2 class="text-blue">Detail Jawaban Psikotes</h2>

          <form>
            <div class="row mb-1">
              <label for="inputEmail3" class="col-sm-6 col-form-label">Nama Kandidat</label>
              <div class="col-sm-6">
                <input readonly type="text" class="form-control-plaintext" value=": <?= $pelamar->nama_kandidat?>">
              </div>
            </div>
            <div class="row mb-1">
              <label for="inputPassword3" class="col-sm-6 col-form-label">Test</label>
              <div class="col-sm-6">
                <input readonly type="text" class="form-control-plaintext" value=": <?= $ujian->nama_kategoriPsikotes?>" >
              </div>
            </div>
            <div class="row mb-1">
              <label for="inputPassword3" class="col-sm-6 col-form-label">SubTest</label>
              <div class="col-sm-6">
                <input readonly type="text" class="form-control-plaintext" value=": <?= $ujian->nama_ujian?>" >
              </div>
            </div>
            <div class="row mb-1">
              <label for="inputPassword3" class="col-sm-6 col-form-label">Jumlah Benar</label>
              <div class="col-sm-6">
                <input readonly type="text" class="form-control-plaintext" value=": <?= $hasil->jml_benar?> Soal" >
              </div>
            </div>
            <div class="row mb-1">
              <label for="inputPassword3" class="col-sm-6 col-form-label">Nilai</label>
              <div class="col-sm-6">
                <input readonly type="text" class="form-control-plaintext" value=": <?= $hasil->nilai?>" >
              </div>
            </div>
          </form>
        </div>
      </div>

      <table class="table"id="dataTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th>Soal</th>
            <th>Kunci</th>
            <th>Jawaban</th>
          </tr>
        </thead>
        <tbody>
          <?php if(isset($detail_jawaban)){ ?>
            <?php $no = 1;?>
            <?php $list = explode(',',$detail_jawaban->list_jawaban);?>
            <?php foreach($list as $l): 
            $detail = explode(':',$l);
            $id_soal = $detail[0];

            $soal = $this->crud_model->GetDataById('id_soalPsikotes ='.$id_soal,'tbl_psikotes_soal');
            ?>
            <tr>
                <td><?=$no?></td>
                <td>
                  <?=$soal->soal?>
                  <?php if (!empty($soal->file)){?>
                  <img class="thumbnail" src="<?=base_url('assets/psikotes/soal/').$soal->file?>" style="width: 200px;">
                  <?php } ?>
                </td>
                <td><?=$soal->jawaban?></td>
                <td><span style="color:<?= $detail[1] == $soal->jawaban ? 'green':($soal->jawaban == '-' ? '#495057':'red')?>"><?=$detail[1]?></span></td>
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