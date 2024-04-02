<!DOCTYPE html>
<html>
<head> <h3>View Page</h3></head>
<body>
<table  border="1px" cellspacing="0" cellpadding="10px" >
<thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Type</th>
                  <th scope="col">Sound</th>
                  <th scope="col">Action</th>
                </tr>
  </thead>
  </table>
 </body>

</html>


<?php

 if(isset($_POST['search']))
 {
	$query = "SELECT * FROM animal";
	$data=mysqli_query($this->link,$query);
	$result=mysqli_num_rows($data);
	if($result)
	{
	   while($row=mysqli_fetch_array($data))
	   {
		?>
		  <tr>  
				<td> <?php echo $row['id'];  ?></td>                     
				<td> <?php echo $row['name'];  ?></td>                     
				<td> <?php echo $row['type'];  ?></td>                     
				<td> <?php echo $row['sound'];  ?></td>
				<td><a href= "update.php?name=<?php echo $row['id']; ?>">edit</a></td>	
				<td><a onclick="return confirm(' delete the form?')" href= "demo3.php?name=<?php echo $row['id']; ?>">delete</td>
			</tr>
	   <?php	
	   }
	}   
		 if($query)
		 {
			 echo "";
		 }
		 else
		 {
			echo "try again";
		 }
	 }
	else
	{
		echo "error!";
	}	
?>