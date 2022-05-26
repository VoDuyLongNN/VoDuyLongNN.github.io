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

   $tenmaychu = 'localhost';
   $tentaikhoang = 'root';
   $matkhau = '';
   $csdl = 'htlshop';
   $conn = new mysqli($tenmaychu,$tentaikhoang,$matkhau,$csdl) or die('cannot conecting');
   $conn->select_db($csdl) or die('Chưa có CSDL');
   $conn->query("SET NAMES 'utf8'");

   if(isset($_POST['firstName'])){
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $gender = $_POST['gender'];
      $born = $_POST['born'];
      $provice = $_POST['province'];
      $district = $_POST['district'];
      $ward = $_POST['ward'];
      $address = $provice.$district.$ward;
      $userName = $_POST['userName'];
      $password = $_POST['password'];
      $passwordSignup = $_POST['passwordSignup'];

      $sql = "SELECT * FROM khachhang WHERE Email = '$userName' LIMIT 1";
      $run = $conn->query($sql);
      $count = $run->num_rows;
      if($count == 0)
      {
         $add = "insert into khachhang (FirstName,LastName,Gender,Born,Address,Email,EmailPass,PassSignup) values ('$firstName','$lastName','$gender','$born','$address','$userName','$password','$passwordSignup')";
         $conn->query($add);
         echo'
            <center style = "font-size: 25px">Đăng kí thành công</center>
            <a href="../index.php"><button style = "">Quay lại trang chủ</button></a>
         '; 
      }
      else
      {
         echo'
            <center style = "font-size: 25px">Email này đã tồn tại</center>
            <a href="../web-page/Form-Signup/Signup.php"><button style = "">Quay lại</button></a>
            
         ';
         //echo $_SESSION['nameUser'];
      }
   }
?>