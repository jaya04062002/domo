<?php
header('Refresh: 3');
 
$setup=array("2023:06:27 02:52:00 am", "2023:06:27 02:53:00 am");
 
$arrlength=count($setup);
 
$timeis=date('Y:m:d h:i:s a', time());
$timem=date('Y:m:d');
 
echo $timeis;
 
$timer=date('Y:m:d h:i:s a', time());
 
for($x=0;$x<$arrlength;$x++)
$mytimer=$setup[$x];
 
if ($timer>=$mytimer)
{
echo "<br><p>It works, email will now be sent.";
echo "<br>";
}
 
?>
date("d/m/Y", strtotime($str));

<?php  
    $orgDate = "2023-09-26";  
    $newDate = date("d-m-Y", strtotime($orgDate));  
    echo $newDate. " (DD-MM-YYYY)";  
?>

<?php
$date    =     new DateTime($source);
$_REQUEST["date"]    =     $date->format('d-m-Y');

echo $_REQUEST["date"];
?>
<?php
 $date = ("today");  
    $date = date("d-m-y", strtotime($date));  
 //   echo $newDate. " (DD-MM-YYYY)";  
  echo $date;
  ?>