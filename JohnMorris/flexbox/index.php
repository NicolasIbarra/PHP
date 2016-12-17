<!DOCTYPE html>

<!-- WATCH VIDEO https://www.youtube.com/watch?v=BvYjrcbtFLg -->

<html>
	<head>
		<title>Flexbox Examples</title>
		<style>
			.parent {
				background: #252C34;
				padding: 10px;
				color: #fff;
				display: flex;
				flex-direction: row;
			}
			.child {
				background: #2EAEF0;
				text-align: center;
				margin: 10px;
				flex-grow: 1;
			}
			.parent.center {
				height: 200px;
			}
			.child.center {
				width: 50px;
				height: 50px;
				margin: auto;
			}
			.parent.justified {
				flex-flow: row wrap;
				justify-content: space-around;
			}
			.child.justified {
				padding: 10px;
				width: 300px;
				height: 200px;
				margin-top: 10px;
			}
			.navigation {
				list-style: none;
				margin: 0; 
				background: #2EAEF0;
				display: flex;
				justify-content: flex-end;
			}
			.navigation a {
				text-decoration: none;
				display: block;
				padding: 1em;
				color: #fff;
			}
			@media all and (max-width: 768px) {
				.navigation {
					justify-content: space-around;
				}
			}

			@media all and (max-width: 600px) {
				.navigation {
					flex-flow: column wrap;
					padding: 0;
				}

				.navigation a { 
					text-align: center; 
					padding: 10px;
					border-top: 1px solid rgba(255,255,255,0.3); 
					border-bottom: 1px solid rgba(0,0,0,0.1); 
				}
				.navigation li:last-of-type a {
					border-bottom: none;
				}
			}
		</style>
	</head>
	<body>
		<h1>Standard Usage</h1>
		<div class="parent">
			<div class="child">
				<p>1</p>
			</div>
			<div class="child">
				<p>2</p>
			</div>
			<div class="child">
				<p>3</p>
			</div>
		</div>

		<h1>Vertical Centering</h1>
		<div class="parent center">
			<div class="child center">
				<p>1</p>
			</div>
			<div class="child center">
				<p>2</p>
			</div>
			<div class="child center">
				<p>3</p>
			</div>
		</div>

		<h1>Justified</h1>
		<div class="parent justified">
			<div class="child justified">
				<p>1</p>
			</div>
			<div class="child justified">
				<p>2</p>
			</div>
			<div class="child justified">
				<p>3</p>
			</div>
			<div class="child justified">
				<p>4</p>
			</div>
		</div>

		<h1>Navigation Centering</h1>
		<ul class="navigation">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Join</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</body>
</html>