<?php 
$servername = "localhost";
$username = "tylerdurden";
$password = "QxCrlmfP269g13";
$dbname = "mindthegaap";

//Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
	die ("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT firstName, lastName FROM mindthegaap.Users";
$result = $conn->query($sql);
$row;
if ($result->num_rows > 0) {
	//output data of each row
	while($row = $result->fetch_assoc()) {
		echo $row["firstName"] . " " . $row["lastName"];
	}
} else {
	echo "0 results";
}
$conn->close();
?>