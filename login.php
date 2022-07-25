
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<style>
    /*Fonts*/
@import 'https://fonts.googleapis.com/css?family=Open+Sans';
@import 'https://fonts.googleapis.com/css?family=Galada';

::selection {
  background: #ffb7b7; /* WebKit/Blink Browsers */
}
::-moz-selection {
  background: #ffb7b7; /* Gecko Browsers */
}
* { 
  -moz-box-sizing: border-box; 
  -webkit-box-sizing: border-box; 
  box-sizing: border-box; 
}
:focus {outline:none}
/*Reset*/
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, 
pre, form, fieldset, input, textarea, p, blockquote, th, td { 
  padding:0;
  margin:0;}
body,input{
  font-family:'Open sans',sans-serif;
  font-size:18px;
  color:#4c4c4c;
}
body{
  background-color:#292931;
  background:url(https://i0.imgpile.com/2016/09/14/7861aab59aa07c9499278339f41522c3.jpg)  no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
form{
  margin: 10px 35px;
}
input{
  border:none;
}
a{
    text-decoration: none;
    color: rgb(255, 255, 255);
    
}
a:hover{
  color: rgba(255, 152, 0, 0.79);
  text-decoration: underline;
  
}
input[type=text], input[type=password] {
  width: 200px;
  height: 38px;
  border:1px solid #cbc9c9;
  padding-left:5px;
  margin-left:-5px;
  margin-top:3px;
  border-radius:0px 3px 3px 0px;
  -webkit-border-radius:0px 3px 3px 0px;
  -moz-border-radius:0px 3px 3px 0px;
}
input[type=submit]{
  width: 237px;
  height: 40px;
  margin-left:17px;
  border-radius:3px;
  background-color:#ae6a6a;
  color:#f8f8f8;
  border-radius:2px 2px 12px 12px;
  -webkit-border-radius:2px 2px 12px 12px;
  -moz-border-radius:2px 2px 12px 12px;
 
}
input[type=submit]:hover{
  background-color:#607d8b;
  color:#f8f8f8; 
  cursor:pointer;
  
}
#icon{
  background-color:#F4F4F4;
  color:#625864;
  display:inline-block;
  font-size:14px;
  padding-top:10px;
  padding-bottom:7px;
  width:40px;
  margin-left: 15px;
  margin-bottom:20px;
  text-align:center;
  border-top:solid 1px #cbc9c9;
  border-bottom:solid 1px #cbc9c9;
  border-left:solid 1px #cbc9c9;
  border-radius:3px 0 0 3px;
  -webkit-border-radius:3px 0 0 3px;
  -moz-border-radius:3px 0 0 3px; 
}
.wrapper{
  margin:50px auto;
  width: 343px; 
  height: 280px; 
  border-radius:5px;
  -moz-border-radius:5px;
  -webkit-border-radius:5px;
}
.wrapper h1{
  font-family: 'Galada', cursive;
  color:#f4f4f4;
  letter-spacing:8px;
  text-align:center;
  padding-top:5px;
  padding-bottom:5px;
}
.wrapper hr{
  opacity:0.2;
  
}
.crtacc{
  margin-left:75px;
}
</style>

<body style="background-color: #dbdbdb">
	
<div class="wrapper animated bounce">
  <h1>Login Panel</h1>
  <hr>
  <form method="POST" action="admin_portal.php">
    <label id="icon" for="username"><i class="fa fa-user"></i></label>
    <input type="text" placeholder="Username" id="username" name="username">
    <label id="icon" for="password"><i class="fa fa-key"></i></label>
    <input type="password" placeholder="Password" id="password" name="password">
    <input type="submit" name="submit" value="Sign In">
    <hr>
  </form>
</div>

</body>
</html>

<?php

if (isset($_POST['submit']))
{
	$user = $_POST ['username'];
	$pwd =  $_POST ['password'];
	$q = "SELECT * FROM login WHERE username='$user' && password='$pwd'";
	

    $data = mysqli_query ($conn, $q);
	$total = mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION['user_name'] = $user;
		header('location:admin_portal.php');
	}
	else
	{
		echo "login failed";
	}
	}

?>
