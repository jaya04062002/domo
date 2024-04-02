<?php  
//date change format
   $date = ("today");  
    $date = date("d-m-y", strtotime($date));  
 //   echo $newDate. " (DD-MM-YYYY)";  
  echo $date; 
echo "<br>";  
 $date1 = ("today");
$date1=date("y-m-d",strtotime($date1));
echo $date1;
echo "<br>";

$date=date_create('$date');
echo date_format($date,"Y/m/d H:i:s");

?>
<?php 
//sum of digit values 
$num = 987456;  
$sum=0; $rem=0;  
  for ($i =0; $i<=strlen($num);$i++)  
 {  
  $rem=$num%10;  
   $sum = $sum + $rem;  
   $num=$num/10;  
  }  
 echo "Sum of digits  is $sum";  
 echo "<br>";
 ?>  
 
 <html>
 <body>
 <form method="post">
 enter a number:
 <input type="number" name="number">
 <input type="submit" value="submit">
 </form>
 </body>
 </html>
 <?php
 
 if($_POST)
 {
	$number=$_POST['number'];
	if(($number%2)==0)
	{
	echo "its even";
	}
	else
	{
	echo "its odd";
    }
	echo "<br>";
 }
 ?>
 
 <?php
 if($_POST)
 {
	 $number=$_POST['number'];
	 
	 for($i=2;$i<=$number-1;$i++)
	 {
		if(($number%$i)==0)			
			{
				$value=true;
			}
	if (isset($value) && $value) 			
		{	
          echo "its prime<br>";
		}
		else
		{
		echo "not prime";
		}	 
	 }
 }
 ?>
 
 <?php
 
 $a=10;
 $b=20;
 $c=30;
 
 if($a<$b)
 {
	 echo "a lesser value";
	 echo "<br>";
	 
 }
 if($b=$a)
 {
	 echo "its equal";
	 echo "<br>";
 }
 
 if($a>$b||$c>$b)
 {
	 echo "b is smaller";
	 echo "<br>";
 }
	  else if($a<$c||$a<$b)
	  {
		echo " a is smaller";
		echo "<br>";
	  }
 
 else 
 {
	 echo "c is smaller";
	 echo "<br>";
 }
 ?>
 
 <?php
 
 function jay($value1,$value2)
 {
	 echo "its  $value1 and $value2<br>";
 }
 jay('raj',23);
 jay('ram',34);
 
 ?>
 
 <?php
 function ref(&$str)
 {
	 $str2.="hlo welcome";
 }
 $str="hey!";
 echo $str;
 
 ?>
 
 /*


<?php
//delete

$id = $_GET['id'];
$query = "DELETE FROM animal WHERE id='" . $id . "'";

if($query)
{ ?>
<script type="text/javascript">
  alert('<?php echo $custom_message; ?>');
</script> <?php
}
else{
	echo " try again!.";
}
?>
*