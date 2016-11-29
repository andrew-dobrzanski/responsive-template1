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
			<!-- Example -->
			<!-- Using while loops -->
			<h1>Using While Loops</h1>
			<section id="answer"></section>
			
			<script>
			var i = 0;       // Set counter to 1
			var msg = '';    // Message

			// Store 5 times table in a variable
			while (i < 11) {
			  msg += i + ' x 5 = ' + (i * 5) + '<br />';
			  i++;
			}

			document.getElementById('answer').innerHTML = msg;
			</script>

			<hr/>

			<!-- Example -->
			<!-- Using do while loops -->
			<h1>Using Do While Loops</h1>
			<section id="answer2"></section>
			
			<script>
			var i = 3 // Sets counter to 3
			var msg = ''; // Message
			
			// Store 5 times table in a variable
			do{
				msg += i + ' x 5 = ' + (i * 5) + '<br/>';
				i++;
			} while (i < 1);
			// Note how this is already 1 but it still runs
			
			document.getElementById('answer2').innerHTML = msg;
			</script>
			
		</div>
	</div>
</div>

<?php include 'includes/footer.php'; 

?>