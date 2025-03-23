<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!--swiper css link -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!--font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   

    <!-- custom css file link-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--header section starts -->
    <section class="header">
        <a href="home.php" class="logo"><b style="color:red">TRAVEL TREKS</b></a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">packages</a>
            <a href="book.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <div class="heading" style="background:url(images/header-bg-1.jpg) no-repeat;background-size:cover">
        <h1>about us</h1>
    </div>

    <!-- about section starts-->
    <section class="about">
        <div class="image">
            <img src="images/about-img.jpg">
        </div>
        <div class="content">
            <h3>why choose us?</h3>
            <p>At our website, we understand that travel is a precious opportunity to create lasting memories and discover the world
                .we believe that everyone deserves to experience the joy of travel. That’s why we’re committed to offering you the best deals and exclusive offers that make your dream trips a reality</p>
            <p>. We offer personalized itineraries, exclusive insider tips, and sustainable travel options to ensure every journey is unique and enriching. With 24/7 support and a vibrant community of explorers
                . Explore our current offers and start planning your next adventure today!</p>
        
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destinations</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>guide service</span>
                </div>
            </div>
        </div>
    </section>
<!-- Reviews Section -->
<section class="reviews">
<h1 class="heading-title">Our Reviews</h1>
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"The curated travel packages offered by this website are unbeatable. We had an amazing family vacation in Thailand.
                         Thank you for making our trip so special!"</p>
                    <h3>john doe</h3>
                    <span>traveler</span>
                    <img src="images/pic-1.jpg" alt="john doe">
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Overall, my experience with Your Travel Website was positive, but I did encounter a few minor issues.
                    Despite this, the overall experience was great and Id use them again."
                    </p>
                    <h3>ariana grande</h3>
                    <span>traveler</span>
                    <img src="images/pic-2.jpeg" alt="ariana grande">
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Booking through this Website was the best decision ever! The detailed guides and suggestions helped us discover hidden gems in Paris.
                        Our trip was magical."</p>
                    <h3>Eun-woo</h3>
                    <span>traveler</span>
                    <img src="images/pic-3.jpg" alt="Eun-woo">
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem soluta illum blanditiis iusto accusamus,
                         veniam hic dignissimos. Possimus, illum ea.</p>
                    <h3>Ananya</h3>
                    <span>traveler</span>
                    <img src="images/pic-4.jpg">
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem soluta illum blanditiis iusto accusamus,
                         veniam hic dignissimos. Possimus, illum ea.</p>
                    <h3>kim teahyung</h3>
                    <span>traveler</span>
                    <img src="images/pic5.jpg">
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem soluta illum blanditiis iusto accusamus,
                         veniam hic dignissimos. Possimus, illum ea.</p>
                    <h3>Angelina</h3>
                    <span>traveler</span>
                    <img src="images/pic-6.jpg">
                </div>
                
                <!-- Add more slides as needed -->
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <!-- reviw section ends-->
    
  
    <!-- footer section starts-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="packages.php"><i class="fas fa-angle-right"></i>packages</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>About us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>
            <div class="box">
                <h3>contack info</h3>
                <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i>+111 22 333</a>
                <a href="#"><i class="fas fa-envelope"></i>team16@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>mumbai,India -400104</a>
            </div>
            <div class="box">
                <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
            </div>
        </div>
        <div class="credit">created by <span>team16</span> |all rights reserved!</div>
    </section>
<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- custom js file link-->
<script src="script.js"></script>
</body>
</html>