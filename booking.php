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
                    <li><a href="contact.php">Contact</a></li>
                    <li><a class="active" href="booking.php">Your Booking</a></li>
                </ul>
            
        </div>
        <div id="mobile"> 
            <i id="bar"   class="fa-solid fa-bars"></i>
            <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
    </section>
    <section id="booking">
        <h1>Book Your Trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name:</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email id:</span>
                    <input type="text" placeholder="enter your e-mail id" name="email">
                </div>
                <div class="inputBox">
                    <span>phone:</span>
                    <input type="number" placeholder="enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span><address></address>:</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>where to:</span>
                    <input type="text" placeholder="enter the destination" name="location">
                </div>
                <div class="inputBox">
                    <span>how many:</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrivals:</span>
                    <input type="date"  name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving:</span>
                    <input type="date"  name="leaving">
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
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