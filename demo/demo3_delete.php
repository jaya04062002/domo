
<?php

			if(isset($_GET['id']))
			{ 
				global $con;
				$id=$_GET['id'];			
				$sql="delete from animal where id='$id'";
				$result = $con->query($sql);
				if($result)
				{
					echo "deleted"; 
				}				
             }
		

?>






