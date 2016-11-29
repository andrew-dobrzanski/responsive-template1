<!-- http://codepen.io/jaballadares/pen/Hwebq -->
<?php include 'includes/header.php';

?>

<div class="container">
	<div class="row">
		<div class="col-md-9 col-sm-9">
			<div id="daily-purchases">
				<div class="add-item-container row">
					<h2>Add Purchase</h2>
					<!-- Add purchase input -->
					<div class="col-md-4">
						<input id="new-purchase" type="text" placeholder="Add Item" />
					</div>
					<!-- Purchase amount -->
					<div class="col-md-2">
						<input class="amount" type="text" placeholder="Amount" />
					</div>
					<div class="col-md-3">
						<select class="purchase-amount" name="purchase-amount">
							<option value="Dollars">Dollars</option>
							<option value="Cents">Cents</option>
						</select>
					</div>
					<!-- Add button -->
					<div class="col-md-3">
						<button onclick="newElement()" class="add-button uppercase">Add</button>
					</div>
				</div>

				<hr/>

				<!-- Expenses to add -->
				<div class="expenses-to-add-container col-md-12">
					<ul id="expenses-to-add">
					</ul>
				</div>

				<!-- <div class="notes-container row">
					<h2>Notes</h2>
					<div class="col-md-12">
						<textarea name="notes" placeholder="Additional Notes / Comments"></textarea>
					</div>
				</div> -->

				<hr/>

				<!-- Submit button -->
				<button class="submit-button uppercase">Submit</button>
			</div>
		</div>

<script>


// Create a "close" button and append it to each list item
var myExpenselist = document.getElementsByTagName("expenses-to-add li");
var i;
for (i = 0; i < myExpenselist.length; i++) {
  var span = document.createElement("span");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myExpenselist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'li') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("new-purchase").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("expenses-to-add").appendChild(li);
  }
  document.getElementById("new-purchase").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>

		<!-- <div class="col-md-3 col-sm-3 right" id="sidebar1">
			<h3>Latest Posts</h3>
			<div class="well">
				<ul class="nav nav-stacked">
					<li><a href="#">Blog Post 1</a></li>
					<li><a href="#">Blog Post 2</a></li>
					<li><a href="#">Blog Post 3</a></li>
					<li><a href="#">Blog Post 4</a></li>
				</ul>
			</div>
			<h3>Newsletter Sign-Up!</h3>
			<div class="newsletter well">
				<p>Subscribe to our newsletter for good news, sent out every month.</p>
				<span>We promise to only send you good things!</span>
				<div class="newsletter-form-group">
					<!-- <label>Email Address:</label> -->
					<!-- <input type="email" class="form-control" id="email" placeholder="Email Address">
					<button class="btn-newsletter icon-arrow-right-newsletter">Submit</button>
				</div>
			</div>
		</div> -->
	</div>
</div>

<?php include 'includes/footer.php';

?>

<style>
#daily-purchases h2 {
	margin-left: 15px;
}

#daily-purchases ul {
	list-style: none;
	padding: 10px;
	width: 100%;
	background: #eee;
}

.add-item-container input {
	width: 100%;
	height: 35px;
	padding: 10px;
}

.add-item-container select {
	width: 100%;
	height: 35px;
}

.add-button {
	width: 100%;
	height: 35px;
}

.notes-container textarea {
	width: 100%;
	padding: 10px;
	height: 125px;
}

.add-purchase, .purchase-amount {
	margin-bottom: 10px;
}

.submit-button {
	width: 100%;
	height: 35px;
}
</style>
