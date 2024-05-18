<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aether Travel Agency</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" >
</head>
<body>
    <section id="header">
        <a href="#"> <img src="TA@.jpg" class="logo" alt="" width="100px" height="100px"></a>
        <div>
            
                <ul id="navbar">
                    <li><a  href="index.php">Home</a></li>
                    <li><a href="what'saround.php">What's Around</a></li>
                    <li><a  href="about.php">About</a></li>
                    <li><a class="active" href="contact.php">Contact</a></li>
                    <li><a href="booking.php">Your Booking</a></li>
                </ul>
            
        </div>
        <div id="mobile"> 
            <i id="bar"   class="fa-solid fa-bars"></i>
            <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
    </section>
    <section id="page-header" class="about-header"> 
        <h2>Contact US</h2>
        
        <p>Leave a Message, we would love to hear from you!</p>
        
    </section>
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit us today or contact us today</h2>
            <h3>Aether Travel Agency</h3>
            <div>
                <li>
                    <i class="fa-solid fa-location-dot"></i>
                    <p>Juhu Vile Parle(W), Mumbai</p>
                </li>
                <li>
                    <i class="fa-solid fa-mobile-screen"></i>
                    <p> 9876543210</p>
                </li>
                 <li>
                    <i class="fa-regular fa-envelope"></i>
                    <p>contact@gmail.com</p>
                 </li>   
                 <li>
                    <i class="fa-regular fa-clock"></i>
                    <p>10:00-21:00, Mon-Sun</p>
                 </li>   
                    
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7539.99329906246!2d72.82745213711387!3d19.10780291617919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9c11a44d75f%3A0xa1f3618d41c39d5e!2sJVPD%20Scheme%2C%20Juhu%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1714910741897!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

    </section>
       <section id="form-details">
        <form action="empty">
            <span>Leave a Message</span>
            <h2>We would love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your meassgae"></textarea>
            <button class="normal">Submit</button>
        </form>

    </section>
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>
                Sign-up 
            </h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your E-mail adress">
            <button class="normal">Sign Up</button>
        </div>
    </section>
    <footer class="section-p1">
        <div class="col">
            <img class="logo"     src="TA@.jpg" alt="" height="100px" width="100px">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Juhu, Vile Parle(W), Mumbai.</p>
            <p><strong>Phone:</strong> 9876543210</p>
            <p><strong>Hours:</strong>10:00-21:00, Mon-Sun</p>
            <div class="follow"> 
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fa-brands fa-facebook"></i> 
                    <i class="fa-brands fa-x-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-pinterest"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <div class="copyright">
            <p><i class="fa-regular fa-copyright"></i>2024, Aether Travel Agency- HTML CSS JAVASCRIPT Template</p>
        </div>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Condition</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">My Account</a>
            <a href="#">Sign in</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>