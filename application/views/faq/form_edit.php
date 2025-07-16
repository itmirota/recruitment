<div class="card">
  <div class="card-body">
    <a class="mb-4" href="<?= base_url('list-faq')?>"><i class="fa fa-angle-left" aria-hidden="true"></i> kembali</a>
    <h2>Edit Data FAQ</h2>
    <form action="<?=base_url('faq/update/'.$detail_faq->id_faq)?>" role="form" method="post">
      <div class="modal-body">
        <div class="mb-3">  
          <label for="pertanyaan" class="col-sm-4 control-label">Pertanyaan :</label>
          <textarea class="form-control summernoteEdit" id="pertanyaan" name="pertanyaan"><?= $detail_faq->pertanyaan ?></textarea>
        </div> 
        <div class="mb-3">  
          <label for="jawaban" class="col-sm-4 control-label">Jawaban :</label>
            <!-- <div id="jawaban"></div> -->
            <textarea class="form-control summernoteEdit" id="jawaban" name="jawaban"><?= $detail_faq->jawaban ?></textarea>
        </div> 
      </div>
      <div class="modal-footer">
        <input type="submit" value="Simpan" class="btn pull-right btn btn-success"></input>
      </div>
    </form>
  </div>
</div>