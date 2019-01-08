<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content ="IE=Edge">

		<!-- animate css -->
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

	<title>  </title>
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
	
<!-- 	<form action="./app/controllers/register.php" method="POST">
		<input type="text" name="username">
		<input type="text" name="password">

		<input type="submit" value="submit">
	</form> -->

	<div class="container py-5">
 		<section class="row justify-content-center">
			<div class="col-md-6">
				<h2 class="text-center"> To-Do List App </h2>
				<form action="./app/controllers/connect.php" method="POST">
					<input type="text" name="task" placeholder="Enter new task">
					<button id="add" type="submit" value="submit"> Add New Task </button>
				</form>
				<br>
				<span id="taskAdded"></span>
				<br>
				<h3> Done Task </h3>
			</div>
		</section> 
	</div>

</body>
</html>