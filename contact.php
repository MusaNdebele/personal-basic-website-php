<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php
    $status = $_GET['status'] ?? '';
    if ($status === 'success') echo '<p class="status success">Message sent successfully!</p>';
    if ($status === 'error') echo '<p class="status error">Something went wrong...</p>';
?>
    <nav>
        <a href="index.html">Home</a>
        <a href="about.html">About Us</a>
        <a href="contact.php" aria-current="page">Contact Us</a>
    </nav>
    <h1>Get In Touch With Us</h1>
    <!--the "method", "post" are actions that help to submit form data to database-->
    <form class="contact-form" method="POST" action="submit_contact.php">
        <div class="form-group">
            <label for="fName">First Name</label>
            <input type="text" id="fName" name="fName" placeholder="Please enter your name..." required>
        </div>

        <div class="form-group">
            <label for="sName">Last Name</label>
            <input type="text" id="sName" name="sName" placeholder="Please enter last name..." required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Please enter email..." required>
        </div>

        <div class="form-group">
            <label for="message">Want to write us a message?</label>
            <textarea id="message" name="message" rows="3" placeholder="Write us a message..." required></textarea>
        </div>

        <input type="submit" value="Send Message">
    </form>

<footer>
    <p>Author: Musa N, </p>
    <a href="mailto:musa.n@example.com">musa.n@example.com</a>
    <p>&copy; 2026 Musa N. All Rights Reserved.</p>
</footer>
</body>
</html>