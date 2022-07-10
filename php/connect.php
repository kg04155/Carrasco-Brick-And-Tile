<?php
$email = $_POST['email'];
$password = $_POST['password'];
$passwordrepeat = $_POST['passwordrepeat'];

$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
} else{
    $stmt = $conn->prepare("insert into registration(email, password, repeat-password) ");
    $stmt->bind_param("sss", $email, $password, $passwordrepeat);
    $stmt->execute();
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
?>