<?php

$link=mysqli_connect("localhost","root","","test");

if(isset($_POST['username'])){
$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from users where username='".$username."' AND password='".$password."' limit 1";

$result=mysqli_query($link,$sql);

if(mysqli_num_rows($result)==1){
    header("location: index.html");
}
else{
    echo "Invalid Username and password";
    
}
}




?>








<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script
	src="https://code.jquery.com/jquery-3.4.1.js"
	integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="static/css/projectlogincss.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <a class="navbar-brand" href="index.html">Verdure</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
              <a class="nav-link" href="#">About Us</a>
            </li>
          </ul>
        </div>
	  </nav>
<br><br>
<div class="container">

	<div class="row">
		<div class="col col-3 col-sm-0 col-md-3"></div>
		<div class="col col-12 col-lg-6 col-md-6">
			<h1 id="login">
				Login
			</h1>
			<form action="#" method="POST"> 
			  <div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" name="username">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" name="password"> 
			  </div>
			  <button type="submit" class="btn btn-light">Login</button>
			</form><br>
			<p style="color: white;">Don't have an account, click here to <u><a href="project_signup.php">Sign Up</a></u></p>
		</div>
		<div class="col col-3 col-sm-0 col-md-3"></div>
	</div>
	
</div>

</body>
</html>