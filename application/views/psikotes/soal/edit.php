<div class="col-md-10">
  <div class="d-flex mb-4">
    <a href="<?= base_url('soal-psikotes')?>" class="btn btn-md btn-warning"> kembali</a>
  </div>
  <div class="card">
  <form action="<?=base_url('update-soal-psikotes/'.$list_data->id_soalPsikotes)?>" role="form" method="post" enctype="multipart/form-data">
    <div class="card-body">
      <h1>Form Edit Soal</h1>
      <div class="d-flex flex-row">
      <div class="mb-3 flex-fill me-2">
      <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Kategori :</label>
      <select class="form-select" id="kategoriPsikotes_id" name="kategoriPsikotes_id" aria-label="Default select example">
        <?php foreach($kategori as $k){?>
        <option value="<?= $k->id_kategoriPsikotes?>"><?= $k->nama_kategoriPsikotes?></option>
        <?php } ?>
      </select>
      <span style="color:red"><?= form_error('kategoriPsikotes_id'); ?></span>
      </div>
      <div class="mb-3 flex-fill">
      <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Subtest :</label>
      <select class="form-select" id="ujian_id" name="ujian_id" aria-label="Default select example">
        <?php foreach($subtest as $k){?>
        <option value="<?= $k->id_ujian?>"><?= $k->nama_ujian?></option>
        <?php } ?>
      </select>
      <span style="color:red"><?= form_error('kategoriPsikotes_id'); ?></span>
      </div>
      </div>
      <div class="mb-3">  
        <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Soal :</label>
        <input class="form-control mb-3" type="file" id="file_soal" name="file_soal">
        <span style="color:red"><?= form_error('file_soal'); ?></span>
        <textarea id="soal" name="soal" class="form-control summernote"><?= $list_data->soal ?></textarea>
        <span style="color:red"><?= form_error('soal'); ?></span>
      </div>

      <div class="mb-3">  
        <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Jumlah Opsi :</label>
        <input class="form-control mb-3" type="text" id="jumlah_opsi" name="jumlah_opsi" value="<?= $list_data->jumlah_opsi ?>">
      </div>
      
      <?php
      $abjad = ['a', 'b', 'c', 'd', 'e'];
      foreach($abjad as $abj){ 
      $ABJ = strtoupper($abj); // Abjad Kapital
      $opsi = 'opsi_'.$abj;
      $opsi = $list_data->$opsi;
      ?>
      <div class="mb-3">  
        <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Jawaban <?= $ABJ; ?></label>
        <input class="form-control mb-3" type="file" id="file_<?= $abj; ?>" name="file_<?= $abj; ?>">
        <span style="color:red"><?= form_error('file_<?= $abj; ?>'); ?></span>
        <textarea name="jawaban_<?= $abj; ?>" id="jawaban_<?= $abj; ?>" class="form-control summernote"><?= $opsi ?></textarea>
        <span style="color:red"><?= form_error('jawaban_<?= $abj; ?>'); ?></span>
      </div>  
      <?php } ?>

      <div class="mb-3">
        <label for="jawaban" class="control-label">Kunci Jawaban</label>
        <select required="required" name="jawaban" id="jawaban" class="form-select">
            <?php 
            $abjad = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h']; 

            for ($i=0;$i < $list_data->jumlah_opsi;$i++){
            ?>
            <option value="<?= strtoupper($abjad[$i]) ?>" <?= $list_data->jawaban == strtoupper($abjad[$i]) ? 'selected':''?>><?= strtoupper($abjad[$i]) ?></option>
            <?php } ?>
        </select>
        <span style="color:red"><?= form_error('jawaban') ?></span>
      </div>
      <div class="mb-3">
        <label for="bobot" class="control-label">Bobot Soal</label>
        <input required value="<?= $list_data->bobot ?>" type="number" name="bobot" placeholder="Bobot Soal" id="bobot" class="form-control">
        <span style="color:red"><?= form_error('bobot') ?></span>
      </div>
    </div>
    <div class="card-footer">
      <input type="submit" value="Simpan" class="btn pull-right btn btn-success"></input>
    </div>
  </form>
  </div>
</div>

<script>
  $('.summernote').summernote({
    tabsize: 2,
    height: 120,
    toolbar: [
    ['style', ['style']],
    ['font', ['bold', 'underline', 'clear']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['table', ['table']],
    ['insert', ['link', 'picture', 'video']],
    ['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
</script>