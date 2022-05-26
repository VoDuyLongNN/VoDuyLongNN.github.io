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
   include 'config.php';
   session_start();

   $email = $_POST['email'];
   $pass = $_POST['pass'];
   $sql = "SELECT * FROM khachhang WHERE Email = '$email' AND PassSignup = '$pass'";
   $run = $conn->query($sql);
   $count = $run->num_rows;
   $query_sql=mysqli_query($conn,$sql);
	$row_sql=mysqli_fetch_assoc($query_sql);

   if($count == 1)
   {
      echo'
         <center style = "font-size: 25px">Đăng nhập thành công</center>
         <a href="../index.php"><button style = "">Quay lại trang chủ</button></a>
      ';
      
      $_SESSION['idUser'] = $row_sql['MaKH'];
      $_SESSION['nameUser'] = $row_sql['FirstName'].' '.$row_sql['LastName'];
   }
   else
   {
      echo'
         <center style = "font-size: 25px">Đăng nhập thất bại, Email hoặc Mật Khẩu không đúng. Vui lòng kiểm tra lại</center>
         <a href="../index.php"><button style = "">Quay lại trang chủ</button></a>
      ';
   }
   