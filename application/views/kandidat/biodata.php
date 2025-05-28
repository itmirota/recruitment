<div class="lowongan">
  <!-- PARALAX -->
  <div class="parallax">
  <div class="header-lowongan">
    <h1 class="text-tittle text-center text-light">Biodata Kandidat</h1>
  </div>
  </div>
  <!-- PARALAX -->

  <!-- MAIN -->
  <div class="main">
    <div class="container">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist ">
          <li class="nav-item" role="presentation">
              <button class="nav-link <?= $page == 'Data-diri' ? 'active':''?>" id="Data-diri" data-bs-toggle="pill" data-bs-target="#datadiri" type="button" role="tab" aria-controls="pills-home" aria-selected="true" >Data Diri</button>
          </li>
          <li class="nav-item" role="presentation">
              <button class="nav-link <?= $page == 'riwayat-pendidikan' ? 'active':''?>" id="riwayat-pendidikan" data-bs-toggle="pill" data-bs-target="#riwayatpendidikan" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                Riwayat Pendidikan</button>
          </li>
          <li class="nav-item" role="presentation">
              <button class="nav-link <?= $page == 'sertifikat' ? 'active':''?>" id="sertifikat" data-bs-toggle="pill" data-bs-target="#Sertifikasi" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                Sertifikasi</button>
          </li>
          <li class="nav-item" role="presentation">
              <button class="nav-link <?= $page == 'pengalman-kerja' ? 'active':''?>" id="pengalman-kerja" data-bs-toggle="pill" data-bs-target="#pengalaman" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                Pengalaman Kerja</button>
          </li>
          <li class="nav-item" role="presentation">
              <button class="nav-link <?= $page == 'medsos' ? 'active':''?>" id="medsos" data-bs-toggle="pill" data-bs-target="#akun" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                Media Sosial</button>
          </li>
          <li class="nav-item" role="presentation">
              <button class="nav-link <?= $page == 'Data-keluarga' ? 'active':''?>" id="Data-keluarga" data-bs-toggle="pill" data-bs-target="#datakeluarga" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Data Keluarga</button>
          </li>
          <li class="nav-item" role="presentation">
              <button class="nav-link <?= $page == 'lain-lain' ? 'active':''?>" id="lain-lain" data-bs-toggle="pill" data-bs-target="#keterangan" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                Keterangan Lain</button>
          </li>
          <!-- <li class="nav-item" role="presentation">
              <button class="nav-link" id="document-pendukung" data-bs-toggle="pill" data-bs-target="#berkas" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                Dokumen Pendukung</button>
          </li> -->
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade <?= $page == 'Data-diri' ? 'show active':''?>" id="datadiri" role="tabpanel" aria-labelledby="Data-diri" tabindex="0">
          <div class="card">
            <div class="card-body">
              <form action="<?=base_url('kandidat/update_datadiri')?>" role="form" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="col-md-12 mb-3">
                      <label for="inputNama" class="form-label">Nama Lengkap</label>
                      <input type="hidden" id="id_kandidat" name="id_kandidat" class="form-control" >
                      <input type="text" name="nama_kandidat" class="form-control" value="<?=$data_diri->nama_kandidat?>">
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="inputNama" class="form-label">Nama Panggilan</label>
                      <input type="text" name="nama_panggilan" class="form-control" id="inputPassword4"  value="<?=$data_diri->nama_panggilan?>">
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="inputGender" class="form-label">Jenis Kelamin</label>
                      <select class="form-select" name="jenis_kelamin" aria-label="jenis_kelamin">
                        <option>pilih jenis kelamin</option>
                        <option value="P" <?= $data_diri->jenis_kelamin == 'P' ? 'selected': ''?>>Perempuan</option>
                        <option value="L" <?= $data_diri->jenis_kelamin == 'L' ? 'selected': ''?>>Laki Laki</option>
                      </select>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="row">
                      <div class="col-6">
                      <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                      <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir"  value="<?=$data_diri->tempat_lahir?>">
                      </div>
                      <div class="col-6">
                      <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                      <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir"  value="<?=$data_diri->tgl_lahir?>">
                      </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="agama" class="form-label">Agama</label>
                      <input type="text" name="agama" class="form-control" value="<?=$data_diri->agama?>">
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="inputEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" value="<?=$data_diri->email?>">
                    </div>
                    <div class="row mb-3">
                      <div class="col-md-6 mb-3">
                        <label for="Darah" class="form-label">Golongan darah</label>
                        <select class="form-select" name="golongan_darah" aria-label="golongan_darah" required>
                          <option value="" disabled selected>Pilih golongan darah</option>
                          <option value="A" <?= $data_diri->golongan_darah == 'A' ? 'selected': ''?>>A</option>
                          <option value="AB" <?= $data_diri->golongan_darah == 'AB' ? 'selected': ''?>>AB</option>
                          <option value="B" <?= $data_diri->golongan_darah == 'B' ? 'selected': ''?>>B</option>
                          <option value="O" <?= $data_diri->golongan_darah == 'O' ? 'selected': ''?>>O</option>
                        </select>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="TinggiBadan" class="form-label">Tinggi/Berat Badan</label>
                        <input type="text" name="tinggi_berat_badan" class="form-control" value="<?=$data_diri->tinggi_berat_badan?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="col-md-12 mb-3">
                      <label for="inputAddress" class="form-label">Alamat Domisili</label>
                      <textarea class="form-control" name="alamat_domisili" rows="3" placeholder="masukan alamat domisili"><?=$data_diri->alamat_domisili?></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="inputAddress2" class="form-label">Alamat KTP</label>
                      <textarea class="form-control" name="alamat_ktp" rows="3" placeholder="masukan alamat KTP"><?=$data_diri->alamat_ktp?></textarea>
                    </div>
                    <div class="col-md-12">
                      <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="inputKTP" class="form-label">Nomor KTP</label>
                        <input type="number" name="nomor_ktp" class="form-control" value="<?=$data_diri->nomor_ktp?>">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="inputSIM" class="form-label">Nomor SIM</label>
                        <input type="number" name="nomor_sim" class="form-control"  value="<?=$data_diri->nomor_sim?>">
                      </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="inputWA" class="form-label">Nomor Telepon(WA)</label>
                          <input type="number" name="nomor_telepon" class="form-control"  value="<?=$data_diri->nomor_hp?>">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="inputKontakDarurat" class="form-label">Kontak Darurat</label>
                          <input type="text" name="kontak_darurat" class="form-control" placeholder="Eka/08123456789/Sepupu" value="<?=$data_diri->kontak_darurat?>">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12 mb-3">
                      <label for="lowongan" class="form-label">Info Lowongan</label>
                      <select id="lowongan" name="info_lowongan" class="form-select mb-3" aria-label="lowongan" required>
                      <option value="" disabled selected>Pilih info</option>
                        <option value="instagram" <?= $data_diri->info_lowongan == 'instagram' ? 'selected': ''?>>Instagram</option>
                        <option value="facebook" <?= $data_diri->info_lowongan == 'facebook' ? 'selected': ''?>>Facebook</option>
                        <option value="tiktok" <?= $data_diri->info_lowongan == 'tiktok' ? 'selected': ''?>>Tiktok</option>
                        <option value="whatsapp" <?= $data_diri->info_lowongan == 'whatsapp' ? 'selected': ''?>>Whatsapp</option>
                        <option value="website" <?= $data_diri->info_lowongan == 'website' ? 'selected': ''?>>Website</option>
                        <option value="other" <?= $data_diri->info_lowongan == 'other' ? 'selected': ''?>><?=$data_diri->info_lowongan?></option>
                      </select>
                      <div class="col-md-12 mb-3" id="lainnya" style="display:<?= empty($data_diri->keterangan_lowongan) ? 'none' : 'display'?>">
                        <input type="text" name="lainnya" class="form-control" value="<?=$data_diri->keterangan_lowongan?>">
                      </div>
                    </div>

                    <div class="col-md-12 mb-3">
                      <label for="status" class="form-label">Status Pernikahan</label>
                      <select id="status" name="status_pernikahan" class="form-select" aria-label="status" required>
                        <option value="" disabled selected>Pilih status</option>
                        <option value="menikah" <?= $data_diri->status_pernikahan == 'menikah' ? 'selected': ''?>>Menikah</option>
                        <option value="belum" <?= $data_diri->status_pernikahan == 'belum' ? 'selected': ''?>>Belum Menikah</option>
                      </select>
                    </div>

                    <?php 
                    if(empty($data_diri->data_pasangan)){
                    $data_pasangan = array('','','');
                    }else{
                    $data_pasangan = explode(',',$data_diri->data_pasangan);
                    }
                    ?>
                    <div class="col-md-12 mb-3"  id="nama_pasangan" style="display:<?= empty($data_diri->data_pasangan) ? 'none' : 'display'?>">
                      <label for="inputEmail4" class="form-label">Nama Pasangan</label>
                      <input type="text" name="nama_pasangan" class="form-control" value="<?= $data_pasangan[0]?>">
                    </div>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-6 mb-3"  id="pekerjaan_pasangan" style="display:<?= empty($data_diri->data_pasangan) ? 'none' : 'display'?>">
                          <label for="inputEmail4" class="form-label">Pekerjaan Pasangan</label>
                          <input type="text" name="pekerjaan_pasangan" class="form-control" value="<?= $data_pasangan[1]?>">
                        </div>
                        <div class="col-md-6 mb-3"  id="nomor_pasangan" style="display:<?= empty($data_diri->data_pasangan) ? 'none' : 'display'?>">
                          <label for="inputEmail4" class="form-label">Nomor Pasangan</label>
                          <input type="text" name="nomor_pasangan" class="form-control" value="<?= $data_pasangan[2]?>">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 " id="namaanak" style="display:<?= $data_diri->status_pernikahan == 'menikah' ? 'display' : 'none'?>">
                      <label for="inputNama" class="form-label">Nama Anak</label>
                      <textarea class="form-control" name="nama_anak" rows="3" placeholder="nama-pertama-umur,nama-kedua-umur,dst"><?= empty($data_diri->data_anak) ? '' : $data_diri->data_anak?></textarea>
                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- //data pendidikan -->
        <div class="tab-pane fade <?= $page == 'riwayat-pendidikan' ? 'show active':''?>" id="riwayatpendidikan" role="tabpanel" aria-labelledby="riwayat-pendidikan" tabindex="0">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-pendidikan">Tambah Data</button>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nama Sekolah/Instansi</th>
                    <th scope="col">Jenjang</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Tahun Masuk</th>
                    <th scope="col">Tahun Keluar</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;
                  foreach($data_pendidikan as $data){
                  ?>
                  <tr>
                    <td><?= $data->nama_instansi?></td>
                    <td><?= $data->jenjang_pendidikan?></td>
                    <td><?= $data->jurusan?></td>
                    <td><?= $data->tahun_masuk?></td>
                    <td><?= $data->tahun_lulus?></td>
                    <td><button type="button" class="btn btn-success"
                    style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .65rem;">Edit</button>
                    <button type="button" class="btn btn-danger"
                    style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .65rem;">Delete</button>
                  </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- //FORM PENDIDIKAN -->
          <div class="modal fade" id="modal-pendidikan" tabindex="-1" aria-labelledby="modal-pendidikan" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="datapendidikan">Tambahkan Data Pendidikan</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?=base_url('kandidat/save_pendidikan')?>" role="form" method="post">
                <div class="modal-body">

                  <div class="mb-3">
                      <label for="jenjang_pendidikan" class="form-label">Jenjang Pendidikan</label>
                      <select class="form-select" aria-label="jenjang_pendidikan" name="jenjang_pendidikan">
                        <option selected>-- Pilih Jenjang Pendidikan --</option>
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                      </select>
                  </div>
                  <div class="mb-3">
                      <label for="nama_instansi" class="form-label">Nama Instansi/Sekolah</label>
                      <input type="text" class="form-control" name="nama_instansi">
                  </div>
                  <div class="mb-3">
                      <label for="jurusan" class="form-label">Jurusan</label>
                      <input type="text" class="form-control" name="jurusan">
                  </div>
                  <div class="row mb-3">
                    <div class="col-6">
                      <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
                      <input type="text" class="form-control" name="tahun_masuk">
                    </div>
                    <div class="col-6">
                      <label for="tahun_keluar" class="form-label">Tahun Keluar</label>
                      <input type="text" class="form-control" name="tahun_lulus">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- //FORM PENDIDIKAN -->
        </div>

        <!-- //data sertifikasi -->
        <div class="tab-pane fade <?= $page == 'sertifikat' ? 'show active':''?>" id="Sertifikasi" role="tabpanel" aria-labelledby="sertifikat" tabindex="0">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-sertifikasi">Tambah Data</button>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Sertifikasi</th>
                    <th scope="col">Lembaga Penyelenggara</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Dibiayai Oleh</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;
                  foreach($data_sertifikasi as $data){?>
                  <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $data->judul_sertifikasi?></td>
                    <td><?= $data->lembaga_sertifikasi?></td>
                    <td><?= $data->tanggal_sertifikasi?></td>
                    <td><?= $data->biaya_sertifikasi?></td>
                    <td><a href="<?= base_url() ?>" class="btn btn-sm btn-success">Edit</a>
                    <a href="<?= base_url() ?>" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                  </tr>
                  <?php 
                  $no++;
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- //FORM SERTIFIKASI -->
          <div class="modal fade" id="modal-sertifikasi" tabindex="-1" aria-labelledby="modal-sertifikasi" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="modal-sertifikasi">Pendidikan Nonformal</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?=base_url('kandidat/save_sertifikasi')?>" role="form" method="post">
                <div class="modal-body">
                  <div class="col-md-12">
                    <label for="inputNama" class="form-label">Judul</label>
                    <input type="text" class="form-control" name="judul_sertifikasi">
                  </div>
                  <div class="col-md-12">
                    <label for="inputpekerjaan" class="form-label">Lembaga Penyelenggara</label>
                    <input type="text" class="form-control" name="lembaga_sertifikasi">
                  </div>
                  <div class="col-md-12">
                    <label for="inputNomor" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal_sertifikasi">
                  </div>
                  <div class="col-md-12">
                    <label for="inputNama" class="form-label">Dibiayai Oleh</label>
                    <input type="text" class="form-control" name="biaya_sertifikasi">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- //FORM SERTIFIKASI -->
        </div>

        <!-- ///Data pengalaman pekerjaan -->
        <div class="tab-pane fade <?= $page == 'pengalman-kerja' ? 'show active':''?>" id="pengalaman" role="tabpanel" aria-labelledby="pengalaman-kerja" tabindex="0">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-pengalaman">Tambah Data</button>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Perusahaan</th>
                    <th scope="col">Divisi Bagian</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Tanggal Keluar</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach($data_pengalaman as $data){?>
                  <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $data->divisi_bagian ?></td>
                    <td><?= $data->divisi_bagian ?></td>
                    <td><?= $data->jabatan ?></td>
                    <td><?= $data->tgl_masuk ?></td>
                    <td><?= $data->tgl_keluar ?></td>
                    <td><button type="button" class="btn btn-success"
                    style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .65rem;">Edit</button>
                    <button type="button" class="btn btn-danger"
                    style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .65rem;">Delete</button>
                    </td>
                  </tr>
                  <?php 
                  $no++;
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- //FORM PENGALAMAN KERJA -->
          <div class="modal fade" id="modal-pengalaman" tabindex="-1" aria-labelledby="modal-pengalaman" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="modal-pengalaman">Tambahkan Pengalaman Kerja</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?=base_url('kandidat/save_pengalaman')?>" role="form" method="post">
                <div class="modal-body">
                  <div class="col-md-12 mb-3">
                    <label for="inputNama" class="form-label">Nama Perusahaan</label>
                    <input type="text" class="form-control" name="nama_perusahaan">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="inputNomor" class="form-label">Divisi Bagian</label>
                    <input type="text" class="form-control" name="divisi_pengalaman">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="inputNomor" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan_pengalaman">
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="row">
                    <div class="col-md-6">
                      <label for="inputNama" class="form-label">Tanggal Masuk</label>
                      <input type="date" class="form-control" name="tgl_masuk">
                    </div>
                    <div class="col-md-6">
                      <label for="inputNama" class="form-label">Tanggal Keluar</label>
                      <input type="date" class="form-control" name="tgl_keluar">
                    </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="status" class="form-label">Status</label>
                      <select class="form-select" aria-label="status" name="status">
                        <option selected>-- Pilih status --</option>
                        <option value="tetap">Karyawan Tetap</option>
                        <option value="kontrak">Karyawan Kontrak</option>
                        <option value="lepas">Karyawan Lepas Harian</option>
                      </select>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="inputNama" class="form-label">Nomor Referensi</label>
                    <input type="text" class="form-control" name="nomor_referensi">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- //FORM PENGALAMAN KERJA -->

        </div>

        <!-- ///Data media sosial -->
        <div class="tab-pane fade <?= $page == 'medsos' ? 'show active':''?>" id="akun" role="tabpanel" aria-labelledby="medsos" tabindex="0">
          <div class="card">
            <div class="card-body">
              <form action="<?=base_url('kandidat/update')?>" role="form" method="post">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="inputpekerjaan" class="form-label">Instagram</label>
                    <div class="input-group mb-6">
                      <span class="input-group-text" id="basic-addon1">@</span>
                      <input type="text" name="instagram" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="inputpekerjaan" class="form-label">Facebook</label>
                    <div class="input-group mb-6">
                      <span class="input-group-text" id="basic-addon1">@</span>
                      <input type="text" name="facebook" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="inputpekerjaan" class="form-label">Tiktok</label>
                    <div class="input-group mb-6">
                      <span class="input-group-text" id="basic-addon1">@</span>
                      <input type="text" name="tiktok" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="inputpekerjaan" class="form-label">Twitter</label>
                    <div class="input-group mb-6">
                      <span class="input-group-text" id="basic-addon1">@</span>
                      <input type="text" name="twitter" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </div>
                  <div class="mb-3">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- ///Data keterangan lain -->

        <!-- Data Keluarga -->
        <div class="tab-pane fade <?= $page == 'Data-keluarga' ? 'show active':''?>" id="datakeluarga" role="tabpanel" aria-labelledby="Data-keluarga" tabindex="0"> 
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-keluarga">Tambah Data</button>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Keluarga</th>
                    <th scope="col">Hubungan</th>
                    <th scope="col">Kontak</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;
                  foreach($data_keluarga as $data){
                  ?>
                  <tr>
                    <th scope="row"><?=$no?></th>
                    <td><?=$data->nama_keluarga?></td>
                    <td><?=$data->hubungan_keluarga?></td>
                    <td><?=$data->no_hp?></td>
                    <td><button type="button" class="btn btn-success"
                    style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .65rem;">Edit</button>
                    <button type="button" class="btn btn-danger"
                    style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .65rem;">Delete</button>
                  </td>
                  </tr>

                    <!-- //MODAL EDIT -->
                    <div class="modal fade" id="edit-keluarga" tabindex="-1" aria-labelledby="edit-keluarga" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="datakeluarga">Tambahkan Data Keluarga</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="<?=base_url('kandidat/save_keluarga')?>" role="form" method="post">
                          <div class="modal-body">
                            <div class="mb-3">
                                <label for="nama_keluarga" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_keluarga">
                            </div>
                            <div class="mb-3">
                                <label for="hubungan_keluarga" class="form-label">Hubungan Keluarga</label>
                                <select class="form-select" aria-label="hubungan_keluarga" name="hubungan_keluarga">
                                  <option selected>-- Pilih Hubungan --</option>
                                  <option value="ayah">Ayah</option>
                                  <option value="ibu">Ibuk</option>
                                  <option value="saudara">Saudara Kandung</option>
                                  <option value="pasangan">Pasangan</option>
                                  <option value="anak">Anak</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Kontak yang bisa dihubungi</label>
                                <input type="text" class="form-control" name="no_hp">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- //MODAL EDIT -->

                  <?php 
                  $no++;
                  }?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- //FORM KELUARGA -->
          <div class="modal fade" id="modal-keluarga" tabindex="-1" aria-labelledby="modal-keluarga" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="datakeluarga">Tambahkan Data Keluarga</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?=base_url('kandidat/save_keluarga')?>" role="form" method="post">
                <div class="modal-body">
                  <div class="mb-3">
                      <label for="nama_keluarga" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama_keluarga">
                  </div>
                  <div class="mb-3">
                      <label for="hubungan_keluarga" class="form-label">Hubungan Keluarga</label>
                      <select class="form-select" aria-label="hubungan_keluarga" name="hubungan_keluarga">
                        <option selected>-- Pilih Hubungan --</option>
                        <option value="ayah">Ayah</option>
                        <option value="ibu">Ibuk</option>
                        <option value="saudara">Saudara Kandung</option>
                        <option value="pasangan">Pasangan</option>
                        <option value="anak">Anak</option>
                      </select>
                  </div>
                  <div class="mb-3">
                      <label for="no_hp" class="form-label">Kontak yang bisa dihubungi</label>
                      <input type="text" class="form-control" name="no_hp">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- //FORM KELUARGA -->

        </div>
        
        <div class="tab-pane fade <?= $page == 'lain-lain' ? 'show active':''?>" id="keterangan" role="tabpanel" aria-labelledby="lain-lain" tabindex="0">
          <div class="card">
            <div class="card-body">
              <form action="<?=base_url('kandidat/save_keterangan')?>" role="form" method="post">
                <div class="row">
                  <div class="mb-3 mb-3">
                    <label for="inputNama" class="form-label">Kegemaran/Hobi</label>
                    <input type="text" name="kegemaran_hobi" class="form-control" >
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="inputNama" class="form-label">Sakit ringan yang sering dialami 
                    *diisi (-) jika tidak ada</label>
                    <input type="text" name="sakit_ringan" class="form-control" >
                  </div>
                  <div class="col-md-12 mb-3">
                    <p for="inputNama" class="form-label">Pernahkah anda mengalami sakit keras?</p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sakit_keras" value="Ya">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Ya
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sakit_keras" value="Tidak">
                      <label class="form-check-label" for="flexRadioDefault2">
                        Tidak
                      </label>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3" id="riwayat_penyakit" style="display:none">
                    <label for="inputNama" class="form-label">Jika pernah apa penyakitnya?</label>
                    <input type="text" name="riwayat_penyakit" class="form-control" >
                  </div>
                  <div class="col-md-12 mb-3">
                    <p for="inputNama" class="form-label">Pernahkah anda mengalami kecelakaan?</p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="kecelakaan"  value="Ya">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Ya
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="kecelakaan"  value="Tidak">
                      <label class="form-check-label" for="flexRadioDefault2">
                        Tidak
                      </label>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3" id="dampak_kecelakaan" style="display:none">
                    <label for="inputNama" class="form-label">Jika pernah mengalami kecelakaan apa dampaknya?</label>
                    <input type="text" name="dampak_kecelakaan" class="form-control" >
                  </div>
                  <div class="col-md-12 mb-3">
                    <p for="inputNama" class="form-label">Apakah anda merokok?</p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="merokok"  value="Ya">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Ya
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="merokok"  value="Tidak">
                      <label class="form-check-label" for="flexRadioDefault2">
                        Tidak
                      </label>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                      <p for="inputNama" class="form-label">Apakah anda Alkoholik?</p>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="alkoholik"  value="Ya">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Ya
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="alkoholik"  value="Tidak">
                        <label class="form-check-label" for="flexRadioDefault2">
                          Tidak
                        </label>
                      </div>
                  </div>
                  <div class="col-md-12 mb-3">
                        <p for="inputNama" class="form-label">Apakah anda bersedia bekerja secara shift?</p>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bekerja_shift"  value="Ya">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Ya
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bekerja_shift"  value="Tidak">
                        <label class="form-check-label" for="flexRadioDefault2">
                          Tidak
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p for="inputNama" class="form-label">Bersediakah jika sewaktu-waktu ditempatkan di luar kota?</p>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="luar_kota"  value="Ya">
                          <label class="form-check-label" for="flexRadioDefault1">
                            Ya
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="luar_kota" value="Tidak">
                          <label class="form-check-label" for="flexRadioDefault2">
                            Tidak
                          </label>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3" id="jikatidak" style="display:none">
                      <label for="inputNama"  class="form-label">Jika tidak, apa alasannya?</label>
                      <input type="text" name="alasan" class="form-control" >
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="inputNama" class="form-label">Kapan anda dapat mulai bergabung?
                    </label>
                    <input type="date" name="tgl_bergabung" class="form-control" >
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="inputNama" class="form-label">Berapa gaji terakhir yang didapat?
                    </label>
                    <input type="number" name="gaji_terakhir" class="form-control" >
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="inputNama" class="form-label">Berapa gaji yang diharapkan?
                    </label>
                    <input type="number" name="gaji_diharapkan" class="form-control" >
                  </div>
                  <div class="col-md-12 mb-3">
                      <label for="inputNama" class="form-label">Dengan ini saya menyatakan bahwa keterangan dan data yang saya isi diatas adalah benar. Dalam hal ketidak-benaran, maka saya bertanggung jawab penuh atas akibatnya, dan saya bersedia dikenakan sanksi sesuai dengan peraturan perusahaan maupun perundang-undangan.
                      </label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" name="pernyataan" type="checkbox" value="ya" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                        Setuju
                        </label>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- <div class="tab-pane fade" id="berkas" role="tabpanel" aria-labelledby="document-pendukung" tabindex="0">
          <div class="card">
            <div class="card-body p-4">
              <form action="<?=base_url('kandidat/save_document_pendukung')?>" role="form" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="formFile" class="form-label">Upload Identitas</label>
                      <input class="form-control" type="file" name="identitas" id="formFile">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="formFile" class="form-label">Upload CV</label>
                      <input class="form-control" type="file" name="cv" id="formFile">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="formFile" class="form-label">Upload ijazah</label>
                      <input class="form-control" type="file" name="ijazah" id="formFile">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="formFile" class="form-label">Upload Dokumen pendukung lainnya</label>
                      <input class="form-control" type="file" name="doc_pendukung" id="formFile">
                    </div>
                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {

  let radios = document.getElementsByName('luar_kota');

  for (let i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) {
      // do whatever you want with the checked radio
      console.log(radios[i].value);

      // only one radio can be logically checked, don't check the rest
      break;
    }
  }

  const pagetest = $('.flash-data').data('page');
  let active = $("#"+pagetest).addClass("active");

  $("#status").change(function(){
    var status = $("#status").val(); 

    if( status == "menikah"){
    document.getElementById("nama_pasangan").style.display = "block";
    document.getElementById("pekerjaan_pasangan").style.display = "block";
    document.getElementById("nomor_pasangan").style.display = "block";
    document.getElementById("namaanak").style.display = "block";
    }else{
    document.getElementById("nama_pasangan").style.display = "none";
    document.getElementById("pekerjaan_pasangan").style.display = "none";
    document.getElementById("nomor_pasangan").style.display = "none";
    document.getElementById("namaanak").style.display = "none";
    }
  });

  $("#lowongan").change(function(){
    var status = $("#lowongan").val(); 

    if( status == "Other"){
    document.getElementById("lainnya").style.display = "block";
    }else{
    document.getElementById("lainnya").style.display = "none";
    }
  });

  $("input[name='sakit_keras']").change(function(){
    let status = $("input[name='sakit_keras']:checked").val();

    if( status == "Ya"){
    document.getElementById("riwayat_penyakit").style.display = "block";
    }else{
    document.getElementById("riwayat_penyakit").style.display = "none";
    }
  });

  $("input[name='kecelakaan']").change(function(){
    let status = $("input[name='kecelakaan']:checked").val();

    if( status == "Ya"){
    document.getElementById("dampak_kecelakaan").style.display = "block";
    }else{
    document.getElementById("dampak_kecelakaan").style.display = "none";
    }
  });

  $("input[name='luar_kota']").change(function(){
    let status = $("input[name='luar_kota']:checked").val();

    if( status == "Tidak"){
    document.getElementById("jikatidak").style.display = "block";
    }else{
    document.getElementById("jikatidak").style.display = "none";
    }
  });

});
</script>

