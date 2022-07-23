<!DOCTYPE html>
<!-- Start of html -->
<html lang="en">
	<!-- Description: Creating Web application -->
	<!-- Author: Nathan Yong Hao Woei -->
	<!-- Date: 16 April 2020 -->
	<!-- Validated: 21/4/2020 -->
	
<head>
<title>Panda Tech | Enquiry</title>
	<meta charset="utf-8">
	<meta name="author" content="Nathan Yong Hao Woei">
	<meta name="description" content="Panda Tech Enquiry">
	<meta name="keywords" content="Enquiry, Panda Tech">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2%7COrbitron&display=swap" rel="stylesheet">
	<!--https://fonts.google.com/-->
	<link rel="shortcut icon" type="image/png" href="images/favicon.icon.png">
	<script src="script/script.js"></script>
	<script src="script/enhancements.js"></script>

</head>


<!-- Start of Body -->
<body onload = "storeSub()">

<!-- Start of header -->
<?php include ("include/navigation.php");?>
<!-- End of header -->


<!-- Start of article -->
<article>
<h1 id="hstyle1">Enquiry</h1>
<h2>Hey there! If you have any questions don't hesitate to ask us!</h2>
<div class="form">
<form name="enquiry" id="survey" action="enquiry_process.php" method="post" onsubmit="return validateForm();">
	<fieldset>
		<legend>Customer Information</legend>
		
			<p><label for="fname">First name:</label>
				<input type="text" name="first_name" id="fname" placeholder="First name" >
			</p>
	
			<p><label for="lname">Last name:</label>
				<input type="text" name="last_name" id="lname"  placeholder="Last name" >
			</p>
	
			<p><label for="email">Email Address:</label>
				<input type="email" name="p_email" id="email" placeholder="sample@email.com">
			</p>

			<label for="address">Address:</label>
			<p><input type="text" name="saddress" id="address"  placeholder="Street address">
				<input type="text" name="p_city" id="city" placeholder="City/Town">
			<br/>
			<label for="state">State:</label><br/>
				<select name="p_state" id="state">
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
				<input type="text" name="p_code" id="pcode" placeholder="e.g. 88400">
			</p>
			
			<p><label for="phone_no">Phone number:(+60)</label>
				<input type='text' name='phone_number' id="phone_no" placeholder="e.g. 168992881" >
			</p>
			<p>
             
			<label for="product">Product:</label><br/>
				<select name="product" id="product" onchange= "changeValue();">
				<optgroup label="Gaming Keyboards">
					<script>pList1()</script>
				</optgroup>
				
				<optgroup label="Gaming Mice">
					<script>pList2()</script>
				</optgroup>
				
				
				<optgroup label="Gaming Controller">
					<script>pList3()</script>
				</optgroup>
				</select>
			</p>
				<p><label for="subject" id="subjectLabel">RE: Enquiry on</label>
                   <input type="text" name="product" id="subject">
				</p>
			
			<p><label for="comment">Comments:</label><br>
				<textarea name="comments" id="comment" style="height:200px" placeholder="Your Comments"></textarea>
			</p>
			
			
			
	</fieldset>

	<p class="buttons">
		<input type="submit" value="Submit" >
		<input type="reset" value="Reset" onclick = "resetStorage()">
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