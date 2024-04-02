<?php
$databaseHost = 'localhost';
$databaseName = 'project';
$databaseUsername = 'root';
$databasePassword = '';

$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if($con)
{
	echo "connected";
}
?>
<?php if($_settings->chk_flashdata('success')): ?>