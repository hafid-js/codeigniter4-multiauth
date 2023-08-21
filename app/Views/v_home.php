<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Ini Halaman Home</h1>
          </div>
          <h1>  <?php if (session()->get('level') == 1) {
                    echo 'Admin';
                } else if (session()->get('level') == 2) {
                    echo 'User';
                } else {
                    echo 'Pelanggan';
                } ?></h1>
          <div class="section-body">
          </div>
        </section>
      </div>