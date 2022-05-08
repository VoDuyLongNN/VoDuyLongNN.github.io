
<?php
   include_once '../../php/config.php';
   $id = $_GET['loai'];
   $maloai = $_GET['maloai'];
   $sql = "SELECT * FROM sanpham WHERE LoaiSP = '$id' AND 
   MaLoai LIKE '$maloai' OR '$maloai' LIKE ''";
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
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../../asset/font/fontawesome-free-6.0.0-web/css/all.min.css">
   <link rel="stylesheet" href="../../main.css">
   <link rel="stylesheet" href="../products/products.css">
   <title>Document</title>
</head>
<body>
   <header >
      <div class="login js-login">
         <div class="login-icon"><i class="fa-solid fa-user"></i> <p>Đăng Nhập</p></div>
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
            <i class="fa-solid fa-cart-shopping"></i>
         </div>
      </div>
   </header>

   <h1 style = "text-align: center; padding: 40px 0px; text-transform: capitalize;">
      Tất Cả <?php 
      if($row_sql['LoaiSP'] == 'Tai Nghe')
         echo 'Tai Nghe';
      elseif($row_sql['LoaiSP'] == 'DT')
         echo 'Điện Thoại';
      elseif($row_sql['LoaiSP'] == 'LT')
         echo 'Laptop';
      elseif($row_sql['LoaiSP'] == 'MH')
         echo 'Màn Hình';
      elseif($row_sql['LoaiSP'] == 'Chuot')
         echo 'Chuột';
      elseif($row_sql['LoaiSP'] == 'Ban Phim')
         echo 'Bàn Phím';
      ?>
   </h1>

   <div class="product-container phone-product" id="phone-product">
      <div class="menu-items">
         <?php
            $sql = "SELECT * FROM sanpham WHERE LoaiSP = '$id' AND MaLoai LIKE '$maloai' OR '$maloai' LIKE ''";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
               echo 'Errol';
            } else{
               mysqli_stmt_execute($stmt);
               $result = mysqli_stmt_get_result($stmt);

               while($row = mysqli_fetch_assoc($result)){
                  echo '
                  <a href="../product-details/product-details.php?id='.$row["maSP"].'">
                     <div class="menu-card">
                        <div class="imga">
                           <img src="../../asset/picture/product/'.$loaisp.'/'.$row["Anh"].'" alt="">
                        </div>
                        <div class="bottom">
                           <h3 class="title">'.$row["TenSP"].'</h3>
                           <p class="detail">'.$row["MoTa"].'</p>
                           <p class="coins">'.$row["Gia"].' đ</p>
                        </div>
                     </div>
                  </a>
                  ';
               }
            }
         ?>
      </div>
   </div>

   <?php
      include_once '../../php/footer.php';
      include_once '../../php/formSearch.php';
      include_once '../../php/model.php';
      include_once '../../php/cartShopping.php';
   ?>
   <script src="../../asset/js/script.js"></script>
</body>
</html>