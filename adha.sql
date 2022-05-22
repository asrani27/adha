/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : adha

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 22/05/2022 15:48:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for administrator
-- ----------------------------
DROP TABLE IF EXISTS `administrator`;
CREATE TABLE `administrator`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `jkel` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of administrator
-- ----------------------------
INSERT INTO `administrator` VALUES (1, 'as', '234', 'L', '4', '2022-05-23', '3', '4', '2022-05-22 02:37:11', '2022-05-22 02:55:32');

-- ----------------------------
-- Table structure for berita
-- ----------------------------
DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kategori_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `file` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `kategori_id_berita`(`kategori_id`) USING BTREE,
  CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of berita
-- ----------------------------
INSERT INTO `berita` VALUES (10, 'Hindari Kerumunan Di Pasar, Disperdagin Banjarmasin Bentuk Satgas Pengawasan Covid-19', 'BERITABANJARMASIN.COM - Mendekati Hari Raya Idulfitri 1442 H, Disperdagin Kota Banjarmasin mengimbau masyarakat untuk tetap melaksanakan prokes Covid-19.\r\nMengingat terjadi pembeludakan pengunjung di pasar tradisional maupun modern. Plt Kepala Disperdagin Kota Banjarmasin, Ichroom Muftezar menerangkan pihaknya menerjunkan tim pengawasan di beberapa titik pasar dengan membuat posko.\"Kami telah membuat posko pengawasan,\" ujarnya, Rabu (5/5/2021).\r\n\r\nTezar menjelaskan mekanisme pengawasan dilakukan tiga tim dengan melakukan patroli ke dalam pasar untuk mengimbau pegunjung agar menjaga jarak untuk tidak terjadi kerumunan.\r\n\r\nSerta pihaknya juga memastikan baik para pengunjung maupun pedagang pasar untuk selalu menggunakan masker. \"Agar penegakan prokes tetap terus dijaga,\" imbuhnya.\r\n\r\nAdapun tiga tim tersebut pertama di Pasar Sentral Antasari, tim kedua Pasar Ujung Murung dan Sudimampir Baru. Sedangkan untuk tim tiga di kawasan Pasar Baru.\r\n\r\nIa pun berharap masyarakat bisa bekerjasama untuk tetap menerapkan protokol kesehatan saat berbelanja di pasar. (arum/sip)\r\n\r\nSumber Terkait : https://www.beritabanjarmasin.com/2021/05/hindari-kerumunan-di-pasar-disperdagin.html', 2, NULL, '2021-05-05 06:43:14', '2021-05-05 06:43:14');
INSERT INTO `berita` VALUES (11, 'Pasar Murah 2021', 'Dinas Perdagangan dan Perindustrian (Disperdagin) Kota Banjarmasin menggelar Pasar Murah pada tanggal 5 April sampai dengan 5 Mei Tahun 2021. Pasar murah tersebut terselenggara bekerjasama dengan beberapa perusahaan yang tergabung dalam Banjarmasin Corporate Social Responsibility (CSR) melaluli dana CSR. Pasar Murah ini bertujuan untuk menjaga stabilitas harga bahan pokok dan membantu masyarakat pra sejahtera dalam mendapatkan bahan kebutuhan pokok dengan harga yang telah disubsidi.\r\n\r\nPasar Murah ini dibuka oleh Pj. Walikota Banjarmasin sekaligus penyerahan piagam penghargaan kepada anggota BCSR yang telah berkontribusi dalam memberikan subsidi pada paket Pasar Murah.\r\n\r\nPasar Murah ini merupakan kegiatan tahunan yang diselenggarakan selama bulan Ramadan. Total dalam satu Lokasi kegiatan pasar murah ini ada 500 paket sembako yang terdiri dari dua komoditas. Yang pertama itu gula pasir sebanyak 2 kg dan minyak goreng sebanyak 2 liter, dari 2 komoditas tersebut, harganya sebesar Rp. 49.000. Karena adanya subsidi dari dana CSR perusahaan sebesar Rp. 15.000 per paket, maka harga tebus masyarakat sebesar Rp. 34.000. Jumlah total paket sembako bersubsidi yang didistribusikan adalah sebesar 4.950 paket.\r\n\r\n            Pasar Murah ini ditargetkan sebanyak 15 Kelurahan. Akan tetapi karena pandemi Covid-19 ini, jumlah subsidi dari beberapa perusahaan di Banjarmasin pun berkurang dan hanya membagi di 10 Kelurahan saja. Pasar Murah dilaksanakan dengan sistem kupon. Kupon dibagi oleh pihak kelurahan sesuai dengan data penduduk pra sejahtera yang dimiliki masing-masing kelurahan. Kelurahan membagi kepada masyarakat yang membutuhkan melalui ketua RT maupun RW.', 2, NULL, '2021-06-16 01:24:59', '2021-06-16 01:24:59');
INSERT INTO `berita` VALUES (12, 'Bazar Pasar Murah 2021', 'Dinas Perdagangan dan Perindustrian Kota Banjarmasin menggelar Bazar Pasar Murah Tahun 2021 sebanyak dua kali, yang pertama pada tanngal 3 Mei 2021 di Kelurahan Mantuil dan yang kedua pada tanggal 5 Mei 2021 di Kecamatan Banjarmasin Utara.\r\n\r\nBazar pasar murah dibuka oleh Pj. Walikota Banjarmasin dan dihadiri oleh Camat dan Lurah serta tokoh masyarakat setempat. Bazar Pasar Murah ini bekerjasama dengan para Distributor, BULOG, Toko Modern, serta PKK dan UMKM. Produk yang dijual di Bazar terutama adalah bahan pokok dan barang kebutuhan sehari-hari, serta kebutuhan selama bulan Ramadhan dan menjelang Hari Raya Idul Fitri.\r\n\r\nDisetiap kegiatan selalu menerapkan Prokes dengan membatasi jarak antar penjual maupun pembeli, menerapkan teknis satu jalur masuk dan keluar, serta meminta kepada Babinsa/Babinkamtibnas untuk menjaga masyarakat agar selalu memakai masker dan tidak bergerombol.', 3, NULL, '2021-06-16 01:26:21', '2021-06-16 01:26:21');
INSERT INTO `berita` VALUES (13, 'Disperdagin Kota Banjarmasin Pantau Harga Kebutuhan Bahan Pokok Menjelang Idul Adha di Sejumlah Pasar Tradisional', 'Menjelang hari besar, Hari Raya Idul Adha 1442 H biasanya sejumlah Bahan Pokok masyarakat mengalami kenaikan harga. Untuk itu, Dinas Perdagangan dan Perindustrian Kota Banjarmasin melaksanakan Pemantauan Harga Bahan Pokok di Pasar Antasari, Pasar Lama, dan Pasar Kalindo. Kegiatan ini bertujuan untuk mengetahui perubahan tingkat harga menjelang Hari Raya Idul Adha serta memberikan informasi kepada masyarakat.\r\n        Berdasarkan pemantauan pada hari Kamis tanggal 15 Juli 2021 rata-rata harga dinilai masih stabil, walaupun masih ada beberapa komoditas yang mengalami kenaikan harga. Ada 5 komoditas yang mengalami kenaikan harga, yaitu Telur Ayam Kampung, Tomat, Ikan Segar Peda, Ikan Asin Telang dan Ikan Asin Sepat.\r\n        Telur Ayam Kampung bulan lalu berada diharga Rp.2.200/butir atau Rp.44.000/Kg naik secara signifikan hingga sekarang berada diharga Rp 3.200/butir atau Rp.64.000/Kg,  Tomat juga mengalami kenaikan yang signifikan pada bulan lalu harga Tomat sebesar Rp.10.000/Kg dan sekarang menjadi Rp.16.000/Kg. Ikan Segar Peda juga mengalami kenaikan sebesar Rp.5.000/Kg dan sekarang menjadi Rp.50.000/Kg. Sedangkan Ikan Asin baru saja mengalami kenaikan sebesar Rp.5.000/Kgnya yang mana Ikan Asin Telang menjadi Rp.75.000/Kg dan Ikan Asin Sepat menjadi Rp.35.000/Kg. Kenaikan harga beberapa Komoditas tersebut disebabkan berkurangnya pasokan yang ada.\r\n         Walapun beberapa Komoditas mengalami kenaikan, komoditas yang lain juga berangsur turun dan stabil, seperti daging Ayam Ras dan Gula Pasir. Daging Ayam Ras pada bulan lalu berada pada harga Rp.42.000/Kg terus mengalami penurunan harga dan sekarang menjadi Rp.35.000/Kg. Gula Pasir juga mengalami penurunan harga yang sebelumnya Rp.12.500/Kg turun menjadi Rp.12.000/Kg.\r\n        Untuk komoditas yang lain, walaupun ada perubahan harga atau perbedaan harga antar pasar masih dinilai stabil dan kebutuhan yang tersedia masih bisa mencukupi terutama menjelang Hari Raya Idul Adha. Dinas Perdagangan dan Perindustrian Kota Banjarmasin akan terus melaksanakan pemantau secara rutin untuk menjaga kestabilitasan harga dan memberikan informasi kepada masyarakat.', 2, NULL, '2021-07-22 02:10:38', '2022-05-22 02:22:01');

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (2, 'Pemeteaan');
INSERT INTO `kategori` VALUES (3, 'Pasar Murah');

