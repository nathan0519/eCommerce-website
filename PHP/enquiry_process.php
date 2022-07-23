<!DOCTYPE html>
<!-- Start of html -->
<html lang="en">
	<!-- Description: Creating Web application -->
	<!-- Author: Nathan Yong Hao Woei -->
	<!-- Date: 16 June 2020 -->

	
<head>

<title>Panda Tech | Enquiry</title>
	<meta charset="utf-8">
	<meta name="author" content="Lim Yuan Shen">
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

<h1 id="hstyle1">Enquiry About</h1>

<aside>
<?php

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST["p_email"];
$saddress = $_POST["saddress"];
$city = $_POST["p_city"];
$state = $_POST["p_state"];
$pcode = $_POST["p_code"];
$phone_no = $_POST["phone_number"];
$product = $_POST["product"];
$comment = $_POST["comments"];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// checking first name if the value is empty print the error message
	if (empty($_POST["first_name"])) {
		echo "First name is required";
	} 
	else{

  // this is use to call the function test_input()
		$fname = test_input($_POST["first_name"]);
		// if the string length exceed 25 characters then print the error message
		if (strlen($fname) > 25 ){
			echo "Your first name cannot exceed 25 characters. ";
		}
    // check if first name only contains letters and whitespace else print the error messasge
		if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
			echo "Please input only alphabet characters for first name. ";
		}
	}
	// checking last name if the value is empty print the error message
	if (empty($_POST["last_name"])) {
		echo "Last name is required";
	} 
	else{
		// this is use to call the function test_input()
		$lname = test_input($_POST["last_name"]);
		// if the string length exceed 25 characters then print the errormessage
		if (strlen($lname) > 25 ){
			echo "Your last name cannot exceed 25 characters. ";
		}
    // check if last name only contains letters and whitespace else print the error messasge
		if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
			echo "Please input only alphabet characters for last name. ";
		}
	}
	// checking email
	if (empty($_POST["p_email"])) {
		echo "Email is required";
	} 
	else{
		// this is use to call the function test_input()
		$email = test_input($_POST["p_email"]);
		// check the input pattern, if the value are not equal to the pattern then print the error message
		if (!preg_match("/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-za-zA-Z0-9.-]{1,4}$/",$email)) {
			echo "Please enter a valid email address. ";
		}
	}
	
	// checking address
	if (empty($_POST["saddress"])) {
		echo "Address is required";
	} 
	else{
		// this is use to call the function test_input()
		$saddress = test_input($_POST["saddress"]);
		// if the input string length is more than 40 characthers print the error message
		if (strlen($saddress) > 40 )
		echo "Please enter a valid street address. ";
		}
		
		// checking city
	if (empty($_POST["p_city"])) {
		echo "City is required. ";
	} 
	else{
		// this is use to call the function test_input()
		$city = test_input($_POST["p_city"]);
		// if the input string length is more than 25 characthers print the error message
		if (strlen($city) > 25 ){
		echo "Please enter a valid city. ";
		}
	}
		// checking state
		//if the value is empty print the error message
	if (empty($_POST["p_state"])){
		echo "Please select a state.";	
	}
		// checking postcode
		//if the value is empty print the error message
	if (empty($_POST["p_code"])) {
		echo "Postcode is required. ";
	}
	else{
		// this is use to call the function test_input()
		$pcode = test_input($_POST["p_code"]);
		//if the input length is not equal to 5 print the error message
		if (strlen($pcode) != 5 ){
		echo "Please enter a valid postcode.\n";}
	}
		 // checking phone number
		 //if the value is empty print the error message
	if (empty($_POST["phone_number"])){
		echo "Phone number is required. ";
	}
	else{
		// this is use to call the function test_input()
		$phone_no = test_input($_POST["phone_number"]);
		//if the input length is more than 10 or less than 9 print the error message
		if (strlen($phone_no) > 10 ||strlen($phone_no) <9 ){
		echo "Please enter a valid phone number.";}
	}
		// checking product
		//if the value is empty print the error message
	if (empty($_POST["product"])){
		echo "Please select a product which you would like to enquire about. ";
	}
	
	
}
// this is function test_input() 
function test_input($data) {
  $data = trim($data);	// trim the extra space, tab and newline 
  $data = stripslashes($data); //Remove backslashes 
  $data = htmlspecialchars($data); //used to encode user input on a website so that users cannot insert harmful HTML codes into a site
  return $data;
}
// the information above is reference to https://www.w3schools.com/php/php_form_validation.asp

//Create database
$servername = "localhost";
$username = "root"; 
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
// if connection failed print the error message
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}

// Create database named enquiry_db
$sql = "CREATE DATABASE Enquiry_DB";
// if successful then its true else false
if (mysqli_query($conn, $sql)){
	true;
} else{
	false;
}
// close the database
mysqli_close($conn);
// end of creating database
// the information above is reference to https://www.w3schools.com/php/php_mysql_create.asp

$conn = null;
// start of creating table for database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Enquiry_DB";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/*creating table for the id,
firstname, lastname, and accept maximum 25 character only
email accept maximum 50 character only
phonenumber for accepting 10 integer
streetaddress accept maximum 40 character only
city and state accept maximum 20 character only
postcode accept 5 integer
product can only accept maximum 50 characters
comment can accept maximum 200 characters only
and also store the current date and time*/
$sql = "CREATE TABLE enquiry (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(25) NOT NULL,
lastname VARCHAR(25) NOT NULL,
email VARCHAR(50) NOT NULL,
phonenumber INT(10) NOT NULL ,
streetaddress VARCHAR(40) NOT NULL ,
city VARCHAR(20) NOT NULL ,
state VARCHAR(20) NOT NULL ,
postcode INT(5) NOT NULL ,
product VARCHAR(50) NOT NULL ,
comment VARCHAR(200) NOT NULL ,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
)";

if ($conn->query($sql) === TRUE) {
  true;
} else {
  false;
}
// insert the value into the datebase
	$sql = "INSERT INTO enquiry (firstname, lastname, email, phonenumber, streetaddress, city, state, postcode, product, comment)
	VALUES ('$fname', '$lname', '$email', '$phone_no', '$saddress', '$city', '$state', '$pcode', '$product', '$comment')";
	
	// for letting the user know about the result on submitting the enquiry form either its successful or not
	  if (mysqli_query($conn, $sql)) {
	echo "Thank you, enquiry has been submitted succesfully\n";
	} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
?>
</aside>
<article>
<!-- create the table and display the data-->
	<table id="process_table">
			<th>Description</th>
			<th>Value</th>
			<tr><td>First name</td><td><?php echo $fname;?></td></tr>
			<tr><td>Lastname</td><td><?php echo $lname;?></td></tr>
			<tr><td>Email Address</td><td><?php echo $email;?></td></tr>
			<tr><td>Phone Number</td><td><?php echo $phone_no;?></td></tr>
			<tr><td>Street Address</td><td><?php echo $saddress;?></td></tr>
			<tr><td>City</td><td><?php echo $city;?></td></tr>
			<tr><td>State</td><td><?php echo $state;?></td></tr>
			<tr><td>Postcode</td><td><?php echo $pcode;?></td></tr>
			<tr><td>Product</td><td><?php echo $product;?></td></tr>
			<tr><td>Comment</td><td><?php echo $comment;?></td></tr>
		</table>
		
</article>
<!-- End of article -->

<!-- Start of footer -->
<?php include ("include/footer.php");?>
<!-- End of footer -->

</body>
<!-- End of body -->

</html>
<!-- End of html -->