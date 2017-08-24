<?php

 include './secure/configuration.txt';

 $conn = new mysqli($server, $user, $pwd, $db);

 if (mysqli_connect_error()) {
 	die("could not connect".mysqli_connect_error());
 }

 $name = $_POST['name'];
 $age = $_POST['age'];
 $sex = $_POST['sex'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $language = $_POST['language'];
 $experience = $_POST['experience'];
 $profession = $_POST['profession'];
 $additional = $_POST['additional'];

$name = trim($name);
$age = trim($age);
$sex = trim($sex);
$phone = trim($phone);
$email = trim($email);
$address = trim($address);
$language = trim($language);
$experience =trim($experience);
$profession = trim($profession);
$additional = trim($additional);

$name = stripcslashes($name);
$age = stripcslashes($age);
$sex = stripcslashes($sex);
$phone = stripcslashes($phone);
$email = stripcslashes($email);
$address = stripcslashes($address);
$language = stripcslashes($language);
$experience =stripcslashes($experience);
$profession = stripcslashes($profession);
$additional = stripcslashes($additional);

$name = htmlspecialchars($name);
$age = htmlspecialchars($age);
$sex = htmlspecialchars($sex);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$address = htmlspecialchars($address);
$language = htmlspecialchars($language);
$experience =htmlspecialchars($experience);
$profession = htmlspecialchars($profession);
$additional = htmlspecialchars($additional);

$sql = "INSERT INTO registration".
								"(name , age , phone , email , address ,language , experience , profession , additional , sex )".
								"VALUES".
								"('{$name}' ,'{$age}' ,'{$phone}' ,'{$email}' ,'{$address}' , '{$language}' , '{$experience}' , '{$profession}' , '{$additional}' , '{$sex}' )";



if ($conn->query($sql) === TRUE) {
	echo "data entered sucessfully";
}
else{
	echo "error".$conn->error;
	
}
// header('Location: ' . 'thankyou.php');


?>
<script type="text/javascript">location.href = 'thankyou.php';</script>