<?php
/* Template Name: Admission submisson form */
get_header();
?>

    <div class="contact-title d-flex">
		<div class="container d-flex flex-fill">
			<div class="row d-flex flex-fill align-items-center justify-content-center flex-column">
				<h3>WELCOME TO <span>DELMON MEDICAL COLLEGE</span></h3><span class="line-bot"></span>
				<h1>ADMISSIONS</h1>
						<a href="https://climbcredit.com/apply/delmonmedicalcollege"><h3>Financial Support Available</h3></a>	
			</div>
		</div>
	</div>
	<div class="contact-area pt-4 pb-3">
		<div class="contact-form-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="tabform admission-form">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a aria-controls="home" aria-selected="true" class="nav-link active show" data-toggle="tab" href="#home" id="home-tab" role="tab">1: TELL US ABOUT YOU</a>
								</li>
								<li class="nav-item">
									<a aria-controls="profile" aria-selected="false" class="nav-link" data-toggle="tab" href="#profile" id="profile-tab" role="tab">2: YOUR EDUCATION</a>
								</li>
								<li class="nav-item">
									<a aria-controls="contact" aria-selected="false" class="nav-link" data-toggle="tab" href="#contact" id="contact-tab" role="tab">3: YOUR PAYMENT</a>
								</li>
							</ul>
							<p class="text-right reqi"><i>Fields marked with * are required</i></p>
							<div class="alert_msg"></div>

							<div class="tab-content" id="myTabContent">

								<!-- =========tab 1 form ========== -->

								<div aria-labelledby="home-tab" class="tab-pane active show" id="home" role="tabpanel">
									<form name="aboutu_frm" id="aboutu_frm" method="post" action="">
										<input type="hidden" name="action" value="aboutform">
										<h3>We'd like to get to know you.</h3>
										<p>You're less than 10 minutes away from applying online! Once you apply, a representative will contact you shortly.</p>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input name="first_name" class="form-control" placeholder="Your Frist Name *" type="text" data-validation='required'>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input name="last_name" class="form-control" placeholder="Your Last Name *" type="text" data-validation='required'>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input name="email_confirmation" class="form-control" placeholder="Your Email Address *" type="text" data-validation='email'>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input name="email" data-validation="confirmation" class="form-control" placeholder="Confirm Your Email Address *" type="text">
												</div>
											</div>
										</div>
										<div class="row">
										<!--	<div class="col-md-6">
												<div class="form-group">
													<select class="form-control bg" name="country" data-validation='required'>
														<option value="">Country *</option>
														<option value="india">India</option>
														<option value="england">England</option>
													</select>
												</div>
											</div>-->
											<div class="col-md-6">
												<div class="form-group">
													<p class="m-0">Have you or your spouse ever served in the military?</p>
													<div class=" mt-2 d-flex flex-row">
														<label class="mr-4 d-flex align-items-center rg"><input name="is_military" type="radio" value="1">Yes</label> <label class="mr-4 d-flex align-items-center rg"><input name="is_military" type="radio" value="0">No</label>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<div class="border d-flex flex-row align-items-center">
														<label class="w-50 border-right m-0 pl-4 phno">Phone Number *</label> <input name="phone" class="w-50 form-control border-0" placeholder="+1 000-000-0000" type="text" data-validation='required,number'>
													</div>
												</div>
											</div>
											<!-- <div class="col-md-6 d-flex align-items-center">
												<div class="form-group d-flex align-items-center">
													<a class="pr-color pl-4" href="#">Add Another Number</a>
												</div>
											</div> -->
											<div class="col-md-12 mb-4">
												<div class="border-bottom"></div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input name="address" class="form-control" placeholder="Address *" type="text" data-validation='required'>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input name="zipcode" class="form-control" placeholder="Zip Code *" type="text" data-validation='required'>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input name="city" class="form-control" placeholder="City *" type="text" data-validation='required'>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<select name="state" class="form-control bg" data-validation='required'>
														<option value="">State *</option>
														<option value="Alabama">Alabama</option>
                                                		<option value="Alaska">Alaska</option>
                                                		<option value="Arizona">Arizona</option>
                                                		<option value="Arkansas">Arkansas</option>
                                                		<option value="California">California</option>
                                                		<option value="Colorado">Colorado</option>
                                                		<option value="Connecticut">Connecticut</option>
                                                		<option value="Delaware">Delaware</option>
                                                		<option value="District of Columbia">District of Columbia</option>
                                                		<option value="Florida">Florida</option>
                                                		<option value="Georgia">Georgia</option>
                                                		<option value="Hawaii">Hawaii</option>
                                                		<option value="Idaho">Idaho</option>
                                                		<option value="Illinois">Illinois</option>
                                                		<option value="Indiana">Indiana</option>
                                                		<option value="Iowa">Iowa</option>
                                                		<option value="Kansas">Kansas</option>
                                                		<option value="Kentucky">Kentucky</option>
                                                		<option value="Louisiana">Louisiana</option>
                                                		<option value="Maine">Maine</option>
                                                		<option value="Maryland">Maryland</option>
                                                		<option value="Massachusetts">Massachusetts</option>
                                                		<option value="Michigan">Michigan</option>
                                                		<option value="Minnesota">Minnesota</option>
                                                		<option value="Mississippi">Mississippi</option>
                                                		<option value="Missouri">Missouri</option>
                                                		<option value="Montana">Montana</option>
                                                		<option value="Nebraska">Nebraska</option>
                                                		<option value="Nevada">Nevada</option>
                                                		<option value="New Hampshire">New Hampshire</option>
                                                		<option value="New Jersey">New Jersey</option>
                                                		<option value="New Mexico">New Mexico</option>
                                                		<option value="New York">New York</option>
                                                		<option value="North Carolina">North Carolina</option>
                                                		<option value="North Dakota">North Dakota</option>
                                                		<option value="Ohio">Ohio</option>
                                                		<option value="Oklahoma">Oklahoma</option>
                                                		<option value="Oregon">Oregon</option>
                                                		<option value="Pennsylvania">Pennsylvania</option>
                                                		<option value="Rhode Island">Rhode Island</option>
                                                		<option value="South Carolina">South Carolina</option>
                                                		<option value="South Dakota">South Dakota</option>
                                                		<option value="Tennessee">Tennessee</option>
                                                		<option value="Texas">Texas</option>
                                                		<option value="Utah">Utah</option>
                                                		<option value="Vermont">Vermont</option>
                                                		<option value="Virginia">Virginia</option>
                                                		<option value="Washington">Washington</option>
                                                		<option value="West Virginia">West Virginia</option>
                                                		<option value="Wisconsin">Wisconsin</option>
                                                		<option value="Wyoming">Wyoming</option>
                                                		<option value="Armed Forces Americas">Armed Forces Americas</option>
                                                		<option value="Armed Forces Europe">Armed Forces Europe</option>
                                                		<option value="Armed Forces Pacific">Armed Forces Pacific</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 mb-4">
												<div class="border-bottom"></div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<p class="m-0">What type of degree are you looking for?</p>
													<div class=" d-flex flex-row mt-2">
														<label class="mr-4 d-flex align-items-center rg"><input name="degree_type" type="radio" value="certificate">Certificate</label>
														<label class="mr-4 d-flex align-items-center rg"><input name="degree_type" type="radio" value="diploma">Diploma</label>
													</div>
												</div>
											</div>
											<!-- <div class="col-md-6">
												<div class="form-group">
													<select class="form-control bg">
														<option>
															State *
														</option>
														<option>
															Delhi
														</option>
														<option>
															Noida
														</option>
													</select>
												</div>
											</div> -->
										</div><!--
										<div class="row">
											<div class="col-md-12">
												<div class="form-group mt-2">
													<p class="m-0">What type of degree are you looking for?</p>
													<div class=" d-flex flex-row mt-2">
														<label class="mr-4 d-flex align-items-center rg"><input name="education_type" type="radio" value="online_and_oncampus">Online & On Campus</label> <label class="mr-4 d-flex align-items-center rg"><input name="education_type" type="radio" value="oncampus">On Campus</label> <label class="mr-4 d-flex align-items-center rg"><input name="education_type" type="radio" value="online">Online</label>
													</div>
												</div>
											</div>
										</div>-->
										<div class="row">
											<div class="col-md-12">
												<!-- <img src="http://frcoder.in/Designteam/Delmon/HTML/html/delmon/images/recaptcha.png" style="width: 220px;"> -->
												
												<div class="g-recaptcha" data-sitekey="6LdJesMUAAAAAOpOkoa7uFHJv4igT75GyffDnrjZ"></div>
											</div>
										</div>
										<div class="row ft-tn-grp d-flex align-items-center">
											<div class="col-lg-6 col-md-12 col-sm-12 col-12">
												<p>Please note that completing and submitting this form provides consent without obligation for Delmon Medical College to call, text, and/or email you by automated means about the education selected at the number and/or email address listed.</p>
											</div>
											<div class="col-lg-6 col-md-12 col-sm-12 col-12 d-flex flex-lg-ro flex-md-row flex-sm-row flex-row flex-column ">
												<button class="btm1 mb-lg-0 mb-md-0 mb-sm-0 mb-3" type="button" id="aboutu_finish_later">FINISH LATER</button> 
												<button type="submit" class="btm2" id="aboutu_submit_btn">CONTINUE</button>
											</div>
										</div>
									</form>
								</div>
								<!-- ========= End tab 1 form ========== -->

								<!-- ========= Tab 2 form ========== -->
								<div aria-labelledby="profile-tab" class="tab-pane" id="profile" role="tabpanel">
									<form name="education_frm" id="education_frm" method="post" action="">
										<input type="hidden" name="action" value="educationfrm">
										<h3>Let's talk about your future.</h3>
										<div class="row">
											<div class="col-md-8">
												<div class="form-group">
													<select name="program" class="form-control bg" data-validation="required">
														<option value="">Which academic program interests you? *</option>
														<option value="dialysis_technician">Dialysis Technician</option>
														<option value="medical_assistant">Medical Assistant</option>
														<option value="certified_nurses_assistant">Certified Nurses Assistant</option>
													</select>
												</div>
											</div>
											<div class="col-md-12 mb-4">
												<div class="border-bottom"></div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<h3>Tell us where you've been.</h3>
												<p>Enter any college(s) or institution(s) you have attended?</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<div class="border d-flex flex-row align-items-center">
														<input name="college_institution_attended" class="w-50 form-control border-top-0 border-left-0 border-bottom-0 border-right" placeholder="College / Institution" type="text"> <input name="last_attended" class="w-25 form-control border-top-0 border-left-0 border-bottom-0 border-right" placeholder="Last Attended" type="text"> <input name="degree_earned" class="w-25 form-control border-0" placeholder="Degree Earned" type="text">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="college_name" class="form-control py-3" placeholder="Type your college or institution name"></textarea>
												</div>
											</div>
											<div class="col-md-12 mb-4">
												<div class="border-bottom"></div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<h3 class="mt-0">Just a few more questions...</h3>
												<div class="form-group">
													<div class="border d-flex flex-row align-items-center bg py-1">
														<label class="w-50 m-0 pl-4 phno">What is your date of birth? *</label> <input name="dob" class="w-50 form-control border-top-0 border-left border-right-0 border-bottom-0" placeholder="+1 000-000-0000" type="date">
													</div>
												</div>
												<div class="form-group">
													<p class="m-0">Have you or your spouse ever served in the military?</p>
													<div class=" mt-2 d-flex flex-row">
														<label class="mr-4 d-flex align-items-center rg"><input name="" type="radio">Yes</label> <label class="mr-4 d-flex align-items-center rg"><input name="" type="radio">No</label>
													</div>
												</div>
												<p class="mt-3 w-100 txt">Delmon Medical College Graduate School of Management offers prospective students who are active military or work for our corporate partners an application fee waiver. To receive a waiver, call 847-675-6295 or select chat to speak to an advisor to confirm eligibility.</p>
											</div>
											<div class="col-md-6 pl-3 border-left graycolor">
												<div class="form-group">
													<p class="m-0">Do you consider yourself to be Hispanic/Latino? <i>(optional)</i></p>
													<div class=" mt-2 d-flex flex-row">
														<label class="mr-4 d-flex align-items-center rg"><input name="hispanic_latino" type="radio" value="1">Yes</label> <label class="mr-4 d-flex align-items-center rg"><input name="hispanic_latino" type="radio" value="0">No</label>
													</div>
												</div>
												<div class="form-group">
													<p class="m-0">Which racial categories would you use to describe yourself? <i>(optional)</i></p>
													<div class="pl-2 mt-2 d-flex flex-column">
														<label class="mr-4 d-flex align-items-center rg pb-2"><input name="racial_category" type="radio" value="american_indian">American Indian or Alaskan Native</label> <label class="mr-4 d-flex align-items-center rg pb-2"><input name="racial_category" type="radio" value="africa_american">Black or African American</label> <label class="mr-4 d-flex align-items-center rg pb-2"><input name="racial_category" type="radio" value="white">White</label> <label class="mr-4 d-flex align-items-center rg pb-2"><input name="racial_category" type="radio" value="asian">Asian</label> <label class="mr-4 d-flex align-items-center rg pb-2"><input name="racial_category" type="radio" value="other pacific">Native Hawaiian/Other Pacific Islander</label>
													</div>
												</div>
											</div>
										</div>
										<div class="row ft-tn-grp d-flex align-items-center">
											<div class="col-lg-6 col-md-12 col-sm-12 col-12">
												<p>Please note that completing and submitting this form provides consent without obligation for Delmon Medical College to call, text, and/or email you by automated means about the education selected at the number and/or email address listed.</p>
											</div>
											<div class="col-lg-6 col-md-12 col-sm-12 col-12 d-flex flex-lg-ro flex-md-row flex-sm-row flex-row flex-column">
												<button class="btm1 mb-lg-0 mb-md-0 mb-sm-0 mb-3" type="button" id="education_finish_later">FINISH LATER</button> 
												<button type="submit" id="education_submit_btn" class="btm2">CONTINUE</button>
											</div>
										</div>
									</form>
								</div>
								<!-- ========= End tab 2 form ========== -->

								<!-- =========tab 3 form ========== -->
								<div aria-labelledby="contact-tab" class="tab-pane" id="contact" role="tabpanel">
									<form name="payment_frm" id="payment_frm" method="post">
										<input type="hidden" name="action" value="paymentfrm">
										<h3>Let's finish up.</h3>
										<div class="box-des">
											<p>Your application fee is $60.00. Please choose a payment method.</p>
										</div>
										<div class="card paymentbox mt-4">
											<div class="card-header">
												<nav>
													<div class="nav nav-tabs" id="nav-tab" role="tablist">
														<a aria-controls="nav-profile" aria-selected="true" class="nav-item nav-link active" data-toggle="tab" href="#nav-profile" id="nav-profile-tab" role="tab" onclick="change_payment_method('cheque')">Cheque</a>
														<a aria-controls="nav-home" aria-selected="false" class="nav-item nav-link " data-toggle="tab" href="#nav-home" id="nav-home-tab" role="tab" onclick="change_payment_method('paypal')">Pay Pal</a> 
													</div>
												</nav>
											</div>
											<div class="card-body">
												<div class="tab-content" id="nav-tabContent">
													<input type="hidden" name="payment_method" id="payment_method" value="cheque">

													<div aria-labelledby="nav-home-tab" class="tab-pane " id="nav-home" role="tabpanel">
														<!-- <div class="form-group">
															<div class="row">
																<div class="col-md-6">
																	<input class="form-control" name="" placeholder="Credit Card Number *" type="">
																</div>
																<div class="col-md-2">
																	<select class="form-control bg">
																		<option>Month</option>
																	</select>
																</div>
																<div class="col-md-2">
																	<select class="form-control bg">
																		<option>Year</option>
																	</select>
																</div>
																<div class="col-md-2">
																	<input class="form-control" name="" placeholder="CVV" type="">
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-md-10">
																	<input class="form-control" name="" placeholder="Name on Credit Card *" type="">
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-md-12 mb-0">
																	<div class="border-bottom"></div>
																	<p class="pr-color text-right m-0 p-0"><i>Clear All</i></p>
																</div>
															</div>
														</div> -->
														<div class="form-group">
															<div class="row">
																<div class="col-md-6">
																	<input class="form-control" name="pbilling_address" id="pbilling_address" placeholder="Billing Address *" type="text" data-validation="required">
																</div>
																<div class="col-md-6">
																	<input class="form-control" name="pbilling_zipcode" id="pbilling_zipcode" placeholder="ZIp Code *" type="text" data-validation="required">
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-md-6">
																	<input class="form-control" name="pbilling_city" id="pbilling_city" placeholder="City *" type="text" data-validation="required">
																</div>
																<div class="col-md-6">
																	<div class="border d-flex flex-row align-items-center py-1">
																		<label class="w-25 m-0 pl-4 phno">State *</label> 
																		<select class="w-75 form-control border-top-0 border-left border-right-0 border-bottom-0" name="pbilling_state" id="pbilling_state" data-validation="required">
																			<option value="">Please Select</option>
																			<option value="noida">Noida</option>
																			<option value="delhi">Delhi</option>
																		</select>
																	</div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-md-6">
																	<p class="m-0 mb-2">Where should we email your receipt? *</p><input class="form-control" name="preceipt_email" id="preceipt_email" placeholder="Enter your email here" type="email" data-validation="required">
																	<p class="optet mt-2">Note: Your receipt email will be sent from info@delmonmedicalcollege.com.</p>
																</div>
															</div>
														</div>
													</div>

													<div aria-labelledby="nav-profile-tab" class="tab-pane show active" id="nav-profile" role="tabpanel">
														
														<div class="form-group">
															<div class="row">
																<div class="col-md-6 d-flex flex-row align-items-start justify-content-between"><input class="form-control w-75" name="routing_number" id="routing_number" placeholder="Routing Number *" type="text" data-validation="required"> <img class="" src="https://development.frcoder.net/wordpress/delmonmedicalcollege/wp-content/uploads/2019/10/ac2.jpg" style="width: 84px;margin-top: 6px;"></div>

																<div class="col-md-6 d-flex flex-row align-items-start justify-content-between"><input class="form-control w-75" name="account_number" id="account_number" placeholder="Account Number *" type="text" data-validation="required,number"> <img class="" src="https://development.frcoder.net/wordpress/delmonmedicalcollege/wp-content/uploads/2019/10/ac2.jpg" style="width: 84px;margin-top: 6px;"></div>
															</div>
														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-md-10">
																	<input class="form-control" name="account_holder_name" id="account_holder_name" placeholder="Name As It Appears on Your Account *" type="text" data-validation="required">
																</div>
															</div>
														</div>
														<!-- <div class="form-group">
															<div class="row">
																<div class="col-md-12 mb-0">
																	<div class="border-bottom"></div>
																	<p class="pr-color text-right m-0 p-0"><i>Clear All</i></p>
																</div>
															</div>
														</div> -->
														<div class="form-group">
															<div class="row">
																<div class="col-md-6">
																	<input class="form-control" name="billing_address" id="billing_address" placeholder="Billing Address *" type="text" data-validation="required">
																</div>
																<div class="col-md-6">
																	<input class="form-control" name="billing_zipcode" id="billing_zipcode" placeholder="ZIp Code *" type="text" data-validation="required">
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-md-6">
																	<input class="form-control" name="billing_city" id="billing_city" placeholder="City *" type="text" data-validation="required">
																</div>
																<div class="col-md-6">
																	<div class="border d-flex flex-row align-items-center py-1">
																		<label class="w-25 m-0 pl-4 phno">State *</label> 
																		<select class="w-75 form-control border-top-0 border-left border-right-0 border-bottom-0" name="billing_state" id="billing_state" data-validation="required">
																			<option value="">Please Select</option>
																			<option value="Alabama">Alabama</option>
                                                                    		<option value="Alaska">Alaska</option>
                                                                    		<option value="Arizona">Arizona</option>
                                                                    		<option value="Arkansas">Arkansas</option>
                                                                    		<option value="California">California</option>
                                                                    		<option value="Colorado">Colorado</option>
                                                                    		<option value="Connecticut">Connecticut</option>
                                                                    		<option value="Delaware">Delaware</option>
                                                                    		<option value="District of Columbia">District of Columbia</option>
                                                                    		<option value="Florida">Florida</option>
                                                                    		<option value="Georgia">Georgia</option>
                                                                    		<option value="Hawaii">Hawaii</option>
                                                                    		<option value="Idaho">Idaho</option>
                                                                    		<option value="Illinois">Illinois</option>
                                                                    		<option value="Indiana">Indiana</option>
                                                                    		<option value="Iowa">Iowa</option>
                                                                    		<option value="Kansas">Kansas</option>
                                                                    		<option value="Kentucky">Kentucky</option>
                                                                    		<option value="Louisiana">Louisiana</option>
                                                                    		<option value="Maine">Maine</option>
                                                                    		<option value="Maryland">Maryland</option>
                                                                    		<option value="Massachusetts">Massachusetts</option>
                                                                    		<option value="Michigan">Michigan</option>
                                                                    		<option value="Minnesota">Minnesota</option>
                                                                    		<option value="Mississippi">Mississippi</option>
                                                                    		<option value="Missouri">Missouri</option>
                                                                    		<option value="Montana">Montana</option>
                                                                    		<option value="Nebraska">Nebraska</option>
                                                                    		<option value="Nevada">Nevada</option>
                                                                    		<option value="New Hampshire">New Hampshire</option>
                                                                    		<option value="New Jersey">New Jersey</option>
                                                                    		<option value="New Mexico">New Mexico</option>
                                                                    		<option value="New York">New York</option>
                                                                    		<option value="North Carolina">North Carolina</option>
                                                                    		<option value="North Dakota">North Dakota</option>
                                                                    		<option value="Ohio">Ohio</option>
                                                                    		<option value="Oklahoma">Oklahoma</option>
                                                                    		<option value="Oregon">Oregon</option>
                                                                    		<option value="Pennsylvania">Pennsylvania</option>
                                                                    		<option value="Rhode Island">Rhode Island</option>
                                                                    		<option value="South Carolina">South Carolina</option>
                                                                    		<option value="South Dakota">South Dakota</option>
                                                                    		<option value="Tennessee">Tennessee</option>
                                                                    		<option value="Texas">Texas</option>
                                                                    		<option value="Utah">Utah</option>
                                                                    		<option value="Vermont">Vermont</option>
                                                                    		<option value="Virginia">Virginia</option>
                                                                    		<option value="Washington">Washington</option>
                                                                    		<option value="West Virginia">West Virginia</option>
                                                                    		<option value="Wisconsin">Wisconsin</option>
                                                                    		<option value="Wyoming">Wyoming</option>
                                                                    		<option value="Armed Forces Americas">Armed Forces Americas</option>
                                                                    		<option value="Armed Forces Europe">Armed Forces Europe</option>
                                                                    		<option value="Armed Forces Pacific">Armed Forces Pacific</option>
																		</select>
																	</div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-md-6">
																	<p class="m-0 mb-2">Where should we email your receipt? *</p><input class="form-control" name="receipt_email" id="receipt_email" placeholder="Enter your email here" type="email" data-validation="required">
																	<p class="optet mt-2">Note: Your receipt email will be sent from info@delmonmedicalcollege.com.</p>
																</div>
															</div>
														</div>
													</div>

												</div>
											</div>
										</div>
										<h3 class="mt-3">Know your rights.</h3>
										<p class="optet">At Delmon Medical College, we value the importance of protecting your privacy and personal information. Please find below information to better understand your right to cancel, code of conduct, and non-discrimination policy as you complete your Application for Admission.</p>
										<div class="card bx-card px-3">
											<h3>Application.</h3>
											<p class="optet mb-3 mt-0">You may cancel this transaction without any penalty or obligation up to midnight of the 10th business day after submitting this application (Saturdays, Sundays and holidays are not business days). If you cancel, any property traded in, any payments made by you under the contract, and any negotiable instruments executed by you will be returned within 10 business days following receipt by the seller of your cancellation notice; any security interest arising out of the transaction will be cancelled.</p>
											<p class="optet mb-3 mt-0">If you cancel, you must make available to the seller at your residence, in substantially as good condition as when received, any goods delivered to you under this contract or sale; or you may comply with the expense and risk. If you make the goods available to the seller and the seller does not pick them up within 20 days of your notice of cancellation, you may retain or dispose of the goods without any further obligation.</p>
											<p class="optet mb-3 mt-0">To cancel this transaction, applicant must submit a signed and dated notice with the applicant’s name and address (required to process the cancellation) no later than midnight of the cancellation date indicated on page one of this application.</p>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class=" mt-2 d-flex flex-row">
													<label class="mr-0 d-flex align-items-center rg"><input name="agreement" type="checkbox" value="1" data-validation="required">I have read and agree to the Buyer's Right to Cancel. *</label>
												</div>
											</div>
										</div>
										<div class="row ft-tn-grp d-flex align-items-center">
											<div class="col-lg-6 col-md-12 col-sm-12 col-12">
												<p>Please note that completing and submitting this form provides consent without obligation for Delmon Medical College to call, text, and/or email you by automated means about the education selected at the number and/or email address listed.</p>
											</div>
											<div class="col-lg-6 col-md-12 col-sm-12 col-12 d-flex flex-lg-ro flex-md-row flex-sm-row flex-row flex-column">
												<button class="btm1 mb-lg-0 mb-md-0 mb-sm-0 mb-3 " type="button" id="payment_finish_later">FINISH LATER</button> 
												<button class="btm2" id="payment_submit_btn">SUBMIT APPLICATION</button>
											</div>
										</div>
									</form>
								</div>
								
								<!-- ========= End tab 3 form ========== -->

							</div>
						</div>
							
						
						
						<!-- <?php echo do_shortcode('[gravityform id="5" title="false" description="false" ajax="true"]');?> -->
					</div>
				</div>
			</div>
		</div>
	</div>
   
<?php get_footer();?>

<script type="text/javascript">
	var SITE_URL="<?php echo get_site_url();?>";
</script>

<script type="text/javascript">

	/*$(document).ready(function(){
		$('#aboutu_submit_btn').click(function(){
			$('#profile-tab').trigger('click');	
		})
	})*/
	
</script>

<!-- new links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript">
  $.validate({
    modules : 'location, date, security, file',
  });
</script>    
<!-- end -->
<script src='https://www.google.com/recaptcha/api.js'></script>


<script type="text/javascript">

	$('#aboutu_frm').on('submit', function (e) {
	    e.preventDefault();
	    jQuery.ajax({
		    type: 'post',
		    url:SITE_URL+'/admissions/submit-admission/',
		    data: $('#aboutu_frm').serialize(),
	        beforeSend: function(){
	         $("#aboutu_submit_btn").text('Submitting....');
	        },
		    success: function (res) {
		    	if(res){    
	                var resObj=JSON.parse(res);
	                if(resObj.status==true){
	                    $('.alert_msg').html(resObj.message);
	                    scrollTop();
	                    close_alert_tab();
	                    setTimeout(function() {
					       $('#profile-tab').trigger('click');	
					    }, 3000);
	                    
	                    
	                }else{
	                    $('.alert_msg').html(resObj.message);
	                    scrollTop();
	                }
	                
	            }else{
	                $('#alert_msg').html(resObj.message);
	                //location.reload();
	                scrollTop();
	            }
            	$("#aboutu_submit_btn").text('CONTINUE');

		    }
		});
	});	


	$('#education_frm').on('submit', function (e) {
	    e.preventDefault();
	    jQuery.ajax({
		    type: 'post',
		    url:SITE_URL+'/admissions/submit-admission/',
		    data: $('#education_frm').serialize(),
	        beforeSend: function(){
	         $("#education_submit_btn").text('Submitting....');
	        },
		    success: function (res) {
		    	if(res){    
	                var resObj=JSON.parse(res);
	                if(resObj.status==true){
	                    $('.alert_msg').html(resObj.message);
	                    scrollTop();
	                    close_alert_tab();
	                    setTimeout(function() {
					       $('#contact-tab').trigger('click');	
					    }, 3000);
	                   
	                }else{
	                    $('.alert_msg').html(resObj.message);
	                    scrollTop();
	                }
	                
	            }else{
	                $('#alert_msg').html(resObj.message);
	                //location.reload();
	                scrollTop();
	            }
            	$("#education_submit_btn").text('CONTINUE');
		    }

		});
	});	


	$('#payment_frm').on('submit', function (e) {
	    e.preventDefault();
	    jQuery.ajax({
		    type: 'post',
		    url:SITE_URL+'/admissions/submit-admission/',
		    data: $('#payment_frm').serialize(),
	        beforeSend: function(){
	         $("#payment_submit_btn").text('Submitting....');
	        },
		    success: function (res) {
		    	if(res){    
	                var resObj=JSON.parse(res);
	                if(resObj.status==true && resObj.redirect!=''){
	                    $('.alert_msg').html(resObj.message);
	                    scrollTop();
	                    close_alert_tab();
	                    setTimeout(function(){
					       window.location.href= resObj.redirect;
					    }, 3000);

					    //alert('Thank You !!');
	                   
	                }else{
	                    $('.alert_msg').html(resObj.message);
	                    scrollTop();
	                }
	                
	            }else{
	                $('#alert_msg').html(resObj.message);
	                //location.reload();
	                scrollTop();
	            }
            	$("#payment_submit_btn").text('SUBMIT APP');
		    }

		});
	});

	// code for finish later

	$("#aboutu_finish_later").click(function(){
		$.ajax({
		    type: 'post',
		    url:SITE_URL+'/admissions/finish-later-admission/',
		    data: $('#aboutu_frm').serialize(),
	        beforeSend: function(){
	         $("#aboutu_finish_later").text('Sending info....');
	        },
		    success: function (res) {
		    	if(res){    
	                var resObj=JSON.parse(res);
	                if(resObj.status==true && resObj.redirect!=''){
	                    $('.alert_msg').html(resObj.message);
	                    scrollTop();
	                    close_alert_tab();
	                    setTimeout(function(){
					       window.location.href= resObj.redirect;
					    }, 3000);

					    //alert('Thank You !!');
	                   
	                }else{
	                    $('.alert_msg').html(resObj.message);
	                    scrollTop();
	                }
	                
	            }else{
	                $('#alert_msg').html(resObj.message);
	                //location.reload();
	                scrollTop();
	            }
            	$("#aboutu_finish_later").text('FINISH LATER');
		    }
		});
	})

	$("#education_finish_later").click(function(){
		$.ajax({
		    type: 'post',
		    url:SITE_URL+'/admissions/finish-later-admission/',
		    data: $('#education_frm').serialize(),
	        beforeSend: function(){
	         $("#education_finish_later").text('Sending info....');
	        },
		    success: function (res) {
		    	if(res){    
	                var resObj=JSON.parse(res);
	                if(resObj.status==true && resObj.redirect!=''){
	                    $('.alert_msg').html(resObj.message);
	                    scrollTop();
	                    close_alert_tab();
	                    setTimeout(function(){
					       window.location.href= resObj.redirect;
					    }, 3000);

					    //alert('Thank You !!');
	                   
	                }else{
	                    $('.alert_msg').html(resObj.message);
	                    scrollTop();
	                }
	                
	            }else{
	                $('#alert_msg').html(resObj.message);
	                //location.reload();
	                scrollTop();
	            }
            	$("#education_finish_later").text('FINISH LATER');
		    }
		});
	})

	$("#payment_finish_later").click(function(){
		$.ajax({
		    type: 'post',
		    url:SITE_URL+'/admissions/finish-later-admission/',
		    data: $('#payment_frm').serialize(),
	        beforeSend: function(){
	         $("#payment_finish_later").text('Sending info....');
	        },
		    success: function (res) {
		    	if(res){    
	                var resObj=JSON.parse(res);
	                if(resObj.status==true && resObj.redirect!=''){
	                    $('.alert_msg').html(resObj.message);
	                    scrollTop();
	                    close_alert_tab();
	                    setTimeout(function(){
					       window.location.href= resObj.redirect;
					    }, 3000);

					    //alert('Thank You !!');
	                   
	                }else{
	                    $('.alert_msg').html(resObj.message);
	                    scrollTop();
	                }
	                
	            }else{
	                $('#alert_msg').html(resObj.message);
	                //location.reload();
	                scrollTop();
	            }
            	$("#payment_finish_later").text('FINISH LATER');
		    }
		});
	})






	function change_payment_method(pay_mthod){

		$('#payment_method').val(pay_mthod);
		if(pay_mthod=='paypal'){
			$('#routing_number').val('');
			$('#account_number').val('');
			$('#account_holder_name').val('');
			$('#billing_address').val('');
			$('#billing_zipcode').val('');
			$('#billing_city').val('');
			$('#billing_state').val('');
			$('#receipt_email').val('');
		}else if(pay_mthod=='cheque'){
			$('#pbilling_address').val('');
			$('#pbilling_zipcode').val('');
			$('#pbilling_city').val('');
			$('#pbilling_state').val('');
			$('#preceipt_email').val('');
		}

	}

	function close_alert_tab(){
	    setTimeout(function() {
	        $(".alert").alert('close');
	    }, 3000);
	}

	function scrollTop() {
	    window.document.body.scrollTop = 0;
	    window.document.documentElement.scrollTop = 0;
	}


</script>