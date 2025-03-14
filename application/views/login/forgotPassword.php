<section style="background-color:#ebeaea;">
  <div class="d-flex justify-content-center align-items-center" style="height:100vh;">
  <div class="col-md-6">
    <div class="card">
        <div class="card-body">
          <div class="text-center mt-4">
          <h1 class="h2">Reset Password</h1>
          <p class="lead">
          masukan emai yang terdaftar
          </p>
        </div>
        <div class="m-sm-3">
        <form action="<?php echo base_url(); ?>login/lupa-password" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email" required />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="d-flex justify-content-end mt-4">
            <input type="submit" class="btn btn-primary btn-block btn-flat" value="Submit" />
          </div><!-- /.col -->
        </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>