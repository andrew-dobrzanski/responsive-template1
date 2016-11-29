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
			<h1>Examples</h1>
			<!-- Example 14 -->
			<div id="info">
				<h2>latest hotel offer</h2>
				<div id="hotelName"></div>
				<div id="roomRate"></div>
				<div id="specialRate"></div>
				<p>room rate when you book 2 or more nights</p>
				<div id="offerEnds"></div>
			</div>
			
			<script>
			/* The script is placed inside an immediately invoked function expression which helps protect the scope of variables */

			(function() {

			  // PART ONE: CREATE HOTEL OBJECT AND WRITE OUT THE OFFER DETAILS

			  // Create a hotel object using object literal syntax
			  var hotel = {
				name: 'Park',
				roomRate: 240, // Amount in dollars
				discount: 15,  // Percentage discount
				offerPrice: function() {
				  var offerRate = this.roomRate * ((100 - this.discount) / 100);
				  return offerRate;
				}
			  };

			  // Write out the hotel name, standard rate, and the special rate
			  var hotelName, roomRate, specialRate;                    // Declare variables

			  hotelName = document.getElementById('hotelName');        // Get elements
			  roomRate = document.getElementById('roomRate');
			  specialRate = document.getElementById('specialRate');

			  hotelName.textContent = hotel.name;                      // Write hotel name
			  roomRate.textContent =  '$' + hotel.roomRate.toFixed(2); // Write room rate
			  specialRate.textContent = '$' + hotel.offerPrice();      // Write offer price


			  // PART TWO: CALCULATE AND WRITE OUT THE EXPIRY DETAILS FOR THE OFFER
			  var expiryMsg; // Message displayed to users
			  var today;     // Today's date
			  var elEnds;    // The element that shows the message about the offer ending

			  function offerExpires(today) {
				// Declare variables within the function for local scope
				var weekFromToday, day, date, month, year, dayNames, monthNames;

				// Add 7 days time (added in milliseconds)
				weekFromToday = new Date(today.getTime() + 7 * 24 * 60 * 60 * 1000);

				// Create arrays to hold the names of days / months
				dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
				monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

				// Collect the parts of the date to show on the page
				day = dayNames[weekFromToday.getDay()];
				date = weekFromToday.getDate();
				month = monthNames[weekFromToday.getMonth()];
				year = weekFromToday.getFullYear();

				// Create the message
				expiryMsg = 'Offer expires next ';
				expiryMsg += day + ' <br />(' + date + ' ' + month + ' ' + year + ')';
				return expiryMsg;
			  }

			  today = new Date();                             // Put today's date in variable
			  elEnds = document.getElementById('offerEnds');  // Get the offerEnds element
			  elEnds.innerHTML = offerExpires(today);         // Add the expiry message

			// Finish the immediately invoked function expression
			}());
			</script>
			
			
			
			
			
			
			
			
			
			
			
			
			
			<!-- Using if statements -->
			<section id="page1">
				<h1>Bullseye</h1>
				<section id="answer"></section>
			</section>

			<script>
				var score = 75; //Score
				var msg; // Message

				if (score >= 50) {
					msg = 'Congratulations!';
					msg += ' Proceed to the next round.';
				}
				
				var el = document.getElementById('answer');
				el.textContent = msg;
			</script>
		</div>
	</div>
</div>

<?php include 'includes/footer.php'; 

?>

<style>
/* message under the logo */

#message {
  float: left;
  clear: left;
  background-color: #ffb87a;
  color: #1e1b1e;
  width:170px;
  padding: 18px 30px;
  text-align: center;}

/* black bar across the right hand side of the page */

#info {
  background-color: #1e1b1e;
  color: #fff;
  width: 200px;
  padding: 0 15px;
  text-align: center;
  min-height: 100%;
  top: 0;
  right: 15%;}

/* details in the black bar */

#hotelName {
  text-transform: uppercase;
  text-align: center; 
  font-size: 120%;
  margin-top: 10px;
  border-top: 1px solid #fff;
  border-bottom: 1px solid #fff; 
  padding: 10px 0;}

#hotel1 {
  margin-top: 1em; 
  border-top: 1px solid #fff; 
  padding-top: 1em;} 
#hotel2 {
  border-bottom: 1px solid #fff; 
  padding-bottom: 1em;}

#rooms {
  font-size: 440%;
  color: #ffb87a;
  display: inline-block;
  margin: 0;}

#roomRate{
  text-decoration: line-through;
  display: inline-block;
  float: left;
  padding-top: 10px;}

#specialRate {  
  font-size: 440%;
  color: #ffb87a;
  display: inline-block;
  padding: 10px 0 20px 0;
  margin: 0;}

#offerEnds {
  text-transform: uppercase;
  color: #ffb87a;
  font-size: 75%;}
  
.true {
	background-color: green;
}

.false {
	background-color: red;
}
</style>