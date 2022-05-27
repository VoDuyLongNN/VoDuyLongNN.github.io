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
   <link rel="stylesheet" href="../../main.css">
   <link rel="icon" href="../../asset/picture/logo/logoh3.svg" type="image/x-icon" sizes="32*32">
   <title>Giỏ Hàng</title>
   <style>
      body{
         
      }
      h1{
         text-align: center;
         padding: 30px 0;
      }
      .main-contain{
         display: flex;
         justify-content: center;
         flex-direction: column;
         align-items: center;
         min-height: 280px;
      }
      .item{
         display: flex;
         justify-content: space-around;
         align-items: center;
         width: 800px;
         height: 390px;
         border-bottom: 2px solid #A2B38B;
         padding: 20px 0;
      }
      .item .img{
         width: 50%;
         height: 100%;
      }
      .item .img img{
         width: 100%;
         height: 100%;
      }
      .item .right{
         width: 50%;
         padding: 0 60px;
         height: 100%;
      }
      .item .right .name{
         font-size: 35px;
         color: #2F8F9D;
         padding-bottom: 40px;
         text-transform: capitalize
         ;
      }
      .item .right .price{
         font-size: 20px;
         color: #F32424;
      }

      .item .right .quantity{
         padding: 40px 0;
         font-weight: bold;
         color: red;
      }

      .order{
         width: 100%;
         display: flex;
         justify-content: center;
         padding: 30px 0;
      }

      .order button{
         padding: 15px;
         width: 500px;
         color: #ee4d2d;
         background-color: #fff;
         border: 2px solid #ee4d2d;
         font-size: 20px; 
         transition: all linear 0.5s;
         cursor: pointer;
      }
      .order button:hover{
         background-color: #ee4d2d;
         color: #fff;
      }

      button.delete{
         width: 100px;
         padding: 10px 30px;
         background-color: #fff;
         border: 1px solid #000;
         font-size: 20px;
         cursor: pointer;
         transition: all linear 0.5s;
      }

      button.delete:hover{
         background-color: #000;
         color: #fff;
      }
   </style>
</head>
<body>
   <header >
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
         
      </div>
   </header>

   <h1>Giỏ hàng của bạn</h1>
   <div class = "main-contain">
   <?php
      $_SESSION['tongTien'] = 0;
      if(isset($_SESSION['idUser']))
      {
         $idKH = $_SESSION['idUser'];
         $sql = "SELECT * FROM giohang WHERE idKhachHang = '$idKH'";

         $stmt = mysqli_stmt_init($conn);
         if(!mysqli_stmt_prepare($stmt,$sql)){
            echo 'Errol';
         } else{
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            $dem = 0;
            while($row = mysqli_fetch_assoc($result)){
               $idSP = $row["IdSanPham"];
               $sql2 = "SELECT * FROM sanpham WHERE maSP = '$idSP'";
               $stmt2 = mysqli_stmt_init($conn);
               if(!mysqli_stmt_prepare($stmt2,$sql2)){
                  echo 'Errol';
               } else{
                  mysqli_stmt_execute($stmt2);
                  $result2 = mysqli_stmt_get_result($stmt2);
                  
                  while($row2 = mysqli_fetch_assoc($result2)){
                     if($row2["LoaiSP"] == 'DT')
                        $loaisp = 'phone';
                     elseif($row2["LoaiSP"] == 'MH')
                        $loaisp = 'Screen';
                     elseif($row2["LoaiSP"] == 'Tai Nghe')
                        $loaisp = 'headphone';
                     elseif($row2["LoaiSP"] == 'LT')
                     {
                        if($row2["MaLoai"] == 'Gaming')
                           $loaisp = 'laptop/gaming';
                        elseif($row2["MaLoai"] == 'Asus')
                           $loaisp = 'laptop/asus';
                        elseif($row2["MaLoai"] == 'Dell')
                           $loaisp = 'laptop/dell';
                        elseif($row2["MaLoai"] == 'Macbook')
                           $loaisp = 'laptop/macbook';
                     }
                     elseif($row2["LoaiSP"] == 'Chuot')
                        $loaisp = 'mouse';
                     elseif($row2["LoaiSP"] == 'Ban Phim')
                        $loaisp = 'keyboard';
                     echo '
                     <div class = "item">
                        <div class = "img">
                           <img src="../../asset/picture/product/'.$loaisp.'/'.$row2["Anh"].'" alt="">
                        </div>
                        <div class="right">
                           <p class="name">'.$row2["TenSP"].'</p>
                           <p class="price">'.$row2["MoTa"].'</p>
                           <p class="quantity">'.number_format($row2["Gia"],0, ',', '.').' VND</p>
                           <a href="../../php/delete.php?id='.$row2["maSP"].'"><button class = "delete">Xóa</button></a>
                        </div>
                     </div>
                     ';
                     
                     $_SESSION['tongTien'] += $row2["Gia"];
                  }
               }
               $dem++;
            }
            if($dem == 0)
               echo '
               <p style = "text-transform: uppercase;
               text-align: center;">Giỏ hàng trống</p>
            ';
         }
      }
      else
      {
         echo '
            <p style = "text-transform: uppercase;
            text-align: center;">Giỏ hàng trống</p>
         ';
      }
   ?>
   </div>

   <div style = "width: 100%;
         display: flex;
         justify-content: center;
         padding: 30px 0;">
      <p>Tổng Tiền: <?php echo number_format($_SESSION['tongTien'],0, ',', '.'); ?> VND</p>
   </div>
   <div class = "order js-order">
      <a href="../order/order.php">
         <button>Đặt Hàng</button>
      </a>
   </div>
   <?php
      include_once('../../php/footer.php');
      include_once('../../php/formSearch.php');
      include_once('../../php/model.php');
   ?>
   
   <script src="../../asset/js/script.js"></script>

</body>
</html>