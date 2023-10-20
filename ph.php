<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Generate a confirmation code (for simplicity, using a random number)
    $confirmationCode = rand(100000, 999999);

    // Store user data and confirmation code in the database (not implemented in this example)
    // For simplicity, we'll just display the information
    echo "User data stored in the database.<br>";
    echo "Email: $email<br>";
    echo "Password: $password<br>";
    echo "Confirmation Code: $confirmationCode<br>";

    // Send confirmation email (replace with your email sending logic)
    $subject = "Confirmation Code for Signup";
    $message = "Your confirmation code is: $confirmationCode";
    mail($email, $subject, $message);

    echo "Confirmation code sent to your email. Please check your inbox.";
}
?>
