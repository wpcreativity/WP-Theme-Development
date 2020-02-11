<?php
/* Template Name: submit admission */
//get_header();
session_start();
?>

<?php
global $wpdb;

if($_REQUEST['action']=='aboutform'){

	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
	{
	    $secret = '6LdJesMUAAAAAOQqHa-0oiiZZthaKwTrHzrqwowK';
	    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
	    $responseData = json_decode($verifyResponse);
	    if($responseData->success)
	    {

	    	$_SESSION['first_name']=$_REQUEST['first_name'];
	    	$_SESSION['last_name']=$_REQUEST['last_name'];
	    	$_SESSION['email_confirmation']=$_REQUEST['email_confirmation'];
	    	$_SESSION['email']=$_REQUEST['email'];
	    	$_SESSION['country']=$_REQUEST['country'];
	    	$_SESSION['is_military']=$_REQUEST['is_military'];
	    	$_SESSION['phone']=$_REQUEST['phone'];
	    	$_SESSION['address']=$_REQUEST['address'];
	    	$_SESSION['zipcode']=$_REQUEST['zipcode'];
	    	$_SESSION['city']=$_REQUEST['city'];
	    	$_SESSION['state']=$_REQUEST['state'];
	    	$_SESSION['degree_type']=$_REQUEST['degree_type'];
	    	$_SESSION['education_type']=$_REQUEST['education_type'];
	    	$_SESSION['form_step_1']='yes';
	    	$_SESSION['form_step_2']='no';
	    	$_SESSION['form_step_3']='no';

	        $response = array('status' => true, 'redirect'=>'', 'message' => '<p class="alert alert-success"> You will redirect to step-2</p>');
        	echo json_encode($response);
	    }
	    else
	    {	
	    	$response = array('status' => false, 'redirect'=>'', 'message' => '<p class="alert alert-danger">Robot verification failed, please try again.</p>');
        	echo json_encode($response);
	    }
	}else{
		$response = array('status' => false, 'redirect'=>'', 'message' => '<p class="alert alert-danger">Please first select the captcha!</p>');
        echo json_encode($response);
	}

}

if($_REQUEST['action']=='educationfrm'){

	if($_REQUEST['program']!=''){
	   
	  

		$_SESSION['program']=$_REQUEST['program'];
		$_SESSION['college_institution_attended']=$_REQUEST['college_institution_attended'];
		$_SESSION['last_attended']=$_REQUEST['last_attended'];
		$_SESSION['degree_earned']=$_REQUEST['degree_earned'];
		$_SESSION['college_name']=$_REQUEST['college_name'];
		$_SESSION['dob']=$_REQUEST['dob'];
		$_SESSION['security_number']=$_REQUEST['security_number'];
		$_SESSION['hispanic_latino']=$_REQUEST['hispanic_latino'];
		$_SESSION['racial_category']=$_REQUEST['racial_category'];
    	$_SESSION['form_step_2']='yes';
    	
    		// step 1 data
		$first_name=$_SESSION['first_name'];
		$last_name=$_SESSION['last_name'];
		$email_confirmation=$_SESSION['email_confirmation'];
		$email=$_SESSION['email'];
		$country=$_SESSION['country'];
		$is_military=$_SESSION['is_military'];
		$phone=$_SESSION['phone'];
		$address=$_SESSION['address'];
		$zipcode=$_SESSION['zipcode'];
		$city=$_SESSION['city'];
		$state=$_SESSION['state'];
		$degree_type=$_SESSION['degree_type'];
		$education_type=$_SESSION['education_type'];
		$_SESSION['form_step_1'];
		$_SESSION['form_step_2'];
		$_SESSION['form_step_3'];


		// step 2 data
		$program=$_SESSION['program'];
		$college_institution_attended=$_SESSION['college_institution_attended'];
		$last_attended=$_SESSION['last_attended'];
		$degree_earned=$_SESSION['degree_earned'];
		$college_name=$_SESSION['college_name'];
		$dob=$_SESSION['dob'];
		$hispanic_latino=$_SESSION['hispanic_latino'];
		$racial_category=$_SESSION['racial_category'];
		$form_step_2=$_SESSION['form_step_2'];


		
			$var1 = "INSERT INTO dn_admission_data  set first_name='$first_name',last_name='$last_name',email='$email',country='$country',is_military='$is_military',phone='$phone',address='$address',zipcode='$zipcode',city='$city',state='$state',degree_type='$degree_type',education_type='$education_type',program='$program',college_institution_attended='$college_institution_attended',last_attended='$last_attended',degree_earned='$degree_earned',college_name='$college_name',dob='$dob',hispanic_latino='$hispanic_latino',racial_category='$racial_category',agreement='$agreement' ";
		    //echo $var1;
	        $results1 = $wpdb->get_results($var1);
	        
	       // echo $wpdb->last_query; die;
	        //print_r($results1);
			$response = array('status' => true, 'redirect'=>get_site_url().'/admissions/admission-thank-you/', 'message' => '<p class="alert alert-success"> Thank you for submitting</p>');
        	echo json_encode($response);

	}else{

		$response = array('status' => false, 'redirect'=>'', 'message' => '<p class="alert alert-danger">Please fill the required field.</p>');
        echo json_encode($response);
	}

}

if($_REQUEST['action']=='paymentfrm'){

	if($_REQUEST['agreement']!='' && $_REQUEST['payment_method']!='' && $_SESSION['form_step_1']=='yes' && $_SESSION['form_step_2']=='yes'){

		// step 1 data
		$first_name=$_SESSION['first_name'];
		$last_name=$_SESSION['last_name'];
		$email_confirmation=$_SESSION['email_confirmation'];
		$email=$_SESSION['email'];
		$country=$_SESSION['country'];
		$is_military=$_SESSION['is_military'];
		$phone=$_SESSION['phone'];
		$address=$_SESSION['address'];
		$zipcode=$_SESSION['zipcode'];
		$city=$_SESSION['city'];
		$state=$_SESSION['state'];
		$degree_type=$_SESSION['degree_type'];
		$education_type=$_SESSION['education_type'];
		$_SESSION['form_step_1'];
		$_SESSION['form_step_2'];
		$_SESSION['form_step_3'];


		// step 2 data
		$program=$_SESSION['program'];
		$college_institution_attended=$_SESSION['college_institution_attended'];
		$last_attended=$_SESSION['last_attended'];
		$degree_earned=$_SESSION['degree_earned'];
		$college_name=$_SESSION['college_name'];
		$dob=$_SESSION['dob'];
		$security_number=$_SESSION['security_number'];
		$hispanic_latino=$_SESSION['hispanic_latino'];
		$racial_category=$_SESSION['racial_category'];
		$form_step_2=$_SESSION['form_step_2'];

		$agreement=$_REQUEST['agreement'];

		if($_REQUEST['payment_method']=='cheque'){

			//step 3 data for cheque
			$payment_method=$_REQUEST['payment_method'];
			$routing_number=$_REQUEST['routing_number'];
			$account_number=$_REQUEST['account_number'];
			$account_holder_name=$_REQUEST['account_holder_name'];
			$billing_address=$_REQUEST['billing_address'];
			$billing_zipcode=$_REQUEST['billing_zipcode'];
			$billing_city=$_REQUEST['billing_city'];
			$billing_state=$_REQUEST['billing_state'];
			$receipt_email=$_REQUEST['receipt_email'];
			

			$_SESSION['form_step_3']='yes';

			
			$var1 = "INSERT INTO dn_admission_data  set first_name='$first_name',last_name='$last_name',email='$email',country='$country',is_military='$is_military',phone='$phone',address='$address',zipcode='$zipcode',city='$city',state='$state',degree_type='$degree_type',education_type='$education_type',program='$program',college_institution_attended='$college_institution_attended',last_attended='$last_attended',degree_earned='$degree_earned',college_name='$college_name',dob='$dob',security_number='$security_number',hispanic_latino='$hispanic_latino',racial_category='$racial_category',payment_method='$payment_method',routing_number='$routing_number',account_number='$account_number',account_holder_name='$account_holder_name',billing_address='$billing_address',billing_zipcode='$billing_zipcode',billing_city='$billing_city',billing_state='$billing_state',receipt_email='$receipt_email',agreement='$agreement' ";
		    //echo $var1;
	        $results1 = $wpdb->get_results($var1);
	        //print_r($results1);
			$response = array('status' => true, 'redirect'=>get_site_url().'/admissions/admission-thank-you/', 'message' => '<p class="alert alert-success"> Thank you for submitting</p>');
        	echo json_encode($response);

		}else if($_REQUEST['payment_method']=='paypal'){

			// step3 data for paypal
			$pbilling_address=$_REQUEST['pbilling_address'];
			$pbilling_zipcode=$_REQUEST['pbilling_zipcode'];
			$pbilling_city=$_REQUEST['pbilling_city'];
			$pbilling_state=$_REQUEST['pbilling_state'];
			$preceipt_email=$_REQUEST['preceipt_email'];

			$_SESSION['form_step_3']='yes';

			$var1 = "INSERT INTO dn_admission_data  set first_name='$first_name',last_name='$last_name',email='$email',country='$country',is_military='$is_military',phone='$phone',address='$address',zipcode='$zipcode',city='$city',state='$state',degree_type='$degree_type',education_type='$education_type',program='$program',college_institution_attended='$college_institution_attended',last_attended='$last_attended',degree_earned='$degree_earned',college_name='$college_name',dob='$dob',security_number='$security_number',hispanic_latino='$hispanic_latino',racial_category='$racial_category',payment_method='$payment_method',billing_address='$pbilling_address',billing_zipcode='$pbilling_zipcode',billing_city='$pbilling_city',billing_state='$pbilling_state',receipt_email='$preceipt_email',agreement='$agreement' ";
		    //echo $var1;
	        $results1 = $wpdb->get_results($var1);
	        //print_r($results1);
			$response = array('status' => true, 'redirect'=>get_site_url().'/admissions/paypal-charge/', 'message' => '<p class="alert alert-success"> Thank you for submitting</p>');
        	echo json_encode($response);

		}else{
			$response = array('status' => false, 'redirect'=>'', 'message' => '<p class="alert alert-danger">Something went wrong.</p>');
        	echo json_encode($response);
		}

	}else{

		$response = array('status' => false, 'redirect'=>'', 'message' => '<p class="alert alert-danger">Please fill the required field from all step form!!.</p>');
        echo json_encode($response);
	}

}





?>





<?php //get_footer(); ?>