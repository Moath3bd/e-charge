<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">
    <title>EVehicles Store</title>
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

    <section id="vehicles" class="container">
        <h2>Electric Vehicles</h2>
        <div class="vehicle">
            <img src="img/electric-car1.webp" alt="Electric Car 1">
            <div class="vehicle-details">
                <h2>Electric Car Model 1</h2>
                <p>An eco-friendly electric car with advanced features.</p>
                <a href="shopin.php"><button>View Details </button></a>
            </div>
        </div>

        <div class="vehicle">
            <img src="img/electric-car2.jpg" alt="Electric Car 2">
            <div class="vehicle-details">
                <h2>Electric Car Model 2</h2>
                <p>Experience the future of transportation with this electric car.</p>
                <a href="shopin.php"><button>View Details </button></a>
            </div>
        </div>
        <!-- Add more vehicle entries as needed -->
    </section>
    <section id="chargers" class="container">
        <h2>Electric Vehicle Chargers</h2>
    

        <div class="charger">
            <h2>Solar-Powered (Type 1 Ev)</h2>
            <p>Charge your electric vehicle using clean energy from our solar-powered charging station. Supports multiple international charging connectors.</p>
            <a href="shopin.php"><button>View Details </button></a>
        </div>

        <div class="charger">
            <h2>Fast Charging (Type 2 EV)</h2>
            <p>Charge your electric vehicle quickly and efficiently at our fast charging station. Compatible with various international charging standards.</p>
            <a href="shopin.php"><button>View Details </button></a>
        </div>
    

    
        <!-- Add more charging station entries as needed with information about compatibility -->
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
