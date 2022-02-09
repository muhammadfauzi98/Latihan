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
                <?php
                $grand_total = 0;
                if ($cart = $this->cart->contents())
                    {
                        foreach ($cart as $item)
                            {
                                $grand_total = $grand_total + $item['subtotal'];
                            }
                        echo "<h4>Total Belanja: Rp.".number_format($grand_total,0,",",".")."</h4>";    
                ?>
                        <form class="form-horizontal" action="<?php echo site_url('shopping/proses_order')?>" method="post" name="frmCO" id="frmCO">
                        <div class="form-group  has-success has-feedback">
                            <label class="control-label col-xs-3" for="inputEmail">Email:</label>
                            <div class="col-xs-9">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group  has-success has-feedback">
                            <label class="control-label col-xs-3" for="firstName">Nama :</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group  has-success has-feedback">
                            <label class="control-label col-xs-3" for="lastName">Alamat:</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group  has-success has-feedback">
                            <label class="control-label col-xs-3" for="phoneNumber">Telp:</label>
                            <div class="col-xs-9">
                                <input type="tel" class="form-control" name="telp" id="telp" placeholder="No Telp">
                            </div>
                        </div>
                        
                        <div class="form-group  has-success has-feedback">
                            <div class="col-xs-offset-3 col-xs-9">
                                <button type="submit" class="btn btn-primary">Proses Order</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    }
                    else
                        {
                            echo "<h5>Shopping Cart masih kosong</h5>"; 
                        }
                    ?>
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