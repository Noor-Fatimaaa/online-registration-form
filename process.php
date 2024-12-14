<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize input
    $name = htmlspecialchars($_POST['name'] ?? '');
    $dob = htmlspecialchars($_POST['dob'] ?? '');
    $gender = htmlspecialchars($_POST['gender'] ?? '');
    $address = htmlspecialchars($_POST['address'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $program = htmlspecialchars($_POST['program'] ?? '');
    $degree = htmlspecialchars($_POST['degree'] ?? '');

    // Validate required fields
    if (empty($name) || empty($dob) || empty($gender) || empty($address) || empty($email) || empty($phone) || empty($program)) {
        echo "All required fields must be filled.";
        exit;
    }

    // Display success message
    echo "
    <h3>Application Submitted Successfully</h3>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Date of Birth:</strong> $dob</p>
    <p><strong>Gender:</strong> $gender</p>
    <p><strong>Address:</strong> $address</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Program:</strong> $program</p>
    <p><strong>Degree Level:</strong> $degree</p>
    ";
} else {
    echo "Invalid request method.";
}
?>
