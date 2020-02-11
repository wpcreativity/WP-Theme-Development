<?php
/* Template Name: finish later admission */
//get_header();
session_start();

	/*======= important====*/

	// first download phpmailer in project folder package from composer.

	//command=> composer require phpmailer/phpmailer

	// Import PHPMailer classes into the global namespace
	// These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	// Load Composer's autoloader
	require 'vendor/autoload.php';
	// Instantiation and passing `true` enables exceptions
?>

<?php
global $wpdb;

if($_REQUEST['action']=='aboutform'){

	if($_REQUEST['email']!=''){

		$first_name=$_REQUEST['first_name']?$_REQUEST['first_name']:"NA";
		$last_name=$_REQUEST['last_name']?$_REQUEST['last_name']:"NA";
		//$email_confirmation=$_REQUEST['email_confirmation']?$_REQUEST['email_confirmation']:"NA";
		$email=$_REQUEST['email']?$_REQUEST['email']:"NA";
		$country=$_REQUEST['country']?$_REQUEST['country']:"NA";
		$is_military=$_REQUEST['is_military']?'YES':"NO";
		$phone=$_REQUEST['phone']?$_REQUEST['phone']:"NA";
		$address=$_REQUEST['address']?$_REQUEST['address']:"NA";
		$zipcode=$_REQUEST['zipcode']?$_REQUEST['zipcode']:"NA";
		$city=$_REQUEST['city']?$_REQUEST['city']:"NA";
		$state=$_REQUEST['state']?$_REQUEST['state']:"NA";
		$degree_type=$_REQUEST['degree_type']?$_REQUEST['degree_type']:"NA";
		$education_type=$_REQUEST['education_type']?$_REQUEST['education_type']:"NA";

		$message="Dear Admin ,<br/><br/>Please find form details below after finish later:<br/><br/>";
	    $message.="<table width='100%' border='1' cellspacing='0' cellpadding='0'>
	      <tr>
	        <td width='20%'><strong>Name:</strong></td>
	        <td width='80%'>".$first_name." ".$last_name."</td>
	      </tr>
	      <tr>
	        <td><strong>Email:</strong></td>
	        <td>".$email."</td>
	      </tr>
	      <tr>
	        <td><strong>Country:</strong></td>
	        <td>".$country."</td>
	      </tr>
	      <tr>
	        <td><strong>Have you or your spouse ever served in the military?:</strong></td>
	        <td>".$is_military."</td>
	      </tr>
	      <tr>
	        <td><strong>Phone:</strong></td>
	        <td>".$phone."</td>
	      </tr>
	      <tr>
	        <td><strong>Address:</strong></td>
	        <td>".$address."</td>
	      </tr>
	      <tr>
	        <td><strong>Zipcode:</strong></td>
	        <td>".$zipcode."</td>
	      </tr>
	      <tr>
	        <td><strong>City:</strong></td>
	        <td>".$city."</td>
	      </tr>
	      <tr>
	        <td><strong>State:</strong></td>
	        <td>".$state."</td>
	      </tr>
	      <tr>
	        <td><strong>Degree Type:</strong></td>
	        <td>".$degree_type."</td>
	      </tr>
	      <tr>
	        <td><strong>Education:</strong></td>
	        <td>".$education_type."</td>
	      </tr>
	    </table>";

	    $message.="<br/><br/><strong>Warm Regards,</strong><br/>";         
	    $message.="<br/><strong>Team Customer Support</strong><br/>";
	    $message.="Delmon Medical College";   


		$mail = new PHPMailer(true);

		try {
		    //Server settings
		    $mail->SMTPDebug = 0;      

		    // 0 = off (for production use, No debug messages)
			// 1 = client messages
			// 2 = client and server messages
		                                 // Enable verbose debug output
		   // $mail->isSMTP();                                            // Set mailer to use SMTP
		    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $mail->Username   = 'amit.xatcovis@gmail.com';                     // SMTP username
		    $mail->Password   = 'xatcovis@#2019';                               // SMTP password
		    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
		    $mail->Port       = 587;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('automation@frcoder.net', 'Delmon Medical College');
		    //$mail->addAddress("neharika@frcoder.com");
		    $mail->addAddress("lamar@frcontent.com");
		    //$mail->addAddress('ellen@example.com');               // Name is optional
		    //$mail->addReplyTo('info@example.com', 'Information');
		    $mail->addCC('neharika@frcoder.com');
		    //$mail->addBCC('bcc@example.com');

		    // Attachments
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    // Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Your Admission form data';
		    $mail->Body    = $message;
		    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		    if($mail->send()){
		    	$response = array('status' => true, 'redirect'=>get_site_url().'/admissions', 'message' => '<p class="alert alert-success">Successfully completed.</p>');
	        	echo json_encode($response);
		    }

		} catch (Exception $e) {
		    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

		    $response = array('status' => false, 'redirect'=>'', 'message' => '<p class="alert alert-danger">'.$mail->ErrorInfo.'</p>');
	        echo json_encode($response);

		}
	}else{

		$response = array('status' => false, 'redirect'=>'', 'message' => '<p class="alert alert-danger">Please fill the email field at least.</p>');
        echo json_encode($response);
	}
}


