<div class="col-md-12">
  <div class="card mb-3">
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <div class="p-2">
          <form action="<?=base_url('ujianPsikotes/list_ujianPsikotes')?>" role="form" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="nama_kategoriPsikotes" class="col-sm-6 control-label">Kategori :</label>
                  <select class="form-select" id="id_kategori" name="id_kategori" aria-label="Default select example">
                    <option value="0" disabled selected>Pilih Kategori</option>
                    <?php foreach($kategori as $k){?>
                    <option value="<?= $k->id_kategoriPsikotes?>"><?= $k->nama_kategoriPsikotes?></option>
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
          <h2 class="text-blue">Subtest Ujian</h2>
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
                <td><?=$no?></td>
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
                <a type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#modal-edit" onclick="editData(<?=$ld->id_ujian?>)"><i class="fa fa-pencil"></i></a>
                <a type="button" class="btn btn-red btn-sm btn-delete"  href="<?=base_url('soalPsikotes/delete/'.$ld->id_ujian)?>" name="btn_delete" style="margin:auto;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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