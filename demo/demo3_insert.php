<?php
include 'demo3_config.php';

if(isset($_POST['submit']))
  {		 
	$id=$_POST['id'];
	$name=$_POST['name'];
	$type=$_POST['type'];
	$sound=$_POST['sound'];

    $sql="INSERT INTO animal VALUES(null,'$name','$type','$sound')";

        if(mysqli_query($con,$sql))
			{
			  echo "<h3>data stored in a database successfully.</h3>";
			}
			else
			{
              echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($con);
			}
 }
?>