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
            <th>Nama Lowongan</th>
            <th>Kategori</th>
            <th>lokasi</th>
            <th>Tanggal Awal</th>
            <th>Tanggal akhir</th>
            <th class="text-center" >Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if(is_array($list_data)){ ?>
            <?php $no = 1;?>
            <?php foreach($list_data as $ld): ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$ld->nama_lowongan?></td>
                <td><?=$ld->kategori?></td>
                <td><?=$ld->wilayah?></td>
                <td><?=mediumdate_indo($ld->tgl_awal)?></td>
                <td><?=mediumdate_indo($ld->tgl_akhir)?></td>
                <td class="text-center">
                <a href="<?=base_url('lowongan/detaillowongan/'.$ld->id_lowongan)?>" type="button" class="btn btn-sm"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                <a type="button" class="btn btn-red btn-sm btn-delete"  href="<?=base_url('lowongan/delete/'.$ld->id_lowongan)?>" name="btn_delete" style="margin:auto;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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
        <h4 class="modal-title">Tambah Data Lowongan</h4>
      </div>
      <div id="loading"></div>
      <form action="<?=base_url('lowongan/save')?>" role="form" method="post">
        <div class="modal-body">

          <div class="mb-3">
            <label for="nama_lowongan" class="form-label">Judul Lowongan</label>
            <input type="email" class="form-control" name="nama_lowongan" placeholder="Masukkan Nama Lowongan">
          </div>
          <div class="mb-3">      
            <label for="kategori" class="col-sm-4 control-label">Kategori :</label>
            <select class="form-select" name="kategori">
                <option value="">- Pilih Kategori -</option>
                <option value="freshgraduate">freshgraduate</option>
                <option value="profesional">profesional</option>
                <option value="magang">magang</option>
              </select>
          </div>
          <div class="mb-3">      
            <label for="lokasi" class="col-sm-4 control-label">Lokasi :</label>
            <input type="text" name="lokasi" class="form-control" placeholder="Lokasi">
          </div>
          <div class="mb-3">
            <label for="tgl_awal" class="col-sm-4 control-label" >Tanggal Mulai :</label>
            <input type="date" name="tgl_awal" class="form-control" placeholder="Klik Disini">
          </div>  
          <div class="mb-3">
            <label for="tgl_akhir" class="col-sm-4 control-label" >Tanggal Akhir :</label>
            <input type="date" name="tgl_akhir" class="form-control" placeholder="Klik Disini">
          </div>  
          <div class="mb-3">  
            <label for="deskripsi" class="col-sm-4 control-label">Deskripsi :</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10"></textarea>
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
      <form action="<?=base_url('lowongan/update')?>" role="form" method="post">
        <div class="modal-body">

          <div class="mb-3">
            <label for="nama_lowongan" class="form-label">Judul Lowongan</label>
            <input type="hidden" class="form-control" id="id_lowongan" name="id_lowongan" placeholder="Masukkan Nama Lowongan">
            <input type="email" class="form-control" id="nama_lowongan" name="nama_lowongan" placeholder="Masukkan Nama Lowongan">
          </div>
          <div class="mb-3">      
            <label for="kategori" class="col-sm-4 control-label">Kategori :</label>
            <select class="form-select" id="kategori" name="kategori">
                <option value="">- Pilih Kategori -</option>
                <option value="freshgraduate">freshgraduate</option>
                <option value="profesional">profesional</option>
                <option value="magang">magang</option>
              </select>
          </div>
          <div class="mb-3">      
            <label for="lokasi" class="col-sm-4 control-label">Lokasi :</label>
            <input type="text" id="lokasi" name="lokasi" class="form-control" placeholder="Lokasi">
          </div>
          <div class="mb-3">
            <label for="tgl_awal" class="col-sm-4 control-label" >Tanggal Mulai :</label>
            <input type="date" id="tgl_awal" name="tgl_awal" class="form-control" placeholder="Klik Disini">
          </div>  
          <div class="mb-3">
            <label for="tgl_akhir" class="col-sm-4 control-label" >Tanggal Akhir :</label>
            <input type="date" id="tgl_akhir" name="tgl_akhir" class="form-control" placeholder="Klik Disini">
          </div>  
          <div class="mb-3">  
            <label for="deskripsi" class="col-sm-4 control-label">Deskripsi :</label>
            <textarea class="form-control" id="deskripsi_edit" name="deskripsi" rows="10"></textarea>
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
      url:"<?php echo site_url("lowongan/detaillowongan")?>/" + $id,
      dataType:"JSON",
      type: "get",
      success:function(hasil){
        const lowongan = hasil;

        console.log(lowongan);
        document.getElementById("id_lowongan").value = lowongan.id_lowongan;
        document.getElementById("nama_lowongan").value = lowongan.nama_lowongan;
        document.getElementById("kategori").value = lowongan.kategori;
        document.getElementById("lokasi").value = lowongan.wilayah;
        document.getElementById("tgl_awal").value = lowongan.tgl_awal;
        document.getElementById("tgl_akhir").value = lowongan.tgl_akhir;
        document.getElementById("deskripsi_edit").value = lowongan.deskripsi;
      }
    });
  }
</script>