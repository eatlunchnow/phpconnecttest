<!DOCTYPE html>
<html>
<body>
<?php
include 'credentials.php';
	
	// Create connection
$conn = new mysqli(DB_NAME, DB_USER, DB_PASSWORD, DB_HOST);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT memberID, First_Name, Last_Name, Status FROM members";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> MemberID: " . $row["id"]. "Name: " . $row["First_Name"]. " " . $row["Last_Name"]. "Status: " . $row["Status"]. "<br>";
    
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>	
	
