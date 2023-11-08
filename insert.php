<?php
  $connect = mysqli_connect("localhost","root","","mydatabase");

   $name = $_POST['st_name'];
   $email = $_POST['st_email'];

   $insert = "INSERT INTO table2(name,email) values('$name','$email')";
   $ex = mysqli_query($connect,$insert);

  //  if($ex){
  //   echo "<script> alert('data inserted successfully')</script>";
  //  }else{
  //   echo "<script> alert('data insert failed') </script>";
  //  }

 ?>

 