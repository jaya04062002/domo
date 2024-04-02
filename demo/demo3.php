
<?php
include "demo3_config.php";
//insert

$function=new pen();

if($_SERVER['REQUESET_METHOD']===POST)
{
	$function->insert_query();
}
class pen 
{
	public $res;
	
//	public $id=$_POST['id'];
    public $id;
	public $name;
	public $type;
	public $sound;
	
	public function values()
	{
     $this->id = $id;
     $this->name = $name;
     $this->age = $age;
     $this->email = $email;	 
	}
	public function insert_query()
	{
     if($_POST['id'])
	 {		 
      $query = "INSERT INTO animal (name,age,email) VALUES ('$this->name','$this->age','$this->email')";
//	  print_r($query);
	 }
	
          $this->res = mysqli_query($this->sql,$query);
 
    if($res)
		{ 
     echo "";
    }
	else 
	{ 
     echo "Error: " . $res . "" . mysqli_error($this->link); 
    }
	}
}
?>



<?php
//update
     $id = $_POST['id'];
     $name = $_POST['name'];
     $age = $_POST['age'];
     $email = $_POST['email'];	 
	 
     if($_POST['id']){		 
     $query = "UPDATE animal set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', age='" . $_POST['age'] . "', email='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'"; 
 //    print_r($query);
	 }
 
    $res = mysqli_query($this->sql, $query);
 
    if($res) {
 
     echo "";
 
    } else {
 
     echo "Error: " . $res . "" . mysqli_error($this->link);
 
    }
 
?>
<?php

//edit
 $id = $_POST['id'];
 $query = "SELECT * FROM animal WHERE id='" . $id . "'";
 if($query)
 {
	 echo "";
 }
 else
 {
	echo "try again";
 }
	 
?>

