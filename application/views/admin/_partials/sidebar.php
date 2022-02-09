<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('overview') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="<?php echo site_url('admin/products') ?>" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Menu</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/products/add') ?>">Tambah Menu</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">List Menu</a>
        </div>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == 'pesanan_c' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/pesanan') ?>">
            <i class="fas fa-envelope fa-fw"></i>
            <span>Pesanan</span>
        </a>
    </li>
</ul>