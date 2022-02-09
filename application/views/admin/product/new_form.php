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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/product/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">id_produk*</label>
								<input class="form-control <?php echo form_error('id_produk') ? 'is-invalid':'' ?>"
								 type="text" name="id_produk" placeholder="id Produk" />
								<div class="invalid-feedback">
									<?php echo form_error('id_produk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Nama_produk*</label>
								<input class="form-control <?php echo form_error('Nama_produk') ? 'is-invalid':'' ?>"
								 type="text" name="nama_produk" placeholder="Nama Produk" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_produk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">harga*</label>
								<input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>"
								 type="number" name="harga" min="0" placeholder="Harga" />
								<div class="invalid-feedback">
									<?php echo form_error('harga') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Jenis*</label>
								<select name="kategori" id="kategori" class="form-control" required>
          							<option value="">--Pilih--</option>
          							<option value="1">PC</option>
          							<option value="2">PS 3</option>
          							<option value="3">PS 4</option>
          						</select>
								<div class="invalid-feedback">
									<?php echo form_error('kategori') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Deskripsi*</label>
								<textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>"
								 name="deskripsi" placeholder="Produk Deskripsi"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('deskripsi') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>