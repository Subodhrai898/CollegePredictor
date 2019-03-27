<?php
ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
class DbConnect
{
   private $con;

//Class constructor
    function __construct()
    {
 
    }
function connect()
    {
        //Including the config.php file to get the database constants
        include_once dirname(__FILE__) . '/Config.php';
 
        //connecting to mysql database
        $this->con = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
        //Checking if any error occured while connecting
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        //finally returning the connection link 
        return $this->con;
    }

    function close()
    {
    	$this->con->close();
    }


}