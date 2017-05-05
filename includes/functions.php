<?php
  //Test if there was query error
  function confirm_query($result_set){
    if(!$result_set){
      die("Database query failed.");
    }
  }


  function connectDatabase(){

      static $connection;

      if(!isset($connection)){
          $config=parse_ini_file("../config.ini");
          $connection=mysqli_connect("localhost",$config["username"],$config["password"],$config["database"]);

          if($connection){
              return $connection;
          }else{
              echo mysqli_connect_error();
              return false;
          }
      }else{
          return $connection;
      }

  }

  function close_db($conn){
      if($conn){
          mysqli_close($conn);
      }else{
          echo "<p>Failed to close</p>";
      }
  }



?>
