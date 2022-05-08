-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 08, 2022 lúc 07:06 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `htlshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `MaDH` varchar(30) NOT NULL,
  `MaKH` varchar(30) NOT NULL,
  `MaPS` varchar(30) NOT NULL,
  `Ten` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(30) NOT NULL,
  `FirstName` varchar(10) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Born` date NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `EmailPass` varchar(20) NOT NULL,
  `PassSignup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `FirstName`, `LastName`, `Gender`, `Born`, `Address`, `Email`, `EmailPass`, `PassSignup`) VALUES
('', 'Võ Duy', 'Long', 'man', '2002-02-17', 'binhDinhquyNhonnguyenVanCu', 'voduylong1106@gmail.com', 'vdl17022002', 'vdl');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `maSP` varchar(10) NOT NULL,
  `LoaiSP` varchar(10) NOT NULL,
  `MaLoai` varchar(10) NOT NULL,
  `TenSP` varchar(100) NOT NULL,
  `MoTa` varchar(500) NOT NULL,
  `Gia` double NOT NULL,
  `Anh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`maSP`, `LoaiSP`, `MaLoai`, `TenSP`, `MoTa`, `Gia`, `Anh`) VALUES
('AS1', 'LT', 'Asus', 'Asus Vivobook S5', 'Mô Tả', 23500000, '5-600x600.jpg'),
('AS10', 'LT', 'Asus', 'Asus Vivobook S5', 'Mô Tả', 23500000, 'asus-vivobook-s533eq-i5-1135g7-8gb-512gb-2gb-mx350-win11-bn441w-260222-102529-600x600.jpg'),
('AS11', 'LT', 'Asus', 'Asus Vivobook S5', 'Mô Tả', 23500000, 'asus-vivobook-tp470ea-i5-1135g7-8gb-512gb-touch-pen-600x600.jpg'),
('AS12', 'LT', 'Asus', 'Asus Vivobook S5', 'Mô Tả', 23500000, 'asus-vivobook-x415ea-i5-eb637t-16-600x600.jpg'),
('AS13', 'LT', 'Asus', 'Asus Vivobook S5', 'Mô Tả', 23500000, 'asus-vivobook-x515ea-i7-1165g7-8gb-512gb-win11-ej1918w-600x600.jpg'),
('AS14', 'LT', 'Asus', 'Asus Vivobook S5', 'Mô Tả', 23500000, 'asus-zenbook-14x-oled-um5401qa-r5-kn209w-thumb-600x600.jpg'),
('AS15', 'LT', 'Asus', 'Asus Vivobook S5', 'Mô Tả', 23500000, 'asus-zenbook-ux425ea-i5-ki883w-thumb-600x600.jpg'),
('AS16', 'LT', 'Asus', 'Asus Vivobook S5', 'Mô Tả', 23500000, 'msi-gaming-modern-14-b11sbu-i5-669vn-600x600.jpg'),
('AS17', 'LT', 'Asus', 'Asus Vivobook S5', 'Mô Tả', 23500000, 'msi-gaming-modern-14-b11sbu-i5-669vn-600x600.jpg'),
('AS2', 'LT', 'Asus', 'Asus Vivobook S5', 'Mô Tả', 23500000, 'acer-aspire-a514-54-53t8-i5-nxa2asv006-600x600.jpg'),
('AS3', 'LT', 'Asus', 'Asus Vivobook S5', 'Mô Tả', 23500000, 'acer-aspire-a514-54-511g-i5-1135g7-8gb-1gb-ssd-win11-600x600.jpg'),
('AS4', 'LT', 'Asus', 'Asus Vivobook S5', 'Mô Tả', 23500000, 'asus-expertbook-b1400ceae-i5-ek4035t-270122-112642-600x600.jpg'),
('AS5', 'LT', 'Asus', 'Asus Vivobook S5', 'Mô Tả', 23500000, 'asus-vivobook-a515ep-i5-1135g7-8gb-512gb-2gb-mx330-win11-bn787w-080322-045825-600x600.jpg'),
('AS6', 'LT', 'Asus', 'Asus Vivobook S5', 'Mô Tả', 23500000, 'asus-vivobook-flip-14-r7-tm420ua-5700u-8gb-512gb-touch-600x600.jpg'),
('AS7', 'LT', 'Asus', 'Asus Vivobook S5', 'Mô Tả', 23500000, 'asus-vivobook-pro-oled-m3401qa-r5-km006w-600x600.jpg'),
('AS8', 'LT', 'Asus', 'Asus Vivobook S5', 'Mô Tả', 23500000, 'asus-vivobook-s433ea-i5-1135g7-8gb-512gb-win11-am2307w-600x600.jpg'),
('AS9', 'LT', 'Asus', 'Asus Vivobook S5', 'Mô Tả', 23500000, 'asus-vivobook-s533ea-i5-1135g7-8gb-512gb-win11-bn462w-250122-040501-600x600.jpg'),
('BP1', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'ban-phim-co-co-day-gaming-corsair-k63-den-600x600.jpg'),
('BP10', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'bo-chuot-khong-day-zadez-zmk-530g-1-2-600x600.jpg'),
('BP11', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'co-co-day-gaming-rapoo-v500alloy-den-ava-600x600.jpg'),
('BP12', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'co-co-day-gaming-rapoo-v500pro-vang-xanh-ava-600x600.jpg'),
('BP13', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'co-co-day-gaming-razer-blackwidow-ava-600x600.jpg'),
('BP14', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'co-co-day-gaming-silent-razer-blackwidow-lite-ava-600x600.jpg'),
('BP15', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'co-day-dareu-ek87-1.-600x600.jpg'),
('BP16', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'khong-day-dareu-ek807g-1.-600x600.jpg'),
('BP17', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'khong-day-logitech-k580-600x600.jpg'),
('BP18', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'khong-day-microsoft-all-in-one-media-n9z-00028-den-ava-600x600.jpg'),
('BP19', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'khong-day-touchpad-rapoo-k2800-1-600x600.jpg'),
('BP2', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'ban-phim-co-co-day-gaming-corsair-k68-rgb-den-600x600.jpg'),
('BP20', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'magic-keyboard-voi-phim-so-thumb-600x600.jpg'),
('BP21', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'microsoft-surface-pro-type-thumb-600x600.jpg'),
('BP3', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'bluetooth-dareu-ek868-thumb-600x600.jpg'),
('BP4', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'bluetooth-dareu-ek871-1.-600x600.jpg'),
('BP5', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'bluetooth-microsoft-qsz-00017-den-ava-600x600.jpg'),
('BP6', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'bo-chuot-co-day-microsoft-600-den-ava-600x600.jpg'),
('BP7', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'bo-chuot-khong-day-a4tech-fg1112-den-1.-600x600.jpg'),
('BP8', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'bo-chuot-khong-day-microsoft-850-den-ava-600x600.jpg'),
('BP9', 'Ban Phim', 'Ban Phim', 'Bàn Phím', 'Mô Tả', 780000, 'bo-chuot-khong-day-rapoo-8000m-1-600x600.jpg'),
('C1', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-bluetooth-a4tech-fb35-xanh-den-thumb-600x600.jpg'),
('C10', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-co-day-gaming-rapoo-vt30-den-ava-600x600.jpg'),
('C11', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-co-day-rapoo-n200-den-01-600x600.jpg'),
('C12', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-co-day-silent-rapoo-n1200-den-01-600x600.jpg'),
('C13', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-co-day-zadez-m213-den01-600x600.jpg'),
('C14', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-gaming-asus-tuf-m3-den01-600x600.jpg'),
('C15', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-gaming-corsair-harpoon-rgb-pro-den01-600x600.jpg'),
('C16', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-gaming-logitech-g102-gen2-lightsync-01-600x600.jpg'),
('C17', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-gaming-zadez-g-610m-den01-600x600.jpg'),
('C18', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-gaming-zadez-gt-613m-01-600x600.jpg'),
('C19', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-khong-day-a4tech-fg20-xam-hong-thumb-600x600.jpeg'),
('C2', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-bluetooth-apple-mk2e3-trang-thumb-600x600.jpg'),
('C20', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-khong-day-a4tech-fg30-xanh-thumb-600x600.jpeg'),
('C21', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-khong-day-a4tech-fg35-xam-thumb-600x600.jpeg'),
('C22', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-khong-day-a4tech-g3-280n-den-do-thumb-600x600.jpeg'),
('C23', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-khong-day-evalu-m806-01-600x600.jpg'),
('C24', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-khong-day-genius-nx-7010-ava-2-600x600.jpg'),
('C25', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-khong-day-logitech-m185-thumb-600x600.jpeg'),
('C26', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-khong-day-logitech-m190-01-600x600.jpg'),
('C27', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-khong-day-logitech-mx-anywhere-3-thumb-600x600.jpg'),
('C3', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-bluetooth-logitech-m337-thumb-600x600.png'),
('C4', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-bluetooth-microsoft-arc-01-600x600.jpg'),
('C5', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-bluetooth-microsoft-camo-xam-trang-thumb-1-600x600.png'),
('C6', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-bluetooth-microsoft-modern-mobile-ktf-01-600x600.jpg'),
('C7', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-bluetooth-microsoft-modern-mobile-ktf-01-600x600.jpg'),
('C8', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-bluetooth-silent-rapoo-m500-01-600x600.jpg'),
('C9', 'Chuot', 'Chuot', 'Chuột Laptop', 'Mô Tả', 450000, 'chuot-co-day-dareu-em908-thumb-600x600.jpeg'),
('Del20', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'hp-envy-x360-13-bd0531tu-i5-1135g7-8gb-256gb-600x600.png'),
('Del21', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'hp-envy-x360-convert-13-ay1057au-r5-601q9pa-600x600.jpg'),
('Del22', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'hp-zbook-firefly-14-g8-i5-275v5av-141221-042207-600x600.jpg'),
('Del23', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'intel-nuc-m15-i5-bbc510eauxbc1-600x600.jpg'),
('Del24', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'hp-14s-dq2550tu-i7-1165g7-8gb-512gb-win11-470d5pa-1-600x600.jpg'),
('Del25', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'lenovo-ideapad-5-15itl05-i5-82fg01h7vn-600x600.jpg'),
('Del26', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'lenovo-ideapad-5-pro-14itl6-i7-82l30093vn-030322-122756-600x600.jpg'),
('Del27', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'lenovo-thinkbook-14p-g2-ach-r5-5600h-16gb-512gb-win11-20yn001fvn-270122-090800-600x600.jpg'),
('Del28', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'lenovo-thinkbook-14s-g2-itl-i5-1135g7-8gb-512g-600x600.jpg'),
('Dell1', 'LT', 'Dell', 'Dell G15 5511 I5', 'Mô Tả', 15567000, 'dell-gaming-g15-5511-i5-70266676-600x600.jpg'),
('Dell10', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'dell-latitude-3520-i5-70251593-091221-020948-600x600.jpg'),
('Dell11', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'dell-latitude-3520-i7-70261780-091221-022033-600x600.jpg'),
('Dell12', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'dell-vostro-3400-i5-1135g7-8gb-256gb-600x600.jpg'),
('Dell13', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'dell-vostro-3405-r5-v4r53500u003w-9-600x600.jpg'),
('Dell14', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'dell-vostro-3510-i5-1135g7-8gb-512gb-2gb-600x600.jpg'),
('Dell15', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'dell-vostro-3510-i5-1135g7-8gb-512gb-office-h-s-win11-7t2yc2-600x600.jpg'),
('Dell16', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'dell-vostro-5410-i5-11320h-8gb-512gb-office-h-s-600x600.jpg'),
('Dell17', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'dell-vostro-5510-i5-11320h-8gb-512gb-office-1-600x600.jpg'),
('Dell18', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'dell-vostro-5515-r3-5300u-8gb-256gb-office-600x600.jpg'),
('Dell19', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'hp-14s-dq2550tu-i7-1165g7-8gb-512gb-win11-470d5pa-1-600x600.jpg'),
('Dell2', 'LT', 'Dell', 'Dell Insprion 14 I5', 'Mô Tả', 13700000, 'dell-inspiron-14-5410-i5-11320h-8gb-512gb-600x600.jpg'),
('Dell25', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'lenovo-ideapad-3-15itl6-i3-82h801nevn-140222-125845-600x600.jpg'),
('Dell3', 'LT', 'Dell', 'Dell Insprion 14 R7 512GB', 'Mô Tả', 24600000, 'dell-inspiron-14-5415-r7-5700u-8gb-512gb-office-h-s-win11-tx4h61-600x600.jpg'),
('Dell4', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'dell-inspiron-15-3511-i3-1115g4-4gb-256gb-600x600.jpg'),
('Dell5', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'dell-inspiron-15-3511-i5-70267060-251121-041434-600x600.jpg'),
('Dell6', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'dell-inspiron-15-3511-i5-70270650-141221-044940-600x600.jpg'),
('Dell7', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'dell-inspiron-15-3515-r5-3450u-8gb-256gb-600x600.jpg'),
('Dell8', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'dell-inspiron-15-5510-i5-0wt8r1-021121-125153-600x600.jpg'),
('Dell9', 'LT', 'Dell', 'Dell Insprion 15 I3 256GB', 'Mô Tả', 12000000, 'dell-inspiron-15-5515-r7-5700u-8gb-512gb-office-600x600.jpg'),
('GM1', 'LT', 'Gaming', 'Acer Nitro 5 An515', 'Mô tả', 24300000, 'acer-nitro-5-an515-45-r9sc-r7-5800h-8gb-512gb-600x600.jpg'),
('GM10', 'LT', 'Gaming', 'Asus Tuf Gaming FX506LH I5', 'Mô tả', 19600000, 'dell-gaming-alienware-m15-r6-i7-11800h-32gb-1tb-ssd-8gb-600x600.jpg'),
('GM11', 'LT', 'Gaming', 'Asus Tuf Gaming FX506LH I5', 'Mô tả', 19600000, 'dell-gaming-alienware-m15-r6-i7-p109f001dbl-020322-112012-600x600.jpg'),
('GM12', 'LT', 'Gaming', 'Asus Tuf Gaming FX506LH I5', 'Mô tả', 19600000, 'dell-gaming-g15-5511-i5-70266676-600x600.jpg'),
('GM13', 'LT', 'Gaming', 'Asus Tuf Gaming FX506LH I5', 'Mô tả', 19600000, 'dell-gaming-g15-5511-i7-p105f006agr-140222-091722-600x600.jpg'),
('GM14', 'LT', 'Gaming', 'Asus Tuf Gaming FX506LH I5', 'Mô tả', 19600000, 'dell-gaming-g15-5511-i7-p105f006bgr-140222-091855-600x600.jpg'),
('GM15', 'LT', 'Gaming', 'Gigabyte Gaming G5 10500H 512GB', 'Mô Tả', 24500000, 'gigabyte-gaming-g5-i5-10500h-16gb-512gb-6gb-171121-034937-600x600.jpg'),
('GM16', 'LT', 'Gaming', 'HP Gaming Victus 16', 'Mô Tả', 27999000, 'hp-gaming-victus-16-e0170ax-r7-4r0u7pa-600x600.jpg'),
('GM17', 'LT', 'Gaming', 'Lenovo Gaming Legion 5 15ITH6 I7 512GB', 'Mô Tả', 32999000, 'lenovo-gaming-legion-5-15ith6-i7-11800h-16gb-512gb-600x600.jpg'),
('GM18', 'LT', 'Gaming', 'Lenovo Gaming Legion 5 15ITH6 I7 512GB', 'Mô Tả', 32999000, 'msi-gaming-ge66-raider-11ug-i7-258vn-600x600.jpg'),
('GM19', 'LT', 'Gaming', 'Lenovo Gaming Legion 5 15ITH6 I7 512GB', 'Mô Tả', 32999000, 'msi-gaming-gf63-thin-11uc-i5-11400h-8gb-512gb-600x600.jpg'),
('GM2', 'LT', 'Gaming', 'Acer Nitro 5 Gaming An515', 'Mô tả', 27100000, 'acer-nitro-5-gaming-an515-57-54mv-i5-11400h-8gb-600x600.jpg'),
('GM3', 'LT', 'Gaming', 'Acer predator helios Ph315', 'Mô tả', 32100000, 'acer-predator-helios-ph315-54-75yd-i7-nhqc2sv002-600x600.jpg'),
('GM4', 'LT', 'Gaming', 'Acer Predator Triton 300', 'Mô tả', 32100000, 'acer-predator-triton-300-pt315-53-71dj-i7-600x600.jpg'),
('GM5', 'LT', 'Gaming', 'Predator Triton 300 PT315 &%LQ', 'Mô tả', 32100000, 'acer-predator-triton-300-pt315-53-75lq-i7-600x600.jpg'),
('GM6', 'LT', 'Gaming', 'Asus Tuf Gaming FX506LH I5', 'Mô tả', 19600000, 'asus-tuf-gaming-fx506lh-i5-hn188w-120122-121947-600x600.jpg'),
('GM7', 'LT', 'Gaming', 'Asus Tuf Gaming FX506LH I5', 'Mô tả', 19600000, 'asus-tuf-gaming-fx516pm-i7-11370h-8gb-512gb-600x600.jpg'),
('GM8', 'LT', 'Gaming', 'Asus Tuf Gaming FX506LH I5', 'Mô tả', 19600000, 'asus-tuf-gaming-fx516pm-i7-hn002t-600x600.jpg'),
('GM9', 'LT', 'Gaming', 'Asus Tuf Gaming FX506LH I5', 'Mô tả', 19600000, 'dell-g3-15-i7-p89f002bwh-16-600x600.jpg'),
('IP12XL', 'DT', 'IP', 'Iphone 12 Xanh Lá', 'Mô tả', 12999999, 'iphone-12-xanh-la-new-2-600x600.jpg'),
('IP13Do', 'DT', 'IP', 'Iphone 13 Đỏ', 'Mô tả', 37900000, 'iphone-xi-do-600x600.jpg'),
('IP13MiNi', 'DT', 'IP', 'Iphone 13 Mini 128GB', 'Mô tả', 32900000, 'iphone-13-mini-128gb-xanh-la-090322-011146-600x600.jpg'),
('IP13MN', 'DT', 'IP', 'Iphone 13 Mid Night', 'Mô tả', 26900000, 'iphone-13-midnight-2-600x600.jpg'),
('IP13Pro', 'DT', 'IP', 'Iphone 13 Pro Max Gold', 'Mô tả', 42900000, 'iphone-13-pro-max-gold-1-600x600.jpg'),
('IP13XL', 'DT', 'IP', 'Iphone 13 Xanh lá 128GB', 'Mô tả', 24900000, 'iphone-13-128gb-xanh-la-090322-011457-600x600.jpg'),
('MB1', 'LT', 'Macbook', 'Macbook Pro 14 M1', 'Mô Tả', 24900000, 'apple-macbook-pro-14-m1-pro-2021-600x600.jpg'),
('MB2', 'LT', 'Macbook', 'Macbook Pro 14 M2', 'Mô Tả', 32900000, 'apple-macbook-pro-14-m1-pro-2021-600x600.jpg'),
('MB3', 'LT', 'Macbook', 'Macbook Pro 14 M3', 'Mô Tả', 32900000, 'apple-macbook-pro-14-m1-pro-2021-600x600.jpg'),
('MB4', 'LT', 'Macbook', 'Macbook Air M1 2020', 'Mô Tả', 44500000, 'macbook-air-m1-2020-gray-600x600.jpg'),
('MB5', 'LT', 'Macbook', 'Macbook Air M2 2020', 'Mô Tả', 48500000, 'macbook-air-m1-2020-gray-600x600.jpg'),
('MB6', 'LT', 'Macbook', 'Macbook Air M4 2020', 'Mô Tả', 58500000, 'macbook-air-m1-2020-gray-600x600.jpg'),
('MB7', 'LT', 'Macbook', 'Macbook Pro M1 ', 'Mô Tả', 27500000, 'macbook-pro-m1-2020-gray-600x600.jpg'),
('MB8', 'LT', 'Macbook', 'Macbook Pro M2 ', 'Mô Tả', 29435000, 'macbook-pro-m1-2020-gray-600x600.jpg'),
('MB9', 'LT', 'Macbook', 'Macbook Pro M3 ', 'Mô Tả', 45435000, 'macbook-pro-m1-2020-gray-600x600.jpg'),
('MH1', 'MH', 'Man Hinh', 'Màn Hình', 'Mô Tả', 12600000, 'asus-lcd-238-inch-full-hd-vg249q1a-600x600.jpg'),
('MH10', 'MH', 'Man Hinh', 'Màn Hình', 'Mô Tả', 12600000, 'man-hinh-may-tinhasus-lcd-proart-pa247cv-238-inch-full-hd-600x600.jpg'),
('MH11', 'MH', 'Man Hinh', 'Màn Hình', 'Mô Tả', 12600000, 'man-hinh-may-tinhasus-lcd-proart-pa247cv-238-inch-full-hd-600x600.jpg'),
('MH12', 'MH', 'Man Hinh', 'Màn Hình', 'Mô Tả', 12600000, 'viewsonic-lcd-gaming-xg2405-2-24-inch-fhd-144hz-1ms-600x600.jpg'),
('MH2', 'MH', 'Man Hinh', 'Màn Hình', 'Mô Tả', 12600000, 'asus-lcd-proart-pa278cv-27-inch-2k-11-600x600.jpg'),
('MH3', 'MH', 'Man Hinh', 'Màn Hình', 'Mô Tả', 12600000, 'asus-lcd-vy249he-238-fulhd-600x600.jpg'),
('MH4', 'MH', 'Man Hinh', 'Màn Hình', 'Mô Tả', 12600000, 'asus-tuf-gaming-27-full-hd-165hz-vg27vq-095120-015143-600x600.jpg'),
('MH5', 'MH', 'Man Hinh', 'Asus Tuf Gaming 27inch Full HD', 'Mô Tả', 12600000, 'asus-tuf-gaming-27-full-hd-280hz-vg279qm-090620-020632-600x600.jpg'),
('MH6', 'MH', 'Man Hinh', 'Màn Hình', 'Mô Tả', 12600000, 'dell-lcd-p2722h-27inch-fullhd-60hz-1ms-600x600.jpg'),
('MH7', 'MH', 'Man Hinh', 'Màn Hình', 'Mô Tả', 12600000, 'lcd-samsung-gaming-24-inch-full-hd-144hz-4ms-lc24-1-600x600.jpg'),
('MH8', 'MH', 'Man Hinh', 'Màn Hình', 'Mô Tả', 12600000, 'lcd-samsung-gaming-24-inch-full-hd-144hz-4ms-lc24-1-600x600.jpg'),
('MH9', 'MH', 'Man Hinh', 'Màn Hình LC Oled 32inch', 'Mô Tả', 12600000, 'lenovo-lcd-legion-gaming-y25-25-245-inch-full-hd-2-1-600x600.jpg'),
('OPBac', 'DT', 'Oppo', 'Oppo A95 4G Bạc', 'Mô tả', 12999000, 'oppo-a95-4g-bac-2-600x600.jpg'),
('OPProBlue', 'DT', 'Oppo', 'Oppo Find X3 Pro Blue', 'Mô tả', 12999000, 'oppo-find-x3-pro-blue-001-600x600.jpg'),
('Out1', 'LT', 'Asus', 'Asus Tuf Gaming FX506LH I5', 'Mô Tả', 35600000, 'asus-tuf-gaming-fx506lh-i5-hn188w-120122-121947-600x600.jpg'),
('Out2', 'LT', 'Asus', 'Asus Gaming Intel I7', 'Mô Tả', 24500000, 'asuswebp.webp'),
('Out3', 'LT', 'Dell', 'Intel Nuc M15 I7 ', 'Mô Tả', 14500000, 'intel-nuc-m15-i7-bbc710bcuxbc1-thumb-1-600x600.jpg'),
('Out4', 'LT', 'Gaming', 'Lenovo Gaming Legion 5 15Ith I7', 'Mô Tả', 23567000, 'lenovo-gaming-legion-5-15ith6-i7-11800h-16gb-512gb-600x600.jpg'),
('Out5', 'LT', 'Macbook', 'Macbook Pro 1', 'Mô Tả', 45000000, 'macbook.jpg'),
('Out6', 'LT', 'Macbook', 'Macbook Air M1 2020', 'Mô Tả', 45000000, 'macbook-air-m1-2020-db-800x600-1607604365.png'),
('RM9Pro', 'DT', 'Realme', 'Realme 9 Pro Blue Thumb', 'Mô tả', 7999000, 'realme-9-Pro-blue-thumb-600x600.jpg'),
('RMC21Y', 'DT', 'Realme', 'Realme C12Y Blue', 'Mô tả', 4999000, 'realme-c21y-blue-600x600.jpg'),
('SSGlaxyS21', 'DT', 'Samsung', 'Samsung Galaxy S21 FE Tím', 'Mô tả', 12999000, 'Samsung-Galaxy-S21-FE-tim-600x600.jpg'),
('TN1', 'Tai Nghe', 'Tai Nghe', 'Tai Nghe', 'Mô Tả', 457000, 'airpods-3-hop-sac-khong-day-thumb-600x600.jpeg'),
('TN2', 'Tai Nghe', 'Tai Nghe', 'Tai Nghe', 'Mô Tả', 457000, 'bluetooth-true-wireless-ava-ds200a-wb-thumb-600x600.png'),
('TN3', 'Tai Nghe', 'Tai Nghe', 'Tai Nghe', 'Mô Tả', 457000, 'bluetooth-true-wireless-galaxy-buds-pro-bac-thumb-600x600.jpeg'),
('TN4', 'Tai Nghe', 'Tai Nghe', 'Tai Nghe', 'Mô Tả', 457000, 'bluetooth-true-wireless-rezo-f15-thumb-600x600.jpeg'),
('TN5', 'Tai Nghe', 'Tai Nghe', 'Tai Nghe', 'Mô Tả', 457000, 'bluetooth-true-wireless-rezo-qt13-thumb1-600x600.jpeg'),
('TN6', 'Tai Nghe', 'Tai Nghe', 'Tai Nghe', 'Mô Tả', 457000, 'tai-nghe-bluetooth-kanen-k6-thumb-600x600.jpeg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaDH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`maSP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
