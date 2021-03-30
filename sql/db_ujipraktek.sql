-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2021 pada 16.21
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ujipraktek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_role`
--

CREATE TABLE `tb_role` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_role`
--

INSERT INTO `tb_role` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `alamat` longtext NOT NULL,
  `email` varchar(225) NOT NULL,
  `jam_buka` varchar(225) NOT NULL,
  `img` varchar(225) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `alamat`, `email`, `jam_buka`, `img`, `deskripsi`) VALUES
(7, 'Pulau Weh', 'Pulau Weh, Sabang, Sabang, Aceh, Indonesia, 24411.', 'pulauweh@gmail.com', 'Buka 24 Jam', 'https://travelspromo.com/wp-content/uploads/2019/11/Pantai-Iboih-Pulau-Weh-Aceh-%D1%80%D0%BE%D0%BC%D0%B0%D0%BD-%D0%BC%D0%B0%D1%82%D0%B2%D0%B5%D0%B5%D0%B2.jpg', 'Pulau Weh adalah pulau vulkanik kecil yang terletak di barat laut Pulau Sumatra. Pulau ini pernah terhubung dengan Pulau Sumatra, namun kemudian terpisah oleh laut setelah meletusnya gunung berapi terakhir kali pada zaman Pleistosen. Pulau ini terletak di Laut Andaman.'),
(9, 'Pulau Belitung', 'Keciput, Sijuk, Kabupaten Belitung, Kepulauan Bangka Belitung', 'pulaubelitung@gmail.com', 'Buka 24 Jam', 'https://i1.wp.com/www.belitungtransport.com/wp-content/uploads/2019/03/belitung-pulau0indah.jpg?zoom=1.25&resize=737%2C464&ssl=1', 'Belitung, atau Belitong, dulunya dikenal sebagai Billiton adalah sebuah pulau di lepas pantai timur Sumatra, Indonesia, diapit oleh Selat Gaspar dan Selat Karimata.'),
(10, 'Danau Toba', 'Jl Siborong Borong - Parapat, Sibaganding, Girsang Sipangan Bolon, Simalungun, Sumatera Utara, Indonesia', 'danautoba@gmail.com', 'Buka 24 Jam', 'https://www.pemburuombak.com/media/k2/items/cache/039e7b98e91cc2bfcd8bfd8d2f7b3b04_XL.jpg', 'Danau Toba adalah danau alami berukuran besar di Indonesia yang berada di kaldera Gunung Supervulkan. Danau ini memiliki panjang 100 kilometer, lebar 30 kilometer, dan kedalaman 505 meter. Danau ini terletak di tengah pulau Sumatra bagian utara dengan ketinggian permukaan sekitar 900 meter.'),
(11, 'Gunung Bromo', 'Area Gn. Bromo, Podokoyo, Tosari, Pasuruan, Jawa Timur', 'gunungbromo@gmail.com', '08:00 - 17:00 WIB', 'https://pelangiindonesia.id/po-content/uploads/bromo1.jpg', 'Gunung Bromo atau dalam bahasa Tengger dieja \"Brama\", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. '),
(12, 'Pantai Sanur', 'Jl. Danau Buyan, Desa Sanur, Denpasar Selatan, Kota Denpasar, Bali, Indonesia', 'pantaisanur@gmail.com', 'Buka 24 Jam', 'https://denpasarkota.go.id/uploads/datang/datang_201403090323_SejarahWisataPantaiSanur.jpg', 'Pantai Sanur adalah salah satu pantai wisata yang terkenal di pulau Bali. Tempat ini letaknya adalah persis di sebelah timur kota Denpasar, ibu kota Bali. Sanur berada di Kotamadya Denpasar. Karena memiliki ombak yang cukup tenang, maka pantai Sanur tidak bisa dipakai untuk surfing layaknya Pantai Kuta. '),
(13, 'Raja Ampat', 'Barat Bagian Kepala Burung (Vogelkoop) Pulau Papua', 'rajaampat@gmail.com', 'Buka 24 Jam', 'https://awsimages.detik.net.id/community/media/visual/2019/02/28/e27d496c-d76b-4415-8cc3-d1131c07215f_169.jpeg?w=780&q=90', 'Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi di barat bagian Kepala Burung Pulau Papua. Secara administrasi, gugusan ini berada di bawah Kabupaten Raja Ampat, Provinsi Papua Barat.'),
(14, 'Wae Rebo Village', 'Satar Lenda, Satar Mese Bar., Kabupaten Manggarai, Nusa Tenggara Tim.', 'waerebovillage@gmail.com', 'Buka 24 Jam', 'http://www.beritaflores.com/wp-content/uploads/2020/07/IMG-20200705-WA0015.jpg', 'Wae Rebo adalah sebuah desa adat terpencil dan misterius di Kabupaten Manggarai, Nusa Tenggara Timur. Terletak di ketinggian 1.200 m di atas permukaan laut. Di kampung ini hanya terdapat 7 rumah utama atau yang disebut sebagai Mbaru Niang'),
(15, 'Kepulauan Mentawai', 'Kabupaten Kepulauan Mentawai, Sumatera Barat', 'kepulauanmentawai@gmail.com', '08:00 - 17:00 WIB', 'https://asset.kompas.com/crops/Sm62pmHAIebWFK0BadvAxxOVvak=/9x0:832x549/750x500/data/photo/2020/04/11/5e91d335e6b9b.jpg', 'Kabupaten Kepulauan Mentawai adalah salah satu kabupaten yang terletak di provinsi Sumatra Barat, Indonesia. Kabupaten ini dibentuk berdasarkan UU RI No. 49 Tahun 1999 dan dinamai menurut nama asli geografisnya.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
