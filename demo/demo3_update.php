<?php
//update
     $id = $_POST['id'];
     $name = $_POST['name'];
     $type = $_POST['type'];
     $sound = $_POST['sound'];	 
	 
     if($_POST['id']){		 
     $query = "UPDATE animal set  name='" . $_POST['name'] . "', type='" . $_POST['type'] . "',sound='" . $_POST['sound'] . "', WHERE id='" . $_POST['id'] . "'"; 
	 }
 
    $result = mysqli_query($con, $query);
 
    if($result) {
 
     echo " updated";
 
    } else {
 
     echo "Error: ";
 
    }
 
?>