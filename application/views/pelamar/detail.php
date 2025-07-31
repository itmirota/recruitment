<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <a href="<?= base_url('list-pelamar')?>" class="mb-4"><i class="fa fa-solid fa-angles-left"></i> kembali</a>
      <h2 class="text-blue mt-2">detail Pelamar</h2>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="col-md-12">
        <h4 class="text-blue">Biodata Pelamar</h4>
        <div class="row">
          <label for="staticEmail" class="col-sm-4 col-form-label">Nama Lengkap</label>
          <div class="col-sm-6">
            <input type="text" readonly class="form-control-plaintext" value="<?= $detail->nama_kandidat?>">
          </div>
        </div>
        <div class="row">
          <label for="staticEmail" class="col-sm-4 col-form-label">Nama Panggilan</label>
          <div class="col-sm-6">
            <input type="text" readonly class="form-control-plaintext" value="<?= $detail->nama_panggilan?>">
          </div>
        </div>
        <div class="row">
          <label for="staticEmail" class="col-sm-4 col-form-label">Jenis Kelamin</label>
          <div class="col-sm-6">
            <input type="text" readonly class="form-control-plaintext" value="<?= $detail->jenis_kelamin == 'L' ? 'Laki-laki':'Perempuan'?>">
          </div>
        </div>
        <div class="row">
          <label for="staticEmail" class="col-sm-4 col-form-label">Tempat, Tanggal Lahir</label>
          <div class="col-sm-6">
            <input type="text" readonly class="form-control-plaintext" value="<?= $detail->tempat_lahir?>, <?= $detail->tgl_lahir?>">
          </div>
        </div>
        <div class="row">
          <label for="staticEmail" class="col-sm-4 col-form-label">Agama</label>
          <div class="col-sm-6">
            <input type="text" readonly class="form-control-plaintext" value="<?= $detail->agama?>">
          </div>
        </div>
        <div class="row">
          <label for="staticEmail" class="col-sm-4 col-form-label">Nomor HP</label>
          <div class="col-sm-6">
            <input type="text" readonly class="form-control-plaintext" value="<?= $detail->nomor_hp?>">
          </div>
        </div>
        <div class="row">
          <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
          <div class="col-sm-6">
            <input type="text" readonly class="form-control-plaintext" value="<?= $detail->email?>">
          </div>
        </div>
        <div class="row">
          <label for="staticEmail" class="col-sm-4 col-form-label">Golongan Darah</label>
          <div class="col-sm-6">
            <input type="text" readonly class="form-control-plaintext" value="<?= $detail->golongan_darah?>">
          </div>
        </div>
        <div class="row">
          <label for="staticEmail" class="col-sm-4 col-form-label">Tinggi/Berat Badan</label>
          <div class="col-sm-6">
            <input type="text" readonly class="form-control-plaintext" value="<?= $detail->tinggi_berat_badan?>">
          </div>
        </div>
        <div class="row">
          <label for="staticEmail" class="col-sm-4 col-form-label">Alamat Domisili</label>
          <div class="col-sm-6">
            <input type="text" readonly class="form-control-plaintext" value="<?= $detail->alamat_domisili?>">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="col-md-12">
        <h4 class="text-blue">Data Sekolah/Instansi</h4>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama Sekolah/Instansi</th>
              <th scope="col">Jenjang</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Tahun Masuk</th>
              <th scope="col">Tahun Lulus</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($list_pendidikan as $data):?>
            <tr>
              <td><?=$data->nama_instansi?></td>
              <td><?=$data->jenjang_pendidikan?></td>
              <td><?=$data->jurusan?></td>
              <td><?=$data->tahun_masuk?></td>
              <td><?=$data->tahun_lulus?></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="col-md-12">
        <h4 class="text-blue">Data Keluarga</h4>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">Hubungan</th>
              <th scope="col">No HP</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($list_keluarga as $data):?>
            <tr>
              <td><?=$data->nama_keluarga?></td>
              <td><?=$data->hubungan_keluarga?></td>
              <td><?=$data->no_hp?></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="col-md-12">
        <h4 class="text-blue">Pengalaman Kerja</h4>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama Perusahaan</th>
              <th scope="col">Divisi/Bagian</th>
              <th scope="col">Jabatan</th>
              <th scope="col">Tanggal Masuk</th>
              <th scope="col">Tanggal Keluar</th>
              <th scope="col">Nomor Referensi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($list_pengalaman as $data):?>
            <tr>
              <td><?=$data->nama_perusahaan?></td>
              <td><?=$data->divisi_bagian?></td>
              <td><?=$data->jabatan?></td>
              <td><?=$data->tgl_masuk?></td>
              <td><?=$data->tgl_keluar == '0000-00-00' ? 'masih berkerja' : $data->tgl_keluar?></td>
              <td><?=$data->nomor_referensi?></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>