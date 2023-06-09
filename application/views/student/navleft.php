<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">School Student Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <a href="<?php echo base_url('student/changepic');  ?>" class="image">
        <?php if($user->image) {  ?>
          <img src="<?php echo base_url('upload/'.$user->image)?>" class="img-circle elevation-2" alt="User Image">
        <?php } else {?>
          <img src="<?php echo base_url('upload/'.$this->session->userdata('image'))?>" class="img-circle elevation-2" alt="User Image">
        <?php } ?>
        </a>
        <div class="info">
          <a href="" class="d-block"><?php echo $this->session->userdata('name');?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url('student');?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                  Time Table
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('student/table') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>table</p>
                </a>
                
              </li>
             </ul>
             <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                   Result
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('student/result') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>result</p>
                </a>
                
                </li>
             </ul>


           

             <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                   Profile
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('student/profile')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
                </li>
             </ul>

           
                


      </nav>
                            <!-- /.sidebar-menu -->
    </div>
                             <!-- /.sidebar -->
  </aside>
 