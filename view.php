<html>
<head>

</head>
<body>
  <?php
    include "dbconn.php";
    $sql1 = "SELECT * FROM student";
    $sqlrun = mysqli_query($dbconn,$sql1);

    $i = 1;
    while ($row = mysqli_fetch_assoc($sqlrun))
    {
      echo "Student ".$i." details";
      echo "<br>Name : ".$row["studName"];
      echo "<br>ID : ".$row["studID"]."<p>";
      $i++;
    }

    mysqli_close($dbconn);
   ?>
</body>
</html>
