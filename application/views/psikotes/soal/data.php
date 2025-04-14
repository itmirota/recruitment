<div class="col-md-12">

  <div class="d-flex justify-content-end mb-3">
    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add"> Tambah Soal</button>
  </div>

  <div class="card mb-3">
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <div class="p-2">
          <form action="<?=base_url('soalPsikotes/list_soalPsikotes')?>" role="form" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="nama_kategoriPsikotes" class="col-sm-6 control-label">Kategori :</label>
                  <select class="form-select" id="id_kategori" name="id_kategori" onchange="getUjianByKategori()" aria-label="Default select example">
                    <option value="0" disabled selected>Pilih Kategori</option>
                    <?php foreach($kategori as $k){?>
                    <option value="<?= $k->id_kategoriPsikotes?>"><?= $k->nama_kategoriPsikotes?></option>
                    <?php } ?>
                  </select>
                  <span style="color:red"><?= form_error('id_kategori'); ?></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="nama_kategoriPsikotes" class="col-sm-6 control-label">Subtest :</label>
                  <select class="form-select" id="ujian" name="ujian" aria-label="Default select example">
                  </select>
                  <span style="color:red"><?= form_error('ujian'); ?></span>
                </div>
              </div>
            </div>
            <input type="submit" value="Tampilkan" class="btn pull-right btn btn-success"></input>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <div class="p-2">
          <h2 class="text-blue">Soal</h2>
        </div>
      </div>
      <?php if(isset($id_subtest)) { ?>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th>Soal</th>
            <th class="text-center" >Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if(is_array($list_data)){ ?>
            <?php $no = 1;?>
            <?php foreach($list_data as $ld): ?>
            <tr>
                <td><?=$no?></td>
                <td>
                  <?=$ld->soal?>
                  <?php
                  if(!empty($ld->file)){ ?>
                    <img src="<?= base_url('assets/psikotes/soal/'.$ld->file)?>" class="img-thumbnail" alt="...">
                  <?php } ?>
                </td>
                <td class="text-center">
                <a type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#modal-edit" onclick="editData(<?=$ld->id_soalPsikotes?>)"><i class="fa fa-pencil"></i></a>
                <a type="button" class="btn btn-red btn-sm btn-delete"  href="<?=base_url('soalPsikotes/delete/'.$ld->id_soalPsikotes)?>" name="btn_delete" style="margin:auto;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>
            <?php $no++; ?>
          <?php endforeach;?>
          <?php }else { ?>
            <td colspan="7" align="center"><strong>Data Kosong</strong></td>
          <?php } ?>
        </tbody>
      </table>
      <?php } else { ?> 
      tidak ada data
      <?php } ?>

    </div>
  </div>
</div>

<!-- .INPUT DATA ---->
<div class="modal fade" id="modal-add">
  <div class="modal-dialog  modal-lg  ">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Soal</h4>
      </div>
      <div id="loading"></div>
      <form action="<?=base_url('soalPsikotes/save')?>" role="form" method="post">
        <div class="modal-body">
          <div class="mb-3">
            <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Kategori :</label>
            <select class="form-select" name="kategoriPsikotes_id" aria-label="Default select example">
              <option value="" disabled selected>Pilih Kategori</option>
              <?php foreach($kategori as $k){?>
              <option value="<?= $k->id_kategoriPsikotes?>"><?= $k->nama_kategoriPsikotes?></option>
              <?php } ?>
            </select>
            <span style="color:red"><?= form_error('kategoriPsikotes_id'); ?></span>
          </div>

          <div class="mb-3">
            <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Kategori :</label>
            <select class="form-select" name="kategoriPsikotes_id" aria-label="Default select example">
              <option value="" disabled selected>Pilih Kategori</option>
              <?php foreach($kategori as $k){?>
              <option value="<?= $k->id_kategoriPsikotes?>"><?= $k->nama_kategoriPsikotes?></option>
              <?php } ?>
            </select>
            <span style="color:red"><?= form_error('kategoriPsikotes_id'); ?></span>
          </div>
          
          <div class="mb-3">  
            <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Soal :</label>
            <input class="form-control mb-3" type="file" name="file_soal">
            <span style="color:red"><?= form_error('file_soal'); ?></span>
            <textarea name="soal" class="form-control summernote"><?= set_value('soal') ?></textarea>
            <span style="color:red"><?= form_error('soal'); ?></span>
          </div>
          
          <?php
          $abjad = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
          foreach($abjad as $abj){ 
          $ABJ = strtoupper($abj); // Abjad Kapital
          ?>
          <div class="mb-3">  
            <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Jawaban <?= $ABJ; ?></label>
            <input class="form-control mb-3" type="file" name="file_<?= $abj; ?>">
            <span style="color:red"><?= form_error('file_<?= $abj; ?>'); ?></span>
            <textarea name="jawaban_<?= $abj; ?>" class="form-control summernote"><?= set_value('jawaban_<?= $abj; ?>') ?></textarea>
            <span style="color:red"><?= form_error('jawaban_<?= $abj; ?>'); ?></span>
          </div>  
          <?php } ?>

          <div class="mb-3">
            <label for="jawaban" class="control-label">Kunci Jawaban</label>
            <select required="required" name="jawaban" class="form-select">
                <option value="" disabled selected>Pilih Kunci Jawaban</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select>
            <span style="color:red"><?= form_error('jawaban') ?></span>
          </div>
          <div class="mb-3">
            <label for="bobot" class="control-label">Bobot Soal</label>
            <input required="required" value="1" type="number" name="bobot" placeholder="Bobot Soal" class="form-control">
            <span style="color:red"><?= form_error('bobot') ?></span>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" value="Simpan" class="btn pull-right btn btn-success"></input>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.INPUT DATA ---->

