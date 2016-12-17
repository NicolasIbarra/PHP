<?php
/* ------------------------------------------------------------------
   STUFF YOU NEED TO CHANGE FOR YOUR SPECIFIC FORM
--------------------------------------------------------------------*/

// Specify the form field names your form will accept
$whitelist = array( 'name', 'email', 'message');

// Set the email address submissions will be sent to
$email_address = 'YOUR EMAIL ADDRESS';

// Set the subject line for email messages
$subject = 'New Contact Form Submission';

// Table name
$table = 'YOUR_TABLE_NAME';

// Database name
define( 'DB_NAME', 'YOUR_DATABASE_NAME' );

// Database username
define( 'DB_USERNAME', 'YOUR_DATABASE_USERNAME' );

// Database password
define( 'DB_PASSWORD', 'YOUR_DATABASE_PASSWORD' );

// Database host
define( 'DB_HOST', 'localhost' );
