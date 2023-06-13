<div class="bea-top container text-center fw-bold mt-5">
            <div class="row">
            <div class="col <?php echo ($_GET['page'] === 'beasiswa') ? 'aktif' : ''; ?>">

                <a class="<?php echo ($_GET['page'] === 'beasiswa') ? 'text-light' : ''; ?>" href="index.php?page=beasiswa">Info Beasiswa</a>
              </div>
              <div class="col <?php echo ($_GET['page'] === 'pendaftaran') ? 'aktif' : ''; ?>">
                <a class="<?php echo ($_GET['page'] === 'pendaftaran') ? 'text-light' : ''; ?>"  href="index.php?page=pendaftaran">Info Pendaftaran</a>
            </div>
            <div  class="col <?php echo ($_GET['page'] === 'pengumuman') ? 'aktif' : ''; ?>">
                <a class="<?php echo ($_GET['page'] === 'pengumuman') ? 'text-light' : ''; ?>" href="index.php?page=pengumuman">Info Pengumuman</a>
              </div>
        </div>
    </div>