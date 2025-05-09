<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <div class="p-2">
          <h2 class="text-blue">Hasil Psikotes</h2>
        </div>
        <div class="p-2">
          <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add"> Tambah Kategori</button>
        </div>
      </div>

      <table class="table"id="dataTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th>Nama Pelamar</th>
            <th>Posisi</th>
            <th>Tanggal Pengerjaan</th>
            <th class="text-center">Hasil</th>
            <!-- <th class="text-center" >Aksi</th> -->
          </tr>
        </thead>
        <tbody>
          <?php if(isset($hasil)){ ?>
            <?php $no = 1;?>
            <?php foreach($hasil as $h): ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$h->nama_kandidat?></td>
                <td><?=$h->nama_lowongan?></td>
                <td><?=mediumdate_indo($h->tgl_mulai)?></td>
                <td class="text-center"><a href="<?= base_url('detail-hasil?pelamar='.$h->kandidat_id)?>"><i class="fa fa-solid fa-eye"></i></a></td>
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
        <h4 class="modal-title">Tambah Kategori</h4>
      </div>
      <div id="loading"></div>
      <form action="<?=base_url('kategoriPsikotes/save')?>" role="form" method="post">
        <div class="modal-body">
          <div class="mb-3">  
            <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Kategori :</label>
            <input type="text" class="form-control" name="nama_kategoriPsikotes"></input>
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
      <form action="<?=base_url('kategoriPsikotes/update')?>" role="form" method="post">
        <div class="modal-body">
          <div class="mb-3">  
            <label for="nama_kategoriPsikotes" class="col-sm-4 control-label">Kategori :</label>
            <input type="hidden" class="form-control" id="id_kategoriPsikotes" name="id_kategoriPsikotes"></input>
            <input type="text" class="form-control" id="nama_kategoriPsikotes" name="nama_kategoriPsikotes"></input>
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
      url:"<?php echo site_url("kategoriPsikotes/detailKategoriPsikotes")?>/" + $id,
      dataType:"JSON",
      type: "get",
      success:function(hasil){
        document.getElementById("id_kategoriPsikotes").value = hasil.id_kategoriPsikotes;
        document.getElementById("nama_kategoriPsikotes").value = hasil.nama_kategoriPsikotes;
      }
    });
  }
</script>