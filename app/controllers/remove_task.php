<?php
 
 require_once'./connect.php';

 $id = $_POST['task_id'];


 $sql = "DELETE FROM tasks WHERE id = '$id'";
 mysqli_query($conn,$sql) or die(mysqli_error($conn));

 // $result = mysqli_query($conn, $sql);
 // if ($result === TRUE) {
 // 	echo 'deleted successfully';
 // 	// header("Location: ../views/index.php");//redirect browser
 // } else {
 // 	echo 'error' . $sql. "<br>" . mysqli_error($conn);
 // }

 // mysqli_close($conn);

 ?>