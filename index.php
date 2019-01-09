<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content ="IE=Edge">

	<title> To-Do List </title>
	<!-- external css -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>


	<div class="container py-5">
 		<section class="row justify-content-center">
			<div class="col-md-6">
				<h2 > To-Do List App </h2>
<!--				<form action="../controllers/add_task.php" method="GET">   without ajax -->
				<form >  <!-- with ajax -->	
					<input type="text" name="name" id="new-task" placeholder="Enter new task">
					<button class="btn btn-primary" id="addTaskBtn" type="submit"> Add New Task </button>
				</form>
				<br>
				<span id="taskAdded"></span>
				<br>
			</div>


	<!-- external jquery -->
	<script
  	src="https://code.jquery.com/jquery-3.3.1.min.js"
  	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  	crossorigin="anonymous"></script>

			<!-- Adding task using ajax -->
		 	<script>
				$("#addTaskBtn").click( () => {
					const newTask = $('#new-task').val();

					$.ajax({
						method : 'GET',
						url : './controllers/add_task.php',
						data: {name : newTask},
					}).done(
					console.log('added task')
					);
				});
			</script> 

			<!--  Retreive/Display tasks -->
			<h2> Task List </h2>
			<ul id="taskList">

			<?php

			require_once './controllers/connect.php';

			$sql = "SELECT * FROM tasks";
			$result = mysqli_query($conn, $sql);

			while($row = mysqli_fetch_assoc($result)) { ?>
					<li data-id="<?php echo $row['id'];?>">
						<?php echo $row['name'] . " is task number " . $row['id']; ?>
						<button class="deleteBtn"> Delete </button>
					</li>
			<?php } ?>

			</ul>


			<!-- Delete using ajax -->
			<script>
				$('#taskList').on('click', '.deleteBtn', function() {
					const task_id = $(this).parent().attr('data-id');
					// console.log(task_id);
					$.ajax({
						method : 'Post',
						url : './controllers/remove_task.php',
						data : {task_id : task_id}
					}).done(data => {
						$(this).parent().fadeOut();
					});
				});	
				
			</script>

			
		</section> 
	</div>




</body>
</html>