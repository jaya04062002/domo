<?php
   $function = new demo();
   if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
      if($_POST['action'] == "users_insert")
		{
        $function->users_insert();
        }
		 else if($_POST['action'] == "users_update")
		{
			$function->users_update();        
		}
		
	}

	else  if($_SERVER['REQUEST_METHOD'] === 'GET')
	{
	
        $function->users_delete();
        
	}
	else  if($_SERVER['REQUEST_METHOD'] === 'GET')
	{
        
	}

	class demo 
	{
		$no= isset($no) ? $no: '';
		public function users_insert()
		{
			
		if($_POST)
			{ 
			  global $con;
			   $name = isset($_SESSION['lang']) ? $_SESSION['lang'] : '';		
			   if(empty($name))
				{
					$_SESSION['lang'] = 'jay';
					$name = 'jay';
				}
				$sql = "insert into users set no=$no,name='".$_POST['name']."',to_email='".$_POST['to_email']."', title='".$_POST['title']."',content='".$_POST['content']."',date='".$_POST['date']."'";
	//		   print_r($sql);
			   $result = $con->query($sql);
				if ($result)
					{
					     echo "values inserted";
				    }
			}
		}
	
	
	    public function users_update()
		{
			echo "ok",die();
			global $con;

			$name = isset($_SESSION['lang']) ? $_SESSION['lang'] : '';
			if (empty($name)) {
				$_SESSION['name'] = 'jay';
				$name = 'jay';
			}

			$sql = "UPDATE users SET to_email='" . $_POST['to_email'] . "', title='" . $_POST['title'] . "', content='" . $_POST['content'] . "', date='" . $_POST['date'] . "' WHERE no='" . $_POST['no'] . "'";
			print_r($sql);
			
			$result = $con->query($sql);
			foreach($result as $key => $value)
			{
				echo $key ;
			}
			
		}

		public function users_delete()
		{
			if(isset($_GET['name']))
			{ 
				global $con;
					
				$name=$_GET['name'];			
				$sql="delete from users where no='$no'";
				$result = $con->query($sql);
				if($result)
				{
					echo "deleted"; 
				}				

             }
		}
	}
?>