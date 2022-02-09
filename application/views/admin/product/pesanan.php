	 <!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No Resi</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Email</th>
										<th>Action</th>
									</tr>
								</thead>
								<body>
								
									<?php foreach ($pesanan as $pesan): ?>
									<tr>
										<td width="150">
											<?= $pesan['id'] ?>
										</td>
										<td>
											<?= $pesan['nama'] ?>
										</td>
										<td>
											<?= $pesan['email'] ?>
										</td>
										<td>
											<?= $pesan['tanggal'] ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/pesanan/detail/'.$pesan['id']) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i>Detail</a>
											 <a href="<?php echo site_url('admin/pesanan/cetak/'.$pesan['id']) ?>"
											 class="btn btn-small"><i class="fas fa-print"></i>Print</a>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>

</body>

</html>