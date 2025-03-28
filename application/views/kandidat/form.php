<div class="container form-kandidat">
  <div class="card" >
    <div class="card-body">
      <div class="m-sm-3">
        <form action="<?= base_url('kandidat/save');?>" method="post">
          <div class="mb-3">
            <label class="form-label">nama</label>
            <input class="form-control form-control-lg" type="text" name="nama_kandidat" value="<?= set_value('nama_kandidat'); ?>" placeholder="Masukkan Nama disini" />
            <span style="color:red"><?= form_error('nama_kandidat'); ?></span>
          </div>
          <div class="mb-3">
            <label class="form-label">username</label>
            <input class="form-control form-control-lg" type="username" name="username" placeholder="Masukkan username disini" />
            <span style="color:red">
            <?= form_error('username'); ?>
            </span>
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-control form-control-lg" type="email" name="email" placeholder="Masukkan Email disini" />
            <span style="color:red">
            <?= form_error('email'); ?>
            </span>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan password disini" />
            <span style="color:red">
            <?= form_error('password'); ?>
            </span>
          </div>
          <div class="mb-3">
            <label class="form-label"> Konfirmasi Password</label>
            <input class="form-control form-control-lg" type="password" name="passconf" placeholder="" />
            <span style="color:red">
            <?= form_error('passconf'); ?>
            </span>
          </div>
          <div class="d-grid gap-2 mt-3">
            <button type="input" class="btn btn-lg btn-biru">Daftar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
      