<!-- .EDIT DATA ---->
<div class="modal fade" id="modal-edit">
  <div class="modal-dialog  modal-lg  ">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Soal</h4>
      </div>
      <div id="loading"></div>
      <form action="<?=base_url('soalPsikotes/update')?>" role="form" method="post">
        <div class="modal-body">
          <div class="mb-3">
          <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Kategori :</label>
          <select class="form-select" id="kategoriPsikotes_id" name="kategoriPsikotes_id" aria-label="Default select example">
            <?php foreach($kategori as $k){?>
            <option value="<?= $k->id_kategoriPsikotes?>"><?= $k->nama_kategoriPsikotes?></option>
            <?php } ?>
          </select>
          <span style="color:red"><?= form_error('kategoriPsikotes_id'); ?></span>
          </div>
          <div class="mb-3">  
            <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Soal :</label>
            <input class="form-control mb-3" type="file" id="file_soal" name="file_soal">
            <span style="color:red"><?= form_error('file_soal'); ?></span>
            <textarea id="soal" name="soal" class="form-control summernote"><?= set_value('soal') ?></textarea>
            <span style="color:red"><?= form_error('soal'); ?></span>
          </div>
          
          <?php
          $abjad = ['a', 'b', 'c', 'd', 'e'];
          foreach($abjad as $abj){ 
          $ABJ = strtoupper($abj); // Abjad Kapital
          ?>
          <div class="mb-3">  
            <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Jawaban <?= $ABJ; ?></label>
            <input class="form-control mb-3" type="file" id="file_<?= $abj; ?>" name="file_<?= $abj; ?>">
            <span style="color:red"><?= form_error('file_<?= $abj; ?>'); ?></span>
            <textarea name="jawaban_<?= $abj; ?>" id="jawaban_<?= $abj; ?>" class="form-control summernote"><?= set_value('jawaban_<?= $abj; ?>') ?></textarea>
            <span style="color:red"><?= form_error('jawaban_<?= $abj; ?>'); ?></span>
          </div>  
          <?php } ?>

          <div class="mb-3">
            <label for="jawaban" class="control-label">Kunci Jawaban</label>
            <select required="required" name="jawaban" id="jawaban" class="form-select">
                <option value="" disabled selected>Pilih Kunci Jawaban</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select>
            <span style="color:red"><?= form_error('jawaban') ?></span>
          </div>
          <div class="mb-3">
            <label for="bobot" class="control-label">Bobot Soal</label>
            <input required="required" value="1" type="number" name="bobot" placeholder="Bobot Soal" id="bobot" class="form-control">
            <span style="color:red"><?= form_error('bobot') ?></span>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" value="Simpan" class="btn pull-right btn btn-success"></input>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.EDIT DATA ---->

<script>

  function editData($id){
    $.ajax({
      url:"<?php echo site_url("soalPsikotes/detailSoalPsikotes")?>/" + $id,
      dataType:"JSON",
      type: "get",
      success:function(hasil){
        // document.getElementById("id_soalPsikotes").value = hasil.id_soalPsikotes;
        document.getElementById("kategoriPsikotes_id").value = hasil.kategoriPsikotes_id;
        document.getElementById("soal").value = hasil.soal;
        document.getElementById("jawaban_a").summernote('code', 'hello world');
      }
    });
  }

  function getUjianByKategori(){
    let kategori = $("#id_kategori").val();
    $.ajax({
      type : "POST",
      dataType : "JSON",
      url:"<?php echo site_url("soalPsikotes/getUjianByKategori")?>/"+kategori,
      success : function(data){

        let html = ' ';
        let i;

        html += 
            '<option>---pilih subtest---</option>';
        for ( i=0; i < data.length ; i++){
            html += 
            '<option value="'+ data[i].id_ujian +'">'+ data[i].nama_ujian +'</option>';
        }

        $("#ujian").html(html);
      }
    });
  }

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