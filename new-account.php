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
			<h1>Create a New Account</h1>
			<form method="post" action="/new-account-thank-you.php" class="center">				<label for="username">Create a username: </label>				<input type="text" id="username" />				<div id="feedback"></div>								<label for="password">Create a password: </label>				<input type="password" id="password" />								<input type="submit" value="sign-up!" />			</form>
		</div>
	</div>
</div><script>function checkUsername() {                        // Declare function  var username = el.value;                        // Store username in variable  if (username.length < 5) {                      // If username < 5 characters    elMsg.className = 'warning';                  // Change class on message    elMsg.textContent = 'Not long enough, yet...';// Update message  } else {                                        // Otherwise    elMsg.textContent = 'Good';                       // Clear the message  }}function tipUsername() {                          // Declare function  elMsg.className = 'tip';                        // Change class for message  elMsg.innerHTML = 'Username must be at least 5 characters'; // Add message}var el = document.getElementById('username');     // Username inputvar elMsg = document.getElementById('feedback');  // Element to hold message// When the username input gains / loses focus call functions above:el.addEventListener('focus', tipUsername, false); // focus call tipUsername()el.addEventListener('blur', checkUsername, false);// blur call checkUsername()</script>
<?php include 'includes/footer.php'; 
?><style>/* Form styles */form {  padding: 0 60px 65px 60px;}label {  color: #333;  display: block;  margin: 10px 0 10px 20px;  font-size: 24px;  float: left;}input[type='text'], input[type='password'], textarea {  background-color: #999;  color: #666;  font-family: 'Oswald', 'Futura', sans-serif;  font-size: 24px;  width: 96%;  padding: 4px 6px;  border: 1px solid #999;  border-radius: 8px;}input[type='text']:focus, input[type='password']:focus, textarea:focus {  border: 1px solid #999;  background-color: #999;  outline: none;}input[type='submit'], a.add {  background-color: #cb6868;  color: #f3dad1;  border: none;  border-radius: 5px;  padding: 8px 30px;  margin: 20px 20px 0 0;  float: right;  font-size: 18px;  text-decoration: none;  text-transform: uppercase;}input[type='submit']:hover, a.add:hover {  background-color: #d75359;  color: #f3dad1;  cursor: pointer;  box-shadow: none;  position: relative;  top: 1px;}#feedback {  color: #333;  font-weight: 700;}#termsHint {  color: #72c02c;  font-weight: 700;}#packageHint {	color: #72c02c;	font-weight: 700;}</style>