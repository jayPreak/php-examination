<?php

   $connection = mysqli_connect('localhost','root','','buy_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into buy_form(name, email, phone, address, arrivals, leaving) values('$name','$email','$phone','$address','$arrivals','$leaving') ";
      mysqli_query($connection, $request);

      header('location:buy.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>