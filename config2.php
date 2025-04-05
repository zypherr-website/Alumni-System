<?php
$servername = "localhost"; // Change if your database is hosted elsewhere
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "alumni_system"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $batchyear = $_POST['batchyear'];
    $department = $_POST['department'];
    $course = $_POST['course'];
    $contactno = $_POST['contactno'];

    $sql = "INSERT INTO accounts (lastname, firstname, middlename, batchyear, department, course, contactno) 
            VALUES (?, ?, ?, ?, ?, ?, ?);";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $lastname, $firstname, $middlename, $batchyear, $department, $course, $contactno);
    
    if ($stmt->execute()) {
        echo "<script>alert('Account created successfully!'); window.location.href = 'signup.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}

$conn->close();
?>
