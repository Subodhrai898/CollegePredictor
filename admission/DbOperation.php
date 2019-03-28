<?php
ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  class DbOperation
  {

   private $con;

function __construct()
    {
        //Getting the DbConnect.php file
        require_once dirname(__FILE__) . '/Dbconnect.php';
 
        //Creating a DbConnect object to connect to the database
        $db = new DbConnect();
 
        //Initializing our connection link of this class
        //by calling the method connect of DbConnect class
        $this->con = $db->connect();
       
    }
   //In PHP prepare function is of the class mysqli
    //bind also

    //inheritance is same like java using extend function
    public function createTableBranch()
    {
    	$brance = "CSE";
      $stmt = "CREATE TABLE  CSE (
    ID int,
    GN int,
    ST int,
    OBC int);";
   $this->con->query($stmt);
  $stmt = "CREATE TABLE  ME (
    ID int,
    GN int,
    ST int,
    OBC int);";
  $this->con->query($stmt);
$stmt = "CREATE TABLE  EE (
    ID int,
    GN int,
    ST int,
    OBC int);";
  $this->con->query($stmt);
  $stmt = "CREATE TABLE  ECE (
    ID int,
    GN int,
    ST int,
    OBC int);";
  $this->con->query($stmt);
  $stmt = "CREATE TABLE  CE (
    ID int,
    GN int,
    ST int,
    OBC int);";
  $this->con->query($stmt);

  $stmt = "CREATE TABLE  College (
    ID int,
    Name varchar(10),
    Location varchar(10),
    Type varchar(10),
    Rate int);";
  $this->con->query($stmt);
   

    }


public function randomID()
{  $digits = 5;
     $samp = 12345;  
       while(1){
       $samp = rand(pow(10, $digits-1), pow(10, $digits)-1);
        $stmt = $this->con->prepare("SELECT ID from College WHERE ID = ?");
        $stmt->bind_param("i",$samp);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        if($num_rows==0)
        {
          echo "gkl";
          break;
        }
        
}
return $samp;
}
   public function addCollege($cname,$clocation,$ctype,$crate)
    {
      $id = $this->randomID();
     $stmt = $this->con->prepare("INSERT INTO College
     VALUES(?,?,?,?,?)"
      );
    $stmt->bind_param("isssi",$id,$cname,$clocation,$ctype,$crate);

           if($stmt->execute())
                  return $id;
              
              return 0;

    }

    public function addbranchCS($id,$gn,$obc,$st)
    {
          $stmt = $this->con->prepare("INSERT INTO CSE VALUES(?,?,?,?)"
      );   
$stmt->bind_param("iiii",$id,$gn,$st,$obc);

             echo $gn;
          if($stmt->execute())
          {
            echo "ADEDEDBR";
                  return 1;
           }  
           echo "NO"; 
              return 0;

    }
    public function addbranchME($id,$gn,$obc,$st)
    {
          $stmt = $this->con->prepare("INSERT INTO ME VALUES(?,?,?,?)"
      );   
$stmt->bind_param("iiii",$id,$gn,$st,$obc);

          if($stmt->execute())
          {
            echo "ADEDEDBR";
                  return 1;
           }   
              return 0;

    }
    public function addbranchCE($id,$gn,$obc,$st)
    {
          $stmt = $this->con->prepare("INSERT INTO CE VALUES(?,?,?,?)"
      );   
$stmt->bind_param("iiii",$id,$gn,$st,$obc);

          if($stmt->execute())
          {
            echo "ADEDEDBR";
                  return 1;
           }   
              return 0;

    }
    public function addbranchEC($id,$gn,$obc,$st)
    {
          $stmt = $this->con->prepare("INSERT INTO ECE VALUES(?,?,?,?)"
      );   
$stmt->bind_param("iiii",$id,$gn,$st,$obc);

          if($stmt->execute())
          {
            echo "ADEDEDBR";
                  return 1;
           }   
              return 0;

    }



    public function resultbasic($br,$cat,$rank)
    {
      $cat = $br.".".$cat;
      $net = $br."."."ID";
       
       $sql = "SELECT Name, Location,Rate,Type FROM College JOIN ".$br." ON College.ID=".$net." WHERE ".$cat."<".$rank;
       
      $result = $this->con->query($sql);
      




        return $result;



    }




   



  }