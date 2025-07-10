
</div>
</body>

<?php if($this->uri->segment(1) != 'login'){ ?> 
<!-- Footer -->
<footer class="text-center text-lg-start text-white">
<!-- Grid container -->
<div class=" p-4 pb-0">
    <div class="container">
    <div class="col-3">
        <h3><strong>PT. Mirota KSM</strong></h3>
    <p>Jl. Anggrek No.141 Sambelegi Kidul, Maguwoharjo, Sambelegi Kidul, Kabupaten, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
    <p>(0274)-4332007</p>
    <p>recruitment@mirota.id</p>
    </div>

    <hr class="my-3">

    <!-- Section: Copyright -->
    <section class="pt-0">
    <div class="row d-flex align-items-center">
        <!-- Grid column -->
        <div class="col-md-2 col-lg-3 text-center text-md-start">
        <!-- Copyright -->
        <div>
            © <?= DATE('Y')?>
            <a class="text-white" href="https://mirota.id/"
                >IT Mirota KSM</a
            >
        </div>
        <!-- Copyright -->
        </div>
        <!-- Grid column -->
        <div class="col-md-7 col-lg-6 text-center text-md-start">
            <!-- Manu -->
            <!-- <div class="menu-footer">
                <nav>
                <ul>
                    <li>
                        <a href="<?php echo base_url('syaratketentuan')?>">Syarat & Ketentuan</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('privasi')?>">Kebjiakan Privasi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('karir')?>">Karir</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('kontakkami')?>">Kontak Kami</a>
                    </li>
                </ul>
                </nav>

            </div> -->
            <!-- Copyright -->
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 ml-lg-0 text-center text-md-end">
        <!-- Facebook -->
        <a
            class="btn btn-outline-light btn-floating m-1"
            class="text-white"
            role="button"
            href="https://www.linkedin.com/in/mirotaksm49"
            ><i class="fab fa-linkedin-in"></i></a>

        <!-- Twitter -->
        <a
            class="btn btn-outline-light btn-floating m-1"
            class="text-white"
            role="button"
            href="https://www.instagram.com/lactona.skim/"
            ><i class="fab fa-instagram"></i
            ></a>

        <!-- Google -->
        <a
            class="btn btn-outline-light btn-floating m-1"
            class="text-white"
            role="button"
            href="https://www.tiktok.com/@lactonaofficial"
            ><i class="fab fa-tiktok"></i
            ></a>
        </div>
        <!-- Grid column -->
    </div>
    </section>
    <!-- Section: Copyright -->
</div>
<!-- Grid container -->
    </div>

</footer>
<!-- Footer -->
<?php } ?> 
<div class="notifikasi-alert" data-icon="<?= $this->session->flashdata('swal_icon')?>"  data-text="<?= $this->session->flashdata('swal_text')?>"></div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Jquery needed -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
    <!-- <script src="<?php echo base_url(); ?>assets/landingpage/owlcarousel/owl.carousel.js"></script> -->

	<!-- SELECT2 -->
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

	<!-- SWEETALERT -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





    <script>
    $(document).ready(function() {
       
        $("#load").fadeOut(2000);
        alert();
    });

    function alert(){
        const icon = $('.notifikasi-alert').data('icon');
        const text = $('.notifikasi-alert').data('text');

        toastr[icon](text);
    }

    function swal(){
        const icon = $('.flash-data').data('icon');
        const tittle = $('.flash-data').data('title');
        const text = $('.flash-data').data('text');

        if (icon){
            Swal.fire({
            icon: icon,
            title: tittle,
            text: text,
            position: "center",
            showConfirmButton: false,
            timer: 3000
            })
        }
    }
    </script>

    <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.navBar').addClass('affix');
                $('.logo').addClass('affixlogo');
                console.log("OK");
            } else {
                $('.navBar').removeClass('affix');
                $('.logo').addClass('affixlogo');
            }
        });
    </script>

    <script id="rendered-js">
    $('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

    });
    //# sourceURL=pen.js
    </script>
</html>