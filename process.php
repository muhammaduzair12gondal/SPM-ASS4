<?php
// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve and sanitize inputs
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Validate empty fields (Strict Requirement)
    if (empty($name) || empty($email) || empty($message)) {
        // If any field is empty, stop the script and show an error
        die("<h3>Error: All fields are required. Please go back and try again.</h3>");
    }

    // Simulate a success response by redirecting to the thank-you page (Strict Requirement)
    header("Location: thank-you.html");
    exit();
} else {
    // If someone tries to access this file directly without submitting the form
    header("Location: index.html");
    exit();
}
?>