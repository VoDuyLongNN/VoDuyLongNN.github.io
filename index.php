<?php
   include_once './php/config.php';
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>HTL Shop</title>
   <link rel="stylesheet" href="./asset/font/fontawesome-free-6.0.0-web/css/all.min.css">
   <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
   />
   <link rel="stylesheet" href="./main.css">
   <link rel="stylesheet" href="./style.css">
   <link rel="icon" href="./asset/picture/logo/logoh3.svg" type="image/x-icon" sizes="32*32">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   <!-- Start Header -->
   <header>
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
            <li class="menu-items menu-active"><a href="#" >Trang Chủ</a></li>
            <li class="menu-items">
               <a href="./web-page/products/product.php">Sản Phẩm</a>
                  <ul class="sub-nav-sanpham"> 
                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="./web-page/products/product.php#phone-product">Điện thoại</a>
                        </p>
                        <a href="./web-page/products/product.php#phone-product"><i class="fa-solid fa-laptop"></i>Iphone</a>
                        <a href="./web-page/products/product.php#phone-product"><i class="fa-solid fa-laptop"></i>SamSung</a>
                        <a href="./web-page/products/product.php#phone-product"><i class="fa-solid fa-laptop"></i>Xiaomi</a>
                        <a href="./web-page/products/product.php#phone-product"><i class="fa-solid fa-laptop"></i>Vsmart</a>
                     </li>

                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="./web-page/products/product.php#top-container-laptop">Laptop</a>
                        </p>
                        <a href="./web-page/products/product.php#laptop-gaming"><i class="fa-solid fa-laptop"></i>Laptop Gaming</a>
                        <a href="./web-page/products/product.php#laptop-dell"><i class="fa-solid fa-laptop"></i>Laptop Dell</a>
                        <a href="./web-page/products/product.php#laptop-asus"><i class="fa-solid fa-laptop"></i>Laptop Asus</a>
                        <a href="./web-page/products/product.php#laptop-macbook"><i class="fa-solid fa-laptop"></i>Laptop MAC OS</a>
                     </li>

                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="./web-page/products/product.php#container-screen-product">Màn Hình</a>
                        </p>
                        <a href="./web-page/products/product.php#container-screen-product"><i class="fa-solid fa-desktop"></i>ViewSonic</a>
                        <a href="./web-page/products/product.php#container-screen-product"><i class="fa-solid fa-desktop"></i>TCL</a>
                        <a href="./web-page/products/product.php#container-screen-product"><i class="fa-solid fa-desktop"></i>DELL</a>
                        <a href="./web-page/products/product.php#container-screen-product"><i class="fa-solid fa-desktop"></i>LG</a>
                        <a href="./web-page/products/product.php#container-screen-product"><i class="fa-solid fa-desktop"></i>Gaming</a>
                        <a href="./web-page/products/product.php#container-screen-product"><i class="fa-solid fa-desktop"></i>AOC</a>
                        <a href="./web-page/products/product.php#container-screen-product"><i class="fa-solid fa-desktop"></i>SamSung</a>
                     </li>

                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="./web-page/products/product.php#mouse-product-container">Chuột</a>
                        </p>
                        <a href="./web-page/products/product.php#mouse-product-container"><i class="fa-solid fa-computer-mouse"></i>Logitech</a>
                        <a href="./web-page/products/product.php#mouse-product-container"><i class="fa-solid fa-computer-mouse"></i>E-Dra</a>
                        <a href="./web-page/products/product.php#mouse-product-container"><i class="fa-solid fa-computer-mouse"></i>Havit</a>
                        <a href="./web-page/products/product.php#mouse-product-container"><i class="fa-solid fa-computer-mouse"></i>Lanovel</a>
                        <a href="./web-page/products/product.php#mouse-product-container"><i class="fa-solid fa-computer-mouse"></i>Razer</a>
                     </li>

                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="./web-page/products/product.php#keyboard">Bàn phím cơ</a>
                        </p>
                        <a href="./web-page/products/product.php#keyboard"><i class="fa-solid fa-keyboard"></i>Corsair</a>
                        <a href="./web-page/products/product.php#keyboard"><i class="fa-solid fa-keyboard"></i>Filco</a>
                        <a href="./web-page/products/product.php#keyboard"><i class="fa-solid fa-keyboard"></i>Ducky</a>
                        <a href="./web-page/products/product.php#keyboard"><i class="fa-solid fa-keyboard"></i>Hyper-X</a>
                        <a href="./web-page/products/product.php#keyboard"><i class="fa-solid fa-keyboard"></i>leopold</a>
                        <a href="./web-page/products/product.php#keyboard"><i class="fa-solid fa-keyboard"></i>Fuhlen</a>
                        <a href="./web-page/products/product.php#keyboard"><i class="fa-solid fa-keyboard"></i>AKKO</a>
                     </li>

                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="./web-page/products/product.php#headphone">Tai Nghe</a>
                        </p>
                        <a href="./web-page/products/product.php#headphone"><i class="fa-solid fa-headphones"></i>Kane</a>
                        <a href="./web-page/products/product.php#headphone"><i class="fa-solid fa-headphones"></i>Mozard</a>
                        <a href="./web-page/products/product.php#headphone"><i class="fa-solid fa-headphones"></i>Skullcandy</a>
                        <a href="./web-page/products/product.php#headphone"><i class="fa-solid fa-headphones"></i>Dorado</a>
                        <a href="./web-page/products/product.php#headphone"><i class="fa-solid fa-headphones"></i>Solaric</a>
                     </li>
                  </ul>
            </li>
            <li class="menu-items-logo"><a href="./index.php" class="menu-logo"><img src="./asset/picture/logo/logo-icon-title.jpg" alt="" class="logo-menu"></a></li>
            <li class="menu-items"><a href="./web-page/Support/support.php" >Hỗ Trợ</a></li>
            <li class="menu-items"><a href="./web-page/Contact/contact.php" >Liên Hệ</a></li>
         </ul>
      </nav>
      
      <div class="right-header">
         <div class="right-header-icon js-right-header-search" title="Tìm Kiếm">
            <i class="fa-solid fa-magnifying-glass"></i>
         </div>
         <div class="right-header-icon js-right-header-card" title="Giỏ Hàng">
            <a href="./web-page/CartShopping/CartShopping.php" style = "color: #fff;"><i class="fa-solid fa-cart-shopping"></i></a>
         </div>
      </div>
   </header>
   <!-- End Header -->

  

   <!-- Start Banner -->
   <section class="banner" id="header">
      <img src="./asset/picture/product/banner-brand/banner1.webp" alt="">
   </section>
   <!-- End Banner -->

   <!-- Start Featured Products -->
   <section class="featured-products">

      <h1 class="featured-products-text">Sản Phẩm Nổi Bật</h1>

      <div class="container-slider slide-laptop">
         <h1 class="slide-title">Laptop nổi bật</h1>
         <div class="slick-slide container-product-slide container-laptop-slide">
            <?php

               $sql = "SELECT * FROM sanpham WHERE LoaiSP = 'LT' AND MaLoai = 'Dell'";
               $stmt = mysqli_stmt_init($conn);
               if(!mysqli_stmt_prepare($stmt,$sql)){
                  echo 'Errol';
               } else{
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  $i = 0;

                  while($row = mysqli_fetch_assoc($result)){
                     $i++;
                     echo '
                     <a href="./web-page/product-details/product-details.php?id='.$row["maSP"].'">
                        <div class=" product-item screen-product-item">
                           <div class="imga">
                              <img src="./asset/picture/product/laptop/dell/'.$row["Anh"].'">
                           </div>
                           <div class="bottom">
                              <p class="title" style="color: #000;">'.$row["TenSP"].'</p>
                              <p class="details" style="color: #EDE6DB;padding-bottom: 30px">'.$row["MoTa"].'</p>
                              <p class="price" style="color: #EB5353;">'.$row["Gia"].' đ</p>
                           </div>
                        </div>
                     </a>
                     ';
                     if($i == 6)
                        break;
                  }
               }
            ?>
         </div>
         
      </div>

      <div class="container-menu menu-phone">
         <h1 class="slide-title tilte-container-menu">Điện thoại bán chạy</h1>
         <div class="menu-items">
            <?php

               $sql = "SELECT * FROM sanpham WHERE LoaiSP = 'DT'";
               $stmt = mysqli_stmt_init($conn);
               if(!mysqli_stmt_prepare($stmt,$sql)){
                  echo 'Errol';
               } else{
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  $i = 1;
                  while($row = mysqli_fetch_assoc($result)){
                     echo '
                     <a href="./web-page/product-details/product-details.php?id='.$row["maSP"].'">
                        <div class="menu-card">
                           <div class="imga">
                              <img src="./asset/picture/product/phone/'.$row["Anh"].'" alt="">
                           </div>
                           <div class="bottom">
                              <h3 class="title" style = "font-size: 20px; color: #000">'.$row["TenSP"].'</h3>
                              <p class="detail">'.$row["MoTa"].'</p>
                              <p class="coins">'.$row["Gia"].' đ</p>
                           </div>
                        </div>
                     </a>
                     ';
                     if($i == 8)
                        break;
                     $i++;
                  }
               }
            ?>       
         </div>
      </div> 

      <div class="container-slider slide-headphone">
         <h1 class="slide-title">Tai nghe nổi bật</h1>
         <div class="slick-slide container-product-slide container-headphone-slide">
            <?php

               $sql = "SELECT * FROM sanpham WHERE LoaiSP = 'Tai Nghe'";
               $stmt = mysqli_stmt_init($conn);
               if(!mysqli_stmt_prepare($stmt,$sql)){
                  echo 'Errol';
               } else{
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  $i = 0;

                  while($row = mysqli_fetch_assoc($result)){
                     $i++;
                     echo '
                     <a href="./web-page/product-details/product-details.php?id='.$row["maSP"].'">
                        <div class=" product-item laptop-product-item">
                           <div class="imga">
                              <img src="./asset/picture/product/headphone/'.$row["Anh"].'">
                           </div>
                           <div class="bottom">
                              <p class="title" style="color: #000;">'.$row["TenSP"].'</p>
                              <p class="details" style="color: #EDE6DB;padding-bottom: 30px">'.$row["MoTa"].'</p>
                              <p class="price" style="color: #EB5353;">'.$row["Gia"].' đ</p>
                           </div>
                        </div>
                     </a>
                     ';
                     if($i == 6)
                        break;
                  }
               }
               ?> 
         </div>
      </div>

      <div class="container-menu menu-screen-pc">
         <h1 class="slide-title tilte-container-menu">Màn hình PC phổ biến</h1>
         <div class="menu-items">
            <?php
               $sql = "SELECT * FROM sanpham WHERE LoaiSP = 'MH'";
               $stmt = mysqli_stmt_init($conn);
               if(!mysqli_stmt_prepare($stmt,$sql)){
                  echo 'Errol';
               } else{
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);

                  $i = 1;

                  while($row = mysqli_fetch_assoc($result)){
                     echo '
                     <a href="./web-page./product-details/product-details.php?id='.$row["maSP"].'">
                        <div class="menu-card">
                           <div class="imga">
                              <img src="./asset/picture/product/Screen/'.$row["Anh"].'" alt="">
                           </div>
                           <div class="bottom">
                              <h3 class="title" style = "font-size: 20px; color: #000">'.$row["TenSP"].'</h3>
                              <p class="detail">'.$row["MoTa"].'</p>
                              <p class="coins">'.$row["Gia"].' đ</p>
                           </div>
                        </div>
                     </a>
                     ';
                     if($i == 11)
                        break;
                     $i++;
                  }
               }
            ?>
            
            <div class="menu-load">
               <a href="./web-page/all-product/all-product.php?loai=<?php echo $row['LoaiSP'];?>&maloai=<?php echo $row['MaLoai'];?>">
                  <button class="load-more">
                     <span>Xem thêm</span>
                     <i class="fa-solid fa-arrow-right-long"></i>
                  </button>
               </a>
            </div>
         </div>
      </div>
   </section>
   <!-- End Featured Products -->

   <!-- Start Banner Brand -->
   <section class="banner-brand">
      <h1 class="banner-brand-title">Chuyên trang thương hiệu</h1>
      <div class="lish">
         <div class="card">
            <a href=""><img src="./asset/picture/product/banner-brand/appleDT-390x210-1.png" alt=""></a>
         </div>

         <div class="card">
            <a href=""><img src="./asset/picture/product/banner-brand/samsung-390-210-390x210.png" alt=""></a>
         </div>

         <div class="card">
            <a href=""><img src="./asset/picture/product/banner-brand/lenovo-ideapad3-390x210.png" alt=""></a>
         </div>

         <div class="card">
            <a href=""><img src="./asset/picture/product/banner-brand/Giadụng-desktop1-780x420.jpg" alt=""></a>
         </div>

         <div class="card">
            <a href=""><img src="./asset/picture/product/banner-brand/laptóp-780x420-1.jpg" alt=""></a>
         </div>
         
         <div class="card">
            <a href=""><img src="./asset/picture/product/banner-brand/macbook-780x420.jpg" alt=""></a>
         </div>
      </div>
   </section>
   <!-- End Banner Brand -->

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
            <img src="./asset/picture/logo/logo-icon-title.jpg" alt="">
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
   

   <!-- back to top -->
   <div class="back-top">
      <a href="#header" title="Trở về đầu trang">
         <i class="fa-solid fa-circle-arrow-up"></i>
      </a>
   </div>
   <!-- back to top -->

   <!-- Start Model -->
   <div class="model js-model">
      <div class="model-container">
         <div class="model-logo">
            <p class="logo-text">
               hardware technology library
            </p>
            <img src="./asset/picture/logo/logo-black-boder.svg" alt="">
         </div>

         <div class="form-login">
            <div class="close-form js-close-form">
               <i class="fa-solid fa-xmark"></i>
            </div>
            <h2 class="signup-title">Đăng Nhập</h2>
            <button class="signup-by-accout signup-google">
               <i class="fa-brands fa-google"></i>
               <span class="signup-text signup-text-google">Đăng nhập bằng Google</span>
            </button>
            <button class="signup-by-accout signup-facebook">
               <i class="fa-brands fa-facebook-f"></i>
               <span class="signup-text signup-text-facebook">Đăng nhập bằng Facebook</span>
            </button>
            <div class="signup-or">
               <span>Or</span>
            </div>

            <div class="card-form">
               <form action="./php/login.php" method="post">
                  <div class="card-items">
                     <input type="email" name="email" id="email" required>
                     <label for="">Tài khoản</label>
                     <i class="fas fa-user-tie"></i>
                  </div>
                  <!-- <div class="card-items">
                     <input type="email" required>
                     <label for="">Email</label>
                     <i class="fas fa-envelope"></i>
                  </div> -->
                  <div class="card-items">
                     <input type="password" name="pass" id="pass" required>
                     <label for="">Mật khẩu</label>
                     <i class="fas fa-lock"></i>
                  </div>
                  <div class="card-items submit">
                     <input type="submit" value="Đăng Nhập">
                  </div>
               </form>
            </div>

            <div class="signup-already">
               <p>Bạn chưa có tài khoảng?</p>
               <a href="./web-page/Form-Signup/Signup.php" class="signup-already-link">Tạo tài khoảng</a>
            </div>
         </div>
         </div>
      </div>
   </div>
   <!-- End Model -->

   <!-- Start Search -->
   <?php
      include_once('./php/formSearch.php');
   ?>
   <!-- End Search -->

   <!-- Start Cart Shopping -->
   <?php
      include_once('./php/cartShopping.php');
   ?>
   <!-- End Cart Shopping -->

   <!--Script -->
   <script src="./asset/js/script.js"></script>

   <!--Script Slick Slider -->
   <script
     type="text/javascript"
     src="https://code.jquery.com/jquery-1.11.0.min.js"
   ></script>
   <script
     type="text/javascript"
     src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
   ></script>
   <script
     type="text/javascript"
     src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
   ></script>

   <script src="./asset/js/slickSlider.js"></script>

</body>
</html>