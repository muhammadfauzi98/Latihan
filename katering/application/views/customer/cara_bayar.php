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
                        <h2>Cara Pemesanan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    	<section class="archive-area section_padding_80">
    	    <div class="container">
				<h3>1. Pilih menu yang akan di beli</h3>
				<h3>2. Lihat detail untuk melihat menu apa yang anda beli</h3>
				<h3>3. Pilih beli pada menu yang ada</h3>
				<h3>4. Setelah sampai keranjang masukkan jumlah pemesanan dari setiap menu</h3>
				<h3>5. Klik update cart untuk memperbaharui pesanan anda</h3>
				<h3>6. klik checkout jika sudah sesuai dengan pemesanan</h3>
				<h3>7. Masukan identitas diri dengan benar</h3>
				<h3>8. Lalu klik checkout</h3>
				<h3>9. Pesanan anda akan di proses oleh admin dan anda akan dihubungi oleh admin kami melalui telpon</h3>
				<h3>&nbsp;</h3>
        	</div>
    	</section>
   
    <?php $this->load->view("customer/_partials/footer.php") ?>

  	</div>
  <!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->

<?php $this->load->view("customer/_partials/js.php") ?>