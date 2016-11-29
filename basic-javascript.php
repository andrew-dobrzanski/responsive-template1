<?php include 'includes/header.php'; 

?>

<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 center">
			<div class="page-header jumbotron">
				<div class="container">
					<h1><span>Image Title</span><br><span>1140 x 275</span></h1>
				</div>
			</div>
			<!-- Example 1 -->
			<h1>Creating a Basic JavaScript</h1>
			<p>For all orders and inquiries please call <em>503.555.3344</em></p>
			
			<script>
			var today = new Date();
			var hourNow = today.getHours();
			var greeting;

			if (hourNow > 18) {
				greeting = 'Good evening!';
			} else if (hourNow > 12) {
				greeting = 'Good afternoon!';
			} else if (hourNow > 0) {
				greeting = 'Good morning!';
			} else {
				greeting = 'Welcome!';
			}

			document.write('<h3>' + greeting + '</h3>');
			</script>
		</div>
	</div>
</div>

<?php include 'includes/footer.php'; 

?>