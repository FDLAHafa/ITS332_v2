<?php
  include "dbconn.php";
  if(isset($_POST["submit"]))
  {
      $sName = $_POST["sName"];
      $sID = $_POST["sID"];
      $sPhone = $_POST["sPhone"];

      echo $sName."<br>";
      echo $sID."<br>";
      echo $sPhone."<br>";

      $sql1 = "INSERT INTO student(studID,studName,studPhone) values ('".$sID."','".$sName."','".$sPhone."')";
      $sqlrun = mysqli_query($dbconn,$sql1) or die ("Error : ".mysqli_error($dbconn));
      echo "success";
  }
  mysqli_close($dbconn);
 ?>
<html><body>
<a href="itsEX1.php">go back</a>
</body></html>
