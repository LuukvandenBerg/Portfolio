<?php 
	include 'db.php';

	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$comment = $_POST['comment'];

		$infoadd = "INSERT INTO comments (name, subject, comment) VALUES ('$name', '$subject', '$comment')";
    	$result2 = $connect->query($infoadd);
    	header('location: ../index.php'); 	
    
?>