-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 09:11 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ban_hang`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `hinh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `rong` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `cao` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `hinh`, `rong`, `cao`) VALUES
(1, 'banner_2.png', '990px', '150px');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `html` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `html`) VALUES
(1, '<table width=\"990px\">\r\n<tbody>\r\n<tr>\r\n<td align=\"right\" width=\"495px\">Cửa h&agrave;ng :</td>\r\n<td width=\"495px\">Shop abc <strong>mới</strong></td>\r\n</tr>\r\n<tr>\r\n<td align=\"right\">Điện thoại :</td>\r\n<td>so_dien_thoai_<strong>moi</strong></td>\r\n</tr>\r\n<tr>\r\n<td align=\"right\">Địa chỉ :</td>\r\n<td>dia_chi_<strong>moi</strong></td>\r\n</tr>\r\n</tbody>\r\n</table>');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `ten_nguoi_mua` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `hang_duoc_mua` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_doc`
--

CREATE TABLE `menu_doc` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_doc`
--

INSERT INTO `menu_doc` (`id`, `ten`) VALUES
(1, 'Menu 1'),
(2, 'Menu 2'),
(3, 'Menu 3'),
(4, 'Menu 4'),
(5, 'Menu 5a'),
(6, 'Menu 6'),
(7, 'Menu 7'),
(8, 'Menu 8');

-- --------------------------------------------------------

--
-- Table structure for table `menu_ngang`
--

CREATE TABLE `menu_ngang` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `loai_menu` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_ngang`
--

INSERT INTO `menu_ngang` (`id`, `ten`, `noi_dung`, `loai_menu`) VALUES
(1, 'Giới thiệu', '<p>Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /></p>', ''),
(2, 'Sản phẩm', '', 'san_pham'),
(3, 'Hướng dẫn mua hàng', 'Nội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>\r\nNội dung hướng dẫn mua hàng <br><br>', ''),
(4, 'Cách mua hàng', 'Nội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>\r\nNội dung cách mua hàng <br><br>', ''),
(5, 'Liên hệ', 'Nội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>', '');

-- --------------------------------------------------------

--
-- Table structure for table `quang_cao`
--

CREATE TABLE `quang_cao` (
  `id` int(11) NOT NULL,
  `html` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `vi_tri` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quang_cao`
--

INSERT INTO `quang_cao` (`id`, `html`, `vi_tri`) VALUES
(1, '<p><a href=\"#\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/ban_hang/hinh_anh/tinymce/qc_p_1.png\" alt=\"\" /></a></p>\r\n<p style=\"text-align: center;\"><a href=\"#\"><img src=\"/ban_hang/hinh_anh/tinymce/qc_p_2.png\" alt=\"\" /></a></p>\r\n<p><a href=\"#\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/ban_hang/hinh_anh/tinymce/qc_p_3.png\" alt=\"\" /></a></p>', 'trai'),
(2, '<p><a href=\"#\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/ban_hang/hinh_anh/tinymce/qc_t_1.png\" alt=\"\" /></a></p>\r\n<p style=\"text-align: center;\"><a href=\"#\"><img src=\"/ban_hang/hinh_anh/tinymce/qc_t_2.png\" alt=\"\" /></a></p>\r\n<p><a href=\"#\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/ban_hang/hinh_anh/tinymce/qc_t_3.png\" alt=\"\" /></a></p>', 'phai');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(255) NOT NULL,
  `hinh_anh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `thuoc_menu` int(255) NOT NULL,
  `noi_bat` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `trang_chu` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `sap_xep_trang_chu` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten`, `gia`, `hinh_anh`, `noi_dung`, `thuoc_menu`, `noi_bat`, `trang_chu`, `sap_xep_trang_chu`) VALUES
(1, 'Lia Thia', 55000, '1.jpg', '<p>Cá nhiều màu đẹp đăng bán hằng ngày.</p>', 1, 'co', '', 0),
(2, 'Cá Bảy Màu', 82000, '3.jpg', '<p>Cá nhiều màu đẹp đăng cho vui mua thì bán</p>', 3, '', 'co', 7),
(3, 'Cá Hồng Két', 86000, '1_2.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', '', 0),
(4, 'Cá chép nhật', 97000, '1_3.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', 'co', 3),
(5, 'Cá Xiêm', 42000, '1_4.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', '', 0),
(6, 'Cá Vàng Ba Đuôi', 100000, '1_5.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', 'co', 0),
(7, 'Cá Ba Đuôi nước ngọt', 120000, '1_6.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', 'co', 2),
(8, 'cá đá', 80000, '1_7.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', '', 0),
(9, 'cá đá màu', 160000, '1_8.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', '', 0),
(10, 'cá chép màu', 160000, '1_9.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', 'co', 7),
(11, 'cá lóc màu', 135000, '1_10.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', 'co', 0),
(12, 'cá thu màu', 55000, '1_11.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', 'co', 13),
(13, 'cá bống màu', 72000, '1_12.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', '', 0),
(14, 'cá màu', 78000, '1_13.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', 'co', 11),
(15, 'cá nhiều màu', 123000, '1_14.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', 'co', 0),
(16, 'cá nươc ngọt', 125000, '1_15.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, 'co', 'co', 5),
(17, 'cá màu', 99000, '1_16.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', '', 0),
(18, 'cá koi', 145000, '1_17.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', 'co', 1),
(19, 'cá màu 1', 145000, '1_18.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', '', 0),
(20, 'cá màu 2', 170000, '1_19.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', '', 0),
(21, 'cá màu 3', 85000, '1_20.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 1, '', '', 0),
(22, 'cá màu nhật', 30000, '3_2.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', 'co', 8),
(23, 'cá màu lào', 40000, '3_3.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', '', 6),
(24, 'cá màu china', 50000, '3_4.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', '', 0),
(25, 'cá màu hàn', 60000, '3_5.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', '', 9),
(26, 'cá màu mỹ', 70000, '3_6.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', 'co', 12),
(27, 'cá màu brazinl', 80000, '3_7.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', '', 0),
(28, 'cá màu mexicol', 90000, '3_8.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', '', 8),
(29, 'cá màu thái', 100000, '3_9.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', '', 0),
(30, 'cá màu anh', 110000, '3_10.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', '', 7),
(31, 'cá màu đức', 120000, '3_11.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', 'co', 9),
(32, 'cá màu italy', 50000, '3_12.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', '', 12),
(33, 'cá màu pháp', 60000, '3_13.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', '', 1),
(34, 'cá màu hà lan', 70000, '3_14.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', '', 11),
(35, 'cá màu philipbin', 80000, '3_15.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', '', 0),
(36, 'cá màu nam phi', 90000, '3_16.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', '', 16),
(37, 'cá màu việt nam', 170000, '3_17.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', '', 15),
(38, 'cá màu đẹp', 180000, '3_18.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', '', 0),
(39, 'cá màu ấn độ', 190000, '3_21.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, 'co', '', 0),
(40, 'cá nước mặn', 200000, '3_22.jpg', 'Cá nhiều màu đẹp đăng cho vui mua thì bán', 3, '', 'co', 2);

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `hinh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `lien_ket` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `hinh`, `lien_ket`) VALUES
(1, 'a_1.png', '#'),
(2, 'a_2.png', '#'),
(3, 'a_3.png', '#'),
(4, 'a_4.png', '#');

-- --------------------------------------------------------

--
-- Table structure for table `thong_tin_quan_tri`
--

CREATE TABLE `thong_tin_quan_tri` (
  `id` int(11) NOT NULL,
  `ky_danh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `vai_tro` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thong_tin_quan_tri`
--

INSERT INTO `thong_tin_quan_tri` (`id`, `ky_danh`, `mat_khau`, `vai_tro`) VALUES
(1, 'admin', 'c3284d0f94606de1fd2af172aba15bf3', 'admin'),
(2, 'minh', '123', 'khach');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_doc`
--
ALTER TABLE `menu_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_ngang`
--
ALTER TABLE `menu_ngang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quang_cao`
--
ALTER TABLE `quang_cao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_doc`
--
ALTER TABLE `menu_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu_ngang`
--
ALTER TABLE `menu_ngang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quang_cao`
--
ALTER TABLE `quang_cao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
