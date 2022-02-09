<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("customer/_partials/heads.php") ?>
</head>
<body id="page-top">


<?php $this->load->view("customer/_partials/header.php") ?>

<div id="wrapper">


    <?php $this->load->view("customer/_partials/navbar.php") ?>

    <div class="breadcumb-area" style="background-image: <?php echo site_url('img/bg-img/breadcumb.jpg');?>">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>Konfirmasi</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-area section_padding_80">
        <div class="container">
            <div class="contact-form-area">
                <h2>Proses Order sukses</h2>
				<div class="kotak2">
					<p>Terima kasih sudah berbelanja di AnarchyGames. Order anda sudah masuk ke database kami, dan dalam 1 x 24 Jam pihak kami akan menghubungi anda.<br>
					Jangan lupa mengontak kami jika ada permasalahan!</p>
				</div>
            </div>
        </div>
    </div>

    <?php $this->load->view("customer/_partials/footer.php") ?>

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<?php $this->load->view("customer/_partials/js.php") ?>