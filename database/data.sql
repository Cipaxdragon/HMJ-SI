-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 10:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmj-si`
--

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `teks` text NOT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` VALUES(101, 'DOKUMENTASI KEGIATAN RAKER PENGURUS PERIODE 2023', 4, 'GAMBAR DOKUMENTASI KEGIATAN RAKER PENGURUS PERIODE 2023.JPG', 'Assalamualaikum Warahmatullahi Wabarakaatuh\r\n\r\nHalo SItizen👋\r\n\r\nSyukur alhamdulillah, kegiatan RAKER HMJ-SI PERIODE 2023 berhasil terlaksana dengan lancar pada hari Sabtu - Minggu, 4 - 5 Maret 2023. Bertempat di Pondok Kartika 2, Tanjung Bayang, Kota Makassar, Sulawesi Selatan.\r\n\r\nTerima kasih kepada seluruh panitia, pengurus, tamu undangan dan seluruh pihak yang telah berpartisipasi dalam kegiatan ini.\r\n\r\nNah, untuk yang sudah penasaran nih dengan rentetan kegiatan kemarin, berikut sederatan dokumentasi RAKER HMJ-SI Periode 2023 👐🏻✨\r\n\r\nNb:\r\nHayoo dilihat-lihat siapa saja yang ada di foto. Mungkin ada yang kenal atau bahkan foto kalian sendiri 🤭', '2023-03-07 20:35:00');
INSERT INTO `postingan` VALUES(102, 'MEMPERINGATI HARI BESAR \"WANITA INTERNASIONAL\"', 3, 'MEMPERINGATI HARI BESAR \"WANITA INTERNASIONAL\".JPG', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh\r\n\r\nHalo SItizen!!\r\n\r\nKalian tau tidak kalau, wanita yang cerdas itu belajar dari kegagalannya, tersenyum di saat-saat terendahnya, serta tumbuh lebih kuat saat menghadapi tantangan. Dan Kamu adalah salah satu dari mereka Girls and Ladies 😉\r\n\r\nSELAMAT MEMPERINGATI HARI WANITA INTERNASIONAL ✨✨', '2023-03-08 20:39:43');
INSERT INTO `postingan` VALUES(103, 'PENGUMUMAN \"INFO LOMBA MILAD FAKULTAS\"', 3, 'PENGUMUMAN \"INFO LOMBA MILAD FAKULTAS\".JPG', 'Assalamu\'alaikum Warahmatullahi Wabaraakatuh\r\n\r\nHalo SItizen!!\r\n\r\nSiapa nih yang sudah tidak sabar menunggu Milad Fakultas Sains dan Teknologi? Hayo, tekan like atau komen dibawah! Biar mimin tau nih seberapa besar minat kalian terhadap Milad Perdana yang akan diselenggarakan pada tanggal 12-18 Maret 2023.\r\n\r\nAda begitu banyak kegiatan yang sudah direncanakan lohh, yaitu Sepakbola, Futsal, Karaoke, Badminton, Tenis Meja, dan Videografi. Jadi bersiaplah untuk hari yang menyenangkan dan meriah ini! Jangan sampai ketinggalan ya 😆👐🏻', '2023-03-10 20:39:43');
INSERT INTO `postingan` VALUES(104, 'SHARING SESSION \"Journey to Becoming a UI/UX Designer\"', 4, 'SHARING SESSION \"Journey to Becoming a UI/UX Designer\".JPG', 'Assalamualaikum Warohmatullahi Wabarokatuh\r\n\r\nHalo SItizen👋\r\n\r\nSharing Session telah kembali menyapa teman-teman, nah di Sharing Session kali ini kita kedatangan Pemateri yang hebat dengan tema \"Journey to Becoming a UI/UX Designer\", Maka dari itu, jangan sampai ketinggalan\r\n\r\nCatat tanggalnya ya!!\r\n🗓️ : Minggu, 12 Maret 2023\r\n🕐 : 14.00-15.00 WITA\r\n📺 : Via Google Meet\r\nhttps://meet.google.com/ugj-ohat-eyb\r\n', '2023-03-11 01:45:27');
INSERT INTO `postingan` VALUES(105, 'UCAPAN SELAMAT ATAS JUARA SATUNYA KAKANDA KEVIN DALAM kompetisi eFootball Competition Expert Class in Friendship & Outbound by Dispora Makassar', 3, 'UCAPAN SELAMAT ATAS JUARA SATUNYA KAKANDA KEVIN DALAM kompetisi eFootball Competition Expert Class in Friendship & Outbound by Dispora Makassar.JPG', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh\r\n\r\nHalo SItizen!!\r\n\r\nKerja keras selalu membuahkan hasil! Dalam kompetisi eFootball Competition Expert Class in Friendship & Outbound by Dispora Makassar, Kakanda kita, kakanda Kevin Bimantara berhasil merenggut juara 1 loh!!!\r\n\r\nAlhamdulillah..\r\n\r\nTak ayal begitu banyak ucapan selamat atas kemenangan kakanda Kevin Bimantara. Semoga kedepannya Kakanda akan terus melanjutkan perjuangan dan pencapaiannya. Jangan pernah menyerah dalam menggapai impian..\r\n\r\nFor last but not least, You really deserved the trophy!', '2023-03-11 00:29:26');
INSERT INTO `postingan` VALUES(106, 'AFTER EVENT Sharing session dengan tema \"Journey to Becoming a UI/UX Designer\"', 4, 'AFTER EVENT Sharing session dengan tema \"Journey to Becoming a UI/UX Designer\".JPG', 'Assalamu\'alaikum Warahmarullahi Wabarakatuh\r\n\r\nHalo SItizen!\r\n\r\nSharing session dengan tema \"Journey to Becoming a UI/UX Designer\" yang dibawakan oleh Kakanda Muh. Hasri Andriansyah, S. Kom, alhamdulillah telah berjalan lancar sesuai perencanaan, ditemani oleh moderator kita, yaitu saudari Alyah Ananda Masri.\r\n\r\nMengenai kegiatan Sharing session kali ini mimin mau tau apa kesan pesan kalian selama kegiatan berlangsung? Jawab di kolom komentar yaa 😆\r\n\r\nThank you karena sudah join bersama kami SItizen. See you pada kegiatan selanjutnya 👋🏻', '2023-03-12 20:49:26');
INSERT INTO `postingan` VALUES(112, 'hari jadi IMSI', 4, 'hari jadi IMSI.JPG', 'Assalamualaikum Warohmatullahi Wabarokatuh\r\n\r\nHalo SItizen👋\r\n\r\nKami segenap keluarga besar Himpunan Mahasiswa Jurusan Sistem Informasi UIN Alauddin Makassar mengucapkan \"Selamat hari jadi IMSII yang ke 7 tahun\"✨\r\n\r\nSemoga IMSII dapat bersinergi bersama dan memberikan dampak yang lebih besar lagi kedepannya🤩\r\n\r\nSUKSES SELALU IMSII🥳🥳🥳', '2023-03-16 20:57:13');
INSERT INTO `postingan` VALUES(113, 'SHARING SESSION \"Maximizing Your Potential for LPDP Scholarships: Lessons from Succesful Awardees\"', 4, 'SHARING SESSION \"Maximizing Your Potential for LPDP Scholarships: Lessons from Succesful Awardees\".JPG', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh\r\n\r\nHalo SItizen! 👋\r\n\r\nSiapa nih yang penasaran dengan beasiswa LPDP atau siapa sih yang ga mau dapat beasiswa??\r\n\r\nNah, biar temen-temen pada tau gimana tips dan triknya agar bisa lolos beasiswa, kami ingin mengajak teman-teman untuk sharing informasi bersama Kak Irfan Walhidayah, S.Kom. selaku salah satu penerima beasiswa LPDP lohh, keren kan!✨\r\n\r\nJadi, tema sharing session kali ini adalah \"Maximizing Your Potential for LPDP Scholarships: Lessons from Succesful Awardees\"\r\n\r\nCatat tanggalnya yaa,\r\n🗓️: Minggu, 19 Maret 2023\r\n🕐: 14.00-15.00 WITA\r\n💻: Zoom meeting (link menyusul)\r\n\r\nJangan sampai ketinggalan lohh!!See you on Zoom meeting', '2023-03-17 21:02:13');
INSERT INTO `postingan` VALUES(114, 'AFTER EVENT sharing session \"Maximizing Your Potential for LPDP Scholarships: Lessons from Succesful Awardees\"', 3, 'AFTER EVENT sharing session \"Maximizing Your Potential for LPDP Scholarships: Lessons from Succesful Awardees\".JPG', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh\r\n\r\nHalo SItizen!\r\n\r\nTerimakasih kepada para peserta yang telah hadir dalam sharing session \"Maximizing Your Potential for LPDP Scholarships: Lessons from Succesful Awardees\" yang diselenggarakan melalui via zoom pada hari Minggu, 19 Maret 2023 kemarin.\r\n\r\nTak lupa kami juga mengucapkan terimakasih kepada kakanda Irvan Walidayah, S. Kom selaku pemateri dan saudari Siti Aisyah selaku moderator.\r\n\r\nKami harap sharing session ini dapat membantu teman-teman dalam mematangkan perencanaan mengikuti beasiswa LPDP tahun 2023. Sampai ketemu lagi di sharing session selanjutnya SItizen!', '2023-03-20 21:10:48');
INSERT INTO `postingan` VALUES(115, 'UCAPAN SARJANA ', 3, 'UCAPAN SARJANA.JPG', 'Assalamu\'alaikum Warahmatullahi Wabarakaatuh\r\n\r\nCongratulation on graduating Senior!! 🥳🥳\r\n\r\nSebuah kebanggaan atas semua usaha dan kerja keras Senior untuk mencapai titik ini! Apa pun yang sudah dilakukan selama ini, jangan pernah berhenti belajar, teruslah melakukan eksplorasi diri supaya lebih maju dan berkembang. Jadikan momen wisuda ini untuk menyimpan janji masa depan yang jauh lebih baik dan lebih cerah.\r\n\r\nIntinya, Keep reaching for the stars senior✨', '2023-03-22 00:10:48');
INSERT INTO `postingan` VALUES(116, 'UCAPAN SARJANA', 3, 'UCAPAN SARJANA.JPG', 'Assalamu\'alaikum Warahmatullahi Wabarakaatuh\r\n\r\nHappy Graduation Senior 🎉\r\n\r\n“Sukses bukanlah kebetulan. Ia terbentuk dari kerja keras, ketekunan, pembelajaran, pengorbanan, dan yang paling penting, cinta akan hal yang sedang atau ingin kamu lakukan.” – Pele\r\n\r\nSenior sudah berjuang untuk kelulusan ini, dan sekarang saatnya menata hari baru untuk menuju tantangan yang lebih seru.', '2023-03-22 01:14:04');
INSERT INTO `postingan` VALUES(117, 'UCAPAN MEMASUKI BULAN RAMADHAN ', 3, 'UCAPAN MEMASUKI BULAN RAMADHAN .JPG', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh\r\n\r\nHalo SItizen!\r\n\r\nMarhaban Yaa Ramadhan. Saat ini kita telah memasuki hari pertama puasa di bulan Ramadhan. Kami segenap keluarga besar HMJ-SI UINAM mengucapkan, \"Selamat menunaikan ibadah puasa dan ibadah-ibadah lainnya selama bulan suci. Semoga kita senantiasa meraih ketakwaan sekaligus memperkuat iman Islam di bulan suci yang penuh rahmat dari Allah SWT.\"\r\n\r\nAamiin\r\n\r\nYang kuat-kuat puasanya SItizen!', '2023-03-23 00:15:47');
INSERT INTO `postingan` VALUES(118, 'JADWAL IMSAKIYAH', 3, 'JADWAL IMSAKIYAH.JPG', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh\r\n\r\nHalo SItizen!\r\n\r\nYang masih mencari jadwal Imsak Bulan Ramadhan tahun ini, kami tampilkan yaa. Kalian bisa save postingan ini atau Chat mimin untuk minta file fotonya, ok? 😁\r\n\r\nSelamat menantikan waktu berbuka puasa ya, SItizen ✨', '2023-03-23 01:15:47');
INSERT INTO `postingan` VALUES(119, 'SPORT DAY FUTSAL', 4, 'SPORT DAY FUTSAL.jpg', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh\r\n\r\nHalo SItizen!\r\n\r\nMimin ingin kembali mengingatkan tentang Sport Day sebentar malam, nih! Jangan lupa datang dan turut meramaikan yaa 😄', '2023-03-24 21:15:47');
INSERT INTO `postingan` VALUES(120, 'pengumuman snbp', 3, 'pengumuman snbp.jpg', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh\r\n\r\nKalau yang sering-sering itu \"Halo SItizen\", kini mimin mau menyapa secara lebih spesifik, yaitu,\r\n\r\nHALO CALON ADIKS!! 😍\r\n\r\nSelamat ya kepada kalian yang berhasil lulus jalur SNBP 2023🥳🥳\r\n\r\nUntuk bergabung di group Camaba Sistem Informasi silahkan Hubungi Nomor yang Ada di bawah sini 👇\r\n\r\n👤: Nadiah Adawiyah Fahmi (089505940926)\r\n👤: Aqilah Nurul fauziah (082346666314)', '2023-03-28 21:15:47');
INSERT INTO `postingan` VALUES(121, 'bukber hmj-si', 4, 'bukber hmj-si.jpg', 'Assalamu\'alaikum Warahmatullahi Wabarakaatuh\r\n\r\nHalo SItizen!!\r\n\r\nMemasuki hari ke-9 ramadhan, udah mulai banyak ajakan bukber ga nih? Atau belum sama sekali?\r\n\r\nTenangg, KBSI akan mengadakan buka puasa bersama, dengan maksud dan tujuan untuk lebih mempererat tali silaturahmi. SItizen bisa bergabung jugaa bersama kami.. ☺️✨\r\n\r\nSave the date :\r\n🗓️ : 2 April 2023\r\n🕓 : 16.00 WITA - Selesai\r\n📍 : Ruko Ibu Isti, Ruko samping Apotik Deandra Farma, Jl. Mangka dg. Bombong, Sungguminasa kab. Gowa\r\n\r\nJadi jangan lupa catat waktunya yaa! See you there 👋🏻', '2023-03-31 21:15:47');
INSERT INTO `postingan` VALUES(122, 'donasi bukber', 4, 'donasi bukber.jpg', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh\r\n\r\nHalo SItizen!\r\n\r\nDalam kesempatan kali ini, kami ingin mengajak teman-teman untuk ikut berdonasi berupa uang tunai, menu berbuka ataupun air mineral bagi anak-anak Rumah Baca Nurul Jihad.\r\n\r\nDengan kita bersedekah, kita dapat melukiskan senyum indah di wajah anak-anak tersebut. Dan itu menjadi pahala bagi kita. Jadi, jika bisa barang sedikit, jangan lupa untuk bersedekah ya..\r\n\r\n\"Di antara golongan yang mendapatkan naungan Allah di hari kiamat nanti adalah seseorang yang bersedekah dan menyembunyikannya sehingga tangan kirinya tidak mengetahui apa yang disedekahkan oleh tangan kanannya.\" - HR. Bukhari\r\n\r\nUntuk info lebih jelasnya teman-teman boleh menghubungi kontak dibawah\r\n👤: 085298475891 (Emil)\r\n👤: 085242785241 (Adel)\r\n\r\nTerimakasih 🤗', '2023-04-05 00:15:47');
INSERT INTO `postingan` VALUES(123, 'sport day badminton dan futsal', 4, 'sport day badminton dan futsal.jpg', 'Assalamu\'alaikum warahmatullahi wabarakatuh...\r\n\r\nHai SItizen🥳\r\n\r\nHari ini mimin mau ngingetin tentang Sport Day minggu ini yah guysss!! Jangan lupa datang yah...🤗🤗\r\nEdited · 9w\r\nSee translation', '2023-04-05 01:15:47');
INSERT INTO `postingan` VALUES(124, 'info lomba memperingati hari besar islam', 3, 'info lomba memperingati hari besar islam.jpg', 'Assalamualaikum warahmatullahi wabarakatuh\r\n\r\nKami Himpunan Mahasiswa Program Studi Hukum Tata Negara (Siyasah) UIN Mahmud Yunus Batusangkar akan menyelenggarakan:\r\n\r\n*-Lomba Peringatan Hari Besar Islam (PHBI)-*\r\n*TINGKAT NASIONAL*\r\n\r\n*Tema: Dengan Memperingati Nuzul Qur\'an Kita Mewujudkan Generasi Yang Berakhlak Qur\'ani*\r\n\r\n*Cabang Lomba:*\r\n1. Tilawah Al-Qur\'an\r\n2. Adzan dan Khutbah\r\n3. Video Pidato Kreatif\r\n\r\nTimeline\r\n✍️ Pendaftaran 06 - 11 April 2023\r\n🗣️ Pembukaan 12 April 2023\r\n📼 Pengupload an Vidio 12-14 April 2023\r\n💯 Penilaian Video 12-19 April 2023\r\n🔚 Penutupan 19 April 2023\r\n\r\n🏅 Get Award\r\n🥇 Juara 1: E-Money + E-Sertifikat\r\n🥈 Juara 2: E-Money + E-Sertifikat\r\n🥉 Juara 3: E-Money + E-Sertifikat\r\n🎫 Seluruh peserta mendapatkan E-Sertifikat\r\n\r\n📍link Pendaftaran\r\nhttps://docs.google.com/forms/d/1BoNETV6DMEPdGqlG61SNNY4rC5zSGU_Fvi5iZY-S2dg/edit\r\n\r\n🆓 *Gratis Pendaftaran*\r\n\r\n📞 Contact Person\r\n👨 Wahyu Indrianda 082373076552\r\n🧕 Nola Puspita 082171142968\r\n🧕 Ratu Pratiwi Wahyu 0895-6023-73581\r\nEdited · 9w\r\nSee translation', '2023-04-09 21:27:53');
INSERT INTO `postingan` VALUES(125, 'after event sharing session \"Menjaga Keutamaan Ramadhan di Era Digitalisasi\"', 4, 'after event sharing session \"Menjaga Keutamaan Ramadhan di Era Digitalisasi\".jpg', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh 😊\r\n\r\nHalo SItizen!!\r\n\r\nKami ingin berterima kasih kepada seluruh peserta yang telah hadir dalam acara sharing session “Menjaga Keutamaan Ramadhan di Era Digitalisasi” pada hari Minggu, 16 April 2023 lalu. Terima kasih juga untuk kakanda M. Irwan Hidayat, S.Kom, Ketua IKA Jurusan Sistem Informasi UINAM yang telah menjadi pemateri yang menginspirasi dan saudari Alyah Ananda Masri yang telah menjadi moderator yang baik 🙏\r\n\r\nSemoga acara ini dapat memberikan pemahaman baru tentang cara menjaga keutamaan Ramadhan di era digitalisasi yang semakin berkembang. Kami berharap sharing session ini dapat membantu meningkatkan kualitas ibadah kita selama bulan suci Ramadhan 🌙\r\n\r\nTerima kasih kembali atas partisipasi semua peserta dan sampai jumpa di sharing session selanjutnya. Wassalamu\'alaikum Warahmatullahi Wabarakatuh. 🤗', '2023-04-17 21:30:46');
INSERT INTO `postingan` VALUES(126, 'memperingati hari kartini', 3, 'memperingati hari kartini.jpg', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh\r\n\r\nHalo SItizen!\r\n\r\nSelamat hari Kartini 🌹\r\n\r\nBanyak hal yang bisa menjatuhkanmu, tetapi satu-satunya hal yang benar-benar dapat menjatuhkanmu adalah sikapmu sendiri\r\n\r\nTeruslah berjuang tanpa peduli usia Kartini new generation 🥰', '2023-04-21 21:30:46');
INSERT INTO `postingan` VALUES(127, 'hari raya idul fitri', 3, 'hari raya idul fitri.jpg', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh\r\n\r\nHalo SItizen!\r\n\r\nHari yang dinantikan telah tiba. Kumpul bareng keluarga jelas menjadi momen terindah di hari ini. Walaupun tidak semua diantara kita bisa demikian. Jangan bersedih ya.. Meski tangan ini tidak bisa menjabat secara langsung. Sekiranya ucapan ini bisa mewakilkan,\r\n\r\n\"Selamat Hari Raya Idul Fitri 1 Syawwal 1444 H!! Taqabbalallaahu minna wa minkum, mohon maaf lahir dan batin ☺🙏,\r\n\r\nتَقَبَّلَ اللَّهُ مِنَّا وَمِنْكُمْ وَ تَقَبَّلْ ياَ كَرِيْمُ\r\n\r\nmudah-mudahan Allah menerima amal ibadah kita, dan terimalah ya (Allah) yang maha Mulia.”\r\n\r\nAamiin', '2023-04-22 21:30:46');
INSERT INTO `postingan` VALUES(128, 'hari buku sedunia', 3, 'hari buku sedunia.jpg', 'Assalamu\'alaikum Warahmatullahi Wabarakaatuh\r\n\r\nHalo SItizen! 👋\r\n\r\nSelamat hari buku sedunia ya! 📚 Maaf karena terlambat ngucapin 😣. Tapi harapan kami terhadap SItizen dengan adanya peringatan hari buku ini, tak akan kami lupa beritaukan.\r\n\r\nKami selaku pengurus HMJ-SI berharap, SItizen tidak akan pernah lupa membaca buku barang 5 menit. Baik itu e-book atau buku berbentuk fisik. Mengingat kata Dewi Lestari,\r\n\r\n\"Carilah buku yang Anda suka. Tulislah sebagaimana Anda ingin membaca buku yang disuka.\"\r\n\r\nAgar kita tidak kehilangan kesempatan mendapatkan ilmu tambahan dengan membaca buku tersebut 😄\r\n7w\r\nSee translation', '2023-04-23 21:30:46');
INSERT INTO `postingan` VALUES(129, 'HARI BURUH SEDUNIA.JPG', 3, 'HARI BURUH SEDUNIA.JPG', 'Assalamu\'alaikum Warahmatullahi Wabarakaatuh\r\n\r\nHalo SItizen! 👋\r\n\r\nYuk bersama-sama memberikan applause kepada seluruh pekerja dan buruh Indonesia atas pencapaian dan semua prestasi mereka selama ini! Oh, termasuk untuk diri kita juga, calon pekerja 😎\r\n\r\nMemang tidak semua pekerjaan itu terlihat WAH oleh mata masyarakat. Tapi selama itu berkah dan halal, apapun yang dilakukan perlu diapresiasi 👏\r\n\r\nIntinya, jangan pernah menyerah berjuang, ya! Kalian kuat, kalian hebat! 💪', '2023-05-01 21:30:46');
INSERT INTO `postingan` VALUES(130, 'HARI PENDIDIKAN NASIONAL', 3, 'HARI PENDIDIKAN NASIONAL.JPG', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh\r\n\r\nHalo SItizen! Mimin dapat pantun nih, dibaca ya!\r\n\r\nSahabat Lama saling mengenal 🫂\r\nBerdua sama-sama kaya 💸\r\nSelamat Hari Pendidikan Nasional 👩‍🎓👨‍🎓\r\nSemoga Indonesia semakin jaya 💪', '2023-05-02 21:30:46');
INSERT INTO `postingan` VALUES(131, 'INFO PENDAFTARAN UMM', 2, 'INFO PENDAFTARAN UMM.JPG', 'Assalamu\'alaikum Warahmatullahi Wabarokatuh\r\n\r\nHalo SItizen!\r\n\r\nJalur penerimaan UMM saat ini tengah berlangsung. Bagi SItizen yang sudah mendaftarkan diri ataupun baru mau mendaftar, Mimin doakan semoga bisa lulus di jurusan yang didaftarin ya 🤗\r\n\r\nAamiin', '2023-05-03 21:30:46');
INSERT INTO `postingan` VALUES(132, 'UCAPAN SARJANA', 3, 'UCAPAN SARJANA.JPG', 'Assalamu\'alaikum Warahmatullahi Wabarakaatuh\r\n\r\nHard work: check! Good grades: check! Make some money: more checks!\r\n\r\nSelamat atas gelar Sarjananya Senior 🎓\r\nSemoga senantiasa bisa bermanfaat bagi siapa pun dan semoga Allah SWT mempermudah segala urusanmu dalam hal apa pun di dunia ini. Aamiin.\r\n\r\nMari rayakan kebahagiaan di hari kelulusan Senior ini 😆', '2023-05-09 21:30:46');
INSERT INTO `postingan` VALUES(133, 'sharing session \"Menjaga Keutamaan Ramadhan di Era Digitalisasi\"', 4, 'sharing session \"Menjaga Keutamaan Ramadhan di Era Digitalisasi\".jpg', 'Assalamualaikum Warahmatullahi Wabarakatuh\r\n\r\nHalo SItizen❗\r\n\r\nSiapa nih yang sudah nggak sabar ikut sharing session lagi? Kali ini Sharing Session yang bertema \"Menjaga Keutamaan Ramadhan di Era Digitalisasi\" mengacu pada upaya untuk mempertahankan nilai-nilai utama bulan suci Ramadan dalam konteks era digital.\r\n\r\nTema ini dapat menjadi relevan untuk memotivasi umat Muslim dalam menjaga nilai-nilai keutamaan Ramadan dengan cara yang sesuai dengan kondisi dan tantangan yang dihadapi di era digitalisasi 💡\r\n\r\nMau tau siapa saja orang hebat yang terlibat di dalam sharing session? Sini Mimin kasih tau. Rahasia antar kita tapi 🤫\r\n\r\n👤 Narasumber : M. Irwan Hidayat, S.Kom\r\n- Ketua IKA-SI UINAM\r\n- Founder Kaffah Preneur\r\n- Koord. YukNgaji Makassar\r\n👤 Moderator : Alyah Ananda Masri\r\n- Mahasiswa Sistem Informasi 2021\r\n\r\nSo, sudah pada tau kan? Jadi nyalakan pengingat agenda kalian pada postingan ini agar tidak ketinggalan 😇\r\n\r\n🗓️ Hari/Tanggal : Minggu, 16 April 2023\r\n⏰ Waktu : 16.00-17.00 WITA\r\n💻 Tempat : Google Meet (link menyusul)\r\n\r\n🙌 Find us 🫂\r\nWebsite : sisfouinam.com\r\nE-mail : hmj.si@uin-alauddin.ac.id\r\nInstagram : hmjsi.uinam\r\nTwitter : hmjsi_uinam\r\nTikTok: HMJSIUinam_\r\nYouTube : HMJ Sistem Informasi UINAM', '2023-04-11 21:27:53');
INSERT INTO `postingan` VALUES(134, 'SELAMAT HALIS', 3, 'SELAMAT HALIS.JPG', 'Assalamu\'alaikum Warahmatullahi Wabarokatuh\r\n\r\nSelamat malam SItizen!\r\n\r\nMalam ini ada kabar gembira datang dari saudara kita Nurhalis. Atas kemenangannya menjadi juara 1 lomba desain poster Athirah. Semoga kesuksesan saudara Nurhalis ini bisa menjadi inspirasi bagi kita semua 😇\r\n\r\nTeruslah berkarya muda-mudi Indonesia 🥰\r\n4w\r\nSee translation', '2023-06-14 21:42:47');
INSERT INTO `postingan` VALUES(135, 'HARI ISA AL MASIH', 3, 'HARI ISA AL MASIH.JPG', 'Assalamu\'alaikum Warahmatullahi Wabarokatuh\r\n\r\nHalo SItizen!\r\n\r\nHari ini menjadi hari penting bagi saudara Kristiani kita. Tugas kita sebagai seorang Muslim adalah menghormati keyakinan mereka. Mari senantiasa menjalin persaudaraan dan saling menghormati dalam perbedaan keyakinan 🤗', '2023-05-18 21:44:30');
INSERT INTO `postingan` VALUES(136, 'INFO LOMBA ERLANGGA', 3, 'INFO LOMBA ERLANGGA.JPG', 'Assalamu\'alaikum Warahmatullahi Wabarokatuh\r\n\r\nHalo SItizen!\r\n\r\nWihiw mimin dapat info lomba nih yang diselenggarakan oleh Erlangga. Lomba kali ini adalah membuat proposal rencana bisnis. Dan dapat diikuti oleh SItizen yang sudah menginjak dunia perkuliahan (mahasiswa) dan SItizen yang masih SMA/SMK. Untuk info lebih jelasnya kalian bisa melihat info lomba langsung di akun instagram Erlangga\r\n\r\nSelamat berkarya dan bismillah meraih tiga besar 😄', '2023-05-20 21:44:30');
INSERT INTO `postingan` VALUES(137, 'INFO RECRUITMEN LDF', 3, 'INFO RECRUITMEN LDF.JPG', 'Assalamu\'alaikum Warahmatullahi Wabarokatuh\r\n\r\nHalo SItizen!\r\n\r\nKembali lagi dengan info terbaru yaituuuuuu..... 🥁\r\n\r\nOPEN RECRUITMENT LEMBAGA DAKWAH KAMPUS AL-JAMI\' & LDF SEJAJARAN\r\n\r\nBagi SItizen yang memang sudah menaruh minat dengan LDK dan LDF ini. Segera daftar ya! Jangan ditunda-tunda lagi. Wujudkan niat mulia kalian 😄', '2023-05-24 21:45:46');
INSERT INTO `postingan` VALUES(138, 'HARI PANCASILA', 3, 'HARI PANCASILA.JPG', 'Assalamu\'alaikum Warahmatullahi Wabarokatuh\r\n\r\nHalo SItizen!!\r\n\r\nBangun, bangun, semua pada bangunn!!! Yuk sama sama ngerayain Hari Lahir Pancasila 1 Juni 2023 ini dengan berdoa,\r\n\r\nSemoga kita, seluruh masyarakat Indonesia, dapat bersama-sama menjaga kebinekaan, mempererat persatuan dan kerukunan, serta menjunjung tinggi toleransi.\r\n\r\nAamiin\r\n\r\nSELAMAT HARI LAHIR PANCASILA 1 JUNI 2023 INDONESIA KAMI!! ', '2023-06-01 21:48:58');
INSERT INTO `postingan` VALUES(139, 'SELAMAT KAK KEVIN & HALIS', 3, 'SELAMAT KAK KEVIN & HALIS.JPG', 'Assalamu\'alaikum Warahmatullahi Wabarakaatuh\r\n\r\nHalo SItizen!\r\n\r\nPagi-pagi gini enaknya memulai hari dengan berita apa, ya? 🤔\r\nBerita Kemacetan jalur mudik? Berita waspada banjir? Berita perseling-- Skip.\r\n\r\nAih daripada pusing mikirin mau baca berita apa. Mimin kasih tau aja berita gembira yang Mimin dapatkan 😆\r\n\r\nBerita itu tentang..\r\n\r\nKemenangan Saudara Nurhalis sebagai Juara 1 Lomba Desain Poster Milad TI dan Kakanda Kevin Bimantara sebagai Juara 2 Individual dan Battle Team Tournament 5th e-Football Jawa Timur\r\n\r\nHORE MENANG LAGI!!! 🎉', '2023-06-02 21:50:03');
INSERT INTO `postingan` VALUES(140, 'LOGO KREASI ADUDU', 3, 'LOGO KREASI ADUDU.JPG', 'ssalamu\'alaikum Warahmatullahi Wabarakaatuh\r\n\r\nHalo SItizen!\r\n\r\nSebelumnya, bagi SItizen yang sering pantau akun instagram @kreasi_sisfo , udah pada taukan kalau beberapa waktu ini adik-adik Sistem Informasi Angkatan 2022 sedang berada di masa penggarapan Kreasi. Dan kemarin, mereka sudah mencapai tahap launching logo Kreasi.\r\n\r\nApa makna dari tiap elemen dalam logo itu? SItizen bisa langsung cek ig Kreasi, ya! Hihiw\r\n\r\nMimin nggak mau terlalu banyak bagi-bagi info. Soalnya mimin mau SItizen bisa mencari tau langsung ke pusat informasinya. Info ini pun berlaku untuk SItizen yang tiba-tiba merasa bingung, \"Apa itu Kreasi? Nggak pernah dengar tuh.\" 🧐', '0000-00-00 00:00:00');
INSERT INTO `postingan` VALUES(4634, 'Bangkit 2023 Batch 3', 4, 'Bangkit.jpg', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh\r\n\r\nHalo SItizen!\r\n\r\nMimin mau mengajak kalian untuk ikut sosialisasi Bangkit 2023 Batch 2 yang akan diselenggarakan besok di LT Fakultas Sains dan Teknologi 😎\r\n\r\nUntuk info lebih jelasnya kalian bisa mengecek langsung di akun @gdsc_uinam ya..\r\n\r\nYuk lah jangan ditunda-tunda lagi ikut sosialisasi begini. Insya Allah waktu kalian yang digunakan tidak menjadi sia-sia\r\n\r\nDitunggu kehadirannya SItizen😘', '2023-06-07 00:00:00');
INSERT INTO `postingan` VALUES(4664, 'Bangkit 2023 Batch 3', 4, 'Bangkit.jpg', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh\r\n\r\nHalo SItizen!\r\n\r\nMimin mau mengajak kalian untuk ikut sosialisasi Bangkit 2023 Batch 2 yang akan diselenggarakan besok di LT Fakultas Sains dan Teknologi 😎\r\n\r\nUntuk info lebih jelasnya kalian bisa mengecek langsung di akun @gdsc_uinam ya..\r\n\r\nYuk lah jangan ditunda-tunda lagi ikut sosialisasi begini. Insya Allah waktu kalian yang digunakan tidak menjadi sia-sia\r\n\r\nDitunggu kehadirannya SItizen😘', '2023-05-21 00:00:00');
INSERT INTO `postingan` VALUES(5689, 'Erlangga Business Concept', 4, 'erlangga.jpg', 'Assalamu\'alaikum Warahmatullahi Wabarokatuh\r\n\r\nHalo SItizen!\r\n\r\nWihiw mimin dapat info lomba nih yang diselenggarakan oleh Erlangga. Lomba kali ini adalah membuat proposal rencana bisnis. Dan dapat diikuti oleh SItizen yang sudah menginjak dunia perkuliahan (mahasiswa) dan SItizen yang masih SMA/SMK. Untuk info lebih jelasnya kalian bisa melihat info lomba langsung di akun instagram Erlangga\r\n\r\nSelamat berkarya dan bismillah meraih tiga besar 😄', '2023-06-07 00:00:00');
INSERT INTO `postingan` VALUES(56789, 'Erlangga Business Concept', 4, 'erlangga.jpg', 'Assalamu\'alaikum Warahmatullahi Wabarokatuh\r\n\r\nHalo SItizen!\r\n\r\nWihiw mimin dapat info lomba nih yang diselenggarakan oleh Erlangga. Lomba kali ini adalah membuat proposal rencana bisnis. Dan dapat diikuti oleh SItizen yang sudah menginjak dunia perkuliahan (mahasiswa) dan SItizen yang masih SMA/SMK. Untuk info lebih jelasnya kalian bisa melihat info lomba langsung di akun instagram Erlangga\r\n\r\nSelamat berkarya dan bismillah meraih tiga besar 😄', '2023-06-07 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56800;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
