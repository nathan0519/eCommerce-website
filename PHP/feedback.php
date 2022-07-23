<!DOCTYPE html>
<!-- Start of html -->
<html lang="en">
	<!-- Description: Creating Web application -->
	<!-- Author: Nathan Yong Hao Woei -->
	<!-- Date: 16 April 2019 -->
	<!-- Validated: 21/4/2020 -->
	


<head>
	<title>Panda Tech | Feedback</title>
	<meta charset="utf-8">
	<meta name="author" content="Nathan Yong Hao Woei">
	<meta name="Description" content="Panda Tech Feedback">
	<meta name="Keywords" content="Panda Tech, feedback">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2%7COrbitron&amp;display=swap" rel="stylesheet">
	<!--https://fonts.google.com/-->
	<link rel="shortcut icon" type="image/png" href="images/favicon.icon.png">
	<script src="script/script.js"></script>
	<script src="script/enhancements.js"></script>
</head>


<!-- Start of body -->
<body>

<!-- Start of header -->
<?php include ("include/navigation.php");?>
<!-- End of header -->



<!-- Start of article -->
<article>
<h1 id="hstyle1">Feedback</h1>
<h2>Please provide your feedback below</h2>
<div class="form">
<form name="feedback" action="mailto:feedback@magicfactory.com" method="post" enctype="text/plain">
	<fieldset>
		<legend>Customer Information</legend>
			<p><label for="name">Name:</label>
				<input type="text" name="name" id="name" size="30" placeholder="Enter name">
			</p>
	
			<p><label for="email">Email Address:</label>
				<input type="text" name="email" id="email" size="20" placeholder="sample@email.com">
			</p>

	</fieldset>
	
	<fieldset>
		<legend>Experience</legend>
			<p><label>Would you use our website again?</label>
				<input type="radio" name="thought" value="yes" id="yes"><label for="yes">Yes</label>
				<input type="radio" name="thought" value="no" id="no"><label for="no">No</label>
			</p>
			
			<p><label>Rate our response speed (1 = Slow, 2 = Moderate, 3 = Fast)</label><br>
				<input type="range" name="efficiency" min="1" max="3" value="1">
			</p>			
			<p><label>Overall Experience:</label>
				<input type="radio" name="rate" value="poor" id="poor"><label for="poor">Poor</label>
				<input type="radio" name="rate" value="moderate"  id="moderate"><label for="moderate">Moderate</label>
				<input type="radio" name="rate" value="good"  id="good"><label for="good">Good</label>
				<input type="radio" name="rate" value="excellent"  id="excellent"><label for="excellent">Excellent</label>
			</p>
			
			<p><label for="comment">Comments:</label><br>
				<textarea name="comment" id="comment" style="height:200px" placeholder="Your Comments"></textarea>
			</p>
			
	</fieldset>

	<p class="buttons">
		<input type="submit" value="Submit Feedback">
		<input type="reset" value="cancel">
	</p>
	
</form>		
</div>
<p id="pstyle2">Thank you for your feedback, your feedback is our opportunity to improve.</p>				
</article>
<!-- End of article -->

<!-- Start of footer -->
<?php include ("include/footer.php");?>
<!-- End of footer -->

</body>
<!-- End of body -->

</html>
<!-- End of html -->