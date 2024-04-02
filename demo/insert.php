<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}

include 'config.php';
$name=$_POST['name'];
$to_email=$_POST['to_email'];
$title=$_POST['title'];
$content=$_POST['content'];
$date=$_POST['date'];

    $date = strtotime($date);
    $date = date('d-m-y', $date);
$sql="INSERT INTO  users VALUES(null,'$name','$to_email','$title','$content','$date')";

        if(mysqli_query($con, $sql))
			{
			  echo "<h3>data stored in a database successfully.</h3>";
			}
			else
			{
              echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($con);
			}

?>