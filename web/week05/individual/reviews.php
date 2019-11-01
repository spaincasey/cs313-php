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
		xhttp.open("GET", "loadReviews.php" , true);
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
        <li class="active"><a href="#">Reviews</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="#" data-toggle="modal" data-target="#signUpModal">Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class='jobs'>
  <div class='jobs'>
    <h1>Customer Reviews</h1>
    <div id="results">
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
</footer>

</body>
</html>