<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <div class="p-2">
          <h2 class="text-blue">Ujian</h2>
        </div>
        <div class="p-2">
          <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add"> Tambah Soal</button>
        </div>
      </div>

      <table id="dataTable" class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th width="10px">Nama Ujian</th>
            <th width="50px">Kategori Ujian</th>
            <th width="10px">Jumlah Soal</th>
            <th class="text-center">Waktu</th>
            <th class="text-center" >Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if(is_array($list_data)){ ?>
            <?php $no = 1;?>
            <?php foreach($list_data as $ld): ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$ld->nama_ujian  ?></td>
                <td><?=$ld->nama_kategoriPsikotes?></td>
                <td><?=$ld->jumlah_soal?></td>
                <td>
                    <p class="m-0"><strong>waktu mulai:</strong></p>
                    <p class="m-0"><?=$ld->tgl_mulai?></p>
                    <p class="m-0"><strong>waktu selesai:</strong></p>
                    <p class="m-0"><?=$ld->terlambat?></p>
                    <p class="m-0"><strong>Durasi: </strong><?=$ld->waktu?> Menit</p>
                </td>
                <td class="text-center">
                <a href="<?= base_url('detail-ujian/').$ld->id_ujian?>" type="button" class="btn btn-solid btn-primary btn-sm"><i class="fa fa-pencil"></i> Mulai Ujian</a>
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