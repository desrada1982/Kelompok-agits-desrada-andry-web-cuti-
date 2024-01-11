<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?= base_url();?>assets/login/images/sidebar_dirgahayu1.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>CUTI | SPR Admin</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url();?>assets/admin_lte/dist/img/account.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block text-white" ><?=$this->session->userdata('username');?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                    <a href="<?= base_url();?>Dashboard/dashboard_super_admin" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt" style="color: #ffffff"></i>
                        <p class="text-white">Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url();?>Admin/view_super_admin" class="nav-link">
                        <i class="nav-icon fas fa-user" style="color: #ffffff"></i>
                        <p class="text-white">Admin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url();?>Pegawai/view_super_admin" class="nav-link">
                        <i class="nav-icon fas fa-users " style="color: #ffffff"></i>
                        <p class="text-white">Pegawai</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url();?>Cuti/view_super_admin" class="nav-link">
                        <i class="nav-icon fas fa-envelope" style="color: #ffffff"></i>
                        <p class="text-white">Cuti</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url();?>Settings/view_super_admin" class="nav-link">
                        <i class="nav-icon fas fa-cog" style="color: #ffffff"></i>
                        <p class="text-white">Settings</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>