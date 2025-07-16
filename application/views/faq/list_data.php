<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <div class="p-2">
          <h2 class="text-blue">FAQ</h2>
        </div>
        <div class="p-2">
          <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add"> Tambah FAQ</button>
        </div>
      </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th class="text-center" >Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if(is_array($list_data)){ ?>
            <?php $no = 1;?>
            <?php foreach($list_data as $ld): ?>
            <tr>
                <td><?=$no?></td>
                <td class="edit-pertanyaan"><?=$ld->pertanyaan?></div>
                <td class="edit-jawaban"><?=$ld->jawaban?></td>
                <td class="text-center">
                <a type="button" href="<?=base_url('faq/detailfaq/'.$ld->id_faq)?>" class="btn btn-sm"><i class="fa fa-pencil"></i></a>
                <a type="button" class="btn btn-red btn-sm btn-delete"  href="<?=base_url('faq/delete/'.$ld->id_faq)?>" name="btn_delete" style="margin:auto;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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
  <div class="modal-dialog" style="width:90%;">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah FAQ</h4>
      </div>
      <div id="loading"></div>
      <form action="<?=base_url('faq/save')?>" role="form" method="post">
        <div class="modal-body">
          <div class="mb-3">  
            <label for="pertanyaan" class="col-sm-4 control-label">Pertanyaan :</label>
            <textarea class="form-control summernote" name="pertanyaan" rows="5"></textarea>
          </div> 
          <div class="mb-3">  
            <label for="jawaban" class="col-sm-4 control-label">Jawaban :</label>
            <textarea class="form-control summernote" name="jawaban" rows="5"></textarea>
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