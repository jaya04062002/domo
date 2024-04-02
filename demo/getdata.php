<!DOCTYPE html>
	<html>
	<head><h3>search the remainder date</h3></head>
	<body>
	<div class="container">
		<form method="post" action="">
		 Reminder Date:
		  <input type="date" name="date" id="date" ><br>
		  <input type="submit" name="search" value="search by date">
		  </form>
	</body>
	</html>
	<table  border="1px" cellspacing="0" cellpadding="10px">
	   <tr>
		  <th> name </th>
		  <th> to_email</th>
		  <th> title </th>
		  <th> content </th>
		  <th> date</th>
	   </tr>
	</center>
	<br>
	<?php  
	include 'config.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
	require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
	require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';
	if(isset($_POST['search']))
	{ 
  
	$date=date_create($_POST['date']);
	$date =  date_format($date,"Y-m-d");
	
	$query="SELECT*FROM users where date='".$date."'";
	$data_run=mysqli_query($con,$query);
	
	   while($row=mysqli_fetch_array($data_run))
	   {
	$mail = new PHPMailer(true);

	$mail->SMTPDebug = 0;

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->Port = 465;

	$mail->mailer = "smtp";

	$mail->Username = 'jayasreevcm23@gmail.com';
	$mail->Password = 'hfcztpteeycjgroi';

	// Sender and recipient address
	$mail->SetFrom('jayasreevcm23@gmail.com', 'jayasree');
	$mail->addAddress($row['to_email']);

	// Setting the subject and body
	$mail->IsHTML(true);
	$mail->Subject = $row['title'];

	$mail->Body = $row['content'];
			   
			  ?>
			  <tr>  
										
					<td> <?php echo $row['name'];  ?></td>                     
					<td> <?php echo $row['to_email'];  ?></td>
					<td> <?php echo $row['title'];  ?></td>
					<td> <?php echo $row['content'];  ?></td>
					<td> <?php echo $row['date'].'  '; 
					if(!$mail->send()) { 
		echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
		} else { 
			echo 'Message has been sent.'; 
		}?>
	    </td>
							 
					</tr>
			<?php
			}
	}
		?>
	</table>
