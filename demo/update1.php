<?php
include_once("config.php");

if(isset($_POST['update']))
{
$name=$_POST['name'];
$to_email=$_POST['to_email'];
$title=$_POST['title'];
$content=$_POST['content'];
$date=$_POST['date'];	
$result = mysqli_query($con, "UPDATE users SET to_email='$to_email',title='$title',content='$content',date='$date' WHERE name='$name',");
header("Location:index.php");
}
?>

<?php  
$name=$_GET['name'];
$result = mysqli_query($con,"SELECT * FROM users WHERE name= '$name'");
while($resultData = mysqli_fetch_assoc($result))
{
$to_email = $resultData['to_email'];
$title = $resultData['title'];
$content = $resultData['content'];
$date= $resultData['date'];
}
?>
<html>
<center>
<head> <h4>edit page </h4></head>

<body>
	
	<form name="edit" method="post" action="index.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
			</tr>
			<tr> 
				<td>To_email</td>
				<td><input type="to_email" name="to_email" value="<?php echo $to_email; ?>"></td>
			</tr>
			
			<tr> 
				<td>Title</td>
				<td><input type="text" name="title" value="<?php echo $title; ?>"></td>
			</tr>
			<tr>
			<td>Content</td>
				<td><input type="text" name="content" value="<?php echo $content; ?>"></td>
			</tr>
			<tr> 
				<td>remainder:</td>
				<td><input type="datetime" name="datetime" value="<?php echo $datetime; ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</center>
</html>
