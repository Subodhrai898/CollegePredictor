<?php
session_start();
if(isset( $_SESSION['udf']))
{



}else
{
  die('INVALID CALL');
}
?>

<html>
<head>
	<title> ADMIN PAGE </title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
	.navbar{ 
    background-color: red;
}
</style>
<link rel="stylesheet" href="main.css">



</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">College Predictor</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="searchc.php">Search College </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Add College</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT</a>
      </li>    
    </ul>
  </div>  

</nav>
<br><br>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 ">
     
    </div>
    <div class="col-sm-6" id="block1">
    <h4 id ='addc'>ADD COLLEGE </h4>
    <form action="addcollege.php" method="POST">
    <div class="form-group">
     
      <input type="text" class="form-control"  placeholder="Name of College" name="cname" required>
    </div>
    <div class="form-group">
     
      <input type="text" class="form-control" placeholder="Location of College" name="clocation" required>
    </div>
   
   <div class="form-group">
     
      <input type="text" class="form-control"  placeholder="Type of College" name="ctype"  required>
    </div>
   <div class="form-group">
     
      <input type="number" class="form-control" placeholder="Rating of College" name="crate" required>
    </div>
   
   <div class="form-group">
     
      <input type="number" class="form-control" placeholder="General CSE" name="csgn" required>
       <input type="number" class="form-control" placeholder="OBC CSE" name="csobc" required>
        <input type="number" class="form-control" placeholder="ST CSE" name="csst" required>
    </div>
    
<div class="form-group">
     
      <input type="number" class="form-control" placeholder="General ME" name="megn" required>
       <input type="number" class="form-control" placeholder="OBC ME" name="meobc" required>
        <input type="number" class="form-control" placeholder="ST ME" name="mest" required>
    </div>

<div class="form-group">
     
      <input type="number" class="form-control" placeholder="General EC" name="ecgn" required>
       <input type="number" class="form-control" placeholder="OBC EC" name="ecobc" required>
        <input type="number" class="form-control" placeholder="ST EC" name="ecst" required>
    </div>
<div class="form-group">
     
      <input type="number" class="form-control" placeholder="General CE" name="cegn" required>
       <input type="number" class="form-control" placeholder="OBC CE" name="ceobc" required>
        <input type="number" class="form-control" placeholder="ST CE" name="cest" required>
    </div>

    <center><button type="submit" class="btn btn-primary">Submit</button></center>
    <br>
    <?php
           echo $_SESSION['ADDED'];


    ?>
  </form>


     
    </div>
    <div class="col-sm-3 ">
     
    </div>
  </div>
</div>



</body>
</html>