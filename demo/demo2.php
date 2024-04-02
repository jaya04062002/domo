<?php
class email
{   
            public $username;
			public $password;
			public $name;
			public $to_mail;
			public $title;
			public $content;
			public $SMTPhost;
			
public function user($username,$password,$name,$to_email,$title,$content,$SMTPhost='smtp.gmail.com')
	{
	include ('config.php');
	$this->username=$username;
	$this->password=$password;
	$this->name=$name;
	$this->to_mail=$to_mail;
	$this->title=$title;
	$this->content=$content;
	$this->SMTPhost=$SMTPhost;
	}
public  function send_email()
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

			$mail->SetFrom('jayasreevcm23@gmail.com', 'jayasree');
		$mail->addAddress($row['to_email']);


		$mail->IsHTML(true);
		$mail->Subject = $row['title'];

		$mail->Body = $row['content'];
				   
			  if($mail->send())
				{
			echo 'Message has been sent.'; 
				}
		

	}
}
?>