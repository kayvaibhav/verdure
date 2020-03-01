<?php

$link=mysqli_connect("localhost","root","","test");


if(isset($_POST['username'])){
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];

$sql="select * from users where username='".$username."' limit 1";
$sql1="INSERT INTO users (Name,username,password) VALUES('$name','$username','$password')";

$result=mysqli_query($link,$sql);
$result2=mysqli_query($link,$sql1);

if(mysqli_num_rows($result)==1){
    echo "User already registered with this email." ;
    
}
else{
    if(($result2)==1)
 {   
     
    header("location: projectlogin.php");
    }

    else
    echo "something wrong!";

} 

}












?>


    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Project Signup</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="static/css/project_signupcss.css">
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
                        <a class="nav-link" href="about_us.html">About Us</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col col-3 col-sm-0 col-md-3"></div>

                <div class="col col-12 col-lg-6 col-md-6">

                    <h1 id="signup">
                        Sign Up
                    </h1>
                    <form method="POST" action="#">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Full Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="name" required>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password Confirmation</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="passwordconfirmation" required>
                            <small id="passwordconfirmation" class="form-text text-muted">Enter the same password as before, for verification.</small>
                        </div>
                        <button type="submit" class="btn btn-light">Sign Up</button>
                    </form><br>
                    <p style="color: white;">Already have an account, click here to <u><a href="projectlogin.php">Login</a></u></p>
                </div>
                <div class="col col-3 col-sm-0 col-md-3"></div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

    </html>