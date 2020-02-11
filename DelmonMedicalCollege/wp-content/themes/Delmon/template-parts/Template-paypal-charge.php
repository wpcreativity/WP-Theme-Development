<?php
/* Template Name: paypal charge */
get_header();

?>

<div class="contact-area pt-4 pb-3">
		<div class="contact-form-area">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12">
					     <h1 class="text-center">Payment Page</h1>
					     <span class="line w-25 d-table mx-auto mt-3"></span>
					     <p class="text-center mt-5 ">Delmon Medical College will charge $60 fee By Paypal</p>
        <div class="col-sm-6 col-sm-offset-3">
	        <div id="payment-box">		       
		        <!-- PayPal payment form for displaying the buy button -->
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                    <!-- Identify your business so that you can collect the payments. -->
                    <input type="hidden" name="business" value="amit.singh@xatcovis.com">
					
                    <!-- Specify a Buy Now button. -->
                    <input type="hidden" name="cmd" value="_xclick">
					
                    <!-- Specify details about the item that buyers will purchase. -->
                    <input type="hidden" name="item_name" value="Admission">
                    <input type="hidden" name="item_number" value="11">
                    <input type="hidden" name="amount" value="60">
                    <input type="hidden" name="currency_code" value="USD">
					
                    <!-- Specify URLs -->
                    <input type="hidden" name="return" value="<?=get_site_url();?>/admissions/admission-thank-you/">
                    <input type="hidden" name="cancel_return" value="<?=get_site_url();?>/admissions/admission-thank-you/a">
					
                    <!-- Display the payment button. -->
                    <input type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif">
                </form>
		    </div>
        
        </div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>