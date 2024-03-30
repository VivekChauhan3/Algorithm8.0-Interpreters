<?php
require_once 'config.php';

// Use the constants/variables for database access
$host = DB_HOST;
$username = DB_USERNAME;
$password = DB_PASSWORD;
$db_name = DB_NAME;
$sql = "INSERT INTO new_register(id,signup_username,signup_email,signup_password )VALUES ('','$signup_username','$signup_email','$signup_password')";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['signin_submit'])) {
        // Handle sign-in form submission
        $username = $_POST["signin_username"];
        $password = $_POST["signin_password"];
        // Process the username and password as required
        // For example, you can authenticate the user here
        
        // Redirect or display success message after successful sign-in
    } elseif (isset($_POST['signup_submit'])) {
        // Handle sign-up form submission
        $username = $_POST["signup_username"];
        $email = $_POST["signup_email"];
        $password = $_POST["signup_password"];
        // Process the username, email, and password as required
        // For example, you can save them to a database
        
        // Redirect or display success message after successful sign-up
    }
}
?>
