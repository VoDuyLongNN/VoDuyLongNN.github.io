<style>
   *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      outline: none;
      list-style: none;
      text-decoration: none;
      font-family: 'League Spartan', sans-serif;
      scroll-behavior: smooth;
   }

   a{
      text-decoration: none;
      
   }

   html{
      position: relative;
   }


   body{
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
   }
   button{
      padding: 10px 20px;
      background-color: rgba(255, 255, 255, 0.568);
      font-size: 20px;
      margin-top: 20px;
      transition:linear all 0.5s;
      color: #000;
      cursor: pointer;
   }

   button:hover{
      background-color: #000;
      color: #fff;
   }
</style>

<?php
   session_start();
   include 'config.php';

   $idSP = $_GET['idAdd'];
   if(isset($_SESSION['idUser']))
   {
      $idKH = $_SESSION['idUser'];


      $add = "INSERT INTO giohang (idKhachHang, idSanPham) VALUES('$idKH', '$idSP')";
      $conn->query($add);

      
      echo'
         <center style = "font-size: 25px">Đã thêm vào giỏ hàng</center>
         <a href="../web-page/product-details/product-details.php?id='.$idSP.'"><button style = "">Quay lại</button></a>
      ';
   }
   else
      echo '
      <center style = "font-size: 25px">Yêu cầu đăng nhập</center>
      <a href="../web-page/product-details/product-details.php?id='.$idSP.'"><button style = "">Quay lại</button></a>
      ';
      
   