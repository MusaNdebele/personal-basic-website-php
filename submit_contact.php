<?php
//This shows full errors for production, but set to 0 for the portfolio demo.
error_reporting(E_ALL);
ini_set('display_errors', 0);

//Pull in the database connection from db.php
require "db.php";

//This code is only run if the form was submitted (POST request)
//It also prevents someone from visiting submit_contact.php directly in the browser
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //Declaring variables
    $fName = trim($_POST["fName"]);
    $sName = trim($_POST["sName"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    //Validate them
    //Checks if there are any empty fields
    if (empty($fName) || empty($sName) || empty($email) || empty($message)) {
        die("All fields are required.");
    }

    //Checks if the email looks like a real email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }

    //Inserts data into the database
    //This is the SQL template — the ? marks are safe placeholders for user data
    $stmt = $conn->prepare(
        "INSERT INTO contacts (first_name, last_name, email, message) VALUES (?, ?, ?, ?)"
    );

    //Check if the statement was prepared successfully
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    //Binds the actual values to the placeholders
    //"ssss" means all four values are strings (s = string, i = integer, d = decimal)
    $stmt->bind_param("ssss", $fName, $sName, $email, $message);

    //Executes the query and shows a success or error message
    if ($stmt->execute()) {
        header("Location: contact.php?status=success");
        exit;
    } else {
        header("Location: contact.php?status=error");
        exit;
    }

    //Closes the statement and database connection to free up resources
    $stmt->close();
    $conn->close();

} else {
    //If someone visits this page directly without submitting the form, this sends them back to the contact page
    header("Location: contact.php?status=error");
    exit;
}
?>
