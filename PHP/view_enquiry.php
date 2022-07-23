
<!DOCTYPE html>
<!-- Start of html -->
<html lang="en">
	<!-- Description: Creating Web application -->
	<!-- Author: Nathan Yong Hao Woei -->
	<!-- Date: 16 june 2020 -->

	
<head>

<title>Panda Tech | View Enquiry</title>
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
<body>

<!-- Start of header -->
<?php include ("include/navigation.php");?>
<!-- End of header -->
<h1 id="hstyle1">View Enquiry</h1>
<article>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using CONCAT mysql function as it can adds two or more expressions together.
    $query = "SELECT * FROM `enquiry` WHERE CONCAT(`id`, `firstname`, `lastname`, `email`, `phonenumber`, `streetaddress`, `city`, `state`, `postcode`, `product`, `comment`, `reg_date`) LIKE '%".$valueToSearch."%'";
	// calling the function filterTable() and show the searching results
    $search_result = filterTable($query);

}
 else {
	 // to display all the value
    $query = "SELECT * FROM `enquiry`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{	//connecting to the database
    $connect = mysqli_connect("localhost", "root", "", "Enquiry_DB");
	// if fail to connect print out the error message
	  if(!$connect){
		die("Connection failed: " . mysqli_connect_error());
} 
	// retrieving the results from the database
    $filter_Result = mysqli_query($connect, $query);
	//return the results
    return $filter_Result;
}

?>
        
        <form class="filter" action="view_enquiry.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Search">
            <input type="submit" name="search" value="Filter">
			<input type="submit" name="reset" value="Reset"><br><br>
            
            <table id="process_table">
                <tr>
                    <th>Id</th>
					<th>First name</th>
					<th>Last name</th>
					<th>Email Address</th>
					<th>Phone Number</th>
					<th>Street Address</th>
					<th>City</th>
					<th>State</th>
					<th>Postcode</th>
					<th>Product</th>
					<th>Comment</th>
                </tr>
		
      <!-- populate table from mysql database -->
	  <!-- creating a while loop for display the data from database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
					<!-- to print out the data-->
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['lastname'];?></td>
                    <td><?php echo $row['email'];?></td>
					<td><?php echo $row['phonenumber'];?></td>
					<td><?php echo $row['streetaddress'];?></td>
					<td><?php echo $row['city'];?></td>
					<td><?php echo $row['state'];?></td>
					<td><?php echo $row['postcode'];?></td>
					<td><?php echo $row['product'];?></td>
					<td><?php echo $row['comment'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
</article>
<!-- End of article -->

<!-- Start of footer -->
<?php include ("include/footer.php");?>
<!-- End of footer -->

</body>
<!-- End of body -->

</html>
<!-- End of html -->