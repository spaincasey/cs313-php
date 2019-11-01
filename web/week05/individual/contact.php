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
        read();
    }

    /********************************************************
	* AJAX request to read the Job items
	*********************************************************/
	function read() {
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
                data = this.responseText;
                document.getElementById("results").innerHTML = data;
			}
		};
		xhttp.open("GET", "loadData.php" , true);
		xhttp.send();
	}

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
          <div class="col-sm-5">
            <label for="email"><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" id="first_name" required>
          </div>
          <div class="col-sm-5">
            <label for="email"><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" id="last_name" required>
          </div>
        </div>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" id="email" required>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" name="test" id="test" value="Sign Up" />
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
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                         
      </button>
      <a class="navbar-brand" href="HomePage.php">Pannell Construction</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="HomePage.php">Home</a></li>
        <li><a href="jobs.php">Jobs</a></li>
        <li><a href="reviews.php">Reviews</a></li>
        <li class="active"><a href="#">Contact</a></li>
        <li><a href="#" data-toggle="modal" data-target="#signUpModal">Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- <div class="container"> 
  <img src="residential.jpg" alt="Los Angeles">
</div> -->

<div class='jobs'>
  <img src="residential.jpg" alt="Los Angeles">
  <div class='jobs'>
    <h1>Contact Us</h1><hr>
    <h3>We would love to work with you on your next construction project
    <br>contact us and we will get in touch with you as soon as possible</h3>
    <br><hr><br><br>
    <div class="container-fluid">
    <br>
      <div class="row">
        <div class="col-sm-4">
          <h3>EMAIL</h3>
          <br>
          <p>pannel@construction.com</p>
        </div>
        <div class="col-sm-4">
          <h3>PHONE</h3>
          <br>
          <p>555-555-5555</p>
        </div>
        <div class="col-sm-4">
          <h3>ADDRESS</h3>
          <br>
          <p>123 N 456 S 
          <br>Rexburg, ID 83440</p>
        </div>
      </div>
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