<div class="lowongan">
  <!-- PARALAX -->
  <div class="parallax">
  <div class="header-lowongan">
    <h1 class="text-tittle text-center text-light">Psikotes Online</h1>
  </div>
  </div>
  <!-- PARALAX -->

  <!-- MAIN -->
  <div class="main">
    <div class="container">
      <div class="card card-content p-4">
        <div class="alert alert-info" role="alert">
            <h4>Instruksi <?=$ujian->nama_kategoriPsikotes?> | <?=$ujian->nama_ujian?></h4>
            <p><?=$ujian->instruksi?></p>
        </div>
        <div class="card card-primary">
          <div class="card-body">
            <h3 class="card-title">Data Diri</h3>

            <div class="row">
              <div class="col-sm-6">
                <table class="table">
                  <tr>
                      <th>Nama</th>
                      <td><?=$nama_lengkap?></td>
                  </tr>
                  <tr>
                      <th>Nama Ujian</th>
                      <td><?=$ujian->nama_ujian?></td>
                  </tr>
                  <tr>
                      <th>Jumlah Soal</th>
                      <td><?=$ujian->jumlah_soal?></td>
                  </tr>
                  <tr>
                      <th>Waktu</th>
                      <td><?=$ujian->waktu?> Menit</td>
                  </tr>
                </table>
              </div>
              <div class="col-sm-6">
                  <div class="card card-solid">
                      <div class="card-body pb-0">
                          <div class="alert alert-info" role="alert">
                          <p>
                              tekan tombol "MULAI" berwarna hijau jika anda sudah siap mengerjakan soal.
                          </p>
                          </div>
                          <a href="<?= base_url('ujian?test='.$kategori.'&&subtest='.$id.'&&posisi='.$lowongan_id)?>" class="btn btn-success btn-lg mb-4">
                              <i class="fa fa-pencil"></i> Mulai
                          </a>
                          <!-- <?php
                          $mulai = strtotime($ujian->tgl_mulai);
                          $terlambat = strtotime($ujian->terlambat);
                          $now = time();
                          if($mulai > $now) : 
                          ?>
                          <div class="alert alert-success" role="alert">
                              <strong><i class="fa fa-clock-o"></i> Ujian akan dimulai pada</strong>
                              <br>
                              <span class="countdown" data-time="<?=date('Y-m-d H:i:s', strtotime($ujian->tgl_mulai))?>" id="demo"></strong><br/>
                          </div>
                          <?php elseif( $terlambat > $now ) : ?>
                          <a href="<?= base_url('ujian?test='.$kategori.'&&subtest='.$id)?>" class="btn btn-success btn-lg mb-4">
                              <i class="fa fa-pencil"></i> Mulai
                          </a>
                          <div class="alert alert-danger" role="alert">
                              <i class="fa fa-clock-o"></i> <strong class="countdown" data-time="<?=date('Y-m-d H:i:s', strtotime($ujian->terlambat))?>" id="demo"></strong><br/>
                              Batas waktu menekan tombol mulai.
                          </div>
                          <?php else : ?>
                          <div class="alert alert-danger" role="alert">
                              Waktu untuk menekan tombol <strong>"MULAI"</strong> sudah habis.<br/>
                              Sesi ujian sudah berakhir.
                          </div>
                          <?php endif;?> -->
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    var time = $('.countdown');
    if (time.length) {
        console.log(time.data('time'));
        
        // Set the date we're counting down to
        var countDownDate = new Date(time.data('time')).getTime();
        
        console.log(countDownDate);
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("demo").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
          }
    }, 1000);
        
    }
</script>
