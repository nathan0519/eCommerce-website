<!DOCTYPE html>
<!-- Start of html -->
<html lang="en">
	<!-- Description: Creating Web application -->
	<!-- Author: Lim Yuan Shen -->
	<!-- Date: 16 April 2020 -->
	<!-- Validated:  21/4/2020-->
	
<head>
<title>Panda Tech | About Me 2</title>
	<meta charset="utf-8">
	<meta name="author" content="Lim Yuan Shen">
	<meta name="description" content="Panda Tech About">
	<meta name="keywords" content="profile, about, Panda Tech">
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
	
	<div class="banner">
		<img class="banner-image" src="images/banner.png" alt="banner.jpg">
	</div>
	
<!-- Start of article -->
<article>
	<h1 id="h1style">Lim Yuan Shen</h1>
	<p class="number">101224872</p>
	<p class="course">COS10011 Creating Web Applications</p>
	
	<div class="container">
		<img src="images/profile/lim.jpg" alt="lim" >
		<div class="content">
			<p>Age: 19</p>
			<p>Gender: Male</p>
			<p>Hometown: Kota Kinabelu, Sabah</p>
			<p>Hobbies: Video games, reading</p>
		</div>
	</div>


	<table class="table1">
		<tr>
			<th>Individial Contribution</th>
			<th>Description</th>
		</tr>
		<tr>
			<td>Webpages</td>
			<td>index.html, product1.html, order.html, aboutme2.html, enhancement.html</td>
		</tr>
		<tr>
			<td>CSS</td>
			<td>CSS styling for the webpages above</td>
		</tr>
		<tr>
			<td>Report</td>
			<td>Part of the report writing</td>
		</tr>
	</table>


</article>
<!-- End of article -->


<!-- Start of footer -->
<?php include ("include/footer2.php");?>
<!-- End of footer -->

</body>
<!-- End of body -->

</html>
<!-- End of html -->