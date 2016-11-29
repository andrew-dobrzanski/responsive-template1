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
			<!-- Example 2 -->
			<!-- Using a Variable to Store a Number (numeric variable) -->	
			<h1>Using a Variable to Store a Number</h1>			
			<div id="content">
				<h2>Custom Signage</h2>
				<div id="cost">Cost: $5 per tile</div>
			</div>
			
			<hr/>
			
			<!-- Example 3 -->
			<!-- Using a Variable to Store a String (string variable) -->
			<h1>Using a Variable to Store a String</h1>
			<div id="content">
				<div id="title">Howdy <span id="name">friend</span>!</div>
				<div id="note">Take a look around...</div>
			</div>
			
			<hr/>
			
			<!-- Example 4 -->
			<!-- Using quotes inside a string -->
			<h1>Using quotes inside a string</h1>
			<div id="content">
				<div id="title2">Special Offers</div>
				<div id="note2">Sign-up to receive personalized offers!</div>
			</div>
			
			<hr/>
			
			<!-- Example 5 -->
			<!-- Using a Variable to Store a Boolean -->
			<h1>Using a Variable to Store a Boolean</h1>
			<div id="content">
				<div class="message">Available: <span id="stock"></span></div>
				<div class="message">Shipping: <span id="shipping"></span></div>
			</div>
			
			<hr/>
			
			<!-- Example 6 -->
			<!-- Shorthand for Creating Variables -->
			<h1>Shorthand for Creating Variables</h1>
			<div id="content">
				<h2>Custom Signage</h2>
				<div id="cost2">Cost: $5 per tile</div>
			</div>
			
			<hr/>
			
			<!-- Example 7 -->
			<!-- Changing the Value of a Variable -->
			<h1>Changing the Value of a Variable</h1>
			<div id="content">
				<div class="message">Available: <span id="stock2"></span></div>
				<div class="message">Shipping: <span id="shipping2"></span></div>
			</div>
			
			<hr/>
			
			<!-- Example 8 -->
			<!-- Creating an Array (i) ~literal~ -->
			<h1>Creating an Array (i)</h1>
			<div id="content">
				<div class="message">Color: <span id="colors">We were unable to find your color choice. Please try again...</span></div>
			</div>
			
			<hr/>
			
			<!-- Example 9 -->
			<!-- Creating an Array (ii) ~constructor~ -->
			<h1>Creating an Array (ii)</h1>
			<div id="content">
				<div class="message">Color: <span id="colors2">We were unable to find your color choice. Please try again...</span></div>
			</div>
			
			<hr/>
			
			<!-- Example 10 -->
			<!-- Accessing & Changing Values in an Array -->
			<h1>Accessing & Changing Values in an Array</h1>
			<div id="content">
				<div class="message">Color: <span id="colors3">We were unable to find your color choice. Please try again...</span></div>
			</div>
			
			<hr/>
			
			<!-- Example 11 -->
			<!-- Using Arithmetic Operators -->
			<h1>Using Arithmetic Operators</h1>
			<div id="content">
				<div class="message number">Subtotal: $<span id="subtotal">&nbsp;</span></div>
				<div class="message number">Shipping: $<span id="shipping3">&nbsp;</span></div>
				<div class="message number">Total: $<span id="total">&nbsp;</span></div>
			</div>
			
			<hr/>
			
			<!--  Example 12 -->
			<!-- Using String Operators -->
			<h1>Using String Operators</h1>
			<div id="content">
				<div id="greeting2" class="message">Hello <span id="name">friend</span>!</div>
			</div>
			
			<hr/>
			
			<!-- Example 13 -->
			<div id="content">
				<div id="greeting3" class="message">Hello!</div>
				<table>
				  <tr>
					<td>Custom sign: </td>
					<td id="userSign"></td>
				  </tr>
				  <tr>
					<td>Total tiles: </td>
					<td id="tiles"></td>
				  </tr>
				  <tr>
					<td>Subtotal: </td>
					<td id="subTotal">$</td>
				  </tr>
				  <tr>
					<td>Shipping: </td>
					<td id="shipping4">$</td>
				  </tr>
				  <tr>
					<td>Grand total: </td>
					<td id="grandTotal">$</td></tr>
				</table>
				<a href="#" class="action">Pay Now</a>
			</div>
		</div><!-- end.col -->
	</div><!-- end.row -->
</div><!-- end.container -->

<?php include 'includes/footer.php'; 

?>

<!-- Scripts -->
<!-- Example 2 -->
<script>
// Create three variables to store the information needed.
var price;
var quantity;
var total;

// Assign values to the price and quantity variables.
price = 5;
quantity = 5;
// Calculate the total by multiplying the price by quantity.
total = price * quantity;

// Get the element with an id of cost.
var el = document.getElementById('cost');
el.textContent = '$' + total;
</script>

<!-- Example 3 -->
<script>
// Create variables to hold the name and note text.
var username;
var message;

// Assign values to these variables.
username = 'Andrew';
message = 'See our upcoming range';

// Get the element with an id of name.
var elName = document.getElementById('name');
// Replace the content of this element.
elName.textContent = username;

// Get the element with an id of note.
var elNote = document.getElementById('note');
// Replace the content of this element.
elNote.textContent = message;
</script>

<!-- Example 4 -->
<script>
// Create variables to hold the title and note text.
var title2; 
var message;

// Assign values to these variables.
title = "Andrew's Special Offers";
message = '<a href="">25% off!</a>';

// Get the element with an id of title.
var elTitle = document.getElementById('title2');
// Replace the content of this element.
elTitle.textContent = title;

// Get the element with an id of note.
var elNote = document.getElementById('note2');
// Replace the content of this element.
elNote.innerHTML = message;
</script>

<!-- Example 5 -->
<script>
// create variables and assign their values
var inStock;
var shipping;
inStock = true;
shipping = false;

// get the element that has an id of stock
var elStock = document.getElementById('stock');
// Set class name with value of inStock variable
elStock.className = inStock;

// get the element that has an id of shipping
var elShip = document.getElementById('shipping');
// Set class name with value of shipping variable
elShip.className = shipping;
</script>

<!-- Example 6 -->
<script>
// METHOD 1
var price = 15;
var quantity = 14;
var total = price * quantity;

/* METHOD 2
var price, quantity, total;
price = 5;
quantity = 14;
total = price * quantity;
*/

/* METHOD 3
var price = 5, quantity = 14;
var total = price * quantity;
*/

// Write the total into the element with id of cost
var el = document.getElementById('cost2');  // Gets the element with an id of cost
el.textContent = '$' + total;                // Replaces the content of this element
</script>

<!-- Example 7 -->
<script>
// Create variables and assign them values
var inStock;
var shipping;
inStock = true;
shipping = false;

/* Some other processing might go here and, as a result, the script might need to change these values. */

inStock = false;
shipping = true;

// Get the element with an id of stock
var elStock = document.getElementById('stock2');
// Set class name with value of inStock variable
elStock.className = inStock;
// Get the element with an id of shipping
var elShip = document.getElementById('shipping2');
// Set class name with value of shipping variable
elShip.className = shipping;
</script>

<!-- Example 8 -->
<script>
// Create an array and assign it values.
var colors; 
colors = ['white', 'black', 'custom'];

// Show the first item from the array.
var el = document.getElementById('colors');
el.textContent = colors[0];
</script>

<!-- Example 9 -->
<script>
// Create and name the variable.
// Tell the interpreter it is an array.
// Assign values inside the parentheses.
var colors = new Array('white', 
						'black',
						'custom');
// Show the first item from the array.
var el = document.getElementById('colors2');
el.textContent = colors[1];
</script>


<!-- Example 10 -->
<script>
// Create the array and assign it values
var colors = ['white', 'black', 'custom'];

// Update the third item in the array
colors[2] = 'beige';

// Get the element with an id of colors
var el = document.getElementById('colors3');
// Replace element with third item from the array
el.textContent = colors[2];
</script>

<!-- Example 11 -->
<script>
// Create a variable for the subtotal and make a calculation
var subtotal = (13 + 1) * 5; // Subtotal is 70

// Create a variable for the shipping and make a calculation
var shipping = 0.5 * (13 + 1); // Shipping is 7

// Create the total by combining the subtotal and shipping values
var total = subtotal + shipping; // Total is 77

// Write the results to the screen
var elSub = document.getElementById('subtotal');
elSub.textContent = subtotal;

var elShip = document.getElementById('shipping3');
elShip.textContent = shipping;

var elTotal = document.getElementById('total');
elTotal.textContent = total;
</script>

<!-- Example 12 -->
<script>
// Store the greeting in a variable
var greeting = 'What is up ';

// Store the users name in a variable
var name = 'Andrew';

/* Create the welcome message by concatenating the strings in the two variables */
var welcomeMessage = greeting + name + '!';

// Get the element that has an id of greeting
var el = document.getElementById('greeting2');

// Replace the content of this element with the personal message
el.textContent = welcomeMessage;
</script>

<!-- Example 13 -->
<script>
// Create variables for the welcome message
var greeting = 'Hi ';
var name = 'Andrew D.';
var message = ', please check your order:';
// Concatenate the three variables above to create the welcome message
var welcome = greeting + name + message;

// Create variables to hold details about the sign
var sign = 'Montague House';
var tiles = sign.length;
var subTotal = tiles * 5;
var shipping = 10;
var grandTotal = subTotal + shipping;

// Get the element that has an id of greeting
var el = document.getElementById('greeting3');
// Replace the content of that element with the personalized welcome message
el.textContent = welcome;

// Get the element that has an id of userSign then update its contents
var elSign = document.getElementById('userSign');
elSign.textContent = sign;

// Get the element that has an id of tiles then update its contents
var elTiles = document.getElementById('tiles');
elTiles.textContent = tiles;

// Get the element that has an id of subTotal then update its contents
var elSubTotal = document.getElementById('subTotal');
elSubTotal.textContent = '$' + subTotal;

// Get the element that has an id of shipping then update its contents
var elShipping = document.getElementById('shipping4');
elShipping.textContent = '$' + shipping;

// Get the element that has an id of grandTotal then update its contents
var elGrandTotal = document.getElementById('grandTotal');
elGrandTotal.textContent = '$' + grandTotal;
</script>

<!-- CSS -->
<style>
#content {
	background-color: #fff;
	border: 3px double #31373f;
	color: #31373f;
	display: inline-block;
	padding: 30px 50px;
	margin: 20px auto 50px auto;
	max-width: 580px;
	min-height: 4em;
	overflow: auto;
	text-align: center;}
#title {
	font-size: 120%;
	font-weight: bold;}

#cost, .action {
	background-color: #f84c53;
	color: #fff;
	width: auto;
	height: 1 em;
	padding: 0.5em 0.75em;
	float: right;}
#cost {
	position: relative;
	top: 1em;
	right: 2em;}
.action {
	position: relative;
	top: 1.3em;
	right: -2.3em;}

#note {
	background-color: #31373f; 
	border-radius: 0.5em;
	color: #e3bb5a;
	padding: 0.5em 1em;
	margin-top: 1em;
	text-transform: uppercase;
	display: inline-block;}

.true {
	background-color: green;
	display: inline-block;
	float:right;
	height: 25px;
	width: 25px;}
.false {
	background-color: red;
	display: inline-block;
	float:right;
	height: 25px;
	width: 25px;}
.message {
	font-weight: bold;
	line-height: 1.5em;
	height: 2em;
	display: block;
	clear: left;
	min-width: 10em;}

.message span { 
	font-weight: normal;}

.number {
	text-align: left;}

table {
	margin: 20px 10px 0px 10px;}

tr td:first-child {
	font-weight: bold;
	padding-right: 20px;}
</style>