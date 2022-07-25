<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mcafee";
// Create connection
$conn = mysqli_connect ($servername, $username, $password, $dbname);

// Check connection
if ($conn) 
{
    echo"hello";
} 
else
{
    die("Connection failed because ".mysqli_connect_error());
}
?>


