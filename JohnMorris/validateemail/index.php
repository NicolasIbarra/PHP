<!-- HTML
------------------------------------------------------------------------>

<!-- WATCH VIDEO https://www.youtube.com/watch?v=n5uoHvLvhfY -->

<form>
	<input type="email" placeholder="Enter your email">
</form>

<!-- jQuery
------------------------------------------------------------------------>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="mailcheck.min.js"></script>
<script>
	jQuery(document).ready(function($){
		var domains = ['hotmail.com', 'gmail.com', 'aol.com'];
		var topLevelDomains = ["com", "net", "org"];
		$('#email').on('blur', function(event) {
			console.log("event ", event); // Remove for production
			console.log("this ", $(this)); // Remove for production
			$(this).mailcheck({
				domains: domains,                       // optional
				topLevelDomains: topLevelDomains,       // optional
				suggested: function(element, suggestion) {
					// callback code
					console.log("suggestion ", suggestion.full); // Remove for production
					$('#suggestion').html("Did you mean <b><i>" + suggestion.full + "</b></i>?");
				},
				empty: function(element) {
					// callback code
					$('#suggestion').html('No Suggestions :(');
				}
			});
		});
	});
</script>
<form>
	<input id="email" name="email" type="email" placeholder="Enter your email">
	<input name="Submit" type="submit" />
	<p id="suggestion"></p>
</form>

<!-- PHP
------------------------------------------------------------------------>
<?php
$email = "john<>morris@example.com";

// Remove all illegal characters from email
$email = filter_var( $email, FILTER_SANITIZE_EMAIL );

// Validate email
if ( ! filter_var( $email, FILTER_VALIDATE_EMAIL ) === false ) {
	echo( "$email is a valid email address" );
} else {
	echo( "$email is not a valid email address" );
}
?>