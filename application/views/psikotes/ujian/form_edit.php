<div class="container">
<div class="card">
  <div class="card-header">
    <h4>Edit Ujian <?= $ujian->nama_ujian?></h4>
  </div>
  <form action="<?=base_url('ujianPsikotes/update')?>" role="form" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_ujian" value="<?= $ujian->id_ujian ?>">
    <div class="card-body">
      <div class="mb-3">
        <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Kategori :</label>
        <select class="form-select" name="id_kategori" id="id_kategori">
          <?php foreach($kategori as $k){?>
          <option value="<?= $k->id_kategoriPsikotes?>" <?= $k->id_kategoriPsikotes == $ujian->kategoriPsikotes_id ? 'selected':''?>><?= $k->nama_kategoriPsikotes?></option>
          <?php } ?>
        </select>
        <span style="color:red"><?= form_error('id_kategori_add'); ?></span>
      </div>

      <div class="mb-3">  
        <label for="nama_subtest" class="col-sm-4 control-label">Nama Subtest :</label>
        <input class="form-control mb-3" type="text" id="nama_subtest" name="nama_subtest" value="<?= $ujian->nama_ujian ?>">
      </div>

      <div class="row">
          <div class="col-4"> 
            <label for="urutan" class="control-label">Urutan :</label>
            <input class="form-control mb-3" type="text" id="urutan" name="urutan" value="<?= $ujian->urutan ?>">
          </div>
          <div class="col-4"> 
            <label for="durasi" class="control-label">Durasi :</label>
            <input class="form-control mb-3" type="text" id="durasi" name="durasi" value="<?= $ujian->waktu ?>">
          </div>
          <div class="col-4">
            <label for="jml_soal" class="control-label">Jumlah Soal :</label>
            <input class="form-control mb-3" type="text" id="jml_soal" name="jml_soal" value="<?= $ujian->jumlah_soal ?>">              
          </div>
      </div>
      
      <div class="mb-3">  
        <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Instruksi :</label>
        <textarea name="instruksi" class="form-control summernote"><?= $ujian->instruksi ?></textarea>
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