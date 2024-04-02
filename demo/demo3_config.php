<?php 	
	 $databaseHost = 'localhost';
	 $databaseName = 'demo';
	$databaseUsername = 'root';
	 $databasePassword = '';
	
	$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
	
	if($con)
	{
		echo "kk ";
	}
	else
	{
		echo "ERROR!,To check the database connection" ;
	}
	
?>