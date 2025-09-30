<?php 
if(isset($_REQUEST['subject'])&&($_REQUEST['subject']!='')&&isset($_REQUEST['name'])&&($_REQUEST['name']!='')&&isset($_REQUEST['email'])&&($_REQUEST['email']!='')&&isset($_REQUEST['doorsize'])&&($_REQUEST['doorsize']!='')&&isset($_REQUEST['message'])&&($_REQUEST['message']!='')&&isset($_REQUEST['doorcolor'])&&($_REQUEST['doorcolor']!=''))
{		$to = 'abdullah.ali@gminns.com'; 
		
		// subject
		$subject = 'New Contact Us Request';
		
		// message
		$message = '
		<html>
		<head>
		<title>Doors In Motion : Contact Form</title>
		</head>
		<body>
		<p>Dear Admin, an inquiry has been submitted on contact us form in Doors In Motion webiste.<br/>URL of Contact Us Form: http://samples.handysites.com.au/final/new/doors-in-motion.html#contactus 

</p>
		<p>Details of inquiry are attacted below for your reference.</p>
		<p>Subject: '.$_REQUEST['subject'].'<br/>
		Name : '.$_REQUEST['name'].'<br/>Email : '.$_REQUEST['email'].'
		<br/>Door Size : '.$_REQUEST['doorsize'].'<br/>Door Color : '.$_REQUEST['doorcolor'].'
		<br/>Message : '.$_REQUEST['message'].'
		</p>
		
		<br/>Warm Regards<br/> DIM Team</p>
										
		</body>
		</html>
		';
		
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		// Additional headers
		$headers .= 'From: Handysites <support@handysites.com.au>' . "\r\n";
		
		// Mail it
		mail($to, $subject, $message, $headers);
		//header("location:doors-in-motion.html#contactus");
}
		?>