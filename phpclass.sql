-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 28, 2020 at 01:41 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpclass`
--
CREATE DATABASE IF NOT EXISTS `phpclass` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `phpclass`;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdon`
--

DROP TABLE IF EXISTS `chitietdon`;
CREATE TABLE IF NOT EXISTS `chitietdon` (
  `ma` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) DEFAULT NULL,
  `dongia` int(11) DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  PRIMARY KEY (`ma`,`masp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chucnang`
--

DROP TABLE IF EXISTS `chucnang`;
CREATE TABLE IF NOT EXISTS `chucnang` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` int(11) DEFAULT NULL,
  `hinh` int(11) DEFAULT NULL,
  `icon` int(11) DEFAULT NULL,
  `link` int(11) DEFAULT NULL,
  `macha` int(11) DEFAULT NULL,
  `trangthai` int(11) NOT NULL,
  `ngaytao` datetime NOT NULL,
  `ngaycapnhat` datetime NOT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `sodh` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaylap` datetime DEFAULT NULL,
  `ngaygiao` datetime DEFAULT NULL,
  `tongtien` int(11) DEFAULT NULL,
  `makh` int(11) DEFAULT NULL,
  `trangthaidon` int(11) DEFAULT NULL,
  `thanhtoan` int(11) DEFAULT NULL,
  `vanchuyen` int(11) DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` text COLLATE utf8mb4_unicode_ci,
  `diachigiaohang` text COLLATE utf8mb4_unicode_ci,
  `trangthai` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`ma`, `ten`, `email`, `sdt`, `diachi`, `diachigiaohang`, `trangthai`, `ngaytao`, `ngaycapnhat`) VALUES
(1, 'khach hang 1', 'kh1@gmail.com', NULL, 'dia chi khach hang 1', 'dia chi giao hang 1', 1, '2020-12-28 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

DROP TABLE IF EXISTS `loai`;
CREATE TABLE IF NOT EXISTS `loai` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci,
  `macha` int(11) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tukhoa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motatimkiem` text COLLATE utf8mb4_unicode_ci,
  `hinhchiase` text COLLATE utf8mb4_unicode_ci,
  `trangthai` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`ma`, `ten`, `hinh`, `mota`, `macha`, `alias`, `tukhoa`, `motatimkiem`, `hinhchiase`, `trangthai`, `ngaytao`, `ngaycapnhat`) VALUES
(1, 'loai 01', NULL, 'day la loai 1', NULL, 'l1', 'loai01', 'loai01', NULL, 1, '2020-12-28 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

DROP TABLE IF EXISTS `nhacungcap`;
CREATE TABLE IF NOT EXISTS `nhacungcap` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`ma`, `ten`, `diachi`, `email`, `sdt`, `hinh`, `trangthai`, `ngaytao`, `ngaycapnhat`) VALUES
(1, 'nha cung cap 1', 'dia chi nha cung cap 1', 'ncc1@gmail.com', NULL, NULL, 1, '2020-12-28 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nhomquantri`
--

DROP TABLE IF EXISTS `nhomquantri`;
CREATE TABLE IF NOT EXISTS `nhomquantri` (
  `manhom` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  `ngaytao` datetime NOT NULL,
  `ngaycapnhat` datetime NOT NULL,
  PRIMARY KEY (`manhom`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhomtin`
--

DROP TABLE IF EXISTS `nhomtin`;
CREATE TABLE IF NOT EXISTS `nhomtin` (
  `manhomtin` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci,
  `hinh` text COLLATE utf8mb4_unicode_ci,
  `macha` int(11) DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  PRIMARY KEY (`manhomtin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

DROP TABLE IF EXISTS `phanquyen`;
CREATE TABLE IF NOT EXISTS `phanquyen` (
  `machucnang` int(11) NOT NULL,
  `maquantri` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `ngaytao` datetime NOT NULL,
  `ngaycapnhat` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quantri`
--

DROP TABLE IF EXISTS `quantri`;
CREATE TABLE IF NOT EXISTS `quantri` (
  `ma` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manhom` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci,
  `gia` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `maloai` int(11) NOT NULL,
  `manhacc` int(11) NOT NULL,
  `dshinh` text COLLATE utf8mb4_unicode_ci,
  `tukhoa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motatimkiem` text COLLATE utf8mb4_unicode_ci,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinhchiase` text COLLATE utf8mb4_unicode_ci,
  `trangthai` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

DROP TABLE IF EXISTS `tintuc`;
CREATE TABLE IF NOT EXISTS `tintuc` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `hinh` text COLLATE utf8mb4_unicode_ci,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci,
  `mota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tukhoa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motatimkiem` text COLLATE utf8mb4_unicode_ci,
  `hinhchiase` text COLLATE utf8mb4_unicode_ci,
  `manhomtin` int(11) DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vanchuyen`
--

DROP TABLE IF EXISTS `vanchuyen`;
CREATE TABLE IF NOT EXISTS `vanchuyen` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `mota` text COLLATE utf8mb4_unicode_ci,
  `trangthai` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
