<?php

try {

  $db=new mysqli("localhost","root","","store_db");

} catch (\Exception $e) {
  echo $exc->getTraceAsString();
}

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['msg'])) {

   $name=$_POST['name'];

   $email=$_POST['email'];
   $number=$_POST['number'];
   $msg=$_POST['msg'];

   $is_insert = $db->query("INSERT INTO `contact`(`name`, `number`, `email`, `msg`) VALUES ('$name','$number','$email','$msg')");


  if ($is_insert == True) {
    echo '<script>alert("Thansk  your request submited")</script>';
    exit();
  }



}


 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Contact</title>
    <link rel="stylesheet" href="css/contact.css">

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <body>


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
  					<li><a href="buybook.php"><span class="glyphicon glyphicon-modal-window"></span>Buy Book</a></li>
  					<li><a href="sell.html"><span class="glyphicon glyphicon-book"></span>Sell Book</a></li>
  					 <li>  <a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact us</a>  </li>
  				</ul>


  				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
  					<div class="dropdown-menu" style="width:400px;">
  						<div class="panel panel-success">
  							<div class="panel-heading">
  								<div class="row">
  									<div class="col-md-3">Sl.No</div>
  									<div class="col-md-3">Product Image</div>
  									<div class="col-md-3">Product Name</div>
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
  				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
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
  									</form>
  								</div>
  								<div class="panel-footer" id="e_msg"></div>
  							</div>
  						</div>
  					</ul>
  				</li>
  			</ul>
  		</div>
  	</div>
  </div>



    <section id="contact">

    	<div class="container">
    		<h1>Get In Touch</h1>
    		<div class="row">
    			<div class="user-details">
    				<form class="contact-form"  method="post">
    				<div class="form-group">
    				<input type="text" class="form-control" placeholder="   Your Name.." name="name">
    				</div>
    				<div class="form-group">
    				<input type="number" class="form-control" placeholder="   Phone no." name="number">
    				</div>
    				<div class="form-group">
    				<input type="email" class="form-control" placeholder="   Email.." name="email">
    				</div>
    				<div class="form-group">

    				<textarea class="form-control" rows="4" placeholder="  Message.." name="msg"></textarea>
    				</div>

    				<button type="submit" class="btn">Submit</button>
    				</form>
    			</div>
    			<div class="contact-info">
    				<div class="follow">Vidhya Puram Foundary Nagar Rambagh, Agra</div>
    				<div class="follow">(+91)7862097585</div>
    				<div class="follow">book4u@gmail.com</div>


    				<div class="follow"><label><b>Get Social </b></label>

    				</div>
    			</div>

    		</div>
