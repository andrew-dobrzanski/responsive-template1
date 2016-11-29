<head>
<title>Grocery List</title>
<link href="/css/grocery-list.css" rel="stylesheet">
</head>

<div class="container">
	<div class="row">
		<div class="grocery-list-container col-md-12">
			<div id="page">
				<h1>#TEAMDOBRZANSKI<br/>Grocery List</h1>
				<h2>Groceries Needed <span id="counter"></span></h2>
				<ul>
				<!-- <li id="one" class="hot"></li>
				<li id="two" class="hot"></li>
				<li id="three" class="hot"></li>
				<li id="four"></li> -->
				</ul>
				<div id="newItemButton">
					<button href="#" id="showForm">new item</button>
				</div>
				<form id="newItemForm">
					<input type="text" id="itemDescription" placeholder="Add description" />
					<input type="submit" id="add" value="add" />
				</form>
			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="js/grocery-list.js"></script>