<!DOCTYPE html>
<!-- Start of html -->
<html lang="en">
	<!-- Description: Creating Web application -->
	<!-- Author: Lim Yuan Shen -->
	<!-- Date: 16 April 2020 -->
	<!-- Validated: 21/4/2020 -->
	
<head>
<title>Panda Tech | Order</title>
	<meta charset="utf-8">
	<meta name="author" content="Lim Yuan Shen">
	<meta name="description" content="Panda Tech order">
	<meta name="keywords" content="order,purchase, Panda Tech">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2%7COrbitron&display=swap" rel="stylesheet">
	<!--https://fonts.google.com/-->
	<link rel="shortcut icon" type="image/png" href="images/favicon.icon.png">
	<script src="script/script.js"></script>
	<script src="script/enhancements.js"></script>
</head>

<!-- Start of Body -->
<body>

<!-- Start of header -->
<?php include ("include/navigation.php");?>
<!-- End of header -->
	

	
<!-- Start of article -->
<!-- Start of article -->
<article>
<h1 id="hstyle1">Shipping Address</h1>
<h2>Please provide your information below</h2>
<div class="form">
<form name="feedback" action="mailto:feedback@pandatech.com" method="post" enctype="text/plain">
	<fieldset>
		<legend>Customer Information</legend>
			<p><label for="fname">First name:</label>
				<input type="text" name="fname" id="fname" size="25" placeholder="First name" >
			</p>
			
			<p><label for="lname">Last name:</label>
				<input type="text" name="lname" id="lname" size="25"  placeholder="Last name" >
			</p>
	
			<p><label for="email">Email Address:</label>
				<input type="email" name="email" id="email" size="30" placeholder="sample@email.com">
			</p>

			<label for="address">Address:</label>
			<p><input type="text" name="saddress" id="address" size="40" placeholder="Street address">
				<input type="text" name="city" id="city" size="20" placeholder="City/Town">
			<br/>
			<label for="state">State:</label><br/>
				<select name="state" id="state">
					<option selected="selected" value="">-- Select a state --</option>
					<option value='Selangor'>Selangor</option>
					<option value='Johor'>Johor</option>
					<option value='Sabah'>Sabah</option>
					<option value='Sarawak'>Sarawak</option>
					<option value='Perak'>Perak</option>	
					<option value='Kedah'>Kedah</option>
					<option value='Kelantan'>Kelantan</option>	
					<option value='Penang'>Penang</option>	
					<option value='Pahang'>Pahang</option>	
					<option value='Negeri Sembilan'>Negeri Sembilan</option>
					<option value='Malacca'>Malacca</option>
					<option value='Perlis'>Perlis</option>
					<option value='Kuala Lumpur'>Kuala Lumpur</option>
					<option value='Labuan'>Labuan</option>
					<option value='Putrajaya'>Putrajaya</option>
				</select>
				<br/>
				<label for="pcode">Postcode:</label>
				<input type="text" name="pcode" id="pcode" size="10"  placeholder="e.g. 88400">
			</p>
			
			<p><label for="phone_no">Phone number:</label>
				<input type='text' name='phone_no' id="phone_no" size="10" placeholder="e.g. 0168992881" >
			</p>
			
			<label for="product">Product:</label><br/>
				<select name="product" id="product">
				<optgroup label="Gaming Keyboards">
					<option value='g413' selected='selected'>Logitech G413 Carbon ~ RM 198</option>
					<option value='g512'>Logitech G513 Carbon ~ RM 198</option>
					<option value='prox'>Logitech Pro X ~ RM 589</option>
					<option value='hypxfpsa'>HyperX FPS Alloy ~ RM 448</option>
					<option value='hypxaelitergb'>HyperX Alloy Elite RGB ~ RM 759</option>	
					<option value='hypxacorergb'>HyperX Alloy Core RGB ~ RM 228</option>
					<option value='rblackw'>Razer BlackWidow ~ RM 520</option>	
					<option value='rhuntsme'>Razer HuntsMan Elite ~ RM 873</option>	
				</optgroup>
				
				<optgroup label="Gaming Mouse">
					<option value='g502' >Logitech G502 Lightspeed ~ RM 688</option>
					<option value='hypxpffpspro'>HyperX Pulsefire FPS Pro ~ RM 298</option>
					<option value='hypxpfdart'>HyperX Pulsefire Dart ~ RM 448</option>
					<option value='hypxpfraid'>HyperX Pulsefire Raid ~ RM 262</option>
					<option value='rmambae'>Razer Mamba Elite ~ RM 393</option>
					<option value='rviper'>Razer Viper ~ RM 350</option>	
				</optgroup>
				
				
				<optgroup label="Gaming Controller">
					<option value='rwolverineu'>Razer Wolverine Ultimate ~ RM 699</option>
					<option value='rraijum'>Razer Raiju Mobile ~ RM 655</option>
					<option value='xboxeone'>X-box Elite One ~ RM 655</option>
					<option value='rraijute'>Razer Raiju Tournament Edition ~ RM 620</option>
					<option value='nrevolutionu'>Nacon Revolution Unlimited ~ RM 655</option>
					<option value='sonyds4'>Sony Dualshock 4 ~ RM 260</option>	
				</optgroup>
				</select>
				
				<p><label>Payment method:</label>
				<input type="radio" name="payment" value="cash" checked="checked" id="cash"><label for="cash">cash</label>
				<input type="radio" name="payment" value="credit" checked="checked" id="credit"><label for="credit">credit card</label>
				</p>
			
			
	</fieldset>

	<p class="buttons">
		<input type="submit" value="Submit Order">
		<input type="reset" value="cancel">
	</p>
	
</form>		
</div>				
</article>
<!-- End of article -->

<!-- Start of footer -->
<?php include ("include/footer.php");?>
<!-- End of footer -->

</body>
<!-- End of body -->

</html>
<!-- End of html -->