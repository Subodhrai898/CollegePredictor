<?php
session_start();
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
        <a class="nav-link" href="#">Search College </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">College List</a>
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
    <div class="col-sm-3 ">
     
    </div>
    <div class="col-sm-6" id="block1">
    <h4 id ='addc'>Search COLLEGE </h4>
    <form >
    <div class="form-group">
     
      <input type="number" class="form-control"  placeholder="RANK" name="rank" id="rank" required>
    </div>
    <div class="form-group">
  
  <select class="form-control" id="br">
    <option name="choice1" value="CSE">CSE</option>
    <option name="choice2" value="ME">ME</option>
    <option name="choice3" value="CE">CE</option>
    <option name="choice4" value="ECE">ECE</option>
  </select>
</div>
   <div class="form-group">
  
  <select class="form-control" id="tr">
    <option name="choice1" value="GN">GN</option>
    <option name="choice2" value="OBC">OBC</option>
    <option name="choice3" value="ST">ST</option>
   
  </select>
</div>
   
    
    
  </form>
  <center><button  class="btn btn-primary" id="hit">Submit</button></center>


     
    </div>
    <div class="col-sm-3 " id="adt">

     
    </div>
  </div>
</div>
<script type="text/javascript">
 $(document).ready(function(){

  $("#hit").click(function()
  {

   $("#adt").append($('#rank').val());



  });
 

});


</script>


</body>
</html>