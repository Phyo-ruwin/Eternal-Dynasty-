<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Myanmar Baby Names</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="Header">
        <div class="logo">
            <h1>Eternal Dynasty</h1>
        </div>
    </div>

    <div class="container mt-5">
        <form action="form1.php" method="post">
            <label for="gender">ကလေးအတွက် နာမည်ရွေးပေးဖို့ဖောင်ဖြည့်ပါ</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">ယောက်ျားလေး</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">မိန်းကလေး</label><br>
            
            <label for="dob">မွေးနေ့ကို ရွေးပေးပါ</label><br>
            <input type="date" id="dob" name="dob"><br>
            
            <input type="submit" name="btnSubmit" value="ရွေးမည်" class="btn btn-primary mt-3">
        </form>

        <div class="mt-3">
            <?php 
            include 'Dcon.php';
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);

                if(isset($_POST['btnSubmit'])) {
                    echo "Form submitted<br>"; // Debugging output
                    // Database connection credentials
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "database_name";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $dob = $_POST['dob']; // Make sure to validate and sanitize this input
                    $gneder =$_POST

                    // Extract the day of the week from the DOB
                    $day_of_week = date('l', strtotime($dob));

                    // Now $day_of_week contains the full name of the day of the week, e.g., "Monday"
                    echo "Day of the week: $day_of_week<br>";
                    if($day_of_week== "Monday" && $)

                    for ($i = 0; $i < 4; $i++) {
                        // Select random first_name which is not null
                        $sql1 = "SELECT `gfirst_name` FROM `monday_girl` WHERE `gfirst_name` IS NOT NULL ORDER BY RAND() LIMIT 1";
                        $result1 = $conn->query($sql1);

                        // Select random gmiddle_name
                        $sql2 = "SELECT `gmiddle_double` FROM `monday_girl` WHERE `gmiddle_double` IS NOT NULL ORDER BY RAND() LIMIT 1";
                        $result2 = $conn->query($sql2);

                        // Select random glast_name
                        $sql3 = "SELECT `glast_name` FROM `monday_girl` WHERE `glast_name` IS NOT NULL ORDER BY RAND() LIMIT 1";
                        $result3 = $conn->query($sql3);

                        $first_name = '';
                        $gmiddle_double = '';
                        $glast_name = '';

                        if ($result1->num_rows > 0) {
                            $row1 = $result1->fetch_assoc();
                            $first_name = $row1['gfirst_name'];
                        } else {
                            echo "No non-null first names found<br>";
                        }

                        if ($result2->num_rows > 0) {
                            $row2 = $result2->fetch_assoc();
                            $gmiddle_double = $row2['gmiddle_double'];
                        } else {
                            echo "No gmiddle names found<br>";
                        }

                        if ($result3->num_rows > 0) {
                            $row3 = $result3->fetch_assoc();
                            $glast_name = $row3['glast_name'];
                        } else {
                            echo "No last names found<br>";
                        }

                        // Output random combination of gfirst_name, gmiddle_double, and glast_name
                        if (!empty($first_name) && !empty($gmiddle_double) && !empty($glast_name)) {
                            $combined_name = $first_name . ' ' . $gmiddle_double . ' ' . $glast_name;
                            echo "Combined name: $combined_name<br>";
                        } else {
                            echo "One or more names missing for combination.<br>";
                        }
                    }

                    for ($i = 0; $i < 3; $i++) {
                        // Select random gmiddle_name
                        $sql2 = "SELECT `gfirst_double` FROM `monday_girl` WHERE `gfirst_double` IS NOT NULL ORDER BY RAND() LIMIT 1";
                        $result2 = $conn->query($sql2);

                        // Select random glast_name
                        $sql3 = "SELECT `glast_name` FROM `monday_girl` WHERE `glast_name` IS NOT NULL ORDER BY RAND() LIMIT 1";
                        $result3 = $conn->query($sql3);

                        $gfirst_double = '';
                        $glast_name = '';

                        if ($result2->num_rows > 0) {
                            $row2 = $result2->fetch_assoc();
                            $gfirst_double = $row2['gfirst_double'];
                        } else {
                            echo "No gmiddle names found<br>";
                        }

                        if ($result3->num_rows > 0) {
                            $row3 = $result3->fetch_assoc();
                            $glast_name = $row3['glast_name'];
                        } else {
                            echo "No last names found<br>";
                        }

                        // Output random combination of gmiddle_double and glast_name
                        if (!empty($gfirst_double) && !empty($glast_name)) {
                            $combined_name = $gfirst_double . ' ' . $glast_name;
                            echo "Combined name: $combined_name<br>";
                        } else {
                            echo "One or more names missing for combination.<br>";
                        }
                    }

                    for ($i = 0; $i < 3; $i++) {
                        // Select random first_name
                        $sql1 = "SELECT `gfirst_name` FROM `monday_girl` WHERE `gfirst_name` IS NOT NULL ORDER BY RAND() LIMIT 1";
                        $result1 = $conn->query($sql1);

                        // Select random glast_name
                        $sql3 = "SELECT `glast_name` FROM `monday_girl` WHERE `glast_name` IS NOT NULL ORDER BY RAND() LIMIT 1";
                        $result3 = $conn->query($sql3);

                        $first_name = '';
                        $glast_name = '';

                        if ($result1->num_rows > 0) {
                            $row1 = $result1->fetch_assoc();
                            $first_name = $row1['gfirst_name'];
                        } else {
                            echo "No non-null first names found<br>";
                        }

                        if ($result3->num_rows > 0) {
                            $row3 = $result3->fetch_assoc();
                            $glast_name = $row3['glast_name'];
                        } else {
                            echo "No last names found<br>";
                        }

                        // Output random combination of gfirst_name and glast_name
                        if (!empty($first_name) && !empty($glast_name)) {
                            $combined_name = $first_name . ' ' . $glast_name. ' '. $glast_name;;
                            echo "Combined name: $combined_name<br>";
                        } else {
                            echo "One or more names missing for combination.<br>";
                        }
                    }

                    $conn->close();
                }
            ?>
        </div>
    </div>
</body>
</html>
