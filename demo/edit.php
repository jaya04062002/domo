<?php include 'config.php';
$register_id=$_GET['register_id'];
$select="SELECT*FROM user where register_id='$register_id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>

<div>
   <form  action="view.php" method="POST">
       <input  type="hidden"  name="register_id" value="<?php echo $register_id; ?>"><br>  
       Name:<input value="<?php echo $row['name']?>"  type="text"  name="name"><br>
      From_email<input  value="<?php echo $row['from_email']?>" type="email"  name="from_email"><br>
      To_email<input  value="<?php echo $row['to_email']?>" type="email"  name="to_email"><br>
       Title<input value="<?php echo $row['title']?>"  type="text"  name="title"><br>    
      Content<input value="<?php echo $row['content']?>"  type="text"  name="content"><br>    
	   Remainder<input value="<?php echo $row['datetime']?>"  type="datetime"  name="datetime"><br>
       <input type="submit"   name="update_btn" value="update"> 
       <button ><a href=view.php>back</a></button>
</form>
</div>

<?php
if(isset($_POST['update_btn']))
{
$name=$_POST['name'];
$from_email=$_POST['from_email'];
$to_email=$_POST['to_email'];
$title=$_POST['title'];
$content=$_POST['content'];
$datetime=$_POST['datetime'];

$sql="UPDATE user SET name='$name',from_email='$from_email',to_email='$to_email',title='$title',content='$content',datetime='$datetime' WHERE register_id='register_$id'";
  $data = mysqli_query($con,$sql);
  if($data)
      {
        ?> 
        <script type="text/javascript">
        alert ("data updated successfully");
        window.open("http://localhost/project/demo/view.php","_self");
        </script> 
         <?php
      }
  else  
      {
         ?> 
         <script type="text/javascript">
         alert ("try again");
         </script>
         <?php
      }
}
?>