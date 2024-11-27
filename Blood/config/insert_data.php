<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input to prevent XSS attacks
    $name = htmlspecialchars($_POST['user_name'] ?? '');
    $bg = htmlspecialchars($_POST['blood_group'] ?? '');
    $gender = htmlspecialchars($_POST['gender'] ?? '');
    $dob = htmlspecialchars($_POST['date_of_birth'] ?? '');
    $phone = htmlspecialchars($_POST['phone_number'] ?? '');
    $address = htmlspecialchars($_POST['address'] ?? '');
    $p_station = htmlspecialchars($_POST['police_station'] ?? '');
    $district = htmlspecialchars($_POST['district'] ?? '');

    // Ensure your variables are sanitized
    $name = mysqli_real_escape_string($conn, $name);
    $bg = mysqli_real_escape_string($conn, $bg);
    $gender = mysqli_real_escape_string($conn, $gender);
    $dob = mysqli_real_escape_string($conn, $dob);
    $phone = mysqli_real_escape_string($conn, $phone);
    $address = mysqli_real_escape_string($conn, $address);
    $p_station = mysqli_real_escape_string($conn, $p_station);
    $district = mysqli_real_escape_string($conn, $district);

    // Construct the SQL query
    $sql = "INSERT INTO USERS (name, blood_group, gender, phone_number, date_of_birth, address, police_station, district) 
                     VALUES ('$name', '$bg', '$gender', '$phone', '$dob', '$address', '$p_station', '$district')";


    // Execute the query
    $insert = mysqli_query($conn, $sql);

    // Check for success
    if ($insert) {
        echo "Insert successful!";
    } else {
        echo "Error: " . mysqli_error($conn); // Output detailed error message
    }
}
?>
