<section class="login-page">
    <div class="d-flex align-items-center" style="height:100vh">
      <div class="flex-fill col-lg-6" style="height:100vh;background-color:blue"></div>

      <div class="d-flex col-lg-6 ps-4">
        <div class="container d-flex justify-content-center" >
          <div class="d-table-cell align-center">
            <div class="text-center mt-4">
              <h1 class="h2">Masuk ke akun anda</h1>
              <p class="lead">
              Pastikan data yang anda masukkan benar.
              </p>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="m-sm-3">
                  <form action="<?= base_url('login/user');?>" method="post">
                    <div class="mb-3">
                      <label class="form-label">username</label>
                      <input class="form-control form-control-lg" type="text" name="username" value="<?= set_value('username'); ?>" placeholder="Masukkan Username disini" />
                      <span style="color:red"><?= form_error('username'); ?></span>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Password</label>
                      <input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan password disini" />
                      <span style="color:red">
                      <?= form_error('password'); ?>
                      </span>
                    </div>
                    <div class="d-grid gap-2 mt-3">
                      <button type="submit" class="btn btn-lg btn-biru">Sign in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>