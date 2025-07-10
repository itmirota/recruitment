<div class="lowongan">
  <!-- PARALAX -->
  <div class="parallax">
  <div class="header-lowongan">
    <h1 class="text-tittle text-center text-light">Lowongan Kerja</h1>
  </div>
  </div>
  <!-- PARALAX -->

  <!-- MAIN -->
  <div class="main">
    <div class="container">
      <!-- <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label text-blue">Nama Pekerjaan</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="row mb-3">
          <div class="col-6">
            <label for="exampleInputPassword1" class="form-label text-blue">Bidang Pekerjaan</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="col-6">
            <label for="exampleInputPassword1" class="form-label text-blue">Jenjang Pendidikan</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
        </div>
        <div class="mb-3 d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form> -->
      <?php if (empty($list_data)) {?>
      <div class="card">
        <div class="card-body">
          <p class="text-center">lowongan sedang tidak tersedia</p>
        </div>
      </div>
      <?php }else{?>
      <?php foreach($list_data as $ld){ ?>
      <div class="col-md-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <h2 class="text-header text-blue m-0 p-0"><?=$ld->nama_lowongan?></h2>
                <span class="text-subheader m-0 p-0"><?=$ld->wilayah?></span>
              </div>
              <div class="col-3 p-2">
                <p class="m-0"><strong>Bidang Pekerjaan : </strong><?=$ld->divisi?></p>
                <p class="m-0"><strong>Jenjang Karir : </strong><?=$ld->pendidikan?></p>
                <p class="m-0 mb-2">Ditutup<strong> 9 </strong>Hari Lagi</p>

                <a href="<?= base_url('detail-lowongan/'.$ld->id_lowongan)?>" class="btn btn-sm btn-biru">Detail Pekerjaan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <?php } ?>

    </div>
  </div>
  <!-- MAIN -->
