<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("customer/_partials/heads.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("customer/_partials/header.php") ?>

<div id="wrapper">

  <?php $this->load->view("customer/_partials/navbar.php") ?>
  
    <?php $this->load->view("customer/_partials/slide.php") ?>

<br><br>    
    <section class="blog_area section_padding_0_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <H1>Google Maps</H1>
                        <iframe src="https://www.google.com/maps/embed?@-6.2245705,106.9829629,17z/data=!3m1!4b1" width="900" height="600" frameborder="0" style="border:0" allowfullscreen>               
                        </iframe>
                    </div>
                </div>

                <!-- ****** Blog Sidebar ****** -->
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="blog-sidebar mt-5 mt-lg-0">
                        <!-- About -->
                        <?php $this->load->view("customer/_partials/about.php") ?>
                        <!-- About -->
                        <?php $this->load->view("customer/_partials/contact.php") ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Blog Area End ****** -->
    <!-- Sticky Footer -->
    <?php $this->load->view("customer/_partials/footer.php") ?>

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<?php $this->load->view("customer/_partials/js.php") ?>