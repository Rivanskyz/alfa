      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="treeview">
              <a href="<?php echo base_url() ?>/index.php/user">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="">
              <a href="<?php echo base_url() ?>/index.php/user/all_post">
                <i class="fa fa-edit"></i> <span>Post</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>/index.php/user/all_post"><i class="fa fa-circle-o"></i> Semua Post</a></li>
                <li><a href="<?php echo base_url() ?>/index.php/user/new_post"><i class="fa fa-circle-o"></i> Tambah Posts</a></li>
              </ul>

            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
