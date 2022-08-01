<?php 
$a = $_POST["name"];
$b = $_POST["email"];
$c = $_POST["mobile"];
$d = $_POST["message"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smart_health_consultant";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql = "INSERT INTO `contactus`(`name`, `email`, `mobile`, `message`) VALUES ('$a','$b','$c','$d')";

if (mysqli_query($conn,$sql)) {
	echo "<script> alert('Send');
	window.location.assign('Home.html')</script>";
	# code...
}
else{
		echo "Not send";
}
mysqli_close($conn);

 ?>