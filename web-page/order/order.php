<?php
   include_once '../../php/config.php';
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../../asset/font/fontawesome-free-6.0.0-web/css/all.min.css">
   <link rel="icon" href="../../asset/picture/logo/logoh3.svg" type="image/x-icon" sizes="32*32">
   <link rel="stylesheet" href="../../main.css">
   <title>Đặt Hàng</title>
   <style>
      body{
         display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: column;
      }
      .title{
         text-align: center;
         font-size: 30px;
         text-transform: capitalize;
         font-weight: bold;
         padding: 20px;
      }
      form{
         display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: column;
      }

      .item{
         padding: 20px 0;
         min-width: 400px;
         display: flex;
         justify-content: space-between;
      }

      .item label{
         font-size: 20px;
      }

      .item input, textarea{
         width: 200px;
         padding: 5px;
      }

      .submit{
         margin: 20px;
         background-color: #000;
         color: #fff;
         padding: 10px 20px;
         border: 2px solid #fff;
         cursor: pointer;
      }
   </style>
</head>
<body>
   <header >
      <div class="login js-login">
         <div class="login-icon"><i class="fa-solid fa-user"></i> <p>
            <?php
               if(isset($_SESSION['nameUser']))
                  echo $_SESSION['nameUser'];
               else
                  echo 'đăng nhập';
            ?>
         </p></div>
      </div>

      <nav>
         <ul class="menu">
            <li class="menu-items"><a href="../../index.php" >Trang Chủ</a></li>

            <li class="menu-items">
               <a href="../products/product.php">Sản Phẩm</a>
                  <ul class="sub-nav-sanpham"> 
                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="../products/product.php#phone-product">Điện thoại</a>
                        </p>
                        <a href="../products/product.php#phone-product"><i class="fa-solid fa-laptop"></i>Iphone</a>
                        <a href="../products/product.php#phone-product"><i class="fa-solid fa-laptop"></i>SamSung</a>
                        <a href="../products/product.php#phone-product"><i class="fa-solid fa-laptop"></i>Xiaomi</a>
                        <a href="../products/product.php#phone-product"><i class="fa-solid fa-laptop"></i>Vsmart</a>
                     </li>

                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="../products/product.php#top-container-laptop">Laptop</a>
                        </p>
                        <a href="../products/product.php#laptop-gaming"><i class="fa-solid fa-laptop"></i>Laptop Gaming</a>
                        <a href="../products/product.php#laptop-dell"><i class="fa-solid fa-laptop"></i>Laptop Dell</a>
                        <a href="../products/product.php#laptop-asus"><i class="fa-solid fa-laptop"></i>Laptop Asus</a>
                        <a href="../products/product.php#laptop-macbook"><i class="fa-solid fa-laptop"></i>Laptop MAC OS</a>
                     </li>

                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="../products/product.php#container-screen-product">Màn Hình</a>
                        </p>
                        <a href="../products/product.php#container-screen-product"><i class="fa-solid fa-desktop"></i>ViewSonic</a>
                        <a href="../products/product.php#container-screen-product"><i class="fa-solid fa-desktop"></i>TCL</a>
                        <a href="../products/product.php#container-screen-product"><i class="fa-solid fa-desktop"></i>DELL</a>
                        <a href="../products/product.php#container-screen-product"><i class="fa-solid fa-desktop"></i>LG</a>
                        <a href="../products/product.php#container-screen-product"><i class="fa-solid fa-desktop"></i>Gaming</a>
                        <a href="../products/product.php#container-screen-product"><i class="fa-solid fa-desktop"></i>AOC</a>
                        <a href="../products/product.php#container-screen-product"><i class="fa-solid fa-desktop"></i>SamSung</a>
                     </li>

                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="../products/product.php#mouse-product-container">Chuột</a>
                        </p>
                        <a href="../products/product.php#mouse-product-container"><i class="fa-solid fa-computer-mouse"></i>Logitech</a>
                        <a href="../products/product.php#mouse-product-container"><i class="fa-solid fa-computer-mouse"></i>E-Dra</a>
                        <a href="../products/product.php#mouse-product-container"><i class="fa-solid fa-computer-mouse"></i>Havit</a>
                        <a href="../products/product.php#mouse-product-container"><i class="fa-solid fa-computer-mouse"></i>Lanovel</a>
                        <a href="../products/product.php#mouse-product-container"><i class="fa-solid fa-computer-mouse"></i>Razer</a>
                     </li>

                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="../products/product.php#keyboard">Bàn phím cơ</a>
                        </p>
                        <a href="../products/product.php#keyboard"><i class="fa-solid fa-keyboard"></i>Corsair</a>
                        <a href="../products/product.php#keyboard"><i class="fa-solid fa-keyboard"></i>Filco</a>
                        <a href="../products/product.php#keyboard"><i class="fa-solid fa-keyboard"></i>Ducky</a>
                        <a href="../products/product.php#keyboard"><i class="fa-solid fa-keyboard"></i>Hyper-X</a>
                        <a href="../products/product.php#keyboard"><i class="fa-solid fa-keyboard"></i>leopold</a>
                        <a href="../products/product.php#keyboard"><i class="fa-solid fa-keyboard"></i>Fuhlen</a>
                        <a href="../products/product.php#keyboard"><i class="fa-solid fa-keyboard"></i>AKKO</a>
                     </li>

                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="../products/product.php#headphone">Tai Nghe</a>
                        </p>
                        <a href="../products/product.php#headphone"><i class="fa-solid fa-headphones"></i>Kane</a>
                        <a href="../products/product.php#headphone"><i class="fa-solid fa-headphones"></i>Mozard</a>
                        <a href="../products/product.php#headphone"><i class="fa-solid fa-headphones"></i>Skullcandy</a>
                        <a href="../products/product.php#headphone"><i class="fa-solid fa-headphones"></i>Dorado</a>
                        <a href="../products/product.php#headphone"><i class="fa-solid fa-headphones"></i>Solaric</a>
                     </li>
                  </ul>
            </li>

            <li class="menu-items-logo"><a href="../../index.php" class="menu-logo"><img src="../../asset/picture/logo/logo-icon-title.jpg" alt="" class="logo-menu"></a></li>

            <li class="menu-items"><a href="../Support/support.php" >Hỗ Trợ</a></li>
            <li class="menu-items"><a href="../Contact/contact.php" >Liên Hệ</a></li>
         </ul>
      </nav>
      
      <div class="right-header">
         <div class="right-header-icon js-right-header-search" title="Tìm Kiếm">
            <i class="fa-solid fa-magnifying-glass"></i></a>
         </div>
         <div class="right-header-icon js-right-header-card" title="Giỏi Hàng">
         <a href="../CartShopping/CartShopping.php" style = "color: #fff;"><i class="fa-solid fa-cart-shopping"></i></a>
         </div>
      </div>
   </header>
   <p class="title">Nhập Thông Tin Của Bạn</p>
   <form action="">
      <div class="item">
         <label for="">Họ tên: </label>
         <input type="text" name="" id="" required>
      </div>
      <div class="item">
         <label for="">Số Điện Thoại: </label>
         <input type="text" name="" id="" required>
      </div>
      <div class="item">
         <label for="">Địa chỉ: </label>
         <textarea name="" id="" cols="30" rows="10" required></textarea>
      </div>
      <input type="submit" value="Đặt hàng" class = "submit">
   </form>
   <?php
      include_once('../../php/footer.php');
      include_once('../../php/formSearch.php');
      include_once '../../php/formSearch.php';
   ?>
   
   <script src="../../asset/js/script.js"></script>
   <script>
      const btnOrder = document.querySelector('.submit')
      btnOrder.addEventListener('click', function(){
         alert("Đặt hàng thành công");
      })
   </script>
</body>
</html>