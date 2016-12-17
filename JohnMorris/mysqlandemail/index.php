<?php
//Helper functions
require_once( 'functions.php' );

// Instantiate variables we'll use
$errors = array();
$sent = false;

// Check for form submission
if ( ! empty( $_POST ) ) {
	// Process the form
	$process = process_form( $_POST );

	// Check for errors
	if ( ! empty( $process['message'] ) ) {
		$errors[] = $process['message'];
	} else if ( ! empty( $process['errors'] ) ) {
		$errors = $process['errors'];
	} else {
		$sent = true;
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP Contact Form</title>
		<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/general.css">
  	<link rel="stylesheet" href="assets/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
  <body>
    <div class="main-content">
			<div class="form">
	    	<form class="form-validation" method="post" action="">
	        <div class="form-title-row">
	          <h1>Contact Us</h1>
	        </div>
	        <?php if ( ! empty( $errors ) ) : ?>
	        <div class="errors">
	        	<p class="bg-danger"><?php echo implode( '.</p><p class="bg-danger">', $errors ); ?>.</p>
	        </div>
	        <?php elseif ( $sent ) : ?>
	        <div class="success">
	          <p class="bg-success">Your message was sent. We'll be in touch.</p>
	        </div>
	        <?php endif; ?>
	        <div class="form-row form-input-name-row">
	          <label>
	            <span>Your name</span>
	            <input id="name" type="text" name="name" placeholder="e.g. John Doe"
								   value="<?php echo validate_input('name'); ?>">
	          </label>
	        </div>

	        <div class="form-row form-input-email-row">
	          <label>
	            <span>Your email</span>
	            <input id="email" type="email" name="email" placeholder="myemail@domain.com"
								   value="<?php echo validate_input('email'); ?>">
	          </label>
	        </div>

	        <div class="form-row form-input-message-row">
	          <label>
	            <span>Your message</span>
	          </label>
	          <textarea id="message" name="message" placeholder="Enter your message"><?php echo validate_input('message'); ?></textarea>
	        </div>

	        <div class="form-row form-input-human-row">
	          <label>
	            <span>5 + 2 = ?</span>
	            <input type="text" id="human" name="human" placeholder="Your answer">
	          </label>
	        </div>

	        <div class="form-row">
	          <button type="submit">Submit Form</button>
	        </div>
	    	</form>
			</div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </body>
</html>
