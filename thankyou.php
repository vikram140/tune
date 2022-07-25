	<?php
include "conn.php";
if (isset($_POST['submit'])){
	$number = $_POST['number'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	
   
	
$q = "INSERT INTO `user_id` ( `number`,`name`,`email`) VALUES ('$number','$name','$email')";
$query = mysqli_query($conn,$q);
	
	if ($query) {
    echo "";
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
}
 //header('Location: thankyou.php');
 //ob_end_flush();
}


?>	


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/form_css.css">
	<link rel="stylesheet" type="text/css" href="css/form_css2.css">
	<link rel="stylesheet" type="text/css" href="css/form_css3.css">
	
	<script>
    (function(a,b){a="https://stenceentranyon.com/conversion.js?cid=OPTIONAL&payout=OPTIONAL&txid=OPTIONAL";var c=b.createElement("script"),d=b.scripts[0];if(b=b.cookie.match(/(^| )vl-cid=([^;]+)/))if(-1<a.indexOf("cid="))a=a.replace(/cid=.*?(&|$)/,"cid="+b.pop()+"&");else{var e=-1<a.indexOf("?")?"&":"?";a+=e+"cid="+b.pop()}c.src=a;d.parentNode.insertBefore(c,d)})(window,document);
</script>
</head>


<body style="background-color: #dbdbdb">
<div class="container pt-5 pb-5" style="background-color: #dbdbdb">
    
    
	
	<h2 class="green" style="text-align: center; margin-bottom: 0; padding-bottom: 0; font-size: 35px;font-weight: bold"><u>✔ Your Mcafee Security License Is Ready Now</u></h2>
	
	<h2 class="green" style="text-align: center; margin-top: 0; font-size: 26px;font-weight: bold">Next steps- Call 1-(888) 404-0468 to instantly  Activate Your McAfee License.</h2>
	<div="" class="t-box" style="background-color: #dbdbdb">
		<div class="gs">
			<div class="call"><span style="font-size:64px;"><strong>1-(888) 404-0468</strong> <strong>Help  <img src="images/phone_PNG48988.png" style="margin-right: 10px; width:30px;" /></strong></span></div>
			
			<p>
				Call number above to instantly download and install your active subscription on your device. Remember your subscription covers multiple devices. We will install antivirus protection on multiple devices and get it running. <b>100% Free</b>
			</p>
			
			<p>
				<b>Please note: You have to setup antivirus on your computer to block popups and delete virus infections.</b>
			</p>
		</div>
	</div>
	
	<div class="t-box" style="background-color: #dbdbdb">
		<div class="gs">
			<h2 class="green">For Assisted Installation (Recommended)</h2>
			
			<p>
				Our experienced techs can help you install antivirus and configure it as your your hardware and software configuration. Just call our toll free number now!			</p>
			
			<h3><b>1-(888) 404-0468</b></h3>
			
			<p>
				Our expert technicians will access your computer 100% securely and activate your antivirus protection and remove detected virus infections for you. Chat with us at our toll free number <b>1-(888) 404-0468</b>
			</p>
			
			<p><b>We will install Firewall and Antivirus protection and get it working <span class="blue">100% free</span></b></p>
		</div>
	</div>
	
	<div class="t-box" style="background-color: #dbdbdb">
		<div class="gs">
			<h2>For manual installation (Not Recommended)</h2>
			
			<ol style="margin-left: 15px;">
				<li>Download Mcafee Total Protection Setup</li>
				<li>Install the program</li>
				<li>Enter 25 Digit License key</li>
				<li>And activate.</li>
			</ol>
			
			<p><span style="color: #ff0000;"><strong>Sounds complicated?</strong></span>, Call</p>
			
			<h3><strong>1-(888) 404-0468</strong></h3>
			
			<p>Our expert technicians will access your computer 100% securely and activate your antivirus protection and remove detected virus infections for you. Chat with us at our toll free number <strong>1-(888) 404-0468</strong></p>
			
			<p><strong>We will install Firewall and Antivirus protection and get it working 100% free</strong></p>
			<p style="color:#3c3c3c;text-align: center; font-size: 12px;margin-top: 80px;">Advertisement by an independent affiliate of McAfee
		</div>
	</div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/626d26feb0d10b6f3e700eff/1g1t60l61';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>