<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us - EVehicles</title>
</head>
<body>

    <header>
        <nav>
            <div><a class="logo" href="home.php">EVehicles</a> </div>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="vehicles.php">Vehicles</a></li>
                <li><a href="chargestation.php">Charging Stations</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="contact-section">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Have questions or concerns? Reach out to us!</p>
            
            <form action="#" method="post" class="contact-form">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Your Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn-submit">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="about-us">
                <h2><a href="aboutus.php">About Us</a></h2>
            </div>
            <p>&copy; 2023 EVehicles. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
