<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "Form method is POST.<br>";

        if (isset($_POST['submitBtn'])) { // Check if the submit button is clicked
            echo "Submit button is set.<br>";
            $conn = mysqli_connect('localhost', 'root', '', 'book_db');

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                echo "Connected successfully.<br>";
            }

            if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['location']) && isset($_POST['guests']) && isset($_POST['arrivals']) && isset($_POST['leaving'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $location = $_POST['location'];
                $guests = $_POST['guests'];
                $arrivals = $_POST['arrivals'];
                $leaving = $_POST['leaving'];
                $anchor="home.php";

                $sql = "INSERT INTO `book_form` (`name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

                $query = mysqli_query($conn, $sql);
                if ($query) {
                    echo '<br>Data entry successful';
                    //header('Location: home.php');
                    echo " Name :$name <br>";
                    echo " Email:$email <br>";
                    echo " Phone:$phone <br>";
                    echo "Adress :$address <br>";
                    echo "Location: $location <br>";
                    echo "Guests:$guests <br>";
                    echo "Arrivals:$arrivals <br>";
                    echo "Leaving:$leaving <br>";
                    echo "<a href='$anchor'>Click Here to go to Home</a>";
                    exit(); // Ensure no further code is executed after redirect
                } else {
                    echo 'Error Occurred: ' . mysqli_error($conn);
                }
            } else {
                echo "Oops! Check your form fields.";
            }
        } else {
            echo "Submit button not set.";
        }
    } else {
        echo "Form not submitted properly.";
    }
?>
