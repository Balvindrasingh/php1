<!DOCTYPE html>
<html>
<head>
    <title>View Student Records</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Student Records</h1>
        <nav>
            <a href="index.html">Add Record</a>
        </nav>
    </header>
    <main>
        <div class="records-container">
            <h2>Student Records</h2>
            <?php
            $conn = new mysqli("localhost", "username", "password", "students_db");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM students";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='record'>";
                    echo "ID: " . $row['id'] . "<br>";
                    echo "First Name: " . $row['first_name'] . "<br>";
                    echo "Last Name: " . $row['last_name'] . "<br>";
                    echo "Grade: " . $row['grade'] . "<br>";
                    echo "</div>";
                }
            } else {
                echo "No records found.";
            }

            $conn->close();
            ?>
        </div>
    </main>
    <footer>
        <p>&copy; 2023 Student Records</p>
    </footer>
</body>
</html>
