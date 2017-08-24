<?php
	include './secure/configuration.txt';
	$conn = new mysqli($server , $user , $pwd , $db);

	$sql = "create table enquiry(name varchar(50),email varchar(60),comment text)";

	if($conn->query($sql)){}
	else{
		// die();
	}
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];

	$name = trim($name);
	$email = trim($email);
	$comment = trim($comment);

	$name = stripslashes($name);
	$email = stripslashes($email);
	$comment = stripslashes($comment);

	$name = htmlspecialchars($name);
	$email = htmlspecialchars($email);
	$comment = htmlspecialchars($comment);


	$sql = "INSERT INTO enquiry VALUES ('{$name}','{$email}','{$comment}')";
	$conn->query($sql);
?>
<script type="text/javascript">location.href = 'thankyou.php';</script>