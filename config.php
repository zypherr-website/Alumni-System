<?php
session_start();

// Database connection settings
$host = "localhost";  // Change if necessary
$user = "root";       // Change to your database username
$pass = "";           // Change to your database password
$dbname = "alumni_system";  // Change to your actual database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM tbl_dean WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verify login
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username; // Store username in session

        // Redirect based on username
		switch ($username) {
			case "citcs_dean":
				header("Location: users/citcs/dean/index.html");
				// header("Location: dashboard.php");
				break;
			case "cas_dean":
				header("Location: users/cas/dean/index.php");
				// header("Location: dashboard.php");
				break;
			case "cba_dean":
				header("Location: users/cba/dean/index.php");
				// header("Location: dashboard.php");
				break;
			case "ccj_dean":
				header("Location: users/ccj/dean/index.php");
				// header("Location: dashboard.php");
				break;
			case "cte_dean":
				header("Location: users/cte/dean/index.php");
				// header("Location: dashboard.php");
				break;
			default:
				header("Location: index.php"); // Default dashboard
				break;
		}

        exit();
    } else {
        echo "<script>alert('Invalid username or password!'); window.location.href='index.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
