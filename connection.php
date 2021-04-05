 <?php
$name = $_GET['Name'];
$email = $_GET['Email'];
$website = $_GET['Website'];
$message = $_GET['Message'];

//Database Connection Code
 
$servername = "localhost";
$username = "id11079112_kashfia12";
$password = "parisasraboni12";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 