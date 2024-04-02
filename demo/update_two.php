<?php
include_once("config.php");

if(isset($_POST['update']))
{
$name=$_POST['name'];
$to_email=$_POST['to_email'];
$title=$_POST['title'];
$content=$_POST['content'];
$date=$_POST['date'];	
$result = mysqli_query($con, "UPDATE users SET to_email='$to_email',title='$title',content='$content',date='$date' WHERE name='$name',");
//header("Location:insert.php");
}
?>

<?php  
$name=$_GET['name'];
$result = mysqli_query($con,"SELECT * FROM users WHERE name= '$name'");
while($resultData = mysqli_fetch_assoc($result))
{
$to_email = $resultData['to_email'];
$title = $resultData['title'];
$content = $resultData['content'];
$date = $resultData['date'];
}
?>
!-----------------------

class demo {
  public function users_insert() {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      global $con; // Assuming $con is a database connection variable
      
      // Basic input validation (you may add more validation as needed)
      $name = isset($_POST['name']) ? $_POST['name'] : '';
      $to_email = isset($_POST['to_email']) ? $_POST['to_email'] : '';
      $title = isset($_POST['title']) ? $_POST['title'] : '';
      $content = isset($_POST['content']) ? $_POST['content'] : '';
      $date = isset($_POST['date']) ? $_POST['date'] : '';
      
      if (empty($name) || empty($to_email) || empty($title) || empty($content) || empty($date)) {
        echo "All fields are required.";
        return;
      }

      $name = isset($_SESSION['lang']) ? $_SESSION['lang'] : '';
      if (empty($name)) {
        $_SESSION['lang'] = 'jay';
        $name = 'jay';
      }

      // Prepare the SQL query for inserting data into the "users" table using prepared statements
      $sql = "INSERT INTO users (name, to_email, title, content, date) VALUES (?, ?, ?, ?, ?)";
      $stmt = $con->prepare($sql);
      $stmt->bind_param("sssss", $name, $to_email, $title, $content, $date);

      // Execute the prepared statement
      if ($stmt->execute()) {
        echo "Values inserted";
      } else {
        echo "Error inserting values: " . $con->error;
      }

      // Close the statement and database connection
      $stmt->close();
      $con->close();
    }
  }

  public function users_update() {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      global $con; // Assuming $con is a database connection variable
      
      // Basic input validation (you may add more validation as needed)
      $name = isset($_POST['name']) ? $_POST['name'] : '';
      $to_email = isset($_POST['to_email']) ? $_POST['to_email'] : '';
      $title = isset($_POST['title']) ? $_POST['title'] : '';
      $content = isset($_POST['content']) ? $_POST['content'] : '';
      $date = isset($_POST['date']) ? $_POST['date'] : '';
      
      if (empty($name) || empty($to_email) || empty($title) || empty($content) || empty($date)) {
        echo "All fields are required.";
        return;
      }

      $name = isset($_SESSION['lang']) ? $_SESSION['lang'] : '';
      if (empty($name)) {
        $_SESSION['name'] = 'jay';
        $name = 'jay';
      }

      // Prepare the SQL query for updating data in the "users" table using prepared statements
      $sql = "UPDATE users SET to_email=?, title=?, content=?, date=? WHERE name=?";
      $stmt = $con->prepare($sql);
      $stmt->bind_param("sssss", $to_email, $title, $content, $date, $name);

      // Execute the prepared statement
      if ($stmt->execute()) {
        echo "Updated";
      } else {
        echo "Error updating data: " . $con->error;
      }

      // Close the statement and database connection
      $stmt->close();
      $con->close();
    }
  }
}
!-------------------------------------------------

<?php

$databaseHost = 'localhost';
$databaseName = 'project';
$databaseUsername = 'root';
$databasePassword = '';

$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

error_reporting(E_ALL);

$function = new demo();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] == "users_insert") {
        $function->users_insert();
    } else if ($_POST['action'] == "users_update") {
        $function->users_update();
    } else if ($_POST['action'] == "users_view") {
        $function->users_view();
    } else if ($_POST['action'] == "users_delete") {
        $function->users_delete();
    }
}

class demo
{
    public function users_insert()
    {
        global $con;

        $name = isset($_SESSION['lang']) ? $_SESSION['lang'] : '';
        if (empty($name)) {
            $_SESSION['lang'] = 'jay';
            $name = 'jay';
        }

        $sql = "INSERT INTO users SET name='" . $_POST['name'] . "', to_email='" . $_POST['to_email'] . "', title='" . $_POST['title'] . "', content='" . $_POST['content'] . "', date='" . $_POST['date'] . "'";

        $result = $con->query($sql);
        if ($result) {
            echo "values inserted";
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
        $result = $con->query($sql);

        if ($result) {
            echo "updated";
        }
    }

    public function users_view()
    {
        global $con;

        $sql = "SELECT * FROM users";
        $result = $con->query($sql);

        if ($result) {
            echo "page viewed";
        }
    }

    public function users_delete()
    {
        global $con;

        $name = isset($_SESSION['lang']) ? $_SESSION['lang'] : '';
        if (empty($name)) {
            $_SESSION['name'] = 'jay';
            $name = 'jay';
        }

        $name = $_GET['name'];
        $query = "DELETE FROM users WHERE name='$name'";
        $result = $con->query($query);

        if ($result) {
            echo "deleted";
        } else {
            echo "try again!";
        }
    }
}
--------------

   $name = $_POST['name'];
   
   public function users_update()
		{ 	
		global $con;
		
		 if(isset($_POST['update']))
         
			$sql = "UPDATE users set name='" . $_POST['name'] . "', to_email='" . $_POST['to_email'] . "', title='" . $_POST['title'] . "', content='" . $_POST['content'] . "', date='" . $_POST['date'] . "' ";
		  }
		  if (isset($_GET["name"])) 
		    {
					  
                  $name= $_GET["name"];
				  $query = "SELECT * FROM users WHERE name=$name";
				  print_r($query);
					$result = $con->query($sql);

					if ($result)
					{
						echo "updated";
					}
					else
					{
						echo "try it";
					}
		    }
		}