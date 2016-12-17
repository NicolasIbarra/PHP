<!DOCTYPE html>

<!--WATCH VIDEO https://www.youtube.com/watch?v=_EGO-d9H184-->

<html>
	<head>
		<meta charset="UTF-8">
		<title>jQuery Scroll to Anchor</title>
		<style>
			body{
				height:3000px; 
				width: 500px;
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$('a[href^="#"]').on('click',function (e) {
					e.preventDefault();

					var target = this.hash;
					var $target = $(target);

					// Scroll and show hash
// 					$('html, body').animate({
// 						'scrollTop': $target.offset().top
// 					}, 1000, 'swing', function () {
// 						window.location.hash = target;
// 					});
					
					// Scroll and don't show hash
					$('html, body').animate({
						'scrollTop': $target.offset().top
					}, 1000, 'swing');
				});
			});
		</script>
	</head>
	<body>
		<ul>
			<li><a href="#first">First</a></li>
			<li><a href="#second">Second</a></li>
			<li><a href="#third">Third</a></li>
			<li><a href="#fourth">Fourth</a></li>
			<li><a href="#fifth">Fifth</a></li>
		</ul>
		<div id="first">
			<h3>First</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in sodales est, in sodales metus. Pellentesque posuere justo eu lectus egestas, quis mattis turpis maximus. Vivamus sed justo eget justo varius placerat et et ante. Cras quis maximus arcu. Cras non tellus vitae arcu dapibus tincidunt eu ut ipsum. Ut aliquam non quam et mollis. Vestibulum auctor velit et nisi finibus, in bibendum urna rutrum. Vivamus molestie mattis aliquam. Nullam eu lobortis magna. Nulla ornare quam facilisis ultricies varius. Sed velit est, egestas eu turpis id, lobortis egestas nibh. Quisque ultrices lectus nec massa aliquet, sit amet volutpat tellus blandit.</p>
		</div>
		<div id="second">
			<h3>Second</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in sodales est, in sodales metus. Pellentesque posuere justo eu lectus egestas, quis mattis turpis maximus. Vivamus sed justo eget justo varius placerat et et ante. Cras quis maximus arcu. Cras non tellus vitae arcu dapibus tincidunt eu ut ipsum. Ut aliquam non quam et mollis. Vestibulum auctor velit et nisi finibus, in bibendum urna rutrum. Vivamus molestie mattis aliquam. Nullam eu lobortis magna. Nulla ornare quam facilisis ultricies varius. Sed velit est, egestas eu turpis id, lobortis egestas nibh. Quisque ultrices lectus nec massa aliquet, sit amet volutpat tellus blandit.</p>
		</div>
		<div id="third">
			<h3>Third</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in sodales est, in sodales metus. Pellentesque posuere justo eu lectus egestas, quis mattis turpis maximus. Vivamus sed justo eget justo varius placerat et et ante. Cras quis maximus arcu. Cras non tellus vitae arcu dapibus tincidunt eu ut ipsum. Ut aliquam non quam et mollis. Vestibulum auctor velit et nisi finibus, in bibendum urna rutrum. Vivamus molestie mattis aliquam. Nullam eu lobortis magna. Nulla ornare quam facilisis ultricies varius. Sed velit est, egestas eu turpis id, lobortis egestas nibh. Quisque ultrices lectus nec massa aliquet, sit amet volutpat tellus blandit.</p>
		</div>
		<div id="fourth">
			<h3>Fourth</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in sodales est, in sodales metus. Pellentesque posuere justo eu lectus egestas, quis mattis turpis maximus. Vivamus sed justo eget justo varius placerat et et ante. Cras quis maximus arcu. Cras non tellus vitae arcu dapibus tincidunt eu ut ipsum. Ut aliquam non quam et mollis. Vestibulum auctor velit et nisi finibus, in bibendum urna rutrum. Vivamus molestie mattis aliquam. Nullam eu lobortis magna. Nulla ornare quam facilisis ultricies varius. Sed velit est, egestas eu turpis id, lobortis egestas nibh. Quisque ultrices lectus nec massa aliquet, sit amet volutpat tellus blandit.</p>
		</div>
		<div id="fifth">
			<h3>Fifth</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in sodales est, in sodales metus. Pellentesque posuere justo eu lectus egestas, quis mattis turpis maximus. Vivamus sed justo eget justo varius placerat et et ante. Cras quis maximus arcu. Cras non tellus vitae arcu dapibus tincidunt eu ut ipsum. Ut aliquam non quam et mollis. Vestibulum auctor velit et nisi finibus, in bibendum urna rutrum. Vivamus molestie mattis aliquam. Nullam eu lobortis magna. Nulla ornare quam facilisis ultricies varius. Sed velit est, egestas eu turpis id, lobortis egestas nibh. Quisque ultrices lectus nec massa aliquet, sit amet volutpat tellus blandit.</p>
		</div>
	</body>
</html>