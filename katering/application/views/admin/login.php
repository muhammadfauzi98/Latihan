<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="<?php echo base_url('login/login'); ?>">
          <div class="form-group">
            <div class="form-label-group">
              <input type="username" id="username" class="form-control" placeholder="username" required="required" autofocus="autofocus">
              <label for="username">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password" class="form-control" placeholder="Password" required="required">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="<?php echo site_url('admin/login/overview'); ?>">Login</a>
        </form>
      </div>
    </div>
  </div>

<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
