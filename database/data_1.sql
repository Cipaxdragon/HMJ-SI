-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 08:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'rido', 'terbaik');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `divisi` int(10) NOT NULL,
  `jabatan` int(10) NOT NULL,
  `medsos` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`nama`, `gambar`, `divisi`, `jabatan`, `medsos`) VALUES
('Adam', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744171072200794/Adam.png?ex=654b9a2f&is=6539252f&hm=c70c67c1c2439727abbf1b64ab0225eb6051f2e6edd859febc97b0604f263b23&\n', 4, 1, 'adamm412_'),
('Adam Abdul Majid', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744170526933053/Sopo.png?ex=654b9a2f&is=6539252f&hm=f89520d99b37ea052de964864d3b9289c97c2435e6c16135ecab04e08c99963b&\n', 4, 3, 'adamf.amf'),
('Ahmad Ghazali', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744168257814588/Ghazali.png?ex=654b9a2e&is=6539252e&hm=c2549eb688a0b900b73342b357e142199a5a77378f8f379c8b1597e4471c9d57&\n', 4, 3, 'gznzcz'),
('Alif Daffa Rivai', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744260532518912/Aldaf.png?ex=654b9a44&is=65392544&hm=49c2b8325bec31c566c50f21ccac81bde082fa6ba914ae8f7ccfe2e6223921cd&\r\n', 3, 1, 'aliefd19'),
('Alyah Ananda Masri', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744230467752046/Alya.png?ex=654b9a3d&is=6539253d&hm=44a54881f14decdd27b08b5f7f63da316aff1aa180229a250af83607adf957b8&\n', 1, 3, 'anandalyah_'),
('Aprisal', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744263070072842/Isyal.png?ex=654b9a45&is=65392545&hm=2d2b779e7e1b064c42902893580cf17f420f5d5fc9aa019b8e106dba41d8d92d&\r\n', 3, 3, 'isyal_aprisal'),
('Aqila Nurul Fauziah', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744263971852348/Kila.png?ex=654b9a45&is=65392545&hm=a80fc1ddfc591af4f63525676af40242f4ec715180189c79aa2a7d2edc3c8ae4&\r\n', 3, 3, 'aqilahnfk'),
('Aswar Fajar', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744231130431538/Aswar.png?ex=654b9a3d&is=6539253d&hm=1c5541080a4411614f1949e7b03ef41f8c1fe09a9ff81da2b05c7753ab2cec1c&\n', 1, 2, 'aswarfajar_'),
('Hayar Usman', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744262541586503/Hayar.png?ex=654b9a45&is=65392545&hm=0a3f1aac9fb662063d9b5aeccabc73fd423942cb82fd7ad4cf3ade6c737051da&\r\n', 3, 2, 'hayarusman_'),
('Muh Ridha Ilahi', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744170103312506/Rido.png?ex=654b9a2f&is=6539252f&hm=28d0e07286b2c5f7bdb143d7501bb910be7a71da65036b0d25a6d63ecab7895c&\n', 4, 3, 'muhridha_'),
('Muhammad Fajrin', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744261694341161/Fajrin.png?ex=654b9a45&is=65392545&hm=5afc4a967de3b67d0cc609ff856d394da198fd302fb9fa666542063ca293bf55&\r\n', 3, 3, 'mfjrnnn_'),
('Muhammad Nurhidayat', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744262088609922/Genjieh.png?ex=654b9a45&is=65392545&hm=52f0e4df3267a8d1726dcc83d5f3d4f42348440cf5f4e1a7a62327748d7ef691&\r\n', 3, 3, 'yaya.t19'),
('Nabila Faqita Masyora', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744232720080958/Nabila.png?ex=654b9a3e&is=6539253e&hm=70815ca2564f7d03fce2e210b90522c797696cd21952bf8063585c57a05991d4&\n', 1, 1, 'vhyouranov_'),
('Nadyah Adawiyah', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744168639504446/Nadya.png?ex=654b9a2e&is=6539252e&hm=0f8a2f2b7d4011160f9f503ae631c2366aec9db426b02eeb51d4abff7d81617d&\n', 4, 2, 'nadiaadawiya'),
('Nur Aisyah Wulandari ', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744169037959299/Nana.png?ex=654b9a2e&is=6539252e&hm=a948fddeae49b0e5d3608ab9b9393967f21074fd3933328437ff009aaad66e8f&\n', 4, 3, ''),
('Nur Fadilla Nur', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744261107134484/Dilot.png?ex=654b9a44&is=65392544&hm=bee53f055b17886d081b74dd720c70fa41ec0372d11e92bd2f8f1998e7d95eaa&', 3, 3, 'ufwlot_'),
('Nurhalis', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744232124502136/Cina.png?ex=654b9a3d&is=6539253d&hm=1f9726360d4878e8a5df2342346fc61c7c7bb1a5df0c492e054a0960b847c64c&\n', 1, 3, 'nurh4lis'),
('Nurul Fannisa', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744169553862716/Pani.png?ex=654b9a2f&is=6539252f&hm=f102fff4002faac7743f80962c0847c7748eef3825cd4c9275b0ff6d0ed0726e&\n', 4, 3, 'nrlfnsa_'),
('Rahmawati', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744233378599024/Rahma.png?ex=654b9a3e&is=6539253e&hm=21d6079392fe703900d2897669d4c2185226aa82e3a23820431bee710b3a1f01&\n', 1, 3, 'rhmaa_ammaa06'),
('Risal', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744233844154548/Risal.png?ex=654b9a3e&is=6539253e&hm=697b81a62b74deeca23d66af96c927a3bdc36a7cb5552107cbadbb18c6dd7596&\n', 1, 3, 'mursalft');

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `teks` text NOT NULL,
  `waktu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`id`, `judul`, `gambar`, `teks`, `waktu`) VALUES
(1, 'Judul Postingan 1', 'gambar1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum tortor eu elit blandit, in hendrerit ex sodales. Nullam eget ex at elit facilisis fringilla.', '2023-01-15'),
(2, 'Judul Postingan 2', 'gambar2.jpg', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer vitae sapien vel augue luctus tempus. Duis sollicitudin.', '2023-02-20'),
(3, 'Judul Postingan 3', 'gambar3.jpg', 'Fusce ultricies, velit ac vehicula tincidunt, leo nulla fermentum lectus, eu cursus arcu orci eu nisi. Aliquam vitae orci eu nisi convallis varius.', '2023-03-10'),
(4, 'Judul Postingan 4', 'gambar4.jpg', 'Vivamus lacinia dapibus justo, a ullamcorper enim tempus a. Nam vehicula augue nec felis interdum, id auctor felis vestibulum. Sed at aliquet.', '2023-04-05'),
(5, 'Judul Postingan 5', 'gambar5.jpg', 'Donec id libero id arcu consectetur venenatis nec ut nisl. In ac consectetur metus, nec iaculis elit. Sed scelerisque, turpis sit amet cursus gravida.', '2023-05-18'),
(56800, 'Company Visit Digides', '313.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae asperiores cumque suscipit quaerat. Vitae nesciunt excepturi explicabo dolorum, asperiores tenetur tempore magnam accusantium totam aliquid assumenda ratione dolor voluptates architecto, quasi dignissimos. Perferendis aliquid quos consectetur, eaque ad esse, sapiente id assumenda suscipit fugiat rerum quas dolor placeat inventore laudantium eum dolorem. Nemo cupiditate aliquid quos reprehenderit similique ab porro, suscipit repellendus maxime est impedit quod? Dolorem repudiandae odit sint adipisci! Magni doloribus impedit deserunt dolor iure architecto perferendis id itaque perspiciatis. Nulla minima minus accusamus maxime ducimus hic beatae neque temporibus dolorem esse. Maiores unde labore corporis velit asperiores tempora nihil aperiam ab molestiae, rem assumenda sed ea iusto maxime dicta temporibus perspiciatis sit sunt fugit pariatur qui. Tempore beatae incidunt, officiis reprehenderit debitis blanditiis culpa vitae sint distinctio iusto nihil numquam sit, tempora, minus deserunt ipsum eum explicabo non porro earum in voluptas. Illo, deleniti corrupti! Suscipit, ducimus fugiat. Consequuntur debitis cum fuga ratione exercitationem excepturi ex fugiat eum tempora, beatae voluptas quaerat repellat rerum dignissimos laudantium? Sed blanditiis quod sit voluptate? Nobis perferendis officiis quo, enim, eum amet soluta ipsam libero, omnis ut rerum consectetur aspernatur aliquam repellat rem velit repudiandae! Natus ipsa sequi, possimus, rerum enim quasi veniam doloribus ipsum mollitia magni laboriosam quae! Aperiam soluta sint rerum quis consectetur itaque deserunt, distinctio voluptate commodi voluptatum modi praesentium ad vero quisquam in incidunt a architecto autem ea quod vitae. Ipsum veritatis labore laudantium consectetur incidunt ratione nostrum? Ad aliquid nostrum provident libero itaque recusandae, eius iure reiciendis placeat id magni consequatur? Dolorem maxime quam quis aliquam dolore, doloribus hic alias neque nostrum minus sint, voluptatibus illum ad tempora ex facilis fuga nesciunt, vel rerum beatae enim ratione expedita. Cumque, blanditiis dignissimos! Fuga ipsa assumenda explicabo a excepturi ullam magni corrupti provident inventore vero ducimus odit commodi aliquam voluptatibus facilis libero, totam ipsum animi illum numquam magnam doloremque saepe adipisci sit. Nesciunt nisi beatae sed? Beatae minus, sit dicta fugiat cum nulla quia explicabo laudantium enim facere consequuntur in saepe impedit suscipit reprehenderit officiis obcaecati nisi, exercitationem soluta. Maiores porro ad amet quia odit ducimus et officiis eveniet perferendis. Nisi ducimus accusantium, nobis sequi, error eum inventore molestias, nam quam nesciunt exercitationem pariatur animi beatae dolore perspiciatis possimus dolor voluptatum. Voluptatum adipisci enim aliquam deleniti fuga, laborum mollitia iusto minima ea minus nisi itaque odio aut possimus vitae doloribus consequatur labore quaerat, vel expedita similique suscipit provident inventore. Modi harum repudiandae, maxime optio, facere amet ut, id natus veritatis hic numquam dolorem facilis suscipit tempora! Inventore ipsum harum, est voluptas omnis laborum. Esse laborum, repellat obcaecati nam, omnis nisi veniam facilis maiores rerum, accusamus autem impedit sit expedita? Molestiae minima amet nulla atque asperiores a rem aut. Vero soluta repudiandae minima. Molestiae consequatur quos facere molestias enim, eligendi nobis fugit. Eius accusamus omnis impedit animi! Voluptas amet porro nihil tempora ullam delectus nostrum quod ipsam, impedit, quidem beatae sed earum velit repellendus deleniti laborum vel, quibusdam fugit quisquam cupiditate hic! Odio debitis tempore illum voluptates ea cum modi tenetur commodi, inventore, eius aliquam rerum recusandae eum laudantium vero optio consequatur cupiditate quis eligendi! Fugit minus in sapiente saepe nesciunt, cum placeat suscipit aliquam aperiam sequi architecto eius repudiandae repellendus, ad sint quibusdam amet pariatur, possimus necessitatibus similique. Nihil impedit tempora deserunt tempore doloribus, quae eos hic consequuntur? Eaque, a similique. Voluptatum id doloribus voluptas tempore, fuga dolores eveniet ad ab quaerat, fugit pariatur suscipit. Iusto natus a illum totam vel rerum maxime voluptatibus, dignissimos fuga? Ipsum debitis quidem adipisci sapiente temporibus delectus, repudiandae perferendis iure, tenetur est quis a beatae dignissimos vero ipsa cum aliquam itaque magni, voluptatum totam nemo? Provident repellendus quam incidunt consectetur beatae adipisci minima nesciunt sequi dolor, nostrum quasi ducimus. Nostrum, numquam? Non animi temporibus perspiciatis explicabo dolorem praesentium dignissimos magnam vitae minima alias ad repellendus est adipisci voluptatem velit voluptate, unde odio in ipsam doloribus! Doloribus libero eos, quibusdam nam repudiandae accusantium facilis iure repellendus neque quisquam voluptas eaque temporibus, voluptates itaque fugiat fugit aperiam aliquid voluptatibus quam placeat magnam veniam. Rerum deserunt architecto cupiditate nihil aliquam velit, hic enim! Nesciunt fugiat laudantium nulla modi totam nostrum, corrupti dolore maiores officiis ad voluptatum amet, laborum explicabo molestias repellat ratione omnis accusantium vitae iste expedita voluptate quidem magnam provident eveniet! Doloremque, ducimus exercitationem obcaecati quo officiis quae recusandae esse molestias facilis magni nulla veritatis alias dolorum? Incidunt commodi nisi quasi, dolor explicabo eligendi labore impedit at fugit excepturi quidem blanditiis atque rerum eos dicta id delectus, veniam unde. Ipsum provident architecto praesentium eos atque a dolorum aut nulla delectus optio fugit, iusto fugiat culpa illum doloribus laborum enim sint eligendi est neque iure perferendis vel. Eligendi cum laboriosam, dolores sequi, labore quasi in, praesentium impedit ullam vitae quaerat. Explicabo modi tenetur delectus accusamus, ipsa quam aperiam magnam cumque doloremque repudiandae fugiat facere officiis soluta! Ipsum, eos odit. Ad nulla quidem omnis nobis ducimus sapiente neque aliquam tenetur dolorum tempora illo eaque mollitia, similique numquam molestiae praesentium amet dolore dolores deleniti? Cum rem tempora maxime eos at molestias veniam, fuga, similique temporibus eius labore repudiandae quod? Possimus consequuntur maxime voluptatem! Asperiores porro adipisci alias doloribus sunt atque quas tempora pariatur voluptates quis nesciunt, aspernatur dolorem in ducimus non, aliquam ipsam sit repudiandae facilis inventore sapiente, dolores unde. Sit sapiente ullam qui itaque ducimus sint, quis corporis tenetur unde ratione debitis quia exercitationem quas? Expedita nostrum sed unde consequatur delectus aliquam ratione repudiandae recusandae, aut modi illum doloribus sequi officiis quisquam non neque, nemo fuga dolorum? Modi quidem et nulla quos. Doloremque laudantium labore, et accusamus esse corrupti earum nesciunt sunt modi deleniti, dolores iste voluptatem quas, facilis autem perferendis hic molestias expedita quod illo sed neque! Itaque aliquid reiciendis dolore sed consectetur aut ea et at unde nesciunt eum, iusto sunt neque porro adipisci quisquam tempora voluptatibus voluptatum. Unde quae magni nemo cum corporis inventore sequi nulla perferendis ex at, in alias nam eveniet illo quis, cupiditate repudiandae reiciendis, quia debitis culpa fugiat voluptatem hic. Quaerat at veritatis expedita eaque sapiente, labore assumenda sit.tes', '2023-10-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`nama`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56801;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
