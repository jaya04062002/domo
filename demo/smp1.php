<!DOCTYPE html>
<html>
<head><h3>search the remainder date</h3></head>
<body>
<div class="container">
    <form method="post" action="">
	 Reminder Date:
      <input type="date" name="date" id="date" required><br>
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

if(isset($_POST['search']))
{
//use PHPMailer\PHPMailer\PHPMailer; 
//use PHPMailer\PHPMailer\SMTP; 
//use PHPMailer\PHPMailer\Exception; 

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php'; 

$mail = new PHPMailer; 

$mail->isSMTP();                             
$mail->Host = 'jayasreevcm23@gmail.com';            
$mail->SMTPAuth = true;                      
$mail->Username = 'jayasreevcm23@gmail.com';        
$mail->Password = 'hfcztpteeycjgroi';          
$mail->SMTPSecure = 'ssl';                   
$mail->Port = 465;                           
 
 
$mail->setFrom($_POST['to_email']); 
 
$mail->isHTML(true); 
 
$mail->Subject = ($_POST['title']); 

$bodyContent = ($_POST['content']); 

$mail->Body  = $bodyContent; 

if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    echo 'Message has been sent.'; 
}
}