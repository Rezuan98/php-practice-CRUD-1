<?php
$connect = mysqli_connect("localhost", "root", "", "mydatabase");

$_POST = json_decode(file_get_contents('php://input'), true);

$name = $_POST['user_name'];
$email = $_POST['user_email'];

$insert = "INSERT INTO table2(name, email) VALUES('$name', '$email')";
$ex = mysqli_query($connect, $insert);

if ($ex) {
    echo "Data inserted successfully";
} else {
    echo "Data insertion failed";
}
?>

 