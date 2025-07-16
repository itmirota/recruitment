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
              <button class="nav-link <?= $page == 'pengalaman-kerja' ? 'active':''?>" id="pengalaman-kerja" data-bs-toggle="pill" data-bs-target="#pengalaman" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
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
        <!-- //data diri -->
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
                      <label for="inputKTP" class="form-label">Nomor KTP</label>
                      <input type="number" name="nomor_ktp" class="form-control" value="<?=$data_diri->nomor_ktp?>">
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
        <!-- //data diri -->

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
                    <th scope="col" class="text-center">Aksi</th>
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
                    <td>
                      <a class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#edit-pendidikan" onclick="editPendidikan(<?= $data->id_pendidikan?>)"><i class="fa fa-solid fa-pencil"></i> Edit</a>
                      <a href="<?= base_url('kandidat/delete_pendidikan/'.$data->id_pendidikan) ?>" class="btn btn-sm"><i class="fa fa-solid fa-trash"></i> Delete</a>
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

          <!-- //EDIT PENDIDIKAN -->
          <div class="modal fade" id="edit-pendidikan" tabindex="-1" aria-labelledby="modal-pendidikan" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="datapendidikan">Edit Data Pendidikan</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?=base_url('kandidat/update_pendidikan')?>" role="form" method="post">
                <div class="modal-body">

                  <div class="mb-3">
                      <label for="jenjang_pendidikan" class="form-label">Jenjang Pendidikan</label>
                      <select class="form-select" aria-label="jenjang_pendidikan" name="jenjang_pendidikan" id="edit_jenjang">
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
                      <input type="hidden" class="form-control" name="id_pendidikan" id="edit_idPendidikan">
                      <input type="text" class="form-control" name="nama_instansi" id="edit_instansi">
                  </div>
                  <div class="mb-3">
                      <label for="jurusan" class="form-label">Jurusan</label>
                      <input type="text" class="form-control" name="jurusan" id="edit_jurusan">
                  </div>
                  <div class="row mb-3">
                    <div class="col-6">
                      <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
                      <input type="text" class="form-control" name="tahun_masuk" id="edit_tahunMasuk">
                    </div>
                    <div class="col-6">
                      <label for="tahun_keluar" class="form-label">Tahun Keluar</label>
                      <input type="text" class="form-control" name="tahun_lulus" id="edit_tahunLulus">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- //EDIT PENDIDIKAN -->
        </div>
        <!-- //data pendidikan -->

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
                    <td><?= mediumdate_indo($data->tanggal_sertifikasi)?></td>
                    <td><?= $data->biaya_sertifikasi?></td>
                    <td>
                      <a class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#edit-sertifikasi" onclick="editSertifikasi(<?= $data->id_sertifikasi?>)"><i class="fa fa-solid fa-pencil"></i> Edit</a>
                      <a href="<?= base_url('kandidat/delete_sertifikat/'.$data->id_sertifikasi) ?>" class="btn btn-sm"><i class="fa fa-solid fa-trash"></i> Delete</a>
                    </td>
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

          <!-- //EDIT SERTIFIKASI -->
          <div class="modal fade" id="edit-sertifikasi" tabindex="-1" aria-labelledby="edit-sertifikasi" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="edit-sertifikasi">Edit Pendidikan Nonformal</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?=base_url('kandidat/update_sertifikasi')?>" role="form" method="post">
                <div class="modal-body">
                  <div class="col-md-12">
                    <label for="inputNama" class="form-label">Judul</label>
                    <input type="hidden" class="form-control" name="id_sertifikasi" id="edit_id_sertifikasi">
                    <input type="text" class="form-control" name="judul_sertifikasi" id="edit_judul_sertifikasi">
                  </div>
                  <div class="col-md-12">
                    <label for="inputpekerjaan" class="form-label">Lembaga Penyelenggara</label>
                    <input type="text" class="form-control" name="lembaga_sertifikasi" id="edit_lembaga_sertifikasi">
                  </div>
                  <div class="col-md-12">
                    <label for="inputNomor" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal_sertifikasi" id="edit_tanggal_sertifikasi">
                  </div>
                  <div class="col-md-12">
                    <label for="inputNama" class="form-label">Dibiayai Oleh</label>
                    <input type="text" class="form-control" name="biaya_sertifikasi" id="edit_biaya_sertifikasi">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- //EDIT SERTIFIKASI -->
        </div>
        <!-- //data sertifikasi -->

        <!-- //Data pengalaman pekerjaan -->
        <div class="tab-pane fade <?= $page == 'pengalaman-kerja' ? 'show active':''?>" id="pengalaman" role="tabpanel" aria-labelledby="pengalaman-kerja" tabindex="0">
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
                    <td><?= $data->nama_perusahaan ?></td>
                    <td><?= $data->divisi_bagian ?></td>
                    <td><?= $data->jabatan ?></td>
                    <td><?= mediumdate_indo($data->tgl_masuk) ?></td>
                    <td><?= $data->tgl_keluar == '0000-00-00' ? 'masih bekerja' : mediumdate_indo($data->tgl_keluar) ?></td>
                    <td>
                      <a class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#edit-pengalaman" onclick="editPengalaman(<?= $data->id_pengalaman?>)"><i class="fa fa-solid fa-pencil"></i> Edit</a>
                      <a href="<?= base_url('kandidat/delete_pengalaman/'.$data->id_pengalaman) ?>" class="btn btn-sm"><i class="fa fa-solid fa-trash"></i> Delete</a>
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
                      <input type="date" class="form-control" name="tgl_keluar" id="tgl_keluar">
                        <input class="form-check-input" type="checkbox" id="Check" onclick="checkTglKeluar()">
                        <label class="form-check-label" for="checkDefault">
                          Masih Bekerja
                        </label>
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
                    <input type="text" class="form-control" name="nomor_referensi" placeholder="nama-posisi-nomor HP">
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

          <!-- //EDIT PENGALAMAN KERJA -->
          <div class="modal fade" id="edit-pengalaman" tabindex="-1" aria-labelledby="edit-pengalaman" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="edit-pengalaman">Edit Pengalaman Kerja</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?=base_url('kandidat/update_pengalaman')?>" role="form" method="post">
                <div class="modal-body">
                  <div class="col-md-12 mb-3">
                    <label for="inputNama" class="form-label">Nama Perusahaan</label>
                    <input type="hidden" class="form-control" name="id_pengalaman" id="edit_id_pengalaman">
                    <input type="text" class="form-control" name="nama_perusahaan" id="edit_nama_perusahaan">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="inputNomor" class="form-label">Divisi Bagian</label>
                    <input type="text" class="form-control" name="divisi_pengalaman" id="edit_divisi_pengalaman">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="inputNomor" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan_pengalaman" id="edit_jabatan_pengalaman">
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="row">
                    <div class="col-md-6">
                      <label for="inputNama" class="form-label">Tanggal Masuk</label>
                      <input type="date" class="form-control" name="tgl_masuk" id="edit_tgl_masuk">
                    </div>
                    <div class="col-md-6">
                      <label for="inputNama" class="form-label">Tanggal Keluar</label>
                      <input type="date" class="form-control" name="tgl_keluar" id="edit_tgl_keluar">
                    </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="status" class="form-label">Status</label>
                      <select class="form-select" aria-label="status" name="status" id="edit_status">
                        <option selected>-- Pilih status --</option>
                        <option value="tetap">Karyawan Tetap</option>
                        <option value="kontrak">Karyawan Kontrak</option>
                        <option value="lepas">Karyawan Lepas Harian</option>
                      </select>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="inputNama" class="form-label">Nomor Referensi</label>
                    <input type="text" class="form-control" name="nomor_referensi" id="edit_nomor_referensi" placeholder="(nama-posisi-nomor HP)">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- //EDIT PENGALAMAN KERJA -->
        </div>
        <!-- //Data pengalaman pekerjaan -->

        <!-- //Data media sosial -->
        <div class="tab-pane fade <?= $page == 'medsos' ? 'show active':''?>" id="akun" role="tabpanel" aria-labelledby="medsos" tabindex="0">
          <div class="card">
            <div class="card-body">
              <form action="<?=base_url('kandidat/update_medsos')?>" role="form" method="post">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="inputpekerjaan" class="form-label">Instagram</label>
                    <div class="input-group mb-6">
                      <span class="input-group-text" id="basic-addon1">
                        <svg fill="#000000" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M113,446c24.8,0,45.1-20.2,45.1-45.1c0-9.8-3.2-18.9-8.5-26.3c-8.2-11.3-21.5-18.8-36.5-18.8s-28.3,7.4-36.5,18.8 c-5.3,7.4-8.5,16.5-8.5,26.3C68,425.8,88.2,446,113,446z"></path> <polygon points="211.4,345.9 211.4,308.1 211.4,302.5 205.8,302.5 168,302.6 168.2,346 "></polygon> <path d="M183,401c0,38.6-31.4,70-70,70c-38.6,0-70-31.4-70-70c0-9.3,1.9-18.2,5.2-26.3H10v104.8C10,493,21,504,34.5,504h157 c13.5,0,24.5-11,24.5-24.5V374.7h-38.2C181.2,382.8,183,391.7,183,401z"></path> <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M241,374.7v104.8 c0,27.3-22.2,49.5-49.5,49.5h-157C7.2,529-15,506.8-15,479.5V374.7v-52.3c0-27.3,22.2-49.5,49.5-49.5h157 c27.3,0,49.5,22.2,49.5,49.5V374.7z"></path> </g> </g></svg>
                      </span>
                      <input type="text" name="instagram" class="form-control" placeholder="Instagram" aria-label="Instagram" value="<?=$data_diri->instagram?>">
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="inputpekerjaan" class="form-label">Facebook</label>
                    <div class="input-group mb-6">
                      <span class="input-group-text" id="basic-addon1">
                        <svg fill="#000000" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z"></path> </g></svg>
                      </span>
                      <input type="text" name="facebook" class="form-control" placeholder="facebook" aria-label="facebook" value="<?=$data_diri->facebook?>">
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="inputpekerjaan" class="form-label">Tiktok</label>
                    <div class="input-group mb-6">
                      <span class="input-group-text" id="basic-addon1">
                        <svg fill="#000000" width="20px" height="20px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>tiktok</title> <path d="M16.656 1.029c1.637-0.025 3.262-0.012 4.886-0.025 0.054 2.031 0.878 3.859 2.189 5.213l-0.002-0.002c1.411 1.271 3.247 2.095 5.271 2.235l0.028 0.002v5.036c-1.912-0.048-3.71-0.489-5.331-1.247l0.082 0.034c-0.784-0.377-1.447-0.764-2.077-1.196l0.052 0.034c-0.012 3.649 0.012 7.298-0.025 10.934-0.103 1.853-0.719 3.543-1.707 4.954l0.020-0.031c-1.652 2.366-4.328 3.919-7.371 4.011l-0.014 0c-0.123 0.006-0.268 0.009-0.414 0.009-1.73 0-3.347-0.482-4.725-1.319l0.040 0.023c-2.508-1.509-4.238-4.091-4.558-7.094l-0.004-0.041c-0.025-0.625-0.037-1.25-0.012-1.862 0.49-4.779 4.494-8.476 9.361-8.476 0.547 0 1.083 0.047 1.604 0.136l-0.056-0.008c0.025 1.849-0.050 3.699-0.050 5.548-0.423-0.153-0.911-0.242-1.42-0.242-1.868 0-3.457 1.194-4.045 2.861l-0.009 0.030c-0.133 0.427-0.21 0.918-0.21 1.426 0 0.206 0.013 0.41 0.037 0.61l-0.002-0.024c0.332 2.046 2.086 3.59 4.201 3.59 0.061 0 0.121-0.001 0.181-0.004l-0.009 0c1.463-0.044 2.733-0.831 3.451-1.994l0.010-0.018c0.267-0.372 0.45-0.822 0.511-1.311l0.001-0.014c0.125-2.237 0.075-4.461 0.087-6.698 0.012-5.036-0.012-10.060 0.025-15.083z"></path> </g></svg>
                      </span>
                      <input type="text" name="tiktok" class="form-control" placeholder="tiktok" aria-label="tiktok" value="<?=$data_diri->tiktok?>"
                      >
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="inputpekerjaan" class="form-label">LinkedIn</label>
                    <div class="input-group mb-6">
                      <span class="input-group-text" id="basic-addon1">
                        <svg fill="#000000" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M41.4,508.1H-8.5V348.4h49.9 V508.1z M15.1,328.4h-0.4c-18.1,0-29.8-12.2-29.8-27.7c0-15.8,12.1-27.7,30.5-27.7c18.4,0,29.7,11.9,30.1,27.7 C45.6,316.1,33.9,328.4,15.1,328.4z M241,508.1h-56.6v-82.6c0-21.6-8.8-36.4-28.3-36.4c-14.9,0-23.2,10-27,19.6 c-1.4,3.4-1.2,8.2-1.2,13.1v86.3H71.8c0,0,0.7-146.4,0-159.7h56.1v25.1c3.3-11,21.2-26.6,49.8-26.6c35.5,0,63.3,23,63.3,72.4V508.1z "></path> </g></svg>
                      </span>
                      <input type="text" name="twitter" class="form-control" placeholder="linkedin" aria-label="linkedin" value="<?=$data_diri->linkedin?>"
                      >
                    </div>
                  </div>
                  <div class="mb-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- //Data media sosial -->

        <!-- //Data Keluarga -->
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
                    <td>
                      <a class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#edit-keluarga" onclick="editKeluarga(<?= $data->id_keluarga?>)"><i class="fa fa-solid fa-pencil"></i> Edit</a>
                      <a href="<?= base_url('kandidat/delete_keluarga/'.$data->id_keluarga) ?>" class="btn btn-sm"><i class="fa fa-solid fa-trash"></i> Delete</a>
                    </td>
                  </td>
                  </tr>

                    <!-- //MODAL ADD -->
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
                    <!-- //MODAL ADD -->
                     
                    <!-- EDIT DATA KELUARGA -->
                    <div class="modal fade" id="edit-keluarga" tabindex="-1" aria-labelledby="edit-keluarga" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="datakeluarga">Edit Data Keluarga</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="<?=base_url('kandidat/update_keluarga')?>" role="form" method="post">
                          <div class="modal-body">
                            <div class="mb-3">
                                <label for="nama_keluarga" class="form-label">Nama Lengkap</label>
                                <input type="hidden" class="form-control" name="id_keluarga" id="edit_id_keluarga">
                                <input type="text" class="form-control" name="nama_keluarga" id="edit_nama_keluarga">
                            </div>
                            <div class="mb-3">
                                <label for="hubungan_keluarga" class="form-label">Hubungan Keluarga</label>
                                <select class="form-select" aria-label="hubungan_keluarga" name="hubungan_keluarga" id="edit_hubungan_keluarga">
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
                                <input type="text" class="form-control" name="no_hp" id="edit_no_hp">
                            </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- EDIT DATA KELUARGA -->

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
        <!-- //Data Keluarga -->

        <!-- //Data Lain lain -->
        <div class="tab-pane fade <?= $page == 'lain-lain' ? 'show active':''?>" id="keterangan" role="tabpanel" aria-labelledby="lain-lain" tabindex="0">
          <div class="card">
            <div class="card-body">
              <form action="<?=base_url('kandidat/update_keterangan')?>" role="form" method="post">
                <div class="row">
                  <div class="mb-3 mb-3">
                    <label for="inputNama" class="form-label">Kegemaran/Hobi</label>
                    <input type="text" name="kegemaran_hobi" class="form-control" value="<?=$data_diri->hobi?>" >
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="inputNama" class="form-label">Sakit ringan yang sering dialami 
                    *diisi (-) jika tidak ada</label>
                    <input type="text" name="sakit_ringan" class="form-control" value="<?=$data_diri->sakit_ringan?>" >
                  </div>
                  <div class="col-md-12 mb-3">
                    <p for="inputNama" class="form-label">Pernahkah anda mengalami sakit keras?</p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sakit_keras" value="Ya" <?php echo $data_diri->sakit_keras == 'Ya' ? 'checked' : ''?>>
                      <label class="form-check-label" for="flexRadioDefault1">
                        Ya
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sakit_keras" value="Tidak" <?php echo $data_diri->sakit_keras == 'Tidak' ? 'checked' : ''?>>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Tidak
                      </label>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3" id="riwayat_penyakit" style="display:none">
                    <label for="inputNama" class="form-label">Jika pernah apa penyakitnya?</label>
                    <input type="text" name="riwayat_penyakit_keras" class="form-control" value="<?=$data_diri->riwayat_sakit_keras?>">
                  </div>
                  <div class="col-md-12 mb-3">
                    <p for="inputNama" class="form-label">Pernahkah anda mengalami kecelakaan?</p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="kecelakaan"  value="Ya" <?php echo $data_diri->kecelakaan == 'Ya' ? 'checked' : ''?>>
                      <label class="form-check-label" for="flexRadioDefault1">
                        Ya
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="kecelakaan"  value="Tidak" <?php echo $data_diri->kecelakaan == 'Tidak' ? 'checked' : ''?>>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Tidak
                      </label>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3" id="dampak_kecelakaan" style="display:none">
                    <label for="inputNama" class="form-label">Jika pernah mengalami kecelakaan apa dampaknya?</label>
                    <input type="text" name="dampak_kecelakaan" class="form-control" value="<?=$data_diri->dampak_kecelakaan?>">
                  </div>
                  <div class="col-md-12 mb-3">
                    <p for="inputNama" class="form-label">Apakah anda merokok?</p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="merokok"  value="Ya"<?php echo $data_diri->merokok == 'Ya' ? 'checked' : ''?>>
                      <label class="form-check-label" for="flexRadioDefault1">
                        Ya
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="merokok"  value="Tidak"<?php echo $data_diri->merokok == 'Tidak' ? 'checked' : ''?>>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Tidak
                      </label>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                      <p for="inputNama" class="form-label">Apakah anda Alkoholik?</p>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="alkoholik"  value="Ya"<?php echo $data_diri->alkoholik == 'Ya' ? 'checked' : ''?>>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Ya
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="alkoholik"  value="Tidak"<?php echo $data_diri->alkoholik == 'Tidak' ? 'checked' : ''?>>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Tidak
                        </label>
                      </div>
                  </div>
                  <div class="col-md-12 mb-3">
                        <p for="inputNama" class="form-label">Apakah anda bersedia bekerja secara shift?</p>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bekerja_shift"  value="Ya" <?php echo $data_diri->bekerja_shift == 'Ya' ? 'checked' : ''?>>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Ya
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bekerja_shift"  value="Tidak" <?php echo $data_diri->bekerja_shift == 'Tidak' ? 'checked' : ''?>>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Tidak
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p for="inputNama" class="form-label">Bersediakah jika sewaktu-waktu ditempatkan di luar kota?</p>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="luar_kota"  value="Ya"<?php echo $data_diri->luar_kota == 'Ya' ? 'checked' : ''?>>
                          <label class="form-check-label" for="flexRadioDefault1">
                            Ya
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="luar_kota" value="Tidak" <?php echo $data_diri->luar_kota == 'Tidak' ? 'checked' : ''?>>                          
                          <label class="form-check-label" for="flexRadioDefault2">
                            Tidak
                          </label>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3" id="jikatidak" style="display:none">
                      <label for="inputNama"  class="form-label">Jika tidak, apa alasannya?</label>
                      <input type="text" name="alasan" class="form-control" value="<?=$data_diri->alasan?>">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="inputNama" class="form-label">Kapan anda dapat mulai bergabung?
                    </label>
                    <input type="date" name="tgl_bergabung" class="form-control" value="<?=$data_diri->tgl_bergabung?>">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="inputNama" class="form-label">Berapa gaji terakhir yang didapat?
                    </label>
                    <input type="number" name="gaji_terakhir" class="form-control" value="<?=$data_diri->gaji_terakhir?>">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="inputNama" class="form-label">Berapa gaji yang diharapkan?
                    </label>
                    <input type="number" name="gaji_diharapkan" class="form-control" value="<?=$data_diri->gaji_diharapkan?>">
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
        <!-- //Data Lain lain -->

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

