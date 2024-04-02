<?php
include 'config.php';
$name=$_POST['name'];
$to_email=$_POST['to_email'];
$title=$_POST['title'];
$content=$_POST['content'];
$date=$_POST['date'];

$sql="INSERT INTO  users VALUES(null,'$name','$to_email','$title','$content','$date')";
   
	//if(filter_var($to_email, FILTER_VALIDATE_EMAIL)) 
	 //  { 
        if(mysqli_query($con, $sql))
			{
			  echo "<h3>data stored in a database successfully.</h3>";
			}
			else
			{
              echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($con);
			}
/*		}
   else
   {
      echo("$to_email is not a valid email address");
   }
*/
?>