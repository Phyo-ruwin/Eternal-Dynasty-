<?php
include 'Dcon.php';

if (isset($_POST['btnSubmit'])) {
    $dob = $_POST['dob']; // Make sure to validate and sanitize this input
    $gender = $_POST['gender'];

    // Extract the day of the week from the DOB
    $day_of_week = date('l', strtotime($dob));

    // Redirect based on the day of the week and gender
    if ($day_of_week == "Monday") {
        include 'Monday.php';
    } elseif ($day_of_week == "Tuesday") {
        include 'Tuesday.php';
    } else {
        echo "This feature is only available for specific conditions.";
        // Optionally, handle other days or provide feedback to the user
    }
}
?>
