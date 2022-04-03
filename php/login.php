<?php
   $tenmaychu = 'localhost';
   $tentaikhoang = 'root';
   $matkhau = '';
   $csdl = 'htlshop';
   $conn = new mysqli($tenmaychu,$tentaikhoang,$matkhau,$csdl) or die('cannot conecting');
   $conn->select_db($csdl) or die('Chưa có CSDL');
   $conn->query("SET NAMES 'utf8'");