/*
 Navicat Premium Data Transfer

 Source Server         : MYSQLKuliah
 Source Server Type    : MySQL
 Source Server Version : 100420
 Source Host           : localhost:3306
 Source Schema         : eoq

 Target Server Type    : MySQL
 Target Server Version : 100420
 File Encoding         : 65001

 Date: 07/08/2022 19:28:58
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bagian
-- ----------------------------
DROP TABLE IF EXISTS `bagian`;
CREATE TABLE `bagian`  (
  `id_bagian` int(8) NOT NULL AUTO_INCREMENT,
  `nama_bagian` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_bagian`) USING BTREE,
  UNIQUE INDEX `nama_bagian`(`nama_bagian`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bagian
-- ----------------------------
INSERT INTO `bagian` VALUES (7, 'Administrator');
INSERT INTO `bagian` VALUES (12, 'Gudang');
INSERT INTO `bagian` VALUES (8, 'Manajer');
INSERT INTO `bagian` VALUES (9, 'Pesan ke Supplier');

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang`  (
  `id_barang` int(16) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(64) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `harga_barang` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `biaya_penyimpanan` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `periode_permintaan` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `satuan` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `konversi` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_barang`) USING BTREE,
  UNIQUE INDEX `nama_barang`(`nama_barang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 152 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES (137, 'Kertas Kalkir Ukuran A4', '10000', '1000', '30', 'rim', '500');
INSERT INTO `barang` VALUES (138, 'Kertas Kalkir Ukuran F4', '11500', '1150', '30', 'rim', '500');
INSERT INTO `barang` VALUES (139, 'Kertas Kalkir Ukuran A3', '20000', '2000', '30', 'rim', '500');
INSERT INTO `barang` VALUES (140, 'Kertas HVS Ex Tjiwi Kimia 65 x 100', '23900', '3000', '30', 'rim', '500');
INSERT INTO `barang` VALUES (142, 'Kertas HVS Ex Tjiwi Kimia 65 x 100 2', '26750', '2500', '30', 'rim', '500');
INSERT INTO `barang` VALUES (143, 'Kertas HVS Ex Tjiwi Kimia 65 x 100 3', '30550', '3000', '30', 'rim', '500');
INSERT INTO `barang` VALUES (144, 'Kertas HVS Ex Tjiwi Kimia 65 x 100 4', '38200', '3000', '30', 'rim', '500');
INSERT INTO `barang` VALUES (145, 'Kertas HVS Ex Tjiwi Kimia 79 x 109', '41000', '4100', '30', 'rim', '500');
INSERT INTO `barang` VALUES (146, 'Tinta Cetak Offset ', '12000', '1200', '30', 'kaleng', '1');
INSERT INTO `barang` VALUES (147, 'Laser Film A4', '15500', '2000', '30', 'lembar', '1');
INSERT INTO `barang` VALUES (148, 'Laser Film F4', '18500', '2000', '30', 'lembar', '1');
INSERT INTO `barang` VALUES (149, 'Laser Film A3', '27500', '3000', '30', 'lembar', '1');

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai`  (
  `id_pegawai` int(16) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_pegawai` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_pegawai` varchar(64) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hp_pegawai` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_bagian` int(8) NOT NULL,
  PRIMARY KEY (`id_pegawai`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
INSERT INTO `pegawai` VALUES (7, 'admin', 'admin', 'administrator', 'kantor', '085214021108', 7);
INSERT INTO `pegawai` VALUES (10, 'amir', 'amir', 'amir', 'semarang', '08080808', 8);
INSERT INTO `pegawai` VALUES (11, 'anin', 'anin', 'anin', 'semarang', '004859', 12);
INSERT INTO `pegawai` VALUES (14, 'sandi', 'sandi', 'sandi', 'semarang', '009', 9);
INSERT INTO `pegawai` VALUES (15, 'mini', 'mini', 'mini', 'semarang', '006', 12);

-- ----------------------------
-- Table structure for pemesanan
-- ----------------------------
DROP TABLE IF EXISTS `pemesanan`;
CREATE TABLE `pemesanan`  (
  `id_pesanan` int(16) NOT NULL AUTO_INCREMENT,
  `nama_pemesan` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_barang` int(16) NOT NULL,
  `jumlah_pesanan` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lead_time` int(4) NOT NULL,
  `pakai` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_pesanan`) USING BTREE,
  UNIQUE INDEX `id_pesanan`(`id_pesanan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 176 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pemesanan
-- ----------------------------
INSERT INTO `pemesanan` VALUES (103, 'raja tulis', 137, '5', 2, '2000');
INSERT INTO `pemesanan` VALUES (104, 'raja tulis', 137, '3', 1, '2000');
INSERT INTO `pemesanan` VALUES (105, 'Indo trading', 137, '4', 3, '1900');
INSERT INTO `pemesanan` VALUES (106, 'global offset', 137, '5', 3, '2488');
INSERT INTO `pemesanan` VALUES (107, 'kedai grafika', 137, '6', 3, '2790');
INSERT INTO `pemesanan` VALUES (108, 'deprintz', 137, '3', 3, '1490');
INSERT INTO `pemesanan` VALUES (109, 'elevent printing', 137, '8', 3, '3999');
INSERT INTO `pemesanan` VALUES (110, 'Indo trading', 137, '3', 3, '1499');
INSERT INTO `pemesanan` VALUES (111, 'global offset', 137, '7', 3, '3499');
INSERT INTO `pemesanan` VALUES (112, 'platindo jaya', 137, '5', 3, '2400');
INSERT INTO `pemesanan` VALUES (113, 'platindo jaya', 137, '8', 3, '3760');
INSERT INTO `pemesanan` VALUES (114, 'global offset', 137, '6', 3, '2999');
INSERT INTO `pemesanan` VALUES (115, 'global offset', 146, '4', 3, '3');
INSERT INTO `pemesanan` VALUES (116, 'global offset', 146, '3', 3, '4');
INSERT INTO `pemesanan` VALUES (117, 'global offset', 146, '4', 3, '3');
INSERT INTO `pemesanan` VALUES (118, 'global offset', 146, '5', 3, '3');
INSERT INTO `pemesanan` VALUES (119, 'global offset', 146, '4', 3, '6');
INSERT INTO `pemesanan` VALUES (120, 'global offset', 146, '6', 3, '4');
INSERT INTO `pemesanan` VALUES (121, 'global offset', 146, '8', 3, '6');
INSERT INTO `pemesanan` VALUES (122, 'global offset', 146, '4', 3, '7');
INSERT INTO `pemesanan` VALUES (123, 'global offset', 146, '5', 3, '3');
INSERT INTO `pemesanan` VALUES (124, 'global offset', 146, '3', 3, '5');
INSERT INTO `pemesanan` VALUES (125, 'global offset', 146, '3', 3, '5');
INSERT INTO `pemesanan` VALUES (126, 'global offset', 146, '4', 3, '4');
INSERT INTO `pemesanan` VALUES (127, 'Indo trading', 147, '200', 3, '170');
INSERT INTO `pemesanan` VALUES (128, 'platindo jaya', 149, '400', 3, '350');
INSERT INTO `pemesanan` VALUES (129, 'platindo jaya', 147, '300', 3, '400');
INSERT INTO `pemesanan` VALUES (130, 'platindo jaya', 147, '100', 3, '100');
INSERT INTO `pemesanan` VALUES (131, 'deprintz', 147, '120', 3, '150');
INSERT INTO `pemesanan` VALUES (132, 'kedai grafika', 147, '100', 3, '90');
INSERT INTO `pemesanan` VALUES (133, 'elevent printing', 147, '140', 3, '120');
INSERT INTO `pemesanan` VALUES (134, 'global offset', 147, '90', 3, '100');
INSERT INTO `pemesanan` VALUES (135, 'global offset', 147, '200', 3, '175');
INSERT INTO `pemesanan` VALUES (136, 'global offset', 147, '100', 3, '120');
INSERT INTO `pemesanan` VALUES (137, 'platindo jaya', 147, '200', 3, '200');
INSERT INTO `pemesanan` VALUES (138, 'global offset', 147, '120', 3, '140');
INSERT INTO `pemesanan` VALUES (139, 'global offset', 147, '400', 3, '350');
INSERT INTO `pemesanan` VALUES (140, 'platindo jaya', 149, '500', 3, '500');
INSERT INTO `pemesanan` VALUES (141, 'kedai grafika', 149, '250', 3, '300');
INSERT INTO `pemesanan` VALUES (142, 'deprintz', 149, '100', 3, '99');
INSERT INTO `pemesanan` VALUES (143, 'platindo jaya', 149, '200', 3, '180');
INSERT INTO `pemesanan` VALUES (144, 'platindo jaya', 149, '120', 3, '120');
INSERT INTO `pemesanan` VALUES (145, 'platindo jaya', 149, '250', 3, '230');
INSERT INTO `pemesanan` VALUES (146, 'platindo jaya', 149, '300', 3, '300');
INSERT INTO `pemesanan` VALUES (147, 'platindo jaya', 149, '450', 3, '400');
INSERT INTO `pemesanan` VALUES (148, 'platindo jaya', 149, '200', 3, '250');
INSERT INTO `pemesanan` VALUES (149, 'platindo jaya', 149, '300', 3, '325');
INSERT INTO `pemesanan` VALUES (150, 'platindo jaya', 149, '500', 3, '510');
INSERT INTO `pemesanan` VALUES (151, 'raja tulis', 144, '5', 3, '2000');
INSERT INTO `pemesanan` VALUES (152, 'kedai grafika', 144, '6', 3, '2500');
INSERT INTO `pemesanan` VALUES (153, 'kedai grafika', 144, '10', 3, '5000');
INSERT INTO `pemesanan` VALUES (154, 'Indo trading', 144, '4', 3, '2500');
INSERT INTO `pemesanan` VALUES (155, 'platindo jaya', 144, '8', 3, '4000');
INSERT INTO `pemesanan` VALUES (156, 'platindo jaya', 144, '7', 3, '3000');
INSERT INTO `pemesanan` VALUES (157, 'elevent printing', 144, '10', 3, '4000');
INSERT INTO `pemesanan` VALUES (158, 'global offset', 144, '5', 3, '3000');
INSERT INTO `pemesanan` VALUES (159, 'global offset', 144, '12', 3, '6000');
INSERT INTO `pemesanan` VALUES (160, 'global offset', 144, '15', 3, '7500');
INSERT INTO `pemesanan` VALUES (161, 'global offset', 144, '8', 3, '4000');
INSERT INTO `pemesanan` VALUES (162, 'global offset', 144, '10', 3, '6000');
INSERT INTO `pemesanan` VALUES (163, 'Indo trading', 138, '8', 3, '3500');
INSERT INTO `pemesanan` VALUES (164, 'Indo trading', 138, '10', 3, '4500');
INSERT INTO `pemesanan` VALUES (166, 'kedai grafika', 138, '13', 3, '6500');
INSERT INTO `pemesanan` VALUES (167, 'kedai grafika', 138, '18', 3, '7500');
INSERT INTO `pemesanan` VALUES (168, 'platindo jaya', 138, '12', 3, '9000');
INSERT INTO `pemesanan` VALUES (169, 'platindo jaya', 138, '10', 3, '6000');
INSERT INTO `pemesanan` VALUES (170, 'global offset', 138, '20', 3, '5000');
INSERT INTO `pemesanan` VALUES (171, 'global offset', 138, '7', 3, '11000');
INSERT INTO `pemesanan` VALUES (172, 'raja tulis', 138, '5', 3, '3000');
INSERT INTO `pemesanan` VALUES (173, 'platindo jaya', 138, '8', 3, '2000');
INSERT INTO `pemesanan` VALUES (174, 'raja tulis', 138, '10', 3, '4000');
INSERT INTO `pemesanan` VALUES (175, 'deprintz', 138, '15', 3, '5000');

SET FOREIGN_KEY_CHECKS = 1;
