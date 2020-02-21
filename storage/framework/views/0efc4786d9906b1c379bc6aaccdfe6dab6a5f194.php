<!-- Sidebar navigation -->
<!-- SideNav slide-out button -->

<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav fixed danger-color-dark">
  <ul class="custom-scrollbar">
    <!-- Logo -->
    <li>
      <div class="logo-wrapper waves-light">
        <a href="#"><img src="<?php echo e(('img/logo.png')); ?>" class="img-fluid flex-center"></a>
      </div>
    </li>
    <!--/. Logo -->
    <!--Search Form-->
    <li>
      <form class="search-form" role="search">
        <div class="form-group md-form mt-0 pt-1 waves-light">
          <input type="text" class="form-control" placeholder="Search">
        </div>
      </form>
    </li>
    <!--/.Search Form-->
    <!-- Side navigation links -->
    <li>
      <ul class="collapsible collapsible-accordion">
        <li><a class="collapsible-header"></i> Pengguna</a>
        </li>
        <li><a href="<?php echo e(url('home')); ?>" class="collapsible-header waves-effect arrow-r"><i class="fas fa-home"></i>
            Beranda</a>
        </li>
      <li><a href="<?php echo e(url('carapengunaan')); ?>"class="collapsible-header waves-effect arrow-r"><i class="fas fa-book"></i> Cara Penggunaan</a>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-edit"></i> Pengaduan</a>
        </li>
        <li><a class="collapsible-header"></i> Administrator</a>

        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-user"></i> Pengguna</a>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-user-graduate"></i> Admin</a>
        </li>



        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-database"></i> Data Master
            <i class="fas fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="<?php echo e(url('asal')); ?>" class="waves-effect">Asal</a>
              </li>
              <li><a href="<?php echo e(url('kategori')); ?>" class="waves-effect">Kategori</a>
              </li>
              <li><a href="<?php echo e(url('jenis')); ?>" class="waves-effect">Jenis</a>
              </li>
            </ul>
          </div>
        </li>
        <li><a class="collapsible-header"></i> Semua Pengguna</a>

        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-eye"></i> Tentang Aplikasi<i
              class="fas fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#" class="waves-effect">Introduction</a>
              </li>
              <li><a href="#" class="waves-effect">Monthly meetings</a>
              </li>
            </ul>
          </div>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-envelope"></i> Hubungi Kami<i
              class="fas fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#" class="waves-effect">FAQ</a>
              </li>
              <li><a href="#" class="waves-effect">Write a message</a>
              </li>
              <li><a href="#" class="waves-effect">FAQ</a>
              </li>
              <li><a href="#" class="waves-effect">Write a message</a>
              </li>
              <li><a href="#" class="waves-effect">FAQ</a>
              </li>
              <li><a href="#" class="waves-effect">Write a message</a>
              </li>
              <li><a href="#" class="waves-effect">FAQ</a>
              </li>
              <li><a href="#" class="waves-effect">Write a message</a>
              </li>
            </ul>
          </div>
        </li>

      </ul>
    </li>
    <!--/. Side navigation links -->
  </ul>
  <div class="sidenav-bg mask-strong"></div>
</div>
<!--/. Sidebar navigation -->
<!--/. Sidebar navigation --><?php /**PATH C:\xampp\htdocs\finalprojectsp3\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>