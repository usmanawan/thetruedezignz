<?php 
if(isset($_REQUEST['subject'])&&($_REQUEST['subject']!='')&&isset($_REQUEST['name'])&&($_REQUEST['name']!='')&&isset($_REQUEST['email'])&&($_REQUEST['email']!='')&&isset($_REQUEST['message'])&&($_REQUEST['message']!=''))
{		
		if (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
			echo json_encode(['code'=>404, 'msg'=> "Email is not valid"]);
			exit;
		}
		

		$to = 'usmanawan83@gmail.com '; 
		
		// subject chughtai.associates.isb@gmail.com
		$subject = 'New Contact Us Request';
		
		// message
		$message = '
		<html>
		<head>
		<title>TrueDezignz customer contact form : Contact Form</title>
		</head>
		<body>
		<p>Dear Admin, an inquiry has been submitted on contact us form in TrueDezignz customer contact form webiste.<br/>

</p>
		<p>Details of inquiry are attacted below for your reference.</p>
		<p>Subject: '.$_REQUEST['subject'].'<br/>
		Name : '.$_REQUEST['name'].'<br/>Email : '.$_REQUEST['email'].'
		
		<br/>Message : '.$_REQUEST['message'].'
		</p>
		
		<br/>Warm Regards<br/> TrueDezignz Design & Develop</p>
										
		</body>
		</html>
		';
		
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		// Additional headers
		$headers .= 'From: TrueDezignz Design & Develop <thetruedezignz.com>' . "\r\n";
		
		// Mail it
		mail($to, $subject, $message, $headers);
		
		echo json_encode(['code'=>200, 'msg'=> "successs"]);
		//header("location:https://thetruedezignz.com/");
}
		?>