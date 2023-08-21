<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
              <?php if (session()->get('level') == 1) { ?>
                  <li><a class="nav-link" href="<?= site_url('menu/menu_admin') ?>">Menu Admin 1</a></li>
                  <li><a class="nav-link" href="index.html">Menu Admin 2</a></li>
              <?php } ?>
              <?php if (session()->get('level') == 2) { ?>
                <li><a class="nav-link" href="<?= site_url('menu/menu_user') ?>">Menu User 1</a></li>
                <li><a class="nav-link" href="index.html">Menu User 2</a></li>
                <?php } ?>
            <?php if (session()->get('level') == 3) { ?>
                <li><a class="nav-link" href="<?= site_url('menu/menu_pelanggan') ?>">Menu Pelanggan 1</a></li>
                <li><a class="nav-link" href="index.html">Menu Pelanggan 2</a></li>
                <?php } ?>
            </li>
            
          </ul>
       </aside>
      </div>