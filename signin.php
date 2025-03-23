<?php
// Include your database connection file
    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        $conn=mysqli_connect('localhost','root','','book_db');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            echo "Connected successfully";
        }
    }

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email= $_POST['signin-email'];
    $password = $_POST['signin-password'];

    // Check credentials in database
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        // Redirect to home page with welcome message
        header("Location: home.php?welcome=$username");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}

// Close database connection
mysqli_close($conn);
?>
