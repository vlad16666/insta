<?php 
		$con = mysqli_connect('127.0.0.1', 'root','','25urok');
		$query = mysqli_query($con, "UPDATE event SET text = '{$_GET["text"]}', img = '{$_GET["img"]}' WHERE id = {$_GET["id"]} ");
		header("Location: index.php")
	 ?>