function editPendidikan($id){
  $.ajax({
    url:"<?php echo site_url("kandidat/getDataPendidikan")?>/" + $id,
    dataType:"JSON",
    type:"GET",
    success:function(hasil){
      document.getElementById("edit_idPendidikan").value = hasil.id_pendidikan;
      document.getElementById("edit_jenjang").value = hasil.jenjang_pendidikan;
      document.getElementById("edit_instansi").value = hasil.nama_instansi;
      document.getElementById("edit_jurusan").value = hasil.jurusan;
      document.getElementById("edit_tahunMasuk").value = hasil.tahun_masuk;
      document.getElementById("edit_tahunLulus").value = hasil.tahun_lulus;

    }
  })
}

function editSertifikasi($id){
  $.ajax({
    url:"<?php echo site_url("kandidat/getDataSertifikasi")?>/" + $id,
    dataType:"JSON",
    type:"GET",
    success:function(hasil){
      document.getElementById("edit_id_sertifikasi").value = hasil.id_sertifikasi;
      document.getElementById("edit_judul_sertifikasi").value = hasil.judul_sertifikasi;
      document.getElementById("edit_lembaga_sertifikasi").value = hasil.lembaga_sertifikasi;
      document.getElementById("edit_tanggal_sertifikasi").value = hasil.tanggal_sertifikasi;
      document.getElementById("edit_biaya_sertifikasi").value = hasil.biaya_sertifikasi;

    }
  })
}

function editKeluarga($id){  
  $.ajax({
    url:"<?php echo site_url("kandidat/getDataKeluarga")?>/" + $id,
    dataType:"JSON",
    type:"GET",
    success:function(hasil){
      console.log(hasil);
      document.getElementById("edit_id_keluarga").value = hasil.id_keluarga;
      document.getElementById("edit_nama_keluarga").value = hasil.nama_keluarga;
      document.getElementById("edit_hubungan_keluarga").value = hasil.hubungan_keluarga;
      document.getElementById("edit_no_hp").value = hasil.no_hp;
    }
  })
}

function editPengalaman($id){
  $.ajax({
    url:"<?php echo site_url("kandidat/getDataPengalaman")?>/" + $id,
    dataType:"JSON",
    type:"GET",
    success:function(hasil){
      document.getElementById("edit_id_pengalaman").value = hasil.id_pengalaman;
      document.getElementById("edit_nama_perusahaan").value = hasil.nama_perusahaan;
      document.getElementById("edit_divisi_pengalaman").value = hasil.divisi_bagian;
      document.getElementById("edit_jabatan_pengalaman").value = hasil.jabatan;
      document.getElementById("edit_tgl_masuk").value = hasil.tgl_masuk;
      document.getElementById("edit_tgl_keluar").value = hasil.tgl_keluar;
      document.getElementById("edit_status").value = hasil.status;
      document.getElementById("edit_nomor_referensi").value = hasil.nomor_referensi;
    }
  })
}

function checkTglKeluar(){
  const checkBox = document.getElementById("Check");

  if (checkBox.checked == true){
    document.getElementById('tgl_keluar').setAttribute('disabled', true);
  }else{
    document.getElementById('tgl_keluar').removeAttribute('disabled');
  }
}



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

