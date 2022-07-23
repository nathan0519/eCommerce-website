<?php
echo '
	<header>
	<nav id="menu-nav">
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<img id="menuicon" src="images/menu.icon.png" alt="menu">
		</label>
		<label class="logo"><a href="index.php"><img src="images/logo.png" alt="logo"></a></label>
		<ul class="hnav">
			<li><a href="index.php">Home</a></li>
		
			<li class="dropdown">
				<div onclick="showList()" class="dropbtn">PRODUCTS &#x25BE;</div>
				<div id="myDropdown" class="dropdown-list">
					<a href="product1.php">Gaming Keyboards</a>
					<a href="product2.php"> Gaming Mouse</a>
					<a href="product3.php"> Gaming Controller</a>
				</div>
			</li>
		
			<li><a href="enquiry.php">Enquiry</a></li>
			<li><a href="feedback.php">Feedback</a></li>
			<li><a href="order.php">Order</a></li>
		</ul>
	</nav>
	</header> ';
?>