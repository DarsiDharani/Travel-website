<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- custom css file link-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- header section starts -->
    <section class="header">
        <a href="home.php" class="logo"><b style="color:red">TRAVEL TREKS</b></a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <div class="heading" style="background:url(images/header-1.jpg) no-repeat;background-size:cover">
        <marquee scrollamount="20" direction="right" behavior="alternate"><h1 style="color:pink">Book Now</h1></marquee>
    </div>

    <!-- booking section starts-->
    <section class="booking">
        <audio id="suc" src="suc.mp3" preload="auto"></audio>
        <h1 class="heading-title">Book your hotel!</h1>
        <form action="book_form.php" method="post" class="book-form" id="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Name:</span>
                    <input type="text" placeholder="Enter your name" name="name" required>
                </div>
                <div class="inputBox">
                    <span>Email:</span>
                    <input type="email" placeholder="Enter your email" name="email" required>
                </div>
                <div class="inputBox">
                    <span>Phone:</span>
                    <input type="number" placeholder="Enter your number" name="phone" required>
                </div>
                <div class="inputBox">
                    <span>Address:</span>
                    <input type="text" placeholder="Enter your address" name="address" required>
                </div>
                <div class="inputBox">
                    <span>Hotel:</span>
                    <input type="text" placeholder="Hotel you want to visit" name="location" required>
                </div>
                <div class="inputBox">
                    <span>No.of persons:</span>
                    <input type="text" placeholder="Number of persons" name="guests" required>
                </div>
                <div class="inputBox">
                    <span>Arrival date:</span>
                    <input type="date" name="arrivals" required>
                </div>
                <div class="inputBox">
                    <span>Departure date:</span>
                    <input type="date" name="leaving" required>
                </div>
            </div>
            <button type="button" class="btn" id="playAudioBtn">Submit</button>
            <input type="submit" value="Submit" class="btn" id="submitBtn" name="submitBtn" style="display:none;">
        </form>
    </section>
    <!-- booking section ends-->

    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="packages.php"><i class="fas fa-angle-right"></i>Packages</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
            </div>
            <div class="box">
                <h3>Extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>About us</a>
                <a href="#"><i class="fas fa-angle-right"></i>Privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>Terms of use</a>
            </div>
            <div class="box">
                <h3>Contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i>+111 22 333</a>
                <a href="#"><i class="fas fa-envelope"></i>team16@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Mumbai, India - 400104</a>
            </div>
            <div class="box">
                <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>LinkedIn</a>
            </div>
        </div>
        <div class="credit">Created by <span>team16</span> | All rights reserved!</div>
    </section>

    <script>
        document.getElementById('playAudioBtn').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Check if all required fields are filled
            var form = document.getElementById('book-form');
            if (form.checkValidity()) {
                var audio = document.getElementById('suc');
                audio.play();

                // Debugging: Log message to indicate audio has started
                console.log('Audio started playing');

                audio.onended = function() {
                    // Debugging: Log message to indicate audio has ended
                    console.log('Audio ended');
                    document.getElementById('submitBtn').click(); // Trigger the hidden submit button
                };
            } else {
                // If form is not valid, display the HTML5 validation messages
                form.reportValidity();
            }
        });
    </script>
</body>
</html>
