    <div class="content">
      <div class="card card-solid">
        <div class="card-header">
          <h3 class="card-title"><strong>Edit Data Lowongan</strong></h3>
        </div>
      <form action="<?=base_url('lowongan/update/'.$list_data->id_lowongan)?>" role="form" id="updateLowongan" method="post">
        <div class="card-body">
          <div class="mb-3">      
            <label for="nama_lowongan" class="col-sm-4 control-label">Judul lowongan :</label>
              <input type="text" name="nama_lowongan" class="form-control" value="<?= $list_data->nama_lowongan?>">
          </div>
          <div class="d-flex">
            <div class="p-2 flex-fill">      
              <label for="kategori" class="col-sm-4 control-label">Kategori :</label>
                <select class="form-select" name="kategori">
                  <?php 
                  switch ($list_data->kategori) {
                    case 'freshgraduate':?>
                      <option value="<?= $list_data->kategori?>"><?= $list_data->kategori?></option>
                      <option value="profesional">freshgraduate</option>
                      <option value="magang">magang</option>
                    <?php break;

                    case 'profesional':?>
                      <option value="<?= $list_data->kategori?>"><?= $list_data->kategori?></option>
                      <option value="freshgraduate">freshgraduate</option>
                      <option value="magang">magang</option>
                    <?php break;
                    
                    default:?>
                      <option value="<?= $list_data->kategori?>"><?= $list_data->kategori?></option>
                      <option value="profesional">freshgraduate</option>
                      <option value="freshgraduate">freshgraduate</option>
                    <?php break;
                  }?>
                </select>
            </div>
            <div class="p-2 flex-fill">      
              <label for="lokasi" class="col-sm-4 control-label">Lokasi :</label>
                <input type="text" name="lokasi" class="form-control" value="<?= $list_data->wilayah?>">
            </div>
          </div>
          <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="tgl_awal" class="col-sm-4 control-label" >Tanggal Mulai :</label>
              <input type="date" name="tgl_awal" class="form-control"  value="<?= $list_data->tgl_awal ?>">
          </div>  
          <div class="p-2 flex-fill">
            <label for="tgl_akhir" class="col-sm-4 control-label" >Tanggal Akhir :</label>
              <input type="date" name="tgl_akhir" class="form-control" value="<?= $list_data->tgl_akhir ?>">
          </div> 
          </div> 
          <div class="mb-3">  
            <label for="deskripsi" class="col-sm-4 control-label">Deskripsi :</label>
              <textarea name="deskripsi" class="summernote" rows="10" cols="400"><?= $list_data->deskripsi ?></textarea>
          </div> 
        </div>
        <div class="card-footer d-flex justify-content-end">
          <input type="submit" value="Simpan" class="btn btn btn-success"></input>
        </div>
      </form>
    </div>