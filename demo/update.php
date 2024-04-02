<?php
$databaseHost = 'localhost';
$databaseName = 'project';
$databaseUsername = 'root';
$databasePassword = '';

$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
 ?>

<?php  
$name=$_GET['name'];
$result = mysqli_query($con,"SELECT * FROM users WHERE name= '$name'");
while($resultData = mysqli_fetch_assoc($result))
{
$to_email = $resultData['to_email'];
$title = $resultData['title'];
$content = $resultData['content'];
$date = $resultData['date'];
}
?>

<!DOCTYPE html>
<html>
<center>
<head>
    <title>Update Record</title>
</head>
<body>
	
	<form method="post" action="demo1.php">
	 <input type="hidden" name="no" value="<?php echo $row["no"]; ?>">
	 <br>
     Name:
	<input type="text" name="name" value="<?php echo $name; ?>">
	  <br>
	To_email:
	<input type="to_email" name="to_email" value="<?php echo $to_email; ?>">
	  <br>
	Title:
     <input type="text" name="title" value="<?php echo $title; ?>">
	   <br>
    Content:
    <input type="text" name="content" value="<?php echo $content; ?>">
	  <br>
    remainder_date:
     <input type="date" name="date" value="<?php echo $date= date('d-m-y', strtotime($date)); ?>">
	   <br>
	<input type="hidden" name="action" value = "users_update">
	<br>
   
	 <input type="submit" name="update" value="Update">
	 
	</form>

</body>
</center>
</html>

 <?php
if(isset($_POST['update']))
{
$name=$_POST['name'];
$to_email=$_POST['to_email'];
$title=$_POST['title'];
$content=$_POST['content'];
$date=$_POST['date'];	
$result = mysqli_query($con, "UPDATE users SET name='$name', to_email='$to_email',title='$title',content='$content',date='$date' WHERE no='$no'");
header("Location:demo1.php");
}
?>
