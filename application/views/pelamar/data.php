<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-start">
        <div class="p-2">
          <h2 class="text-blue">Data Pelamar</h2>
        </div>
      </div>

      <table class="table"id="dataTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th>Nama Pelamar</th>
            <th>Posisi</th>
            <th>No WA</th>
            <th>Pendidikan Terakhir</th>
            <th>Status</th>
            <th width="150">Keterangan</th>
            <th class="text-center">Dokumen</th>
            <!-- <th class="text-center" >Aksi</th> -->
          </tr>
        </thead>
        <tbody>
          <?php if(isset($list_data)){ ?>
            <?php $no = 1;?>
            <?php foreach($list_data as $data): ?>
            <tr>
                <td><?=$no?></td>
                <td><a href="#" target="_blank"><?=$data->nama_kandidat?></a></td>
                <td><?=$data->nama_lowongan?></td>
                <td><a href="http://wa.me/<?=$data->nomor_hp?>" target="_blank"><?=$data->nomor_hp?></a></td>
                <td>
                  <?php 
                  $pendidikan = $this->crud_model->GetDataByIdOrder(['kandidat_id'=>$data->id_kandidat],'tbl_kandidat_pendidikan','id_pendidikan','desc');
                  ?>  
                  <?=isset($pendidikan->nama_instansi) ? $pendidikan->nama_instansi:'-'?>
                </td>
                <td>    
                  <button type="button" class="btn btn-sm btn-<?= ($data->status_pelamar == 0 ? 'secondary':($data->status_pelamar == 1 ? 'success':'danger'))?> dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= ($data->status_pelamar == 0 ? 'Dijadwalkan':($data->status_pelamar == 1 ? 'lolos':'tidak lolos'))?>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('Lowongan/UpdateStatus?kandidat='.$data->id_kandidat.'&&status=0')?>">Dijadwalkan</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('Lowongan/UpdateStatus?kandidat='.$data->id_kandidat.'&&status=1')?>">Lolos</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('Lowongan/UpdateStatus?kandidat='.$data->id_kandidat.'&&status=2')?>">Tidak Lolos </a></li>
                  </ul>
                </td>
                <td>
                  <?=$data->keterangan?> <a class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modal-progress"><i class="fa fa-solid fa-pencil"></i></a>
                  <!-- .DETAIL DATA ---->
                  <div class="modal fade" id="modal-progress">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Update Progress</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?= base_url('Lowongan/UpdateProgres')?>" method="post">
                        <div class="modal-body"> 
                          <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-4 col-form-label">Progress</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="keterangan">
                              <input type="hidden" class="form-control-plaintext" name="id_kandidat" value="<?=$data->id_kandidat?>">
                              <input type="hidden" class="form-control-plaintext" name="id_lowongan" value="<?=$data->id_lowongan?>">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                            <div class="col-sm-8">
                              <input type="datetime-local" class="form-control" name="tanggal">
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-sm btn-outline-success" type="submit">Simpan</button>
                        </div>
                        </form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.DETAIL DATA ---->
                </td>

                <td class="text-center"><a data-bs-toggle="modal" data-bs-target="#modal-dokumen" onclick="detail(<?= $data->id_pelamar?>)" type="button" class="btn btn-blue btn-sm btn-detail"><i class="fa fa-file"></i></a></td>
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

<!-- .DETAIL DATA ---->
<div class="modal fade" id="modal-dokumen">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div id="loading"></div>
      <div class="modal-body"> 
        <div class="form-group">      
            <div class="col-sm-12" name="file" id="file">
            </div>
        </div>
      </div>
      <div class="modal-footer"></div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.DETAIL DATA ---->

<!-- /.content-wrapper -->

<script>
  function detail($id){
    $.ajax({
      url:"<?php echo site_url("kandidat/getDataPelamar")?>/" + $id,
      type: "get",
      success:function(hasil){
        var $obj = $.parseJSON(hasil);

        if ($obj.id_pelamar != ''){
          $cv = $obj.cv;
          $ijazah = $obj.ijazah;
          $lampiran = $obj.lampiran;

          var $cv = "<?= site_url("assets/document")?>/" + $cv;
          var $ijazah = "<?= site_url("assets/document")?>/" + $ijazah;
          var $lampiran = "<?= site_url("assets/document")?>/" + $lampiran;

          var html = ' ';
          html += 
          '<label class="mb-4"> Surat Lamaran</label>';
          html += 
          '<label class="mb-4">File CV</label>';
          html += 
          '<embed type="application/pdf" src="'+ $cv +'" width="700" height="400"></embed>';
          html += 
          '<label class="mb-4">File Ijazah</label>';
          html += 
          '<embed type="application/pdf" src="'+ $ijazah +'" width="700" height="400"></embed>';
          
          if($obj.lampiran != ""){
          html += 
          '<label class="mb-4">Lampiran Lainnya</label>';
          html += 
          '<embed type="application/pdf" src="'+ $lampiran +'" width="700" height="400"></embed>';
          }

          $("#file").html(html);
        }
      }
    });
  };
</script>