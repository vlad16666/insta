<?php  
	$connect = mysqli_connect("127.0.0.1","root","","25urok"); 
	$text_zaprosa = "DELETE FROM event WHERE id = '" .$_GET['idd']. " ' ";
	$zapros = mysqli_query($connect,$text_zaprosa);
	$zapros;
	header("Location: index.php");
?>

