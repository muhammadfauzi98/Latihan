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
                <h2>Daftar Belanja</h2>
                  <form action="<?php echo site_url('shopping/ubah_cart')?>" method="post" name="frmShopping" id="frmShopping" class="form-horizontal" enctype="multipart/form-data">
                  
                  <?php if ($cart = $this->cart->contents()) { ?>
                    <table class="table">
                      <tr id= "main_heading">
                        <td width="2%">No</td>
                        <td width="38%">Nama</td>
                        <td width="22%">Harga Satuan</td>
                        <td width="10%">Qty</td>
                        <td width="20%">Total Harga</td>
                        <td width="8%">Hapus</td>
                      </tr>
                  <?php
                    // Create form and send all values in "shopping/update_cart" function.
                  $grand_total = 0; 
                  $i = 1;
                  foreach ($cart as $item):
                  $grand_total = $grand_total + $item['subtotal'];
                  ?>
                    <input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
                    <input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
                    <input type="hidden" name="cart[<?php echo $item['id'];?>][name]" value="<?php echo $item['name'];?>" />
                    <input type="hidden" name="cart[<?php echo $item['id'];?>][price]" value="<?php echo $item['price'];?>" />
                    <input type="hidden" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>"a />
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $item['name']; ?></td>
                      <td><?php echo number_format($item['price'], 0,",","."); ?></td>
                      <td><input type="number" min="25"class="form-control input-sm" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" /></td>
                      <td><?php echo number_format($item['subtotal'], 0,",",".") ?></td>
                      <td><a href="<?php echo site_url('shopping/hapus/') ?><?php echo $item['rowid'];?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>
                      <?php endforeach; ?>
                    </tr>
                    <tr>
                      <td colspan="3"><b>Order Total: Rp <?php echo number_format($grand_total, 0,",","."); ?></b></td>
                      <td colspan="4" align="right">
                      <a data-toggle="modal" data-target="#myModal"  class ='btn btn-sm btn-danger'>Kosongkan Cart</a>
                      <button class='btn btn-sm btn-success'  type="submit">Update Cart</button>
                      <a href="<?php echo site_url('shopping/check_out')?>"  class ='btn btn-sm btn-primary'>Check Out</a>
                    </tr>

                  </table>
                  <?php  
                    }else{
                      echo "<h3>Keranjang Belanja masih kosong</h3>"; 
                      } ?>
                  </form>

                  <!-- Modal Penilai -->
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-md">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <form method="post" action="<?php echo site_url('shopping/hapus/all')?>">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Konfirmasi</h4>
                        </div>
                        <div class="modal-body">
                          Anda yakin mau mengosongkan Shopping Cart?  
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Tidak</button>
                          <button type="submit" class="btn btn-sm btn-default">Ya</button>
                        </div>
                        
                        </form>
                      </div>
                      
                    </div>
                  </div>
                  <!--End Modal-->
                </div>
              </section>
    
            <?php $this->load->view("customer/_partials/footer.php") ?>

          </div>

      <?php $this->load->view("customer/_partials/js.php") ?>
    </td>