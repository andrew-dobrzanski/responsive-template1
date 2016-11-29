<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/buttons.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<header>
				<h1>Progress Button Styles <span>Creative effects for loading buttons</span></h1>
			</header>
			<div class="wrapper">
				<section>
					<h2>fill horizontal</h2>
					<button class="progress-button" data-style="fill" data-horizontal>Submit</button>
				</section>
				<section>
					<h2>fill vertical</h2>
					<button class="progress-button" data-style="fill" data-vertical>Submit</button>
				</section>
				<section>
					<h2>shrink horizontal</h2>
					<button class="progress-button" data-style="shrink" data-horizontal>Submit</button>
				</section>
				<section>
					<h2>shrink vertical</h2>
					<button class="progress-button" data-style="shrink" data-vertical>Submit</button>
				</section>
			</div>
			<div class="wrapper">
				<section>
					<h2>rotate-angle-bottom <br/>perspective</h2>
					<button class="progress-button" data-style="rotate-angle-bottom" data-perspective data-horizontal>Submit</button>
				</section>
				<section>
					<h2>rotate-angle-top <br/>perspective</h2>
					<button class="progress-button" data-style="rotate-angle-top" data-perspective data-horizontal>Submit</button>
				</section>
				<section>
					<h2>rotate-angle-left <br/>perspective</h2>
					<button class="progress-button" data-style="rotate-angle-left" data-perspective data-vertical>Submit</button>
				</section>
				<section>
					<h2>rotate-angle-right <br/>perspective</h2>
					<button class="progress-button" data-style="rotate-angle-right" data-perspective data-vertical>Submit</button>
				</section>
			</div>
			<div class="wrapper">
				<section>
					<h2>rotate-side-down <br/>perspective</h2>
					<button class="progress-button" data-style="rotate-side-down" data-perspective data-horizontal>Submit</button>
				</section>
				<section>
					<h2>rotate-side-up <br/>perspective</h2>
					<button class="progress-button" data-style="rotate-side-up" data-perspective data-horizontal>Submit</button>
				</section>
				<section>
					<h2>rotate-side-left <br/>perspective</h2>
					<button class="progress-button" data-style="rotate-side-left" data-perspective data-vertical>Submit</button>
				</section>
				<section>
					<h2>rotate-side-right <br/>perspective</h2>
					<button class="progress-button" data-style="rotate-side-right" data-perspective data-vertical>Submit</button>
				</section>
			</div>
			<div class="wrapper">
				<section>
					<h2>rotate-back <br/>perspective</h2>
					<button class="progress-button" data-style="rotate-back" data-perspective data-horizontal>Submit</button>
				</section>
				<section>
					<h2>flip-open <br/>perspective</h2>
					<button class="progress-button" data-style="flip-open" data-perspective data-horizontal>Submit</button>
				</section>
				<section>
					<h2>slide-down <br/>horizontal</h2>
					<button class="progress-button" data-style="slide-down" data-horizontal>Submit</button>
				</section>
				<section>
					<h2>move-up <br/>horizontal</h2>
					<button class="progress-button" data-style="move-up" data-horizontal>Submit</button>
				</section>
			</div>
			<div class="wrapper">
				<section>
					<h2>top-line <br/>horizontal</h2>
					<button class="progress-button" data-style="top-line" data-horizontal>Submit</button>
				</section>
				<section>
					<h2>lateral-lines <br/>vertical</h2>
					<button class="progress-button" data-style="lateral-lines" data-vertical>Submit</button>
				</section>
			</div>
			
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/progressButton.js"></script>
		<script>
			[].slice.call( document.querySelectorAll( 'button.progress-button' ) ).forEach( function( bttn ) {
				new ProgressButton( bttn, {
					callback : function( instance ) {
						var progress = 0,
							interval = setInterval( function() {
								progress = Math.min( progress + Math.random() * 0.1, 1 );
								instance._setProgress( progress );

								if( progress === 1 ) {
									instance._stop(1);
									clearInterval( interval );
								}
							}, 200 );
					}
				} );
			} );
		</script>
	</body>
</html>