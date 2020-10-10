<?php
$a = $_POST['email'];
$b = $_POST['Password'];
echo "$a";
$conn = mysqli_connect("localhost","root", "", "shopping");
if($conn){
	echo "Connection Successful";
	echo "<br>";
}
else{
	die("Connection Unsuccessful");
}
$query = $conn->prepare("INSERT into user(email,password) values(?,?)");
$query->bind_param("ss",$a,$b);
$query->execute();
echo "Successfully done";
mysqli_close($conn);
?>
<html>
<body><br><br>
	<a href="home.php">Visit Home Page</a>
</body>
</html>