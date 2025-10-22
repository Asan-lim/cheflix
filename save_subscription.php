<?php
// Database connection
$host = "localhost";
$user = "root";  // default XAMPP user
$pass = "";      // default XAMPP password is empty
$db = "cheapflix";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$plan = $_POST['plan'];
$card = $_POST['card'];
$expiry = $_POST['expiry'];
$cvv = $_POST['cvv'];

// Insert into database
$sql = "INSERT INTO subscriptions (name, email, plan, card_number, expiry, cvv, payment_method) 
        VALUES ('$name', '$email', '$plan', '$card', '$expiry', '$cvv', 'Credit Card')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>✅ Subscription Successful!</h2>";
    echo "<p>Welcome, $name. Your subscription to <b>$plan</b> is now active.</p>";
    echo "<a href='../html/indexcopy.html'>Return back</a>";
} else {
    echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
