<?php
// Start the session
session_start();
require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="HomePage.css">
  <script type="text/javascript">
  window.onload = function() {
    // 
    //   if(isset($_SESSION['name'])){
    //     $name = $_SESSION['name'];
    //     echo "document.getElementById('user').innerHTML = {$name};"
    //     // echo "<li><a href='#'>Welcome {$name}</a></li>";
    //   }
    // ?>
  }
  /********************************************************
	* AJAX request to read the Job items
	*********************************************************/
  
  function addUser() {
    var first = document.getElementById("first_name").value;
    var last = document.getElementById("last_name").value;
    var email = document.getElementById("email").value;
    var url = "addUser.php?fname=" + first + "&lname=" + last + "&email=" + email;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
        // data = this.responseText;
        document.getElementById("result").innerHTML = this.responseText;
			}
		};
		xhttp.open("POST", url , true);
		xhttp.send();
    <?php
      if(isset($_SESSION['name'])){
        $name = $_SESSION['name'];
        echo "document.getElementById('user').innerHTML = {$name};"
        // echo "<li><a href='#'>Welcome {$name}</a></li>";
      }
    ?>
  }
  </script>
</head>
<body>
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" onsubmit="addUser()">
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6">
            <label for="email"><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" id="first_name" required>
          </div>
          <div class="col-sm-6">
            <label for="email"><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" id="last_name" required>
          </div>
        </div>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" id="email" required>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" name="action" value="Sign Up/Sign In" />
        <!-- <div class="row">
          <div class="col-sm-6">
            <input type="submit" class="btn btn-primary" name="action" value="Sign Up/Sign In" />
          </div>
          <div class="col-sm-6">
            <input type="submit" class="btn btn-primary" name="action" value="Sign In" />
          </div>
        </div> -->
      </div>
      </form>
    </div>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="HomePage.php">Pannell Construction</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="jobs.php">Jobs</a></li>
        <li><a href="reviews.php">Reviews</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="#" data-toggle="modal" data-target="#signUpModal">Sign Up/Sign In</a></li>
        <li><a href="#" id="user"></a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="jobs">
<!-- <div class="container">  -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="building1.jpg" alt="Los Angeles">
      </div>

      <div class="item">
        <img src="building2.jpg" alt="Chicago">
      </div>
    
      <div class="item">
        <img src="building3.jpg" alt="New york">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- </div> -->

<!-- <div class="jobs"> -->
  <br><br><br>
  <h1>Our Values</h1><br>
  <div class="row">
    <div class="col-sm-3">
      <h3>QUALITY</h3>
      <p>We deliver quality
      <br>work that we 
      <br>be proud of</p>
    </div>
    <div class="col-sm-3">
      <h3>INTEGRITY</h3>
      <p>We believe that 
      <br>honest work that  
      <br>exceeds our customers
      <br>expectations</p>
    </div>
    <div class="col-sm-3">
      <h3>TRANSPARENCY</h3>
      <p>We are there with
      <br>you every step 
      <br>of the process
      <br>to ensure complete
      <br>transparency </p>
    </div>
    <div class="col-sm-3">
      <h3>AFFORDABILITY</h3>
      <p>We believe in fair
      <br>prices for great  
      <br>work</p>
    </div>
  </div>
</div>

<footer>
  <div class="row">
    <div class="col-sm-4">
      <p>Email - pannel@construction.com</p>
    </div>
    <div class="col-sm-4">
      <p>Phone - 555-555-5555</p>
    </div>
    <div class="col-sm-4">
      <p>Address - 123 N 456 S Rexburg, ID 83440</p>
    </div>
  </div>
</footer>

</body>
</html>