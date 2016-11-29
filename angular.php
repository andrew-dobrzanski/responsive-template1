<?php include 'includes/header.php'; 

?>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

<div ng-app="myApp1" class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="page-header jumbotron">
				<div class="container">
					<h1><span>Image Title</span><br><span>1140 x 275</span></h1>
				</div>
			</div>
			<h1>Angular.js</h1>
			<div ng-controller="myCtr1">
				First Name: <input type="text" ng-model="firstName"><br><br>
				Last Name: <input type="text" ng-model="lastName"><br><br>
				Full Name: {{firstName + " " + lastName}}
			</div>
		</div>
	</div>
</div>

<?php include 'includes/footer.php'; 

?>

<script>
var app =  angular.module('myApp1', []);
app.controller('myCtr1', function($scope) {
	$scope.firstName= "Andrew";
	$scope.lastName= "Dobrzanski";
});
</script>