
<?php 
	include 'connection.php';

	if(isset($_POST['submit']))
	{
		$user_name = $_POST['user_name'];
		$email_name = $_POST['email'];
		$password = $_POST['pass'];
		$confirm_password = $_POST['c_pass'];
		
		if ($password == $confirm_password) 
		{
			$insert_query = "INSERT INTO `signup`(`username`, `email`, `password`, `confirm_password`) VALUES ('$user_name','$email_name','$password','$confirm_password')";

			$query = mysqli_query($connection, $insert_query);

			if (!$query)
			{
				echo "Something Wrong";
			}
	
		}
		else
		{
			echo "Confirm password are not equal";
		}
	}
?>







<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SIGN UP</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="../CSS/style.css">

</head>
<body>


	<header>
		<div class="navbar">
			<div class="nav-logo border">
				<div class="logo">
					
				</div>
			</div>

			<div class="nav-address border">
				<p class="add-first">Delivered to</p>
				<div class="add-icon">
					<i class="fa-solid fa-location-dot"></i>
					<p class="add-sec">Rangpur District</p>
				</div>				
			</div>

			<div class = "nav-search">
				<select class="search-select">
					<option> All </option>
				</select>
				<input type="password"  class="search-input">

				<div class="search-icon">
					<i class="fa-solid fa-magnifying-glass"></i>
				</div>
			</div>

			<div class="nav-signin border">
				<p><span>Hello, sign in</span></p>
				<p class="nav-second">Account & Lists</p>
			</div>

			<div class="nav-signin border">
				<p><span>Returns</span></p>
				<p class="nav-second">& Orders</p>
			</div>

			<div class="nav-cart border">
				<i class="fa-solid fa-cart-shopping"></i> Cart
			</div>
		</div>

		<div class="panel">
			<div class="panel-all">
				<i class="fa-solid fa-bars"></i>
				All
			</div>
			<div class="panel-ops">
				<p>Today's Deals</p>
				<p>Customer Service</p>
				<p>Registry</p>
				<p>Givt-Cards</p>
				<p>Sell</p>
			</div>
			<div class="panel-deals">
				Shop deals in electronics
			</div>
		</div>
	</header>

	<div class="container">
		<div class="wrapper">
			<span class="bg-animate">				
			</span>

			<div class="form-box sign-up">
				<h2>SIGN UP</h2>
				<form action="sign-up.php" method="post">
					<div class="input-box">
						<input type="text" name ="user_name" required>
						<label for="">UserName</label>
						<i class="fa-solid fa-user"></i>
					</div>

					<div class="input-box">
						<input type="text" name = "email" required>
						<label for="">Email/Contact No</label>
						<i class="fa-solid fa-user"></i>
					</div>

					<div class="input-box">
						<input type="password" name = "pass" required>
						<label for="">Password</label>
						<i class="fa-solid fa-lock"></i>
					</div>

					<div class="input-box">
						<input type="password" name = "c_pass" required>
						<label for="">Confirm Password</label>
						<i class="fa-solid fa-lock"></i>
					</div>

					<button type = "submit" name = "submit" class="btn">SIGN UP</button>
					<div class="logreg-link">
						<p>Already have an account? <a href="log-in.php" class="register-link">LOG IN</a></p>
					</div>
				</form>
			</div>	
			<div class="info-text login">
				<h2>Welcome Back</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus et ad laborum, ut officia nesciunt. </p>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="foot-panel1">
			Back to Top
		</div>

		<div class="foot-panel2">
			<ul>
				<p>Get to know</p>
				<a>Careers</a>
				<a>Blog</a>
				<a>About Amazon</a>
				<a>Investor Relations</a>
				<a>Amazon Devices</a>
				<a>Amazon Science</a>
			</ul>

			<ul>
				<p>Get to know</p>
				<a>Careers</a>
				<a>Blog</a>
				<a>About Amazon</a>
				<a>Investor Relations</a>
				<a>Amazon Devices</a>
				<a>Amazon Science</a>
			</ul>

			<ul>
				<p>Get to know</p>
				<a>Careers</a>
				<a>Blog</a>
				<a>About Amazon</a>
				<a>Investor Relations</a>
				<a>Amazon Devices</a>
				<a>Amazon Science</a>
			</ul>

			<ul>
				<p>Get to know</p>
				<a>Careers</a>
				<a>Blog</a>
				<a>About Amazon</a>
				<a>Investor Relations</a>
				<a>Amazon Devices</a>
				<a>Amazon Science</a>
			</ul>
		</div>

		<div class="foot-panel3">
			<div class="logo-image"></div>
		</div>
	</div>
	
</body>
</html>