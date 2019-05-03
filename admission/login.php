<?php
session_start();
$glu = "";
if(isset($_REQUEST['user']))
{
   
   if($_REQUEST['user']=='admin' && $_REQUEST['pwd']=='123')
   {

    $_SESSION['udf']='tb';
    header('Location: admin.php');
   }
   else
   {
    $glu = 'Invalid';

   }



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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
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
<br>
<div class="container-fluid">
  <div class="row">
     <div class="col-sm-4"></div>
    <div class="col-sm-4" id="block1">
    <h4 id ='addc'>Login </h4>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <div class="form-group">
     
      <input type="text" class="form-control"  placeholder="Username" name="user" id="ranki" required>
    </div>
    <div class="form-group">
     
      <input type="password" class="form-control"  placeholder="password" name="pwd" id="ranki" required>
    </div>

    <center><input class="btn btn-primary" type="Submit" value="Login">
    </center>
   
   <br>
   <?php 
    echo "<p style='color=red'>".$glu."</p>";
   ?>
   
    
    
  </form>
  

     
    </div>
    <div class="col-sm-4 " id="cont">
     
    </div>
    
  </div>
<br>
<br>
  
</div>



</body>
</html>