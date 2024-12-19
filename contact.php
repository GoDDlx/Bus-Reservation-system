

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Bus Logo" />
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="login-menu.php">Login</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Services</a></li>
        </ul>
        <div class="search-container">
            <input type="text" placeholder="Search">
            <button>🔍</button>
        </div>
    </nav>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-container">
            <!-- Contact Info -->
            <div class="contact-info">
                <h2>Get In Touch</h2>
                <p>Contact us for the latest news and updates. Subscribe to our newsletter :)</p>

                <h3>ADDRESS</h3>
                <p>2345,sukedhara, kathmandu</p>

                <h3>PHONE</h3>
                <p>9821698155</p>

                <h3>EMAIL</h3>
                <p>jagdish@gmail.com</p>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <h2>Contact Us</h2>
                <form action="#" method="post">
                    <input type="text" placeholder="Name" name="name" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="tel" placeholder="Phone" name="phone" required>
                    <textarea placeholder="Your Message" name="message" rows="5" required></textarea>
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
