<?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
if (isset($_SESSION["uid"])) {
	header("location:profile.php");
}
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST["login_user_with_product"])) {
	//this is product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and name of cookie is product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #1C2D59;">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
				<span class="sr-only">navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a><img class="logo"src="images/1.png" alt="logo"></a>
		</div>
	<div class="collapse navbar-collapse" id="collapse">

		<ul class="nav navbar-nav navbar-right">

			<ul class="nav navbar-nav">
				<li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="buybook.php"><span class="glyphicon glyphicon-modal-window"></span>BuyBook</a></li>
				<li><a href="sell.html"><span class="glyphicon glyphicon-book"></span>Sell</a></li>
				 <li>  <a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact us</a>  </li>
			</ul>


			<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
				<div class="dropdown-menu" style="width:400px;">
					<div class="panel panel-success">
						<div class="panel-heading">
							<div class="row">
								<div class="col-md-3">Sl.No</div>
								<div class="col-md-3">Book Image</div>
								<div class="col-md-3">Book Name</div>
								<div class="col-md-3">Price in &#x20B9;</div>
							</div>
						</div>
						<div class="panel-body">
							<div id="cart_product">
							<!--<div class="row">
								<div class="col-md-3">Sl.No</div>
								<div class="col-md-3">Product Image</div>
								<div class="col-md-3">Product Name</div>
								<div class="col-md-3">Price in $.</div>
							</div>-->
							</div>
						</div>
						<div class="panel-footer"></div>
					</div>
				</div>
			</li>
			<!-- <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
				<ul class="dropdown-menu">
					<div style="width:300px;">
						<div class="panel panel-primary">
							<div class="panel-heading">Login</div>
							<div class="panel-heading">
								<form onsubmit="return false" id="login">
									<label for="email">Email</label>
									<input type="email" class="form-control" name="email" id="email" required/>
									<label for="email">Password</label>
									<input type="password" class="form-control" name="password" id="password" required/>
									<p><br/></p>
									<a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
									<a href="customer_registration.php?register=1" style="color:white; list-style:none;">Dont't Have a account</a>
								</form>
							</div>
							<div class="panel-footer" id="e_msg"></div>
						</div>
					</div>
				</ul>
			</li> -->
		</ul>
	</div>
</div>
</div>
<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Customer Login Form</div>
					<div class="panel-body">
						<!--User Login Form-->
						<form onsubmit="return false" id="login">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" required/>
							<label for="email">Password</label>
							<input type="password" class="form-control" name="password" id="password" required/>
							<p><br/></p>
							<a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
								<a href="customer_registration.php?register=1" style="color:white; list-style:none;">Dont't Have a account</a>
						</form>
				</div>
				<div class="panel-footer"><div id="e_msg"></div></div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>
