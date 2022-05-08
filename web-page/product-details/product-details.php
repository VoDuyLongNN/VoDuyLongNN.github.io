<?php
   include_once '../../php/config.php';
   $id = $_GET['id'];
   $sql = "SELECT * FROM sanpham WHERE maSP = '$id'";
   $query_sql=mysqli_query($conn,$sql);
	$row_sql=mysqli_fetch_assoc($query_sql);
   if($row_sql["LoaiSP"] == 'DT')
      $loaisp = 'phone';
   elseif($row_sql["LoaiSP"] == 'MH')
      $loaisp = 'Screen';
   elseif($row_sql["LoaiSP"] == 'Tai Nghe')
      $loaisp = 'headphone';
   elseif($row_sql["LoaiSP"] == 'LT')
   {
      if($row_sql["MaLoai"] == 'Gaming')
         $loaisp = 'laptop/gaming';
      elseif($row_sql["MaLoai"] == 'Asus')
         $loaisp = 'laptop/asus';
      elseif($row_sql["MaLoai"] == 'Dell')
         $loaisp = 'laptop/dell';
      elseif($row_sql["MaLoai"] == 'Macbook')
         $loaisp = 'laptop/macbook';
   }
   elseif($row_sql["LoaiSP"] == 'Chuot')
      $loaisp = 'mouse';
   elseif($row_sql["LoaiSP"] == 'Ban Phim')
      $loaisp = 'keyboard';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Chi tiết sản phẩm</title>
   <link rel="stylesheet" href="../../asset/font/fontawesome-free-6.0.0-web/css/all.min.css">
   <link rel="stylesheet" href="../../main.css">
   <link rel="stylesheet" href="./product-details.css">
   <link rel="icon" href="../../asset/picture/logo/logoh3.svg" type="image/x-icon" sizes="32*32">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="../../php/config.php">
   </script>
</head>
<body>
   <!-- Start Header -->
   <header>
      <div class="login js-login">
         <div class="login-icon"><i class="fa-solid fa-user"></i> <p>Đăng Nhập</p></div>
      </div>

      <nav>
         <ul class="menu">
            <li class="menu-items"><a href="../../index.php" >Trang Chủ</a></li>

            <li class="menu-items menu-active">
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
            <i class="fa-solid fa-cart-shopping"></i>
         </div>
      </div>
   </header>
   <!-- End Header -->

   <!-- Start Container -->
   <div class="container">
      <div class="imga-product">
         <img src="../../asset/picture/product/<?php echo $loaisp.'/'.$row_sql["Anh"]; ?>" alt="">
      </div>
      <div class="product-details">
         <h1 class="product-name"><?php echo $row_sql["TenSP"]; ?></h1>
         <div class="price">
            <p class="cost">38.990.000 đ</p>
            <p class="sale"><?php echo $row_sql["Gia"]; ?> đ</p>
            <span class="installment">
               Trả góp 0%
            </span>
         </div>
         <div class="product-description">
            <p class="description-text">Mô tả sản phẩm</p>
            <span>
               <p>Màn hình: </p>
               <p>OLED6.7"Super Retina XDR</p>
            </span>
            <span>
               <p>Hệ điều hành: </p>
               <p>IOS 15</p>
            </span>
            <span>
               <p>Camera sau: </p>
               <p>3 Camera 12Mp</p>
            </span>
            <span>
               <p>Camera trước: </p>
               <p>12MP</p>
            </span>

         </div>
         <div class="evuluate">
            <p class="evuluate-text">Đánh giá: </p>
            <div class="evuluate-icon">
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
            </div>
         </div>
         <button class="btn-add-cart btn-shopping">
            <i class="fa-solid fa-cart-arrow-down" style="padding-right: 20px;"></i>
            Thêm vào giỏ hàng
         </button>
         <button class="btn-buy-now btn-shopping">mua ngay</button>
      </div>
   </div>

   <div class="product-detailed-description">
      <h4>
         Chi tiết sản phẩm
      </h4>
      <p>
         iPhone 13 Pro Max 256 GB - siêu phẩm mang trên mình bộ vi xử lý Apple A15 Bionic hàng đầu, màn hình Super Retina XDR 120 Hz, cụm camera khẩu độ f/1.5 cực lớn, tất cả sẽ mang lại cho bạn những trải nghiệm tuyệt vời chưa từng có. <br/>
         Thiết kế đẳng cấp, sang trọng
         iPhone 13 Pro Max vẫn sẽ kế thừa thiết kế đặc trưng của iPhone 12 Series, vẫn là một sản phẩm với khung viền được hoàn thiện từ thép không gỉ, hai mặt trước sau được trang bị kính cường lực bóng bẩy.
      </p>
   </div>
   <!-- End Container -->

   <!-- Start Feedback -->
   <div class="feedback">
      <div class="top-feedback">
         <h1 class="top-feedback-text">
            Đánh giá của người mua hàng
         </h1>
         <div class="feedback-star">
            <span class="sum-feedback-text">Tổng số đánh giá</span>
            <span class="start">
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
            </span>
            <span class="sum-feedback"><p>4</p> / 5</span>
         </div>
      </div>
      <div class="customer-feedback">
         <div class="customer-feedback-item">
            <div class="customer-inf">
               <div class="avt">
                  <i class="fa-solid fa-circle-user"></i>
               </div>
               <div class="more-inf">
                  <p class="name">Vo Duy Long</p>
                  <div class="customer-feedback-star">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </div>
                  <p class="feedback-date">17-02-2022</p>
               </div>
            </div>
            <div class="customer-feedback-container">
               <div class="container-item">
                  <p>
                     Giao hàng nhanh, shop hỗ trợ nhiệt tình. sẽ ủng hộ shop vào lần tới.
                  </p>
                  <img src="https://s.kaskus.id/images/2020/04/03/1177659_202004030337270004.jpg" alt="">
                  <div class="shop-replay">
                     <p class="text">Phản hồi của người bán</p>
                     <p class="replay">HTL shop cảm ơn bạn đã tin dùng và đánh giá sản phẩm này. Nếu trong quá trình nhận hàng và sử dụng sản phẩm có gặp vấn đề nào cần tư vấn thì bạn đừng quá lo lắng mà hãy nhắn tin trực tiếp với Shop để được hổ trợ và hướng dẫn tận tình nhất ạ. Hoặc bạn có thể liên hệ vào HOTLINE : 0349524389. Xin Cảm Ơn !</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="customer-feedback-item">
            <div class="customer-inf">
               <div class="avt">
                  <i class="fa-solid fa-circle-user"></i>
               </div>
               <div class="more-inf">
                  <p class="name">Vo Duy Long</p>
                  <div class="customer-feedback-star">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </div>
                  <p class="feedback-date">17-02-2022</p>
               </div>
            </div>
            <div class="customer-feedback-container">
               <div class="container-item">
                  <p>
                     Giao hàng nhanh, shop hỗ trợ nhiệt tình. sẽ ủng hộ shop vào lần tới.
                  </p>
                  <img src="https://s.kaskus.id/images/2020/04/03/1177659_202004030337270004.jpg" alt="">
                  <div class="shop-replay">
                     <p class="text">Phản hồi của người bán</p>
                     <p class="replay">HTL shop cảm ơn bạn đã tin dùng và đánh giá sản phẩm này. Nếu trong quá trình nhận hàng và sử dụng sản phẩm có gặp vấn đề nào cần tư vấn thì bạn đừng quá lo lắng mà hãy nhắn tin trực tiếp với Shop để được hổ trợ và hướng dẫn tận tình nhất ạ. Hoặc bạn có thể liên hệ vào HOTLINE : 0349524389. Xin Cảm Ơn !</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="customer-feedback-item">
            <div class="customer-inf">
               <div class="avt">
                  <i class="fa-solid fa-circle-user"></i>
               </div>
               <div class="more-inf">
                  <p class="name">Vo Duy Long</p>
                  <div class="customer-feedback-star">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </div>
                  <p class="feedback-date">17-02-2022</p>
               </div>
            </div>
            <div class="customer-feedback-container">
               <div class="container-item">
                  <p>
                     Giao hàng nhanh, shop hỗ trợ nhiệt tình. sẽ ủng hộ shop vào lần tới.
                  </p>
                  <img src="https://s.kaskus.id/images/2020/04/03/1177659_202004030337270004.jpg" alt="">
                  <div class="shop-replay">
                     <p class="text">Phản hồi của người bán</p>
                     <p class="replay">HTL shop cảm ơn bạn đã tin dùng và đánh giá sản phẩm này. Nếu trong quá trình nhận hàng và sử dụng sản phẩm có gặp vấn đề nào cần tư vấn thì bạn đừng quá lo lắng mà hãy nhắn tin trực tiếp với Shop để được hổ trợ và hướng dẫn tận tình nhất ạ. Hoặc bạn có thể liên hệ vào HOTLINE : 0349524389. Xin Cảm Ơn !</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="customer-feedback-item">
            <div class="customer-inf">
               <div class="avt">
                  <i class="fa-solid fa-circle-user"></i>
               </div>
               <div class="more-inf">
                  <p class="name">Vo Duy Long</p>
                  <div class="customer-feedback-star">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                  </div>
                  <p class="feedback-date">17-02-2022</p>
               </div>
            </div>
            <div class="customer-feedback-container">
               <div class="container-item">
                  <p>
                     Giao hàng nhanh, shop hỗ trợ nhiệt tình. sẽ ủng hộ shop vào lần tới.
                  </p>
                  <img src="https://s.kaskus.id/images/2020/04/03/1177659_202004030337270004.jpg" alt="">
                  <div class="shop-replay">
                     <p class="text">Phản hồi của người bán</p>
                     <p class="replay">HTL shop cảm ơn bạn đã tin dùng và đánh giá sản phẩm này. Nếu trong quá trình nhận hàng và sử dụng sản phẩm có gặp vấn đề nào cần tư vấn thì bạn đừng quá lo lắng mà hãy nhắn tin trực tiếp với Shop để được hổ trợ và hướng dẫn tận tình nhất ạ. Hoặc bạn có thể liên hệ vào HOTLINE : 0349524389. Xin Cảm Ơn !</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- End Feedback -->

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
   <div class="model js-model">
      <div class="model-container">

         <div class="model-logo">
            <p class="logo-text">
               hardware technology library
            </p>
            <img src="../../asset/picture/logo/logo-black-boder.svg" alt="">
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
               <form action="">
                  <div class="card-items">
                     <input type="text" required>
                     <label for="">Tài khoản</label>
                     <i class="fas fa-user-tie"></i>
                  </div>
                  <!-- <div class="card-items">
                     <input type="email" required>
                     <label for="">Email</label>
                     <i class="fas fa-envelope"></i>
                  </div> -->
                  <div class="card-items">
                     <input type="password" required>
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
               <a href="../Form-Signup/Signup.php" class="signup-already-link">Tạo tài khoảng</a>
            </div>
         </div>
      </div>
   </div>
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