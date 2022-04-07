<?php
   $tenmaychu = 'localhost';
   $tentaikhoang = 'root';
   $matkhau = '';
   $csdl = 'htlshop';
   $conn = MySQLi($tenmaychu,$tentaikhoang,$matkhau,$csdl) or die('cannot conecting');
   $conn->select_db($csdl) or die('Chưa có CSDL');
	$conn->query("SET NAMES 'utf8'");

   $sql = "SELECT * FROM sanpham";
   $run = $conn->query($sql);
?>