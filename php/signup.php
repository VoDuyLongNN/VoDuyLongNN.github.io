
<?php
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
         echo 'Dang ki thanh cong';
         $add = "insert into khachhang (FirstName,LastName,Gender,Born,Address,Email,EmailPass,PassSignup) values ('$firstName','$lastName','$gender','$born','$address','$userName','$password','$passwordSignup')";
         $conn->query($add);
      }
      else
      {
         // echo '<script>alert("Email nay da ton tai") <script/>';
         echo '<script>';
            alert("Email nay da ton tai");
         echo '</script>';
      }
   }
?>