<?php include 'includes/header.php';

?>

<div class="container">
	<div class="row">
		<div class="col-md-9 col-sm-9">
			<!-- <div class="page-header jumbotron">
				<div class="container">
					<h1><span>Image Title</span><br><span>1140 x 275</span></h1>
				</div>
			</div> -->

			<div id="daily-journal">
				<div class="add-item-container row">
					<h2>Add Nutrient or Solution</h2>
					<div class="col-md-6">
						<input type="text" class="add-nutrient" placeholder="Add Item" />
					</div>
					<div class="col-md-3">
						<select class="measurement" name="measurement">
							<option value="">Select</option>
							<option value="Milliliters">Milliliters</option>
							<option value="Tablespoons">Tablespoons</option>
							<option value="Ounces">Ounces</option>
							<option value="Cups">Cups</option>
							<option value="Pints">Pints</option>
							<option value="Quarts">Quarts</option>
							<option value="Gallons">Gallons</option>
						</select>
					</div>
					<div class="col-md-3">
						<button class="add-button uppercase">Add</button>
					</div>
				</div>

				<div class="todo-list-container">
					<ul id="todo">
						<li>Added:</li>
					</ul>

					<ul id="done">
						<li>Done</li>
					</ul>
				</div>
				<div class="clearfix"></div>

				<hr/>

				<div class="notes-container row">
					<h2>Additional Notes</h2>
					<div class="col-md-12">
						<textarea name="notes" placeholder="Additional Notes / Comments"></textarea>
					</div>
				</div>

				<hr/>

				<button class="submit-button uppercase">Submit</button>

			</div>


		</div>
		<div class="col-md-3 col-sm-3 right" id="sidebar1">
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
					<input type="email" class="form-control" id="email" placeholder="Email Address">
					<button class="btn-newsletter icon-arrow-right-newsletter">Submit</button>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'includes/footer.php';

?>

<script>
	(function(){
		var input = document.getElementById('input');
		var btn = document.getElementById('btn');
		var lists = {
			todo: document.getElementById('todo'),
			done: document.getElementById('done')
		};

		/***
		 ** @param {string} str
		 ** @param {Function} onCheck
		 ** @returns {HTMLElement}
		 ***/
		var makeTaskHtml = function(str, onCheck) {
			var el = document.createElement('li');
			var checkbox = document.createElement('input');
			var label = document.createElement('span');

			checkbox.type = 'checkbox';
			checkbox.addEventListener('click', onCheck);
			label.textContent = str;

			el.appendChild(checkbox);
			el.appendChild(label);

			return el;
		};

		var addTask = function(list, task) {
			list.appendChild(task);
		};

		var onCheck = function(event){
			var task = event.target.parentElement:
			var list = task.parentElement.id;
			list[list === 'done' ? 'todo' : 'done'].appendChild(task);
		};

		addTask(lists.todo, makeTaskHtml('test'));
		addTask(lists.done, makeTaskHtml('test #2'));
	}());
</script>

<style>
#daily-journal h2 {
	margin-left: 15px;
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

.add-nutrient, .measurement {
	margin-bottom: 10px;
}

.submit-button {
	width: 100%;
	height: 35px;
}

#daily-journal ul {
	list-style: none;
	padding: 10px;
	width: 40%;
	float: left;
	border: 1px solid #333;
	background: #eee;
}
</style>
