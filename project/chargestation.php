<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places" defer></script>
    <title>EV Charging Station Booking</title>
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

    <section class="booking-section">
        <div class="grid-container">
            <div class="form-row">
                <label for="location">Select Location:</label>
                <select id="location" name="location" required>
                    <option value="location1">Location 1</option>
                    <option value="location2">Location 2</option>
                </select>
            </div>
        
            <div class="form-row">
                <label for="chargerType">Charger Type:</label>
                <select id="chargerType" name="chargerType" required>
                    <option value="fast">Fast Charger</option>
                    <option value="normal">Normal Charger</option>
                </select>
            </div>
        
            <div class="form-row">
                <label for="requiredKW">Required kW:</label>
                <input type="number" id="requiredKW" name="requiredKW" required>
            </div>
        
            <div class="form-row">
                <label for="carType">Car Type:</label>
                <input type="text" id="carType" name="carType" required>
            </div>
        
            <div class="form-row">
                <label for="carNumber">Car Number:</label>
                <input type="text" id="carNumber" name="carNumber" required>
            </div>
            <div class="form-row">
                <label for="carNumber">bettry capacite</label>
                <input type="text" id="bettry" name="bettry" required>
            </div>
        
            <div class="form-row">
                <label for="date">Select Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
        
            <div class="form-row">
                <label for="time">Select Time:</label>
                <input type="time" id="time" name="time" required>
            </div>
        </div>
        
                <button type="submit" class="btn-book">Book Now</button>
            </form>

            <div id="map" class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.657812323023!2d35.907231974378625!3d31.970178724783416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca1dd7bca79dd%3A0x9b0416f056ff0786!2sOrange%20Digital%20Village!5e0!3m2!1sen!2sjo!4v1703878580058!5m2!1sen!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
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
