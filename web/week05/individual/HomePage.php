<!DOCTYPE html>
<html lang="en">
<head>
<?php

require "dbConnect.php";
$db = get_db();
?>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="HomePage.css">
  <!-- <script type="text/javascript">
  function addUser() {
    $('.button').click(function() {
      $.ajax({
        type: "POST",
        url: "some.php",
        data: { name: "John" }
      }).done(function( msg ) {
        alert( "Data Saved: " + msg );
      });
    });

  }
  </script> -->
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
      <form method="post">
      <div class="modal-body">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" name="test" id="test" value="Sign Up" />
      </div>
      </form>
    </div>
  </div>
</div>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Construction Home</h1>      
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
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#signUpModal">Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class='jobs'>

<h1>Database of Jobs</h1>

<?php

$statement = $db->prepare("SELECT description, image FROM Job");
$statement->execute();
// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// $category = $row['category'];
	$description = $row['description'];
	$image = $row['image'];
  echo "<h3>$description<h3>";
  echo "<img src='$image' class='img-responsive' alt='Image'>";
}
?>


</div>

<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>