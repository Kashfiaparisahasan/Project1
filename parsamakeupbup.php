 <?php
$servername = "files.000webhost.com";
$username = "parsamakeupbup";
$password = "Parisasraboni12";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 