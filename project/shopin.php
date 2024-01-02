<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="styles.css">
    <!-- Add other necessary styles or libraries here -->
    <title>Product Details</title>
</head>
<body>

    <header>
        <nav>
            <div><a class="logo" href="home.php">EVehicles</a> </div>
            <div class="profile-icon"><a href="profile.php"><img src="img/profile.png" alt="Profile Icon"></a></div>
            <div class="profile-icon"><a href="logsignin.php"><img src="img/login.png" alt="login Icon"></a></div>

            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="vehicles.php">Vehicles</a></li>
                <li><a href="chargestation.php">Charging Stations</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="bg-light">
        <div class="container pb-5">
            <div class="product-details-container">
                <div class="product-details-image">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="img/electric-car1.webp" alt="Product Image" id="product-detail">
                    
                        <button class="go-back-button" onclick="goBack()">Go Back</button></div>
                </div>
                <div class="product-details-info">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">Product Name</h1>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Brand:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>Brand Name</strong></p>
                                </li>
                            </ul>
                            <h6>Description:</h6>
                            <p>This is a sample product description. Provide detailed information about the product, its features, and benefits.</p>
                            <h6 style="border-top:1px solid #e5e5e5; ">Specification:</h6>
                            <ul class="list-unstyled pb-3">
                                <li>Specification 1</li>
                                <li>Specification 2</li>
                                <li>Specification 3</li>
                            </ul>
                        </div>
                    </div>
                </div>
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
    <script src="javascript.js"></script>
</body>
</html>
