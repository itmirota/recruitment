<section style="background-color:#ebeaea;">
  <div class="d-flex justify-content-center align-items-center" style="height:100vh;">
  <div class="col-md-6">
    <div class="card">
        <div class="card-body">
          <div class="text-center mt-4">
          <h1 class="h2">Ubah Password</h1>
          <p class="lead">
          masukan password baru anda
          </p>
        </div>
        <div class="m-sm-3">        
          <form action="<?=base_url('auth/resetpassword/'.$hash)?>" method="post">
            <div class="form-group">
              <label for="exampleInputPassword1">Password Baru</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="masukkan password baru disini" value="<?= set_value('password'); ?>">
              <span style="color:red"><?= form_error('password'); ?></span>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Konfirmasi Password Baru</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="cpassword" placeholder="Konfirmasi password baru" value="<?= set_value('cpassword'); ?>">
              <span style="color:red"><?= form_error('cpassword'); ?></span>
            </div>
            <div class="col-xs-4">
              <input type="submit" class="btn btn-primary btn-block btn-flat" value="Submit" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>          