 <?php
  include_once "includes/koneksi.php";
  include_once "layouts/header.php";
  $page = isset($_GET['page']) ? $_GET['page'] : 'beranda';
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
    case 'artikel':
      include_once "pages/artikel.php";
      break;
   case 'bacaan':
      include_once "pages/bacaan.php";
      break;
    case 'pengurus':
      include_once "pages/pengurus.php";
      break;
    case 'namakelompok':
      include_once "pages/namakelompok.php";
      break;
    
    default:
      include_once "pages/beranda.php";
      break;
  }
  include_once "layouts/footer.php";
?>
