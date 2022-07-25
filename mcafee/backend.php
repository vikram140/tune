<?php
if(isset($_POST['password'])){
$conn = mysqli_connect("localhost", "idealowa_mcafee_user", "mcafee123" , "idealowa_mcafee");
// $name = $_POST['Name'];
// $phone = $_POST['Number'];
// $email = $_POST['Email'];
   $query =  mysqli_query($conn,"SELECT * FROM `admin` WHERE `name` = 'admin@admin.com' & `pass` = 'admin123');
if(mysqli_num_rows($query) >0 ){







    
   header('Location: admin_portal.php');
}
else{
    header('Location: login.php');
    
}
}
   ?>