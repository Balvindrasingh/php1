<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "students_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$grade = $_POST['grade'];

$sql = "INSERT INTO students (first_name, last_name, grade) VALUES ('$first_name', '$last_name', $grade)";

if ($conn->query($sql) === TRUE) {
    header("Location: view_content.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