-- ----------------------------
-- Table structure for komentar
-- ----------------------------
DROP TABLE IF EXISTS `komentar`;
CREATE TABLE `komentar`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `berita_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `berita_id_komentar`(`berita_id`) USING BTREE,
  CONSTRAINT `berita_id_komentar` FOREIGN KEY (`berita_id`) REFERENCES `berita` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of komentar
-- ----------------------------
INSERT INTO `komentar` VALUES (1, 'sdf', 'sf', 13, '2022-05-22 03:53:11', '2022-05-22 03:53:11');
INSERT INTO `komentar` VALUES (2, 'asff', 'dfg', 13, '2022-05-22 03:55:13', '2022-05-22 03:55:13');
INSERT INTO `komentar` VALUES (3, 'zzzz', 'zzzz', 13, '2022-05-22 03:55:20', '2022-05-22 03:55:20');
INSERT INTO `komentar` VALUES (4, '456467', 'semoga sukses sellu', 13, '2022-05-22 03:55:31', '2022-05-22 03:55:31');
INSERT INTO `komentar` VALUES (5, 'test', 'tset', 12, '2022-05-22 03:55:55', '2022-05-22 03:55:55');

-- ----------------------------
-- Table structure for profil
-- ----------------------------
DROP TABLE IF EXISTS `profil`;
CREATE TABLE `profil`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of profil
-- ----------------------------
INSERT INTO `profil` VALUES (1, 'PT GEO INFO', 'bla bala bla bla bala bla bla bala blabla bala blabla bala bla bla bala bla bla bala blabla bala bla \r\nbla bala bla bla bala blabla bala bla bla bala blabla bala bla\r\nbla bala bla bla bala blabla bala bla\r\nbla bala bla bla bala bla bla bala bla\r\nbla bala bla bla bala bla bla bala bla', 'geoinfo@gmail.com', '098765456784', '2022-05-22 07:37:48', '2022-05-22 07:40:07');

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users`  (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  UNIQUE INDEX `role_users_user_id_role_id_unique`(`user_id`, `role_id`) USING BTREE,
  INDEX `role_users_role_id_foreign`(`role_id`) USING BTREE,
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of role_users
-- ----------------------------
INSERT INTO `role_users` VALUES (1, 1);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');
INSERT INTO `roles` VALUES (2, 'admin', '2020-12-23 23:17:36', '2020-12-23 23:17:36');

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `file` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES (4, NULL, 'Hindari Kerumunan Di Pasar, Disperdagin Banjarmasin Bentuk Satgas Pengawasan Covid-19', '2021-05-05 06:43:46', '2021-05-05 06:43:46');
INSERT INTO `slider` VALUES (5, NULL, 'Pasar Murah 2021', '2021-07-22 02:11:38', '2021-07-22 02:11:38');
INSERT INTO `slider` VALUES (6, NULL, 'Bazar Pasar Murah 2021', '2021-07-22 02:12:00', '2021-07-22 02:12:00');
INSERT INTO `slider` VALUES (7, NULL, 'Disperdagin Kota Banjarmasin Pantau Harga Kebutuhan Bahan Pokok Menjelang Idul Adha di Sejumlah Pasar Tradisional', '2021-07-22 02:12:21', '2022-05-22 01:35:16');

-- ----------------------------
-- Table structure for traffic
-- ----------------------------
DROP TABLE IF EXISTS `traffic`;
CREATE TABLE `traffic`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tanggal` date NULL DEFAULT NULL,
  `ip` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `browser` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `negara` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `os` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `device` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of traffic
-- ----------------------------
INSERT INTO `traffic` VALUES (2, '2021-08-10', '127.0.0.1', NULL, NULL, NULL, NULL);
INSERT INTO `traffic` VALUES (3, '2021-08-10', '114.6.50.161', NULL, NULL, NULL, NULL);
INSERT INTO `traffic` VALUES (4, '2022-05-22', '127.0.0.1', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_username_unique`(`username`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', NULL, 'superadmin', '2022-05-22 15:46:38', '$2y$10$hUhgvzIRqZqMgSrjvIk/5e389Yz/PWaY6G9zzThgS24F/ll3TgXqC', NULL, '2022-05-22 15:46:38', '2022-05-22 15:46:38');

SET FOREIGN_KEY_CHECKS = 1;
