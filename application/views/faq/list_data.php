<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <div class="p-2">
          <h2 class="text-blue">Riwayat Lowongan</h2>
        </div>
        <div class="p-2">
          <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add"> Tambah Lowongan</button>
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
                <td><?=$ld->pertanyaan?></td>
                <td><?=$ld->jawaban?></td>
                <td class="text-center">
                <a type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#modal-edit" onclick="editData(<?=$ld->id_faq?>)"><i class="fa fa-pencil"></i></a>
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
            <textarea class="form-control" name="pertanyaan" rows="5"></textarea>
          </div> 
          <div class="mb-3">  
            <label for="jawaban" class="col-sm-4 control-label">Jawaban :</label>
            <textarea class="form-control" name="jawaban" rows="5"></textarea>
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
  <div class="modal-dialog" style="width:90%;">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data Lowongan</h4>
      </div>
      <div id="loading"></div>
      <form action="<?=base_url('faq/update')?>" role="form" method="post">
        <div class="modal-body">
          <div class="mb-3">  
            <label for="pertanyaan" class="col-sm-4 control-label">Pertanyaan :</label>
            <input type="hidden" class="form-control" id="id_faq" name="id_faq"></input>
            <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="5"></textarea>
          </div> 
          <div class="mb-3">  
            <label for="jawaban" class="col-sm-4 control-label">Jawaban :</label>
            <textarea class="form-control" id="jawaban" name="jawaban" rows="5"></textarea>
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
      url:"<?php echo site_url("faq/detailfaq")?>/" + $id,
      dataType:"JSON",
      type: "get",
      success:function(hasil){
        const faq = hasil;

        console.log(faq);
        document.getElementById("id_faq").value = faq.id_faq;
        document.getElementById("pertanyaan").value = faq.pertanyaan;
        document.getElementById("jawaban").value = faq.jawaban;
      }
    });
  }
</script>