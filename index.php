<?php
  include_once "includes/koneksi.php";

  
  include_once "layouts/header.php";
  $page = isset($_GET['page']) ? $_GET['page'] : 'beranda';
  include_once "includes/p_berita.php";

  switch ($page) {
    case 'beranda':
      include_once "pages/beranda.php";
      break;
    case 'beasiswa':
      include_once "pages/beasiswa.php";
      break;
    case 'tentang':
      include_once "pages/tentang.php";
      break;
    case 'pendaftaran':
      include_once "pages/pendaftaran.php";
      break;
    case 'pengumuman':
      include_once "pages/pengumuman.php";
      break;
    
    case 'kontak':
      include_once "pages/kontak.php";
      break;
    case 'kegiatan':
      include_once "pages/kegiatan.php";
      break;
  
    default:
      include_once "pages/beranda.php";
      break;
  }

  include_once "layouts/footer.php";
?>
