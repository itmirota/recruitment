<section class="login-page">
<<<<<<< HEAD
  <div class="container">
    <a href="<?= base_url()?>" class="btn btn-sm btn-biru"><i class="fa fa-solid fa-arrow-left"></i> kembali ke menu utama</a>
  </div>
  <div class="container d-flex flex-wrap justify-content-between">
    <div class="col-md-4 col-sm-12" style="padding-top:10%" >
=======
  <div class="container d-flex flex-wrap justify-content-between" style="padding-top:25dvh">
    <div class="col-md-6 col-sm-12" >
>>>>>>> d3ae67499c902c86d4f01c8635e73e5dbf731fd9
      <div class="alert alert-primary" role="alert">
        Pastikan data yang anda masukkan benar agar mudah diverifikasi. Pastikan dokumen yang anda upload sudah benar dan dapat terverifikasi.
      </div>
    </div>
    <div class="p-2 col-md-6 col-sm-12">
      <div class="card card-login">
        <div class="card-body">
          <div>
            <h3><strong>Masuk ke akun anda</strong></h3>
            <form action="<?= base_url('login/user');?>" method="post">
              <div class="mb-3">
                <label class="form-label">username</label>
                <input class="form-control form-control" type="text" name="username" value="<?= set_value('username'); ?>" placeholder="Masukkan Username disini" />
                <span style="color:red"><?= form_error('username'); ?></span>
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control form-control" type="password" name="password" placeholder="Masukkan password disini" />
                <span style="color:red">
                <?= form_error('password'); ?>
                </span>
              </div>
              <div class="d-grid gap-2 mt-3">
                <button type="submit" class="btn btn-sm btn-biru">Sign in</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>