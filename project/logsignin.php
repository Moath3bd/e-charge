<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">
    <title>Login & Signup Forms</title>
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
    <section class="forms-section">
        <h1 class="section-title">Login & Signup</h1>
        <div class="forms">
            <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                    Login
                    <span class="underline"></span>
                </button>
                <form class="form form-login" method="post" action="">
                    <fieldset>
                        <legend>Please, enter your email and password for login.</legend>
                        <div class="input-block">
                            <label for="login-email">E-mail</label>
                            <input id="login-email" type="email" name="email" required>
                        </div>
                        <div class="input-block">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" required>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-login">Login</button>
                </form>
            </div>
            <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
                    Sign Up
                    <span class="underline"></span>
                </button>
                <form class="form form-signup" method="post" action="">
                    <fieldset>
                        <legend>Please, enter your email, password, and password confirmation for sign up.</legend>
                        <div class="input-block">
                            <label for="signup-username">Username</label>
                            <input id="signup-username" type="text" name="name" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-email">E-mail</label>
                            <input id="signup-email" type="email" name="email" required>
                        </div>
                        <div class="input-block">
                            <label for="password1">Password</label>
                            <input id="password1" type="password" name="password1" required>
                        </div>
                        <div class="input-block">
                            <label for="password2">Confirm Password</label>
                            <input id="password2" type="password" name="password2" required>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-signup">Sign Up</button>
                </form>
            </div>
        </div>
    </section>

    <?php
session_start();

// Handle registration form submission
require_once 'database.php';
$successMessage = '';
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['name'], $_POST['password1'], $_POST['password2'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    // Validate form data
    $errors = array();
    if ($password1 !== $password2) {
        $errors[] = 'Passwords do not match.';
    }
    if (!preg_match('/^[a-zA-Z]+$/', $name)) {
        $errors[] = 'Username must consist of letters only.';
    }
    if (!preg_match('/^.*@.*\.com$/', $email)) {
        $errors[] = 'Invalid email format.';
    }
    if (strlen($password1) < 8 || !preg_match('/[A-Z]/', $password1) || !preg_match('/[^a-zA-Z0-9]/', $password1) || !preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $password1)) {
        $errors[] = 'Password must be at least 8 characters long and contain a capital letter and any symbol.';
    }

    if (count($errors) === 0) {
        $stmt = $connection->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $errorMessage = 'User with the same email already exists.';
        } else {
            $hashedPassword = password_hash($password1, PASSWORD_DEFAULT);
            $stmt = $connection->prepare('INSERT INTO users (email, name, password) VALUES (?, ?, ?)');
            $stmt->bind_param('sss', $email, $name, $hashedPassword);

            if ($stmt->execute()) {
                $_SESSION['successMessage'] = 'Registration successful!';
                header('Location: home.php');
                exit();
            } else {
                $errorMessage = 'Error: ' . $stmt->error;
            }
        }
    } else {
        $errorMessage = implode('<br>', $errors);
    }
}

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['password'])) {
    $loginEmail = $_POST['email'];
    $loginPassword = $_POST['password'];

    $stmt = $connection->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->bind_param('s', $loginEmail);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];
            if (password_verify($loginPassword, $hashedPassword)) {
                $_SESSION['successMessage'] = 'Login successful!';
                header('Location: home.php');
                exit();
            } else {
                $errorMessage = 'Invalid password.';
            }
        } else {
            $errorMessage = 'Invalid email.';
        }
    } else {
        $errorMessage = 'Error: ' . $stmt->error;
    }
}

require_once 'database.php'; // Adjust the filename as needed
?>


    <script src="javascript.js"></script>
</body>
</html>


    
  
