<?php 
if(isset($_REQUEST['subject'])&&($_REQUEST['subject']!='')&&isset($_REQUEST['name'])&&($_REQUEST['name']!='')&&isset($_REQUEST['email'])&&($_REQUEST['email']!='')&&isset($_REQUEST['message'])&&($_REQUEST['message']!=''))
{		$to = 'usmanawan83@gmail.com,omairkhan1989@gmail.com  '; 
		
		// subject
		$subject = 'New Contact Us Request';
		
		// message
		$message = '
		<html>
		<head>
		<title>iGotcha customer contact form : Contact Form</title>
		</head>
		<body>
		<p>Dear Admin, an inquiry has been submitted on contact us form in iGotcha customer contact form webiste.<br/>

</p>
		<p>Details of inquiry are attacted below for your reference.</p>
		<p>Subject: '.$_REQUEST['subject'].'<br/>
		Name : '.$_REQUEST['name'].'<br/>Email : '.$_REQUEST['email'].'
		
		<br/>Message : '.$_REQUEST['message'].'
		</p>
		
		<br/>Warm Regards<br/> iGotcha</p>
										
		</body>
		</html>
		';
		
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		// Additional headers
		$headers .= 'From: iGotcha <info@igotchaoutsourcing.com>' . "\r\n";
		
		// Mail it
		mail($to, $subject, $message, $headers);
		header("location:https://igotchaoutsourcing.com/option2/index.html#contactus");
}
		?>