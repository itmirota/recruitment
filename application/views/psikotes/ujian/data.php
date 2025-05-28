<div class="col-md-12">
  <div class="card mb-3">
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <div class="p-2">
          <form action="<?=base_url('ujianPsikotes/list_ujianPsikotes')?>" role="form" method="get">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <label for="nama_kategoriPsikotes" class="col-sm-6 control-label">Kategori :</label>
                  <select class="form-select" id="id_kategori" name="id_kategori" aria-label="Default select example">
                    <option value="0" disabled <?= is_null($id_kategori) ? 'selected':''?>>Pilih Kategori</option>
                    <?php foreach($kategori as $k){?>
                    <option value="<?= $k->id_kategoriPsikotes?>" <?= $k->id_kategoriPsikotes == $id_kategori ? 'selected':''?>><?= $k->nama_kategoriPsikotes?></option>
                    <?php } ?>
                  </select>
                  <span style="color:red"><?= form_error('id_kategori'); ?></span>
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
          <h2 class="text-blue">Subtest Ujian <?= isset($detail_kategori) ? $detail_kategori->nama_kategoriPsikotes : ''?></h2>
        </div>
        <?php if(isset($id_kategori)){?>
        <div class="p-2">
          <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add"> Tambah Subtest</button>
        </div>
        <?php } ?>
      </div>

      <table id="dataTable" class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th>Subtest</th>
            <!-- <th class="text-center">Informasi</th> -->
            <th width="40%">Instruksi</th>
            <th class="text-center" >Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if(is_array($list_data)){ ?>
            <?php $no = 1;?>
            <?php foreach($list_data as $ld): ?>
            <tr>
                <td class="text-center"><?=$ld->urutan?></td>
                <!-- <td><?=$ld->nama_ujian  ?></td> -->
                <td>
                    <!-- <p class="m-0"><strong>waktu mulai:</strong></p>
                    <p class="m-0"><?=$ld->tgl_mulai?></p>
                    <p class="m-0"><strong>waktu selesai:</strong></p>
                    <p class="m-0"><?=$ld->terlambat?></p> -->
                    <p class="m-0"><strong>Judul: </strong><?=$ld->nama_ujian?></p>
                    <p class="m-0"><strong>Durasi: </strong><?=$ld->waktu?> Menit</p>
                    <p class="m-0"><strong>Jumlah Soal: </strong><?=$ld->jumlah_soal?> Soal</p>
                </td>
                <td><?=$ld->instruksi?></td>
                <td class="text-center">
                <a type="button" class="btn btn-sm" href="<?=base_url('edit-ujian/'.$ld->id_ujian)?>"><i class="fa fa-pencil"></i></a>
                <a type="button" class="btn btn-red btn-sm btn-delete"  href="<?=base_url('ujianPsikotes/delete/'.$ld->id_ujian)?>" name="btn_delete" style="margin:auto;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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

<!-- .INPUT DATA ---->
<div class="modal fade" id="modal-add">
  <div class="modal-dialog  modal-lg  ">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Subtest</h4>
      </div>
      <div id="loading"></div>
      <form action="<?=base_url('ujianPsikotes/save')?>" role="form" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="mb-3">
            <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Kategori :</label>
            <select class="form-select" name="id_kategori" id="id_kategori">
              <?php foreach($kategori as $k){?>
              <option value="<?= $k->id_kategoriPsikotes?>" <?= $k->id_kategoriPsikotes == $id_kategori ? 'selected':''?>><?= $k->nama_kategoriPsikotes?></option>
              <?php } ?>
            </select>
            <span style="color:red"><?= form_error('id_kategori_add'); ?></span>
          </div>

          <div class="mb-3">  
            <label for="nama_subtest" class="col-sm-4 control-label">Nama Subtest :</label>
            <input class="form-control mb-3" type="text" id="nama_subtest" name="nama_subtest">
          </div>

          <div class="row">
              <div class="col-4"> 
                <label for="urutan" class="control-label">Urutan :</label>
                <input class="form-control mb-3" type="text" id="urutan" name="urutan" value="<?= isset($max_urutan->urutan) ? $max_urutan->urutan+1 : 1?>">
              </div>
              <div class="col-4"> 
                <label for="durasi" class="control-label">Durasi :</label>
                <input class="form-control mb-3" type="text" id="durasi" name="durasi">
              </div>
              <div class="col-4">
                <label for="jml_soal" class="control-label">Jumlah Soal :</label>
                <input class="form-control mb-3" type="text" id="jml_soal" name="jml_soal">              
              </div>
          </div>
          
          <div class="mb-3">  
            <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Instruksi :</label>
            <textarea name="instruksi" class="form-control summernote"><?= set_value('instruksi') ?></textarea>
            <span style="color:red"><?= form_error('instruksi'); ?></span>
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