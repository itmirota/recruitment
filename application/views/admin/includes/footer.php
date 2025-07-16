</div>
</main>
<footer class="footer">
	<div class="container-fluid">
		<div class="row text-muted">
			<div class="col-6 text-start">
				<p class="mb-0">
					<strong>Copyright &copy;</strong> - <a class="text-muted" href="https://mirota.id/" target="_blank"><strong>PT Mirota KSM <?= DATE('Y')?></strong></a>
				</p>
			</div>
			<div class="col-6 text-end">
				<ul class="list-inline">
					<li class="list-inline-item">
						<a href="https://wa.me/08993932789" target="_blank">Support</a>
					</li>
					<li class="list-inline-item">
						<a href="https://wa.me/08993932789" target="_blank">Help Center</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<div class="flash-data" data-icon="<?= $this->session->flashdata('swal_icon')?>"  data-title="<?= $this->session->flashdata('swal_title')?>"  data-text="<?= $this->session->flashdata('swal_text')?>"></div>
</div>


	<!-- jQuery 3 -->
	<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

	<!-- Popper -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
	
	<!-- Bootsrap 5 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


	<!-- DataTable -->
	<script src="https://cdn.dataTables.net/1.13.6/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.dataTables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

	<!-- AdminKit -->
	<script src="<?php echo base_url(); ?>assets/adminkit/js/app.js"></script>

	<!-- FullCalendar -->
	<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/bootstrap5@6.1.10/index.global.min.js"></script>
	
	<!-- SELECT2 -->
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<!-- Summernote -->
	<script src="<?php echo base_url(); ?>assets/dist/summernote-0.9.0/summernote-bs5.min.js"></script>

	<script>
		$(document).ready(function() {			
			swal();
			dataTable();
			dataTableScrollX();

			$('.summernote').summernote({
        placeholder: 'Tulis disini...',
        tabsize: 2,
        height: 100
      });

	    $('.summernoteEdit').summernote({focus: true});
	});

	function edit() {
    $('.textEdit').summernote({focus: true});
  };

  function save() {
    var markup = $('.textEdit').summernote('code');
    $('.textEdit').summernote('destroy');
  };

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

	function dataTable(){
		Object.assign(DataTable.defaults, {
		searching: true,
		ordering: true,
		});
		
		new DataTable('#dataTable');
	}

	function dataTableScrollX(){
		Object.assign(DataTable.defaults, {
		searching: true,
		responsive: true,
		ordering: true,
		scrollX: true
		});
		
		new DataTable('#dataTableScrollX');
	}

	// Script Navbar active
	var windowURL = window.location.href;
	pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
	var x= $('a[href="'+pageURL+'"]');
			x.addClass('active');
			x.parent().addClass('active');
	var y= $('a[href="'+windowURL+'"]');
			y.addClass('active');
			y.parent().addClass('active');
</script>

</body>

</html>