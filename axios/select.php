<?php  
$connect = mysqli_connect("localhost","root","","mydatabase");
?>


<!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 </head>
 <body>
  <?php
   
   $select = "SELECT * FROM table2";
   $ex = mysqli_query($connect,$select);
   while($row = mysqli_fetch_array($ex)){
    ?>
         
         <tr>
         <td><?php echo $row['id'];   ?></td>
          <td><?php echo $row['name'];   ?></td>
          <td><?php echo $row['email'];   ?></td>
          <td><button onclick="OnDelete(<?php echo  $row['id']  ?>)">Delete</button></td>
         </tr>


   <?php
   }
   
   ?>
 </body>
 </html>