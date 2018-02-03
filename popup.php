<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>POP-UP</title>
	<link rel="stylesheet" type="text/css" href="popup.css">
</head>
<body>
	<div class="container">
		<button class="btn">Delete</button>
		<div class="popup">
		<span id="close">&times;</span>
			<p>Do you want to delete?</p>
			<div class="option">
				<a href="">Cancel</a>
				<a href="">delete</a>
			</div>
		</div>
	</div>
	<div class="cover"></div>

	<script type="text/javascript" src="jQuery.js"></script>
	<script>
		$(document).ready(function(){
			$(".btn").on('click', function(){
				$(".cover").fadeIn('show');
				$(".popup").fadeIn('show');
			});
			$(".popup").on('click', function(){
				if($(event.target).is("#close")){
					$(".cover").fadeOut('show');
					$(".popup").fadeOut('show');
				}
			});
			$('.cover').on('click', function(){
				$(".cover").fadeIn('show');
				$(".popup").fadeIn('show');
			});
		});
	</script>


</body>
</html>