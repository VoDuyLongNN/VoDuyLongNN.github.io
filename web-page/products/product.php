<?php
   include_once '../../php/config.php';
   session_start();
?>

<!DOCTYPE html>
<html>
   <head>
      <title>HTL Shop/Sản Phẩm</title>
      <link rel="stylesheet" href="../../asset/font/fontawesome-free-6.0.0-web/css/all.min.css">
      <link
         rel="stylesheet"
         type="text/css"
         href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
      />
      <link rel="stylesheet" href="../../main.css">
      <link rel="stylesheet" href="./products.css">
      <link rel="icon" href="../../asset/picture/logo/logoh3.svg" type="image/x-icon" sizes="32*32">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

   <body>
      <!-- Start Header -->
      <header >
         <div class="login js-login">
            <div class="login-icon"><i class="fa-solid fa-user"></i> <p> <?php
               if(isset($_SESSION['nameUser']))
                  echo $_SESSION['nameUser'];
               else
                  echo 'đăng nhập';
            ?></p></div>
         </div>

         <nav>
            <ul class="menu">
               <li class="menu-items"><a href="../../index.php" >Trang Chủ</a></li>
               <li class="menu-items menu-active">
                  <a href="#" >Sản Phẩm</a>
                  <ul class="sub-nav-sanpham">
                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="#phone-product">Điện thoại</a>
                        </p>
                        <a href="#phone-product"><i class="fa-solid fa-laptop"></i>Iphone</a>
                        <a href="#phone-product"><i class="fa-solid fa-laptop"></i>SamSung</a>
                        <a href="#phone-product"><i class="fa-solid fa-laptop"></i>Xiaomi</a>
                        <a href="#phone-product"><i class="fa-solid fa-laptop"></i>Vsmart</a>
                     </li>

                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="#top-container-laptop">Laptop</a>
                        </p>
                        <a href="#laptop-gaming"><i class="fa-solid fa-laptop"></i>Laptop Gaming</a>
                        <a href="#laptop-dell"><i class="fa-solid fa-laptop"></i>Laptop Dell</a>
                        <a href="#laptop-asus"><i class="fa-solid fa-laptop"></i>Laptop Asus</a>
                        <a href="#laptop-macbook"><i class="fa-solid fa-laptop"></i>Laptop MAC OS</a>
                     </li>

                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="#container-screen-product">Màn Hình</a>
                        </p>
                        <a href="#container-screen-product"><i class="fa-solid fa-desktop"></i>ViewSonic</a>
                        <a href="#container-screen-product"><i class="fa-solid fa-desktop"></i>TCL</a>
                        <a href="#container-screen-product"><i class="fa-solid fa-desktop"></i>DELL</a>
                        <a href="#container-screen-product"><i class="fa-solid fa-desktop"></i>LG</a>
                        <a href="#container-screen-product"><i class="fa-solid fa-desktop"></i>Gaming</a>
                        <a href="#container-screen-product"><i class="fa-solid fa-desktop"></i>AOC</a>
                        <a href="#container-screen-product"><i class="fa-solid fa-desktop"></i>SamSung</a>
                     </li>

                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="#mouse-product-container">Chuột</a>
                        </p>
                        <a href="#mouse-product-container"><i class="fa-solid fa-computer-mouse"></i>Logitech</a>
                        <a href="#mouse-product-container"><i class="fa-solid fa-computer-mouse"></i>E-Dra</a>
                        <a href="#mouse-product-container"><i class="fa-solid fa-computer-mouse"></i>Havit</a>
                        <a href="#mouse-product-container"><i class="fa-solid fa-computer-mouse"></i>Lanovel</a>
                        <a href="#mouse-product-container"><i class="fa-solid fa-computer-mouse"></i>Razer</a>
                     </li>

                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="#keyboard">Bàn phím cơ</a>
                        </p>
                        <a href="#keyboard"><i class="fa-solid fa-keyboard"></i>Corsair</a>
                        <a href="#keyboard"><i class="fa-solid fa-keyboard"></i>Filco</a>
                        <a href="#keyboard"><i class="fa-solid fa-keyboard"></i>Ducky</a>
                        <a href="#keyboard"><i class="fa-solid fa-keyboard"></i>Hyper-X</a>
                        <a href="#keyboard"><i class="fa-solid fa-keyboard"></i>leopold</a>
                        <a href="#keyboard"><i class="fa-solid fa-keyboard"></i>Fuhlen</a>
                        <a href="#keyboard"><i class="fa-solid fa-keyboard"></i>AKKO</a>
                     </li>

                     <li class="sub-nav-sanpham-items">
                        <p class="sub-nav-sanpham-title">
                           <a href="#headphone">Tai Nghe</a>
                        </p>
                        <a href="#headphone"><i class="fa-solid fa-headphones"></i>Kane</a>
                        <a href="#headphone"><i class="fa-solid fa-headphones"></i>Mozard</a>
                        <a href="#headphone"><i class="fa-solid fa-headphones"></i>Skullcandy</a>
                        <a href="#headphone"><i class="fa-solid fa-headphones"></i>Dorado</a>
                        <a href="#headphone"><i class="fa-solid fa-headphones"></i>Solaric</a>
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

      <!-- Start Slogan -->
      <div class="slogan" id="header">
         <div class="slogan-text">
            <h1>Hãy lựa chọn sản phẩm <br> yêu thích của bạn</h1>
         </div>
         <div class="help">
            <div class="help-contact">
               <img src="https://img.icons8.com/doodle/48/000000/help.png"/>
               <span>
                  <p>Hỗ trợ mua hàng</p>
                  <a href="">Hỏi chúng tôi</a>
               </span>
            </div>
            <div class="help-contact">
               <img src="https://img.icons8.com/fluency/48/000000/online-store.png"/>
               <span>
                  <p>Cửa hàng chúng tôi</p>
                  <a href="">Ghé thăm cửa hàng</a>
               </span>
            </div>
         </div>
      </div>
      <!-- End Slogan -->

      <!-- Start List Product -->
      <div class="list-product">
         <div class="list-product-menu">
            <p class="title">Sản phẩm của chúng tôi</p>
            <ul>
               <li class="list-items">
                  <a href="#top-container-laptop"><button>Laptop</button></a>
               </li>
               <li class="list-items">
                  <a href="#phone-product"><button>Điện thoại</button></a>
               </li>
               <li class="list-items">
                  <a href="#container-screen-product"><button>Màn hình PC</button></a>
               </li>
               <li class="list-items">
                  <a href="#mouse-product-container"><button>Chuột</button></a>
               </li>
               <li class="list-items">
                  <a href="#keyboard"><button>Bàn phím cơ</button></a>
               </li>
               <li class="list-items">
                  <a href="#headphone"><button>Tai nghe</button></a>
               </li>
            </ul>
         </div>
      </div>
      <!-- End List Product -->

      <!-- Start Phone product -->
      <div class="product-container phone-product" id="phone-product">
         <div class="top-container">
            <h1 class="title">Điện thoại thông minh</h1>
            <ul>
               <ul>
                  <li class="list-items"><button>Iphone</button></li>
                  <li class="list-items"><button>SamSung</button></li>
                  <li class="list-items"><button>Xiaomi</button></li>
                  <li class="list-items"><button>Vsmart</button></li>
               </ul>
            </ul>
         </div>
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
                     <a href="../product-details/product-details.php?id='.$row["maSP"].'">
                        <div class="menu-card">
                           <div class="imga">
                              <img src="../../asset/picture/product/phone/'.$row["Anh"].'" alt="">
                           </div>
                           <div class="bottom">
                              <h3 class="title">'.$row["TenSP"].'</h3>
                              <p class="detail">'.$row["MoTa"].'</p>
                              <p class="coins" style = "color: red;">'.number_format($row["Gia"],0, ',', '.').' VND</p>
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

         <div class="menu-items menu-load-more js-menu-load-more">
            <?php
               $sql = "SELECT * FROM sanpham WHERE LoaiSP = 'DT'";
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
                              <img src="../../asset/picture/product/phone/'.$row["Anh"].'" alt="">
                           </div>
                           <div class="bottom">
                              <h3 class="title">'.$row["TenSP"].'</h3>
                              <p class="detail">'.$row["MoTa"].'</p>
                              <p class="coins" style = "color: red;">'.number_format($row["Gia"],0, ',', '.').' VND</p>
                           </div>
                        </div>
                     </a>
                     ';
                  }
               }
            ?>
            <div class="all-product">
               <a href="../all-product/all-product.php?loai=DT&&maloai=''">
                  <button >
                     Tất cả sản phẩm
                     <i class="fa-solid fa-chevron-right"></i>
                  </button>
               </a>
            </div>
         </div>

         <button class="see-more js-see-more">
            Xem thêm
            <i class="fa-solid fa-angle-down"></i>
         </button>

         <button class="see-more collapse js-collapse">
            Thu gọn
            <i class="fa-solid fa-angle-up"></i>
         </button>
      </div>
      <!-- End Phone product -->

      <!-- Start banner -->
      <div class="banner">
         <h1 class="title">Những mẫu laptop bán chạy nhất trong thời gian qua</h1>
         <img src="../../asset/picture/product/banner-brand/product-banner.webp" alt="">
      </div>
      <!-- Start banner -->

      <!-- Start Laptop Product -->
      <div class="top-container top-container-laptop" id="top-container-laptop">
         <h1 class="title"></h1>
         <ul>
               <a href="#laptop-gaming"><li class="list-items"><button>Gaming</button></li></a>
               <a href="#laptop-dell"><li class="list-items"><button>Dell</button></li></a>
               <a href="#laptop-asus"><li class="list-items"><button>Asus</button></li></a>
               <a href="#laptop-macbook"><li class="list-items"><button>Mac OS</button></li></a>
         </ul>
      </div>
      
      <div class="slick-slide container-product-slide container-laptop-slide">
         <?php
            $sql = "SELECT * FROM sanpham WHERE LoaiSP = 'LT' AND maSP LIKE 'Out_'";
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
                  <a href="../product-details/product-details.php?id='.$row["maSP"].'">
                     <div class=" product-item laptop-product-item">
                        <div class="imga">
                           <img src="../../asset/picture/product/laptop/'.$row["Anh"].'" alt="">
                        </div>
                        <div class="bottom">
                           <h3 class="title" style="color: #000;">'.$row["TenSP"].'</h3>
                           <p class="detail" style="color: #EDE6DB;padding-bottom: 30px">'.$row["MoTa"].'</p>
                           <p class="coins" style="color: #EB5353;">'.number_format($row["Gia"],0, ',', '.').' VND</p>
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

      <!-- start laptop list product -->
      <!-- laptop gaming -->
      <div class="list-laptop-product" id="laptop-gaming" style = "height: 3136px;">
         <div class="container-list laptop-gaming">
            <h1 class="type">Laptop Gaming</h1>
            <div class="banner">
               <a href="">
                  <img src="../../asset/picture/product/banner-brand/banner-laptop-gaming.jpg" alt="">
               </a>
            </div>

            <div class="bottom-container">

               <?php

               $sql = "SELECT * FROM sanpham WHERE LoaiSP = 'LT' AND MaLoai = 'Gaming'";
               $stmt = mysqli_stmt_init($conn);
               if(!mysqli_stmt_prepare($stmt,$sql)){
                  echo 'Errol';
               } else{
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  $i = 0;

                  while($row = mysqli_fetch_assoc($result)){
                     echo '
                     <a href="../product-details/product-details.php?id='.$row["maSP"].'">
                        <div class="menu-card">
                        <div class="imga">
                           <img src="../../asset/picture/product/laptop/gaming/'.$row["Anh"].'" alt="">
                        </div>
                        <div class="bottom">
                           <h3 class="title">'.$row["TenSP"].'</h3>
                           <p class="detail">'.$row["MoTa"].'</p>
                           <p class="coins" style = "color: red;">'.number_format($row["Gia"],0, ',', '.').' VND</p>
                        </div>
                        </div>
                     </a>
                     ';
                     $i++;
                     if($i  == 15)
                        break;
                  }
               }
               ?>
            
         </div>
         <div class="bottom-container bottom-container-loadmore js-container-loadmore">
         <?php
               $sql = "SELECT * FROM sanpham WHERE LoaiSP = 'LT' AND MaLoai = 'Gaming'";
               $stmt = mysqli_stmt_init($conn);
               if(!mysqli_stmt_prepare($stmt,$sql)){
                  echo 'Errol';
               } else{
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  $i = 0;

                  while($row = mysqli_fetch_assoc($result)){
                     $i++;
                     if($i >= 15)
                     {
                        echo '
                        <a href="../product-details/product-details.html">
                           <div class="menu-card">
                           <div class="imga">
                              <img src="../../asset/picture/product/laptop/gaming/'.$row["Anh"].'" alt="">
                           </div>
                           <div class="bottom">
                              <h3 class="title">'.$row["TenSP"].'</h3>
                              <p class="detail">'.$row["MoTa"].'</p>
                              <p class="coins" style = "color: red;">'.number_format($row["Gia"],0, ',', '.').' VND</p>
                           </div>
                           </div>
                        </a>
                        ';
                     }
                  }
               }
               ?>
               <div class="all-laptop" style = "text-alight: right;">
                  <button>Xem tất cả
                     <i class="fa-solid fa-angle-right" style="padding-left:10px;"></i>
                  </button>
               </div>
            </div>

            <a href="../all-product/all-product.php?loai=<?php echo $row['LoaiSP'];?>&maloai=<?php echo $row['MaLoai'];?>">
            <button class="see-more see-more-laptop js-see-more-laptop">
               Xem thêm 10 Sản Phẩm
               <i class="fa-solid fa-angle-down"></i>
            </button>
            </a>
      </div>

      <!-- laptop macbook -->
      <div class="list-laptop-product list-laptop-macbook" id="laptop-macbook">
         <div class="container-list laptop-macbook">
            <h1 class="type">Macbook</h1>
            <div class="banner">
               <a href="">
                  <img src="../../asset/picture/product/banner-brand/banner-laptop-macbook.jpg" alt="">
               </a>
            </div>

            <div class="bottom-container">
               <?php

               $sql = "SELECT * FROM sanpham WHERE LoaiSP = 'LT' AND maSP NOT LIKE 'Out_' AND MaLoai = 'Macbook'";
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
                              <img src="../../asset/picture/product/laptop/macbook/'.$row["Anh"].'" alt="">
                           </div>
                           <div class="bottom">
                              <h3 class="title">'.$row["TenSP"].'</h3>
                              <p class="detail">'.$row["MoTa"].'</p>
                              <p class="coins" style = "color: red;">'.number_format($row["Gia"],0, ',', '.').' VND</p>
                           </div>
                        </div>
                     </a>
                     ';
                  }
               }
               ?>
               
            </div>
         </div>
      </div>

      <!-- office laptop -->
      <div class="list-laptop-product list-laptop-office">
         <div class="container-list laptop-office">
            <h1 class="type">Laptop Văn Phòng</h1>
            <div class="banner">
               <a href="">
                  <img src="../../asset/picture/product/banner-brand/banner-Hoctapvanphong-laptop.jpg" alt="">
               </a>
            </div>

            <button class="btn-type-laptop-office" id="laptop-dell">Dell</button>

            <div class="bottom-container">
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
                     <a href="../product-details/product-details.php?id='.$row["maSP"].'">
                        <div class="menu-card">
                        <div class="imga">
                           <img src="../../asset/picture/product/laptop/dell/'.$row["Anh"].'" alt="">
                        </div>
                        <div class="bottom">
                           <h3 class="title">'.$row["TenSP"].'</h3>
                           <p class="detail">'.$row["MoTa"].'</p>
                           <p class="coins" style = "color:red;">'.number_format($row["Gia"],0, ',', '.').' VND</p>
                        </div>
                        </div>
                     </a>
                     ';
                     if($i == 14)
                        break;
                  }
               }
               ?>
               
               <div class="all-laptop">
               <a href="../all-product/all-product.php?loai=<?php echo $row['LoaiSP'];?>&maloai=<?php echo $row['MaLoai'];?>">
                  <button>Xem tất cả
                     <i class="fa-solid fa-angle-right" style="padding-left:10px;"></i>
                  </button>
               </a>
               </div>
            </div>

            <!-- --------- -->
            <button class="btn-type-laptop-office" id="laptop-asus">Asus</button>

            <div class="bottom-container">
               <?php

                  $sql = "SELECT * FROM sanpham WHERE LoaiSP = 'LT' AND MaLoai = 'Asus'";
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
                        <a href="../product-details/product-details.php?id='.$row["maSP"].'">
                           <div class="menu-card">
                           <div class="imga">
                              <img src="../../asset/picture/product/laptop/asus/'.$row["Anh"].'" alt="">
                           </div>
                           <div class="bottom">
                              <h3 class="title">'.$row["TenSP"].'</h3>
                              <p class="detail">'.$row["MoTa"].'</p>
                              <p class="coins" style = "color: red;">'.number_format($row["Gia"],0, ',', '.').' VND</p>
                           </div>
                           </div>
                        </a>
                        ';
                        if($i == 14)
                           break;
                     }
                  }
               ?>
               
               <div class="all-laptop">
               <a href="../all-product/all-product.php?loai=<?php echo $row['LoaiSP'];?>&maloai=<?php echo $row['MaLoai'];?>">
                  <button>Xem tất cả
                     <i class="fa-solid fa-angle-right" style="padding-left:10px;"></i>
                  </button>
               <a href="../all-product/all-product.php?loai=<?php echo $row['LoaiSP'];?>&maloai=<?php echo $row['MaLoai'];?>">
               </div>
            </div>
         </div>
      </div>  
      <!-- End Laptop Product -->

      <!-- Start Screen Product -->
      <div class="container-product container-screen-product" id="container-screen-product">
         <h1 class="title">Màn hình PC</h1>
         <div class="slick-slide container-product-slide container-screen-slide">
         <?php

            $sql = "SELECT * FROM sanpham WHERE LoaiSP = 'MH'";
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
                  <a href="../product-details/product-details.php?id='.$row["maSP"].'">
                     <div class=" product-item screen-product-item">
                        <div class="imga">
                           <img src="../../asset/picture/product/Screen/'.$row["Anh"].'">
                        </div>
                        <div class="bottom">
                           <p class="title">'.$row["TenSP"].'</p>
                           <p class="details">'.$row["MoTa"].'</p>
                           <p class="price" style = "color: red;">'.number_format($row["Gia"],0, ',', '.').' VND</p>
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
      <div class="all-laptop all-pc" style = "margin-top: 600px; width: 200px; margin-left: 80%;">
         <a href="../all-product/all-product.php?loai=<?php echo $row['LoaiSP'];?>&maloai=<?php echo $row['MaLoai'];?>">
            <button style = "width: 300px; margin-left: 0px;">Xem tất cả PC
               <i class="fa-solid fa-right-long" style="padding-left: 10px;"></i>
            </button>
         </a>
      </div>
      <!-- End Screen Product -->

      <!-- Start Mouse Product -->
      <div class="mouse-product-container" id="mouse-product-container">
         <h1 class="title">Chuột máy tính</h1>
         <div class="filter">
            <button class="btn-filter">Bộ lọc<i class="fa-solid fa-filter"></i></button>
            <ul>
               <li class="filter-items"><button>
                  Loại <i class="fa-solid fa-caret-down"></i>
               </button></li>
               <li class="filter-items"><button>
                  Giá <i class="fa-solid fa-caret-down"></i>
               </button></li>
               <li class="filter-items"><button>
                  Tiện ích <i class="fa-solid fa-caret-down"></i>
               </button></li>
            </ul>
         </div>

         <div class="container-list list-mouse">
            <div class="bottom-container">
            <?php

               $sql = "SELECT * FROM sanpham WHERE LoaiSP = 'Chuot'";
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
                     <a href="../product-details/product-details.php?id='.$row["maSP"].'">
                        <div class="menu-card">
                        <div class="imga">
                           <img src="../../asset/picture/product/mouse/'.$row["Anh"].'" alt="">
                        </div>
                        <div class="bottom">
                           <h3 class="title">'.$row["TenSP"].'</h3>
                           <p class="detail">'.$row["MoTa"].'</p>
                           <p class="coins" style = "color:red;">'.number_format($row["Gia"],0, ',', '.').' VND</p>
                        </div>
                        </div>
                     </a>
                     ';
                     if($i == 14)
                        break;
                  }
               }
            ?>
               
            <div class="all-product">
            <a href="../all-product/all-product.php?loai=<?php echo $row['LoaiSP'];?>&maloai=<?php echo $row['MaLoai'];?>">
               <button>Xem tất cả
                  <i class="fa-solid fa-angle-right" style="padding-left:10px;"></i>
               </button>
            </a>
            </div>
            </div>
         </div>
      </div>
      <!-- End Mouse Product -->

      <!-- Start Keyboard Product -->
      <div class="mouse-product-container" id="keyboard">
         <h1 class="title">Bàn phím</h1>
         <div class="filter">
            <button class="btn-filter">Bộ lọc<i class="fa-solid fa-filter"></i></button>
            <ul>
               <li class="filter-items"><button>
                  Loại <i class="fa-solid fa-caret-down"></i>
               </button></li>
               <li class="filter-items"><button>
                  Giá <i class="fa-solid fa-caret-down"></i>
               </button></li>
               <li class="filter-items"><button>
                  Tiện ích <i class="fa-solid fa-caret-down"></i>
               </button></li>
            </ul>
         </div>

         <div class="container-list list-mouse">
            <div class="bottom-container">
            <?php

               $sql = "SELECT * FROM sanpham WHERE LoaiSP = 'Ban Phim'";
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
                     <a href="../product-details/product-details.php?id='.$row["maSP"].'">
                        <div class="menu-card">
                        <div class="imga">
                           <img src="../../asset/picture/product/keyboard/'.$row["Anh"].'" alt="">
                        </div>
                        <div class="bottom">
                           <h3 class="title">'.$row["TenSP"].'</h3>
                           <p class="detail">'.$row["MoTa"].'</p>
                           <p class="coins" style = "color:red;">'.number_format($row["Gia"],0, ',', '.').' VND</p>
                        </div>
                        </div>
                     </a>
                     ';
                     if($i == 14)
                        break;
                  }
               }
               ?>
               
               <div class="all-product">
               <a href="../all-product/all-product.php?loai=<?php echo $row['LoaiSP'];?>&maloai=<?php echo $row['MaLoai'];?>">
                  <button>Xem tất cả
                     <i class="fa-solid fa-angle-right" style="padding-left:10px;"></i>
                  </button>
               </a>
               </div>
            </div>
         </div>
      </div>
      <!-- End Keyboard Product -->

      <!-- Start Headphone Product -->
      <div class="keyboard-product-container" id="headphone">
         <h1 class="title">
            Tai nghe
         </h1>
         <div class="slick-slide container-product-slide container-laptop-slide">
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
                  <a href="../product-details/product-details.php?id='.$row["maSP"].'">
                     <div class=" product-item laptop-product-item">
                        <div class="imga">
                           <img src="../../asset/picture/product/headphone/'.$row["Anh"].'">
                        </div>
                        <div class="bottom">
                           <p class="title">'.$row["TenSP"].'</p>
                           <p class="details">'.$row["MoTa"].'</p>
                           <p class="price" style = "color:red;">'.number_format($row["Gia"],0, ',', '.').' VND</p>
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
      <div class="all-laptop all-pc" style = "margin-top: 600px; width: 200px; margin-left: 80%;">
      <a href="../all-product/all-product.php?loai=<?php echo $row['LoaiSP'];?>&maloai=<?php echo $row['MaLoai'];?>">
         <button style = "width: 300px; margin-left: 0px;">Xem tất cả Tai Nghe
            <i class="fa-solid fa-right-long" style="padding-left: 10px;"></i>
         </button>
      </a>
      </div>
      <!-- End Headphone Product -->

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

   <!-- back to top -->
   <div class="back-top">
      <a href="#header" title="Trở về đầu trang">
         <i class="fa-solid fa-circle-arrow-up"></i>
      </a>
   </div>
   <!-- back to top -->

   <!-- Start Model -->
   
   <?php
      include_once '../../php/model.php';
   ?>
   <!-- End Model -->

   <!-- Start Search -->
   <?php include_once '../../php/formSearch.php'; ?>
   <!-- End Search -->

   <!--Script -->
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
   <script src="../../asset/js/script.js"></script>
   <script src="../../asset/js/product.js"></script>
   <script src="../../asset/js/slickSlider.js"></script>
   </body>
</html>