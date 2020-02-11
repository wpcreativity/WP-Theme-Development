<?php
/* Template Name: admission thanku */
get_header();
session_start();
session_destroy();

//echo $_SESSION['form_step_1'];
?>
<style>
    .pb_text h1 {
    color: #3499cc;
    text-align: center;
    font-weight:bold;
}
.pb_text p {
    color: #363636;
    font-size: 22px;
}
</style>
<div class="container">
	<div class="row text-center" style="padding: 100px 0;">
        <div class="col-sm-12 pb_text">
            <h1>THANK YOU FOR FILLING OUT OUR FORM!</h1>
            <p>Someone will be in contact with you within 24 hours. Please feel free to check out the rest of our website.</p>
        </div>
	</div>
</div>

<?php  get_footer(); ?>