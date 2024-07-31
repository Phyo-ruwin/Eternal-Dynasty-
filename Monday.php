<?php
// Ensure Dcon.php is included for database connection
include 'Dcon.php';

$dob = $_POST['dob']; // Make sure to validate and sanitize this input
$gender = $_POST['gender'];

$output = ""; // Initialize an output variable to store the result

// Set the table name based on the gender
$table_name = ($gender == 'female') ? 'monday_girl' : 'monday_boy';

for ($i = 0; $i < 4; $i++) {
    // Select random first_name which is not null
    $sql1 = "SELECT `gfirst_name` FROM `$table_name` WHERE `gfirst_name` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $result1 = $conn->query($sql1);

    // Select random gmiddle_name
    $sql2 = "SELECT `gmiddle_double` FROM `$table_name` WHERE `gmiddle_double` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $result2 = $conn->query($sql2);

    // Select random glast_name
    $sql3 = "SELECT `glast_name` FROM `$table_name` WHERE `glast_name` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $result3 = $conn->query($sql3);

    $first_name = '';
    $gmiddle_double = '';
    $glast_name = '';

    if ($result1->num_rows > 0) {
        $row1 = $result1->fetch_assoc();
        $first_name = $row1['gfirst_name'];
    }

    if ($result2->num_rows > 0) {
        $row2 = $result2->fetch_assoc();
        $gmiddle_double = $row2['gmiddle_double'];
    }

    if ($result3->num_rows > 0) {
        $row3 = $result3->fetch_assoc();
        $glast_name = $row3['glast_name'];
    }

    // Output random combination of gfirst_name, gmiddle_double, and glast_name
    if (!empty($first_name) && !empty($gmiddle_double) && !empty($glast_name)) {
        $combined_name = 'မ'.$first_name . $gmiddle_double . $glast_name;
        $output .= "Combined name: $combined_name<br>";
    } else {
        $output .= "One or more names missing for combination.<br>";
    }
}

for ($i = 0; $i < 3; $i++) {
    // Select random gfirst_double
    $sql2 = "SELECT `gfirst_double` FROM `$table_name` WHERE `gfirst_double` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $result2 = $conn->query($sql2);

    // Select random glast_name
    $sql3 = "SELECT `glast_name` FROM `$table_name` WHERE `glast_name` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $result3 = $conn->query($sql3);

    $gfirst_double = '';
    $glast_name = '';

    if ($result2->num_rows > 0) {
        $row2 = $result2->fetch_assoc();
        $gfirst_double = $row2['gfirst_double'];
    }

    if ($result3->num_rows > 0) {
        $row3 = $result3->fetch_assoc();
        $glast_name = $row3['glast_name'];
    }

    // Output random combination of gfirst_double and glast_name
    if (!empty($gfirst_double) && !empty($glast_name)) {
        $combined_name = 'မ'.$gfirst_double . $glast_name;
        $output .= "Combined name: $combined_name<br>";
    } else {
        $output .= "One or more names missing for combination.<br>";
    }
}

for ($i = 0; $i < 3; $i++) {
    // Select random first_name
    $sql1 = "SELECT `gfirst_name` FROM `$table_name` WHERE `gfirst_name` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $result1 = $conn->query($sql1);

    // Select random glast_name
    $sql3 = "SELECT `glast_name` FROM `$table_name` WHERE `glast_name` IS NOT NULL ORDER BY RAND() LIMIT 1";
    $result3 = $conn->query($sql3);

    $first_name = '';
    $glast_name = '';

    if ($result1->num_rows > 0) {
        $row1 = $result1->fetch_assoc();
        $first_name = $row1['gfirst_name'];
    }

    if ($result3->num_rows > 0) {
        $row3 = $result3->fetch_assoc();
        $glast_name = $row3['glast_name'];
    }

    // Output random combination of gfirst_name and glast_name
    if (!empty($first_name) && !empty($glast_name)) {
        $combined_name = 'မ'.$first_name . $glast_name . $glast_name;
        $output .= "Combined name: $combined_name<br>";
    } else {
        $output .= "One or more names missing for combination.<br>";
    }
}

echo $output;

$conn->close();
?>
