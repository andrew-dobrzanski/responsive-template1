<?php include 'includes/header.php';

?>

<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="page-header jumbotron">
				<div class="container">
					<h1><span>Image Title</span><br><span>1140 x 275</span></h1>
				</div>
			</div>
			<h1>Click Counter</h1>
      <button class="button button--moema button--border-thick button--size-s" type="button" onClick="onClick()">Click Here</button>
      <p>Clicks: <a id="clicks">0</a></p>

      <script type="text/javascript">
      var clicks = 0;
      function onClick() {
          clicks += 1;
          document.getElementById("clicks").innerHTML = clicks;
      };
      </script>

		</div>
	</div>
</div>

<?php include 'includes/footer.php';

?>

<style>
.button--moema {
	padding: 1.5em 3em;
	background: #7986cb;
	color: #fff;
	-webkit-transition: background-color 0.3s, color 0.3s;
	transition: background-color 0.3s, color 0.3s;
}
.button--moema.button--inverted {
	background: #ECEFF1;
	color: #37474f;
}
.button--moema::before {
	content: '';
	position: absolute;
	top: -20px;
	left: -20px;
	bottom: -20px;
	right: -20px;
	background: inherit;
	z-index: -1;
	opacity: 0.4;
	-webkit-transform: scale3d(0.8, 0.5, 1);
	transform: scale3d(0.8, 0.5, 1);
}
.button--moema:hover {
	-webkit-transition: background-color 0.1s 0.3s, color 0.1s 0.3s;
	transition: background-color 0.1s 0.3s, color 0.1s 0.3s;
	color: #ECEFF1;
	background-color: #3f51b5;
	-webkit-animation: anim-moema-1 0.3s forwards;
	animation: anim-moema-1 0.3s forwards;
}
.button--moema.button--inverted:hover {
	color: #ECEFF1;
	background-color: #7986cb;
}
.button--moema:hover::before {
	-webkit-animation: anim-moema-2 0.3s 0.3s forwards;
	animation: anim-moema-2 0.3s 0.3s forwards;
}
@-webkit-keyframes anim-moema-1 {
	60% {
		-webkit-transform: scale3d(0.8, 0.8, 1);
		transform: scale3d(0.8, 0.8, 1);
	}
	85% {
		-webkit-transform: scale3d(1.1, 1.1, 1);
		transform: scale3d(1.1, 1.1, 1);
	}
	100% {
		-webkit-transform: scale3d(1, 1, 1);
		transform: scale3d(1, 1, 1);
	}
}
@keyframes anim-moema-1 {
	60% {
		-webkit-transform: scale3d(0.8, 0.8, 1);
		transform: scale3d(0.8, 0.8, 1);
	}
	85% {
		-webkit-transform: scale3d(1.1, 1.1, 1);
		transform: scale3d(1.1, 1.1, 1);
	}
	100% {
		-webkit-transform: scale3d(1, 1, 1);
		transform: scale3d(1, 1, 1);
	}
}
@-webkit-keyframes anim-moema-2 {
	to {
		opacity: 0;
		-webkit-transform: scale3d(1, 1, 1);
		transform: scale3d(1, 1, 1);
	}
}
@keyframes anim-moema-2 {
	to {
		opacity: 0;
		-webkit-transform: scale3d(1, 1, 1);
		transform: scale3d(1, 1, 1);
	}
}
</style>
