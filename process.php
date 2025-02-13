<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];

    if (empty($name) || empty($email) || empty($phone) || empty($country)) {
        echo "All fields are required!";
    } else {
        // Process the data (e.g., send email, store in database, etc.)
        echo "Form submitted successfully!";
    }
}
?>
