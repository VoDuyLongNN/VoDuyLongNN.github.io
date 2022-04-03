
<?php
   $tenmaychu = 'localhost';
   $tentaikhoang = 'root';
   $matkhau = '';
   $csdl = 'htlshop';
   $conn = new mysqli($tenmaychu,$tentaikhoang,$matkhau,$csdl) or die('cannot conecting');
   $conn->select_db($csdl) or die('Chưa có CSDL');
   $conn->query("SET NAMES 'utf8'");

   $email = "SELECT Email FROM khachhang";
   $runEmail = $conn->query($email);

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

      $sql = "insert into khachhang (FirstName,LastName,Gender,Born,Address,Email,EmailPass,PassSignup) values ('$firstName','$lastName','$gender','$born','$address','$userName','$password','$passwordSignup')";

      while($row = $runEmail->fetch_array())
      {
         if(in_array($userName,$row))
         {
            echo "Email này đã được đăng kí từ trước";
            break;
         }
         else
         {
            $run = $conn->query($sql);
            echo "<center>";
            echo "Đăng kí thành công";
            echo "</center>";
         }
         foreach($row as $key=>$value)
         {
            echo $key.'-'.$value;
            echo '<br/>';
         }
      }
   }
?>