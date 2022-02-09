
<? include Pesanan_model ?>
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
							<h6>No Resi 	: <?php echo $pesanan->id ?></h6>
							<h6>Nama 		: <?php echo $pesanan->nama; ?></h6>
							<h6>Alamat 		: <?php echo $pesanan->alamat; ?></h6>
							<h6>No Telpon 	: <?php echo $pesanan->telp; ?></h6>
							<h6>Email 		: <?php echo $pesanan->email; ?></h6>
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Kode Makanan</th>
										<th>Nama Makanan</th>
										<th>Harga Satuan</th>
										<th>Jumlah</th>
										<th>Harga Total</th>
									</tr>
								</thead>
								<body>
									<?php
					                    // Create form and send all values in "shopping/update_cart" function.
					                  $grand_total = 0;
					                  $i = 1;
					                  ?>
									<?php foreach ($produk as $produk) { 
					                  $grand_total = $grand_total + $produk->harga; ?>
									<tr>
										<td width="150">
											<?php echo $produk->id_produk; ?>
										</td>
										<td>
											<?php echo $produk->nama_produk; ?>
										</td>
										<td>
											<?php echo $produk->harga; ?>
										</td>
										<td>
											<?php echo $produk->qty; ?>
										</td>
										<td>
											<?php echo $produk->qty * $produk->harga; ?>
										</td>
									</tr>
									<?php } ?>
								</tbody>
									<tr>
                      					<td colspan="3"><b>Order Total: Rp <?php echo number_format($grand_total, 0,",","."); ?></h6></b></td>
                   					</tr>
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