<?php include 'config.php'; ?>
<center>
<head><u><h3> details page</h3></u></head>
<br>
<a href="form.php">home</a>
	<br>


<table  border="1px" cellspacing="0" cellpadding="10px" >
   <tr>
      <th> No </th>
      <th> name </th>
      <th> to_email</th>
	  <th> title </th>
	  <th> content </th>
	  <th> datetime </th>
	  <th colspan="2">action</th>
   </tr>
</center>
<br/>
<?php  
$query="SELECT*FROM users";
$data=mysqli_query($con,$query);
$result=mysqli_num_rows($data);
if($result)
{
   while($row=mysqli_fetch_array($data))
   {
      ?>
      <tr>  
            <td> <?php echo $row['no'];  ?></td>                     
            <td> <?php echo $row['name'];  ?></td>                     
            <td> <?php echo $row['to_email'];  ?></td>
            <td> <?php echo $row['title'];  ?></td>
			<td> <?php echo $row['content'];  ?></td>
			<td> <?php echo $row['date'];  ?></td>
			<td><a href= "update.php?name=<?php echo $row['no']; ?>">edit</a></td>	
            <td><a onclick="return confirm(' delete the form?')" href= "demo1.php?name=<?php echo $row['name']; ?>">delete</td>
		</tr>
			
	<?php
   }
}
else
{
   ?> 
   <tr> 
       <td> no record found </td>
   </tr> 
   <?php
}
?>
</table>
