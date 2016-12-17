<!DOCTYPE html>

<!--WATCH VIDEO https://www.youtube.com/watch?v=Y91Uu7tBfB4 -->

<html>
	<head>
		<title>jQuery Find Anchor By HREF</title>
		<meta charset="UTF-8">
		<style>
			.green {
				color: green;
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script>
			jQuery(document).ready(function($){
				//Find absolute first
				var $first = $('.list a').first(); console.log($first);
				
				// Find first element anchor
				var $firstelement = $('.list li:first-of-type a'); console.log($firstelement);
				
				// Find all firsts
				var $firsts = $('.list a:first-child'); console.log($firsts);
				
				// Find first of type
				var $firstoftype = $('.list a:first-of-type'); console.log($firstoftype);
				
				// Find specific element
				var $second = $('.list li:nth-child(2) a'); console.log($second);
				
				// Find specific element of type
				var $secondoftype = $('.list li:nth-of-type(2) a'); console.log($secondoftype);
				
				// Find anchor by href
				var $anchorhref = $('.list a[href="http://www.google.com"]'); console.log($anchorhref);
				
				// Find anchor starts with
				var $anchorhrefstart = $('.list a[href^="http://"]'); console.log($anchorhrefstart);
				
				// Do stuff
				$anchorhref.attr('href', 'http://jquery.com');
				$anchorhref.addClass('green');
				$anchorhref.data('animation', 'fade');
			});
		</script>
	</head>
	<body>
		<ul class="list">
			<a href="http://www.absolute.com">Absolute</a>
			<li><a href="http://www.google.com">Google</a></li>
			<li><a href="http://www.yahoo.com">Yahoo</a></li>
			<li><a href="http://www.bing.com">Bing</a></li>
			<li><span>No Link</span></li>
		</ul>
	</body>
</html>