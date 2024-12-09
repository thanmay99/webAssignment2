<?php
// Debugging
echo "<pre>";
print_r($_POST); // Outputs the submitted data
echo "</pre>";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    echo "<h1>Form Submitted</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Address:</strong> $address</p>";
} else {
    echo "Invalid Request!";
}
?>
