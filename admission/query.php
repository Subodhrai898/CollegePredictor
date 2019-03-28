<?php

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

 $result = $db->resultbasic($_REQUEST['branch'],$_REQUEST['cat'],$_REQUEST['rank1']);

echo "<table class='table  table-hover'>
    <thead class='table-success'>
      <tr>
        <th>NAME</th>
        <th>Location</th>
        <th>Rate</th>
        <th>Type</th>
      </tr>
    </thead><tbody>";

while($row = $result->fetch_assoc()) {
  
echo "<tr>
        <td>".$row['Name']."</td>
        <td>".$row['Location']."</td>
        <td>".$row['Rate']."</td>
         <td>".$row['Type']."</td>
      </tr>
      ";

}

echo "</tbody>
  </table>";

?>