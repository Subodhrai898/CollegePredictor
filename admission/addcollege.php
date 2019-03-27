<?php
// Start the session
ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
 require_once 'DbOperation.php';
 session_start();
 
// session_start();
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: expire.php");
//     exit;
// }$cname = $_POST['cname'];
    
    

 $db = new DbOperation(); 

    
    
 	$cname = $_POST['cname'];
    $clocation = $_POST['clocation'];
    $ctype = $_POST['ctype'];
    $crate = $_POST['crate'];
   
   $t= $db->addCollege($cname,$clocation,$ctype,$crate);
   echo $t;
   if($t!=0)
   {
   	echo "ADDED";
    $_SESSION['ADDED'] = 'ADDED';
   
     $br = 'CSE'; 

    $db->addbranchCS($t,$_POST['csgn'],$_POST['csst'],$_POST['csobc']);
    $br = 'ME'; 

    $db->addbranchME($t,$_POST['megn'],$_POST['mest'],$_POST['meobc']);
      $br = 'ECE'; 

    $db->addbranchEC($t,$_POST['ecgn'],$_POST['ecst'],$_POST['ecobc']);
     $br = 'CE'; 

    $db->addbranchCE($t,$_POST['cegn'],$_POST['cest'],$_POST['ceobc']);


   }
   else
   {
   	echo "NOT ADDED";
    $_SESSION['ADDED'] = 'NOT ADDED';
   }
header("location: admin.php");


 






?>