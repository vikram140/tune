<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2> All users data</h2>
<a href="login.php">Sign Out</a>
<table>
  <tr>
  <th>S.NO</th>
    <th>Name</th>
    <th>Number</th>
    <th>Email</th>
  </tr>
 
 <?php

	include "conn.php";

	
$q = "select * from user_id ";

$query = mysqli_query($conn,$q);

if(mysqli_num_rows($query)> 0){

$i = 1;

  while($rew = mysqli_fetch_array($query)){ ?>
 
    <tr>
	<td><?php echo $i; $i++; ?></td>
   
    <td><?php echo $rew['name'];?></td>
	 <td><?php echo $rew['number'];?></td>
    <td><?php echo $rew['email'];?></td>
  </tr>
<?php
  }
  }

   ?>
</table>

</body>
</html>
