<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("customer/_partials/heads.php") ?>
</head>
<body id="page-top">


<?php $this->load->view("customer/_partials/header.php") ?>

<div id="wrapper">


  <?php $this->load->view("customer/_partials/navbar.php") ?>


          <section class="archive-area section_padding_80">
            <div class="container">
                <div class="row">
                <?php
                  foreach ($produk as $row) {
                ?>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="kotak">
                    <form method="post" action="<?php echo site_url('shopping/tambah');?>" method="post" accept-charset="utf-8">
                    <a href="#"><img class="img-thumbnail" src="<?php echo base_url() . 'upload/product/'.$row['image']; ?>"/></a>
                    <div class="card-body">
                      <h4 class="card-title">
                      <a href="#"><?php echo $row['nama_produk'];?></a>
                      </h4>
                      <h5>Rp. <?php echo number_format($row['harga'],0,",",".");?></h5>
                      <p class="card-text"><?php echo $row['deskripsi'];?></p>
                    </div>
                    <div class="card-footer">
                    
                      <input type="hidden" name="id" value="<?php echo $row['id_produk']; ?>" />
                      <input type="hidden" name="nama" value="<?php echo $row['nama_produk']; ?>" />
                      <input type="hidden" name="harga" value="<?php echo $row['harga']; ?>" />
                      <input type="hidden" name="gambar" value="<?php echo $row['image']; ?>" />
                      <input type="hidden" name="qty" value="1" />
            
                      <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Beli</button>
                    </div>
                    </form>
                  </div>
                </div>
              <?php
	              }
              ?>
              </div>
          </div>
        </section>

  </div>
  
  <!-- Sticky Footer -->
    <?php $this->load->view("customer/_partials/footer.php") ?>

</div>
<!-- /#wrapper -->

<?php $this->load->view("customer/_partials/js.php") ?>