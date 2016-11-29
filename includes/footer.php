<footer>
	<!-- footer wrapper -->
	<div id="footer-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="footer-headline">
						<h2><small>Important Info</small></h2>
					</div>
					<p>Lorem ipsum dolor sit amet, mea labitur percipit rationibus id. Sumo nobis efficiendi eu duo, ad vix sint habeo suscipiantur.
					</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="footer-headline">
						<h2><small>Quick Links</small></h2>
					</div>
					<ul class="list-unstyled link-list">
						<li><a href="/page2.php">Pages</a><i class="fa fa-angle-right"></i></li>
						<li><a href="/blog.php">Blog</a><i class="fa fa-angle-right"></i></li>
						<li><a href="#">Portfolio</a><i class="fa fa-angle-right"></i></li>
						<li><a href="/contact-us.php">Contact Us</a><i class="fa fa-angle-right"></i></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="footer-headline">
						<h2><small>Latest Posts</small></h2>
					</div>
					<ul class="list-unstyled link-list">
						<li><a href="">Blog Post 1<small>Nov 16, 2015</small></a><i class="fa fa-angle-right"></i></li>
						<li><a href="">Blog Post 2<small>Oct 5, 2015</small></a><i class="fa fa-angle-right"></i></li>
						<li><a href="">Blog Post 3<small>Aug 22, 2015</small></a><i class="fa fa-angle-right"></i></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="footer-headline">
						<h2><small>Contact Us</small></h2>
					</div>
					<p>25, Lorem Lis Street, Green<br/>
					Oregon, US<br/>
					Phone: 800.123.3456<br/>
					Fax: 800.123.3456<br/>
					Email: <a href="mailto:info@yourcomapny.com">info@yourcompany.com</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Copyright text -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p>2015 All Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
			</div>
			<!-- Social links -->
			<div class="col-md-6">
				<ul class="footer-socials list-inline">
					<li>
						<a href="https://www.facebook.com/" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="https://plus.google.com" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
							<i class="fa fa-google-plus"></i>
						</a>
					</li>
					<li>
						<a href="https://www.linkedin.com/" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
							<i class="fa fa-linkedin"></i>
						</a>
					</li>
					<li>
						<a href="https://dribbble.com/" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
							<i class="fa fa-dribbble"></i>
						</a>
					</li>
					<li>
						<a href="https://www.skype.com/en/" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
							<i class="fa fa-skype"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div><!-- end .copyright -->
</div> <!-- end #main -->

<!-- site scripts -->
<script src="js/modernizr.custom.js"></script><!-- Progressive button script -->
<script src="/js/bootstrap.min.js"></script>

<!-- Progessive button scripts and styles -->
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
</script><!-- .end progressive button scripts and styles -->

<!-- Contact us form validation and scripts -->
<script src="/js/form-validation.js"></script><!-- Validation script -->
<script src="js/classie.js"></script>
<script>
	(function() {
		// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
		if (!String.prototype.trim) {
			(function() {
				// Make sure we trim BOM and NBSP
				var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
				String.prototype.trim = function() {
					return this.replace(rtrim, '');
				};
			})();
		}

		[].slice.call( document.querySelectorAll( 'input.input-field, textarea.input-field') ).forEach( function( inputEl ) {
			// in case the input is already filled..
			if( inputEl.value.trim() !== '' ) {
				classie.add( inputEl.parentNode, 'input--filled' );
			}

			// events:
			inputEl.addEventListener( 'focus', onInputFocus );
			inputEl.addEventListener( 'blur', onInputBlur );
		} );

		function onInputFocus( ev ) {
			classie.add( ev.target.parentNode, 'input--filled' );
		}

		function onInputBlur( ev ) {
			if( ev.target.value.trim() === '' ) {
				classie.remove( ev.target.parentNode, 'input--filled' );
			}
		}
	})();
</script><!-- End contact us form validation and scripts -->

</body>