<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "plmun_alumni";

// Connect to MySQL
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"]; // User input password

        // Hash input password before checking
        $hashed_password = hash('sha256', $password);

        // Check user in database
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $hashed_password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION["username"] = $username;

            // Redirect based on username
            switch ($username) {
                case "ACT":
                    header("Location: users/citcs/act/index.php");
                    // header("Location: act_dashboard.php");
                    break;
                case "Computer Science":
                    header("Location: users/citcs/cs/index.php");
                    // header("Location: cs_dashboard.php");
                    break;
                case "Information Technology":
                    header("Location: users/citcs/it/index.php");
                    // header("Location: it_dashboard.php");
                    break;
                case "Dean":
                    header("Location: users/citcs/dean/index.php");
                    break;
                default:
                    header("Location: index.html"); // Default dashboard
                    break;
            }
            exit();
        } else {
            echo "<script>alert('Invalid username or password'); window.location.href='index.html';</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Please fill in all fields.'); window.location.href='index.html';</script>";
    }
}

$conn->close();
?>
