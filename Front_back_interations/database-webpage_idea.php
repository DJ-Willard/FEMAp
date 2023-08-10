<?php
// Assuming the user submitted the form and data is available in $_POST

// Connect to MySQL database
$servername = "your_server";
$username = "your_username";
$password = "your_password";
$dbname = "disaster_webpage_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the data from the form
$user_name = $_POST['user_name'];
$num_adults = (int)$_POST['num_adults'];
$num_children = (int)$_POST['num_children'];
$num_infants = (int)$_POST['num_infants'];

// Save user responses to MySQL database
$sql = "INSERT INTO user_responses (user_name, num_adults, num_children, num_infants, 
                thunderstorms, hailstorms, high_winds, microbursts, dust_storms, ice_storms, 
                fog_visibility_issues, hurricanes_tropical_storms, tornadoes, earthquakes, 
                wildfires, floods, landslides, tsunamis, volcanic_eruptions, droughts, 
                heatwaves, blizzards, avalanches, industrial_accidents, chemical_spills, 
                nuclear_accidents, power_outages, water_supply_disruptions, 
                gas_leaks_explosions, sewage_system_failures)
        VALUES ('$user_name', $num_adults, $num_children, $num_infants, 
                '{$_POST['thunderstorms']}', '{$_POST['hailstorms']}', '{$_POST['high_winds']}', 
                '{$_POST['microbursts']}', '{$_POST['dust_storms']}', '{$_POST['ice_storms']}', 
                '{$_POST['fog_visibility_issues']}', '{$_POST['hurricanes_tropical_storms']}', 
                '{$_POST['tornadoes']}', '{$_POST['earthquakes']}', '{$_POST['wildfires']}', 
                '{$_POST['floods']}', '{$_POST['landslides']}', '{$_POST['tsunamis']}', 
                '{$_POST['volcanic_eruptions']}', '{$_POST['droughts']}', '{$_POST['heatwaves']}', 
                '{$_POST['blizzards']}', '{$_POST['avalanches']}', '{$_POST['industrial_accidents']}', 
                '{$_POST['chemical_spills']}', '{$_POST['nuclear_accidents']}', 
                '{$_POST['power_outages']}', '{$_POST['water_supply_disruptions']}', 
                '{$_POST['gas_leaks_explosions']}', '{$_POST['sewage_system_failures']}')";

if ($conn->query($sql) === TRUE) {
    echo "User responses saved successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
