<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "cs1104a";
  $dbconn = mysqli_connect($servername, $username,$password,$dbname);
  if (!$dbconn)
  {
    die("Connection Failed : ".mysql_error());
  }
  else
  {

  }
?>
