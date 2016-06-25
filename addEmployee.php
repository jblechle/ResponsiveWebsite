


<html>
	<head>
		<title>Add Employee</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="CurrentOrders.php">CEO Admin</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<!-- <li> -->
									<li><a href="adminEmployee.php">Employee</a></li>
									<li><a href="admin.php">Admins</a></li>
									<li><a href="OrderHistory.php">Order History</a></li>
									<li class="break"></li>
									<li><a href="CurrentOrders.php">Current Orders</a></li>
									<li><a href="adminrestaurants.php">Restaurants </a></li>
								</ul>
							</nav>

					</div>

					<!-- Hero -->
						<section id="hero" class="container">
							<header>
								<h2>Add Employee</h2>
							</header>
						</section>

				</div>

				<form action='addScript.php' method='post'>
				First Name: <input type='text' name='Fname'><br>
				Last Name: <input type='text' name='Lname'><br>
				Username: <input type='text' name='Username'><br>
				Password:<input type='text' name='Password'><br>
				PhoneNum:<input type='text' name='PhoneNum'><br>
				SSN:<input type='text' name='SSN'><br>
				Address:<input type='text' name='Address'><br>
				Age:<input type='text' name='Age'><br>
				Gender:<input type='text' name='Gender'><br>
				<br>
				<input type='submit' name='Submit' value='Submit' />
				</form>
	
			
		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
