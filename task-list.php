<?php include 'includes/header.php'; 
?>
<div class="container task-wrapper">	<h1>Task List</h1>
	<div class="row center">		<div class="col-md-3">
			<div class="task-list task-container" id="pending">				<h3>Pending</h3>			</div>		</div>		<div class="col-md-3">			<div class="task-list task-container" id="inProgress">			  <h3>In Progress</h3>			</div>		</div>		<div class="col-md-3">			<div class="task-list task-container" id="completed">			  <h3>Completed</h3>			</div>		</div>		<div class="col-md-3">			<div class="task-list">			  <h3>Add a task</h3>			  <form id="todo-form">				<input type="text" placeholder="Title" />				<textarea placeholder="Descrtipion"></textarea>				<input type="text" id="datepicker" placeholder="Due Date (mm/dd/yyyy)" />				<input type="button" class="btn btn-primary" value="Add Task" onclick="todo.add();" />			  </form>			  <input type="button" class="btn btn-primary" value="Clear All Tasks" onclick="todo.clear();" />							  <div id="delete-div">Drag Here to Delete</div>			</div>		</div>
	</div>
</div><div class="clearfix"></div><script type="text/javascript" src="/js/todo.js"></script><script type="text/javascript">	$("#datepicker").datepicker();	$("#datepicker").datepicker("option", "dateFormat", "mm/dd/yy");	$(".task-container").droppable();	$(".todo-task").draggable({ revert: "valid", revertDuration:200 });	todo.init();</script>
<?php include 'includes/footer.php'; 
?><style>.task-wrapper {	height: 456px;}</style>