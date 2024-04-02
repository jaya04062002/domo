<?php  

include 'demo1.php'; 
$name=$_GET['name'];
$query="delete from users where name='$name'";
$data=mysqli_query($con,$query);
if($data)
{ echo "delete this details";
}

?>