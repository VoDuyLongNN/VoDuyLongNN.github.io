<?php
   include 'config.php';
   session_start();
   $idSP = $_GET['id'];
   $idUser = $_SESSION['idUser'];
   echo $_GET['id'];
   echo $idUser;

   $sql = "DELETE FROM giohang WHERE idKhachHang = '$idUser' AND idSanPham = '$idSP'";
   $conn->query($sql);
   header('location: ../web-page/CartShopping/cartShopping.php');