<?php
   include_once '../../php/config.php';
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Đăng Ký Tài Khoản</title>
      <link rel="stylesheet" href="../../asset/font/fontawesome-free-6.0.0-web/css/all.min.css">
      <link rel="stylesheet" href="../../main.css">
      <link rel="stylesheet" href="./Signup.css">
      <link rel="icon" href="../../asset/picture/logo/logoh3.svg" type="image/x-icon" sizes="32*32">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
   <!-- Start Header -->
   <header>
      <div class="login js-login">
         <div class="login-icon"><i class="fa-solid fa-user"></i> <p><?php
               if(isset($_SESSION['nameUser']))
                  echo $_SESSION['nameUser'];
               else
                  echo 'đăng nhập';
            ?></p></div>
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
   <!-- End Header -->


   <section>
      <img src="../../asset/picture/product/banner-brand/cole-page-not-found.png" alt="">
      <div class="container">
         <h1 class="title">Đăng kí tài khoản</h1>
         <div class="form-signup">
            <form action="../../php/signup.php" method="post">
               <div class="card">
                  <label for="first-name">Họ:</label>
                  <input type="text" name="firstName" id="first-name" placeholder="Họ" required>
               </div>
               <div class="card">
                  <label for="last-name">Tên:</label>
                  <input type="text" name="lastName" id="last-name" placeholder="Tên" required>
               </div>    
               <div class="card gender">
                  <label for="">Giới tính:</label>
                  <span class="gender">
                     <input type="radio" name="gender" id="man" value="man" class="radio-input" required>
                     <label for="man">Nam</label>
                     <input type="radio" name="gender" id="women" value="woman" class="radio-input">
                     <label for="women">Nữ</label>
                     <input type="radio" name="gender" id="other" value="other" class="radio-input">
                     <label for="other">Khác</label>
                  </span>
               </div>
               <div class="card">
                  <label for="born">Ngày sinh:</label>
                  <input type="date" name="born" id="born" required>
               </div>
               <div class="card address">
                  <p>Địa chỉ:</p>
                  <div class="address-item">
                     <label for="province">Tỉnh/Thành Phố</label>
                     <select name="province" id="province">
                        <option value="binhDinh">Bình Định</option>
                        <option value="quangNgai">Quảng Ngãi</option>
                        <option value="phuYen">Phú Yên</option>
                     </select>
                  </div>
                  <div class="address-item">
                     <label for="district">Quận/Huyện/Thị xã</label>
                     <select name="district" id="district">
                        <option value="quyNhon">Thành phố Quy Nhơn</option>
                        <option value="phuCat">Phù Cát</option>
                        <option value="anNhon">Thị xã An Nhơn</option>
                        <option value="nhonHai">Nhơn Hải</option>
                     </select>
                  </div>
                  <div class="address-item">
                     <label for="ward">Phường/Xã</label>
                     <select name="ward" id="ward">
                        <option value="nguyenVanCu">Nguyễn Văn Cừ</option>
                        <option value="ngoMay">Ngô Mây</option>
                        <option value="taySon">Tây Sơn</option>
                        <option value="ghenhRang">Ghènh Ráng</option>
                     </select>
                  </div>
               </div>
               <div class="card">
                  <label for="userName">Email đăng kí tài khoản:</label>
                  <input type="email" name="userName" id="userName" placeholder="Email đăng kí tài khoản" required> 
               </div>
               <div class="card">
                  <label for="password">Mật khẩu email:</label>
                  <input type="password" name="password" id="password" placeholder="Mật khẩu" required>
               </div>
               <div class="card">
                  <label for="passwordSignup">Mật khẩu đăng nhập:</label>
                  <input type="password" name="passwordSignup" id="passwordSignup" placeholder="Mật khẩu" required>
               </div>
               <div class="card submit-input">
                  <input type="submit" value="Đăng Ký">
               </div>
            </form>
         </div>
      </div>
      <img src="../../asset/picture/product/banner-brand/cole-sing-in-form.png" alt="" class="fix">
   </section>

   <!-- Start Footer -->
   <footer>
      <div class="footer-items">
         <h1 class="title">Kết nối với chúng tôi</h1>
         <p class="detail">Bạn có muốn tham gia với chung tôi trên mạng xã hội</p>
         <ul class="lish-icon-media">
            <li>
               <a href="https://www.facebook.com/voduylong.0611" target="_blank"><i class="fa-brands fa-facebook" title="Facebook"></i></a>
            </li>
            <li>
               <a href="https://www.facebook.com/voduylong.0611"  target="_blank" title="messenger"><i class="fa-solid fa-comment-sms"></i></a>
            </li>
            <li>
               <a href="https://www.instagram.com/long.vdl/" target="_blank" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li>
               <a href="https://voduylongnn.github.io/" target="_blank" title="Website"><i class="fa-brands fa-google"></i></a>
            </li>
            <li>
               <a href="https://www.youtube.com/channel/UC45TnS0b7uqk_khLz_6wMtA/featured" target="_blank" title="Youtube"><i class="fa-brands fa-youtube"></i></a>
            </li>
            <li>
               <a href="https://github.com/VoDuyLongNN" target="_blank" title="Github"><i class="fa-brands fa-github"></i></a>
            </li>
         </ul>
         <p class="note">
            Copyright© 2022 HTL. All rights reserved.
         </p>
      </div>

      <div class="footer-items">
         <div class="logo-imga">
            <img src="../../asset/picture/logo/logo-icon-title.jpg" alt="">
         </div>
      </div>

      <div class="footer-items">
         <h1 class="title">Liên hệ cho chúng tôi</h1>
         <div class="contact">
            <div>
               <i class="fa-solid fa-phone"></i>
               <span>+84 49 524 389</span>
            </div>

            <div>
               <i class="fa-solid fa-envelope"></i>
               <span>voduylong1106@gmail.com</span>
            </div>

            <div>
               <i class="fa-solid fa-globe"></i>
               <span>voduylongnn.github.io</span>
            </div>
         </div>
         <p class="note">
            Designed and Maintained by HTL
         </p>
      </div>
   </footer>
   <!-- End Footer -->

   <!-- Start Model -->
   <?php
      include_once '../../php/model.php';
   ?>
   <!-- End Model -->

   <!-- Start Search -->
   <div class="search js-search">
      <div class="search-container">
         <div class="close-search js-close-search">
            <i class="fa-solid fa-xmark"></i>
         </div>
         <input type="search" name="" id="" class="input-search" placeholder="Bạn muốn tìm kiếm gì?">
         <div class="search-icon-form js-search-icon">
            <i class="fa-solid fa-magnifying-glass"></i>
         </div>
      </div>
   </div>
   <!-- End Search -->

   <!-- Start Cart Shopping -->
   <div class="shopping-form js-shopping-form">
      <div class="close-shopping-form js-close-shopping-form">
         <i class="fa-solid fa-xmark"></i>
      </div>
      <h2 class="shopping-form-text">
         Giỏ hàng
      </h2>
   </div>
   <!-- End Cart Shopping -->

   <script src="../../asset/js/script.js"></script>
</body>
</html>