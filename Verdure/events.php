<?php

$link=mysqli_connect("localhost","root","","test");








if(isset($_POST['email'])){
  $email=$_POST['email'];
  $type=$_POST['type'];
  $address=$_POST['address'];
  $date=$_POST['date'];
  $description=$_POST['description'];
  
  $sql2=" INSERT INTO main (email,type,address,date,description) values('$email','$type','$address','$date','$description')";
  
  
  if (mysqli_query($link, $sql2)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql2 . "<br>" . mysqli_error($link);
  }}


  $sql1="select * from main";




$q=mysqli_query($link,$sql1);
    
    
    






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/1.css">
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b53930bf7.js" crossorigin="anonymous"></script>
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <a class="navbar-brand" href="index1.html">Verdure</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="">About Us</a></li>
          </ul>
          </ul>
      <span><a href="projectlogin.php"><i class="fas fa-user"></i> Login</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </nav>



      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <h1 class="heading display-2">Events</h1>
            <hr>
            <ul> <?php while($row=mysqli_fetch_array($q)){echo  " <li class='bg-dark'><p>Description:  "  .$row['description']." <br>Address: ".$row['address']."<br>Date: ".$row['date']."          <br> <button class='btn btn-primary'>Join</button></p></li>";}?>
            </ul>
          </div>
          <div class="col-md-4 column1" id="id1">
            <h3>Want to create event?<br></h3><span><p id="click_here" class="animated pulse infinite delay-3s">Click Here!</p></span>
            <form class="form" method="POST" action="#">
              
              <div class="form-group">
                <label for="title1">Title</label>
                <input type="text" class="form-control" id="title1" name="type">
              </div>
              <div class="form-row">
                <div class="form-group col-lg-12">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></input>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control" id="inputCity" name="city">
                </div>
                <div class="form-group col-md-6">
                  <label for="date">Event Date</label>
                  <input type="date" class="form-control" id="date" name="date">
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    Check me out
                  </label>
                </div>
              </div>
              <button type="submit" href="#" class="btn btn-success animated infinite pulse delay-1s">Create Event</button><br><br>
            </form>
          </div>
        </div>

        

        <script type="text/javascript" src="static/js/3.js"></script>
    
</body>
</html>