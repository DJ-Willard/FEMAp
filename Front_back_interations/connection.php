<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "web_user";
$password = "your_password";
$dbname = "natural_disaster_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to retrieve gear items based on the natural disaster response
function getGearList($conn, $disaster) {
    $query = "SELECT gear_item FROM {$disaster}_gear";
    $result = $conn->query($query);
    $gearList = array();
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $gearList[] = $row['gear_item'];
        }
    }

    return $gearList;
}

// Function to retrieve the general gear items
function getGeneralGearList($conn) {
    $query = "SELECT gear_item FROM universal_gear";
    $result = $conn->query($query);
    $gearList = array();
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $gearList[] = $row['gear_item'];
        }
    }

    return $gearList;
}

// Function to retrieve the conditional gear items
function getConditionalGearList($conn, $user_id) {
    $query = "SELECT gallons_of_water, calories_of_nonperishable_food, calories_of_infant_safe_food, 
                     number_of_adult_first_aid_kits, number_of_children_first_aid_kits, number_of_infant_first_aid_kits
              FROM conditional_list
              WHERE user_id = $user_id";
    
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $conditionalList = array(
            "Gallons of Water" => $row['gallons_of_water'],
            "Calories of Nonperishable Food" => $row['calories_of_nonperishable_food'],
            "Calories of Infant Safe Food" => $row['calories_of_infant_safe_food'],
            "Number of Adult First Aid Kits" => $row['number_of_adult_first_aid_kits'],
            "Number of Children First Aid Kits" => $row['number_of_children_first_aid_kits'],
            "Number of Infant First Aid Kits" => $row['number_of_infant_first_aid_kits']
        );

        return $conditionalList;
    } else {
        return array();
    }
}

// Function to insert user responses into the database
function insertUserResponse($conn, $name, $adults, $children, $infants, $disasters) {
    $disasters = array_map(function($disaster) {
        return $disaster . " = 'yes'";
    }, $disasters);

    $disasterValues = implode(", ", $disasters);

    $query = "INSERT INTO user_responses (name, adults, children, infants, $disasterValues)
              VALUES ('$name', $adults, $children, $infants, 'yes')";
    
    if ($conn->query($query) === TRUE) {
        return "User response added successfully!";
    } else {
        return "Error: " . $query . "<br>" . $conn->error;
    }
}

// Example usage:
// Assuming user input is submitted through a form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user input
    $name = $_POST["name"];
    $adults = $_POST["adults"];
    $children = $_POST["children"];
    $infants = $_POST["infants"];
    $disasters = array(
        "hurricanes_tropical_storms",
        "tornadoes",
        "earthquakes",
        // Add other disasters here based on the form input
    );

    // Insert user response into the database
    echo insertUserResponse($conn, $name, $adults, $children, $infants, $disasters);

    // Retrieve and display the gear lists
    $user_id = $conn->insert_id;
    $generalGearList = getGeneralGearList($conn);
    $conditionalGearList = getConditionalGearList($conn, $user_id);

    echo "<h2>General Gear List:</h2>";
    foreach ($generalGearList as $item) {
        echo "<li>$item</li>";
    }

    echo "<h2>Conditional Gear List:</h2>";
    foreach ($conditionalGearList as $key => $value) {
        echo "<li>$key: $value</li>";
    }

    echo "<h2>Gear Lists for Disasters:</h2>";
    foreach ($disasters as $disaster) {
        if ($_POST[$disaster] == "yes") {
            $gearList = getGearList($conn, $disaster);

            echo "<h3>$disaster Gear List:</h3>";
            foreach ($gearList as $item) {
                echo "<li>$item</li>";
            }
        }
    }
}

// Close the database connection
$conn->close();
?>
