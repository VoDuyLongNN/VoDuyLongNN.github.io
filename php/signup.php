<?php
   // $firstName = $_POST['firstName'];
   foreach($_POST as $key=>$value)
   {
      echo $key.':'.$value;
      echo '<br/>';
   }
?>