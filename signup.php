<?php
// Include your database connection file

    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        $conn=mysqli_connect('localhost','root','','book_db');
        if(!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            echo "Connected successfully";
        }
    }

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['signup-username'];
    $email=$_POST['signup-email'];
    $password = $_POST['signup-password'];

    // Insert into database
    $sql = "INSERT INTO users(`username`,`email`,`password`) VALUES ('$username','$email','$password')";
    if (mysqli_query($conn, $sql)) {
        // Redirect to home page with welcome message
        header("Location: home.php?welcome=$username");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