if($_REQUEST['action']=='educationfrm'){
	if($_SESSION['email']!=''){	
		// step 1 data
		$first_name=$_SESSION['first_name']?$_SESSION['first_name']:"NA";
		$last_name=$_SESSION['last_name']?$_SESSION['last_name']:"NA";
		//$email_confirmation=$_SESSION['email_confirmation'];
		$email=$_SESSION['email']?$_SESSION['email']:"NA";
		$country=$_SESSION['country']?$_SESSION['country']:"NA";
		$is_military=$_SESSION['is_military']?"YES":"NO";
		$phone=$_SESSION['phone']?$_SESSION['phone']:"NA";
		$address=$_SESSION['address']?$_SESSION['address']:"NA";
		$zipcode=$_SESSION['zipcode']?$_SESSION['zipcode']:"NA";
		$city=$_SESSION['city']?$_SESSION['city']:"NA";
		$state=$_SESSION['state']?$_SESSION['state']:"NA";
		$degree_type=$_SESSION['degree_type']?$_SESSION['degree_type']:"NA";
		$education_type=$_SESSION['education_type']?$_SESSION['education_type']:"NA";

		$program=$_REQUEST['program']?$_REQUEST['program']:"NA";
		$college_institution_attended=$_REQUEST['college_institution_attended']?$_REQUEST['college_institution_attended']:"NA";
		$last_attended=$_REQUEST['last_attended']?$_REQUEST['last_attended']:"NA";
		$degree_earned=$_REQUEST['degree_earned']?$_REQUEST['degree_earned']:"NA";
		$college_name=$_REQUEST['college_name']?$_REQUEST['college_name']:"NA";
		$dob=$_REQUEST['dob']?$_REQUEST['dob']:"NA";
		$security_number=$_REQUEST['security_number']?$_REQUEST['security_number']:"NA";
		$hispanic_latino=$_REQUEST['hispanic_latino']?"YES":"NO";
		$racial_category=$_REQUEST['racial_category']?$_REQUEST['racial_category']:"NA";

		$message="Dear Admin ,<br/><br/>Please find form details below after finish later:<br/><br/>";

	    $message.="<table width='100%' border='1' cellspacing='0' cellpadding='0'>
	      <tr>
	        <td width='20%'><strong>Name:</strong></td>
	        <td width='80%'>".$first_name." ".$last_name."</td>
	      </tr>
	      <tr>
	        <td><strong>Email:</strong></td>
	        <td>".$email."</td>
	      </tr>
	      <tr>
	        <td><strong>Country:</strong></td>
	        <td>".$country."</td>
	      </tr>
	      <tr>
	        <td><strong>Have you or your spouse ever served in the military?:</strong></td>
	        <td>".$is_military."</td>
	      </tr>
	      <tr>
	        <td><strong>Phone:</strong></td>
	        <td>".$phone."</td>
	      </tr>
	      <tr>
	        <td><strong>Address:</strong></td>
	        <td>".$address."</td>
	      </tr>
	      <tr>
	        <td><strong>Zipcode:</strong></td>
	        <td>".$zipcode."</td>
	      </tr>
	      <tr>
	        <td><strong>City:</strong></td>
	        <td>".$city."</td>
	      </tr>
	      <tr>
	        <td><strong>State:</strong></td>
	        <td>".$state."</td>
	      </tr>
	      <tr>
	        <td><strong>Degree Type:</strong></td>
	        <td>".$degree_type."</td>
	      </tr>
	      <tr>
	        <td><strong>Education:</strong></td>
	        <td>".$education_type."</td>
	      </tr> 
	      <tr>
	        <td><strong>Program:</strong></td>
	        <td>".$program."</td>
	      </tr>

	      <tr>
	        <td><strong>College or institution:</strong></td>
	        <td>".$college_institution_attended."</td>
	      </tr>

	       <tr>
	        <td><strong>Last Attended:</strong></td>
	        <td>".$last_attended."</td>
	      </tr> 
	      <tr>
	        <td><strong>Degree Earned:</strong></td>
	        <td>".$degree_earned."</td>
	      </tr>

	      <tr>
	        <td><strong>College name:</strong></td>
	        <td>".$college_name."</td>
	      </tr>

	       <tr>
	        <td><strong>Date of birth:</strong></td>
	        <td>".$dob."</td>
	      </tr>
	       <tr>
	        <td><strong>Security number:</strong></td>
	        <td>".$security_number."</td>
	      </tr>
	      <tr>
	        <td><strong>Hispanic/latino:</strong></td>
	        <td>".$hispanic_latino."</td>
	      </tr>
	      <tr>
	        <td><strong>Racial category:</strong></td>
	        <td>".$racial_category."</td>
	      </tr>
	    </table>";

	    $message.="<br/><br/><strong>Warm Regards,</strong><br/>";         
	    $message.="<br/><strong>Team Customer Support</strong><br/>";
	    $message.="Delmon Medical College";   


		$mail = new PHPMailer(true);

		try {
		    //Server settings
		    $mail->SMTPDebug = 0;      

		    // 0 = off (for production use, No debug messages)
			// 1 = client messages
			// 2 = client and server messages
		                                 // Enable verbose debug output
		   // $mail->isSMTP();                                            // Set mailer to use SMTP
		    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $mail->Username   = 'amit.xatcovis@gmail.com';                     // SMTP username
		    $mail->Password   = 'xatcovis@#2019';                               // SMTP password
		    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
		    $mail->Port       = 587;                                    // TCP port to connect to

		    //Recipients
		   $mail->setFrom('automation@frcoder.net', 'Delmon Medical College');
		    //$mail->addAddress("neharika@frcoder.com");
		    $mail->addAddress("lamar@frcontent.com");
		   
		    //$mail->addReplyTo('info@example.com', 'Information');
		    $mail->addCC('neharika@frcoder.com');
		    //$mail->addBCC('bcc@example.com');

		    // Attachments
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    // Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Your Admission form data';
		    $mail->Body    = $message;
		    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		    if($mail->send()){
		    	$response = array('status' => true, 'redirect'=>get_site_url().'/admissions', 'message' => '<p class="alert alert-success">Successfully completed.</p>');
	        	echo json_encode($response);
		    }

		} catch (Exception $e) {
		    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

		    $response = array('status' => false, 'redirect'=>'', 'message' => '<p class="alert alert-danger">'.$mail->ErrorInfo.'</p>');
	        echo json_encode($response);

		}
	}else{

		$response = array('status' => false, 'redirect'=>'', 'message' => '<p class="alert alert-danger">Please fill the email field at least from step1 form.</p>');
        echo json_encode($response);
	}	
}


if($_REQUEST['action']=='paymentfrm'){

		if($_SESSION['email']!=''){

		// step 1 data
		$first_name=$_SESSION['first_name']?$_SESSION['first_name']:"NA";
		$last_name=$_SESSION['last_name']?$_SESSION['last_name']:"NA";
		//$email_confirmation=$_SESSION['email_confirmation'];
		$email=$_SESSION['email']?$_SESSION['email']:"NA";
		$country=$_SESSION['country']?$_SESSION['country']:"NA";
		$is_military=$_SESSION['is_military']?"YES":"NO";
		$phone=$_SESSION['phone']?$_SESSION['phone']:"NA";
		$address=$_SESSION['address']?$_SESSION['address']:"NA";
		$zipcode=$_SESSION['zipcode']?$_SESSION['zipcode']:"NA";
		$city=$_SESSION['city']?$_SESSION['city']:"NA";
		$state=$_SESSION['state']?$_SESSION['state']:"NA";
		$degree_type=$_SESSION['degree_type']?$_SESSION['degree_type']:"NA";
		$education_type=$_SESSION['education_type']?$_SESSION['education_type']:"NA";

		$program=$_SESSION['program']?$_SESSION['program']:"NA";
		$college_institution_attended=$_SESSION['college_institution_attended']?$_SESSION['college_institution_attended']:"NA";
		$last_attended=$_SESSION['last_attended']?$_SESSION['last_attended']:"NA";
		$degree_earned=$_SESSION['degree_earned']?$_SESSION['degree_earned']:"NA";
		$college_name=$_SESSION['college_name']?$_SESSION['college_name']:"NA";
		$dob=$_SESSION['dob']?$_SESSION['dob']:"NA";
		$security_number=$_SESSION['security_number']?$_SESSION['security_number']:"NA";
		$hispanic_latino=$_SESSION['hispanic_latino']?"YES":"NO";
		$racial_category=$_SESSION['racial_category']?$_SESSION['racial_category']:"NA";


		if($_REQUEST['payment_method']=='cheque'){

			//step 3 data for cheque
			$payment_method=$_REQUEST['payment_method']?$_REQUEST['payment_method']:"NA";
			//$routing_number=$_REQUEST['routing_number'];
			//$account_number=$_REQUEST['account_number'];
			//$account_holder_name=$_REQUEST['account_holder_name'];
			$billing_address=$_REQUEST['billing_address']?$_REQUEST['billing_address']:"NA";
			$billing_zipcode=$_REQUEST['billing_zipcode']?$_REQUEST['billing_zipcode']:"NA";
			$billing_city=$_REQUEST['billing_city']?$_REQUEST['billing_city']:"NA";
			$billing_state=$_REQUEST['billing_state']?$_REQUEST['billing_state']:"NA";
			$receipt_email=$_REQUEST['receipt_email']?$_REQUEST['receipt_email']:"NA";

		}else if($_REQUEST['payment_method']=='paypal'){

			// step3 data for paypal
			$billing_address=$_REQUEST['pbilling_address']?$_REQUEST['pbilling_address']:"NA";
			$billing_zipcode=$_REQUEST['pbilling_zipcode']?$_REQUEST['pbilling_zipcode']:"NA";
			$billing_city=$_REQUEST['pbilling_city']?$_REQUEST['pbilling_city']:"NA";
			$billing_state=$_REQUEST['pbilling_state']?$_REQUEST['pbilling_state']:"NA";
			$receipt_email=$_REQUEST['preceipt_email']?$_REQUEST['preceipt_email']:"NA";	
		}			

		$message="Dear Admin ,<br/><br/>Please find form details below after finish later:<br/><br/>";

	    $message.="<table width='100%' border='1' cellspacing='0' cellpadding='0'>
	      <tr>
	        <td width='20%'><strong>Name:</strong></td>
	        <td width='80%'>".$first_name." ".$last_name."</td>
	      </tr>
	      <tr>
	        <td><strong>Email:</strong></td>
	        <td>".$email."</td>
	      </tr>
	      <tr>
	        <td><strong>Country:</strong></td>
	        <td>".$country."</td>
	      </tr>
	      <tr>
	        <td><strong>Have you or your spouse ever served in the military?:</strong></td>
	        <td>".$is_military."</td>
	      </tr>
	      <tr>
	        <td><strong>Phone:</strong></td>
	        <td>".$phone."</td>
	      </tr>
	      <tr>
	        <td><strong>Address:</strong></td>
	        <td>".$address."</td>
	      </tr>
	      <tr>
	        <td><strong>Zipcode:</strong></td>
	        <td>".$zipcode."</td>
	      </tr>
	      <tr>
	        <td><strong>City:</strong></td>
	        <td>".$city."</td>
	      </tr>
	      <tr>
	        <td><strong>State:</strong></td>
	        <td>".$state."</td>
	      </tr>
	      <tr>
	        <td><strong>Degree Type:</strong></td>
	        <td>".$degree_type."</td>
	      </tr>
	      <tr>
	        <td><strong>Education:</strong></td>
	        <td>".$education_type."</td>
	      </tr> 
	      <tr>
	        <td><strong>Program:</strong></td>
	        <td>".$program."</td>
	      </tr>

	      <tr>
	        <td><strong>College or institution:</strong></td>
	        <td>".$college_institution_attended."</td>
	      </tr>

	       <tr>
	        <td><strong>Last Attended:</strong></td>
	        <td>".$last_attended."</td>
	      </tr> 
	      <tr>
	        <td><strong>Degree Earned:</strong></td>
	        <td>".$degree_earned."</td>
	      </tr>

	      <tr>
	        <td><strong>College name:</strong></td>
	        <td>".$college_name."</td>
	      </tr>

	       <tr>
	        <td><strong>Date of birth:</strong></td>
	        <td>".$dob."</td>
	      </tr>
	       <tr>
	        <td><strong>Security number:</strong></td>
	        <td>".$security_number."</td>
	      </tr>
	      <tr>
	        <td><strong>Hispanic/latino:</strong></td>
	        <td>".$hispanic_latino."</td>
	      </tr>
	      <tr>
	        <td><strong>Racial category:</strong></td>
	        <td>".$racial_category."</td>
	      </tr>
	    </table>";

	    $message.="<br/><br/><strong>Warm Regards,</strong><br/>";         
	    $message.="<br/><strong>Team Customer Support</strong><br/>";
	    $message.="Delmon Medical College";   


		$mail = new PHPMailer(true);

		try {
		    //Server settings
		    $mail->SMTPDebug = 0;      

		    // 0 = off (for production use, No debug messages)
			// 1 = client messages
			// 2 = client and server messages
		                                 // Enable verbose debug output
		    //$mail->isSMTP();                                            // Set mailer to use SMTP
		    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $mail->Username   = 'amit.xatcovis@gmail.com';                     // SMTP username
		    $mail->Password   = 'xatcovis@#2019';                              // SMTP password
		    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
		    $mail->Port       = 587;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('automation@frcoder.net', 'Delmon Medical College');
		    //$mail->addAddress("neharika@frcoder.com");
		    $mail->addAddress("lamar@frcontent.com");
		    
		    //$mail->addReplyTo('info@example.com', 'Information');
		    //$mail->addCC('cc@example.com');
		    $mail->addBCC('neharika@frcoder.com');

		    // Attachments
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    // Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Your Admission form data';
		    $mail->Body    = $message;
		    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		    if($mail->send()){
		    	$response = array('status' => true, 'redirect'=>get_site_url().'/admissions', 'message' => '<p class="alert alert-success">Successfully completed.</p>');
	        	echo json_encode($response);
		    }

		} catch (Exception $e) {
		    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

		    $response = array('status' => false, 'redirect'=>'', 'message' => '<p class="alert alert-danger">'.$mail->ErrorInfo.'</p>');
	        echo json_encode($response);

		}
	}else{

		$response = array('status' => false, 'redirect'=>'', 'message' => '<p class="alert alert-danger">Please fill the email field at least from Step 1 form.</p>');
        echo json_encode($response);
	}
	
}



?>