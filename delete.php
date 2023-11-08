<?php
$connect = mysqli_connect("localhost","root","","mydatabase");

$id = $_GET['id'];

$delete = "DELETE FROM table2 where id = '$id'";
$ex = mysqli_query($connect,$delete);



?>