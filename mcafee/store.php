<?php

$conn = mysqli_connect("localhost", "root", "mcafee" , "");
$name = $_POST['name'];
$phone = $_POST['number'];
$email = $_POST['email'];
   $query =  mysqli_query($conn,"INSERT INTO `create_user`(`name`, `number`, `email`) VALUES ('$name','$phone','$email')");

   header('Location: checkout.php');
  
?>