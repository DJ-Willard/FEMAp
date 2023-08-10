// Connect to database 
$db = new mysqli('localhost', 'web_user', 'your_password', 'natural_disaster_db');

// Insert form data into database
$stmt = $db->prepare("INSERT INTO user_responses (name, adults, children, infants, ...) 
                      VALUES (?, ?, ?, ?, ...)");
$stmt->bind_param('siiii', $_POST['name'], $_POST['adults'], ...); 
$stmt->execute();

// Query to get user's responses
$stmt = $db->prepare("SELECT * FROM user_responses WHERE id=?");
$stmt->bind_param('i', $userId); // from INSERT id
$stmt->execute(); 
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Array to store gear
$gear = []; 

// Check responses and get corresponding gear
if ($user['hurricanes_tropical_storms'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM hurricanes_tropical_storms_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['tornadoes'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM tornadoes_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['earthquakes'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM earthquakes_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['wildfires'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM wildfires_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['floods'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM floods_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['landslides'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM landslides_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['tsunamis'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM tsunamis_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['volcanic_eruptions'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM volcanic_eruptions_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['droughts'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM droughts_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['heatwaves'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM heatwaves_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['blizzards'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM blizzards_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['avalanches'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM avalanches_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['thunderstorms'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM thunderstorms_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['hailstorms'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM hailstorms_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['high_winds'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM high_winds_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['microbursts'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM microbursts_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['dust_storms'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM dust_storms_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['fog_visibility'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM fog_visibility_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['industrial_accidents'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM industrial_accidents_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['chemical_spills'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM chemical_spills_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['nuclear_accidents'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM nuclear_accidents_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['power_outages'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM power_outages_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['water_supply_disruptions'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM water_supply_disruptions_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['gas_leaks_explosions'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM gas_leaks_explosions_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}

if ($user['sewage_system_failures'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM sewage_system_failures_gear");
  $gear = array_merge($gear, $stmt->fetch_all(MYSQLI_ASSOC)); 
}


// Remove duplicates
$gear = array_unique($gear); 

// Join items into comma separated string
$gearList = implode(', ', $gear);

// Calculate additional gear based on user responses
$water = $user['adults'] + $user['children'] + $user['infants'] * 3; 
$adultFood = $user['adults'] * 3000;
$infantFood = $user['infants'] * 1500;
$adultKits = $user['adults'];
$childKits = $user['children'];
$infantKits = $user['infants'];

// Append to gear list string
$gearList .= ", $water gallons of water, $adultFood calories of adult food, $infantFood calories of infant food, $adultKits adult first aid kits, $childKits child first aid kits, $infantKits infant first aid kits";

// Set gear list in $_SESSION
session_start();
$_SESSION['gearList'] = $gearList;

// Redirect back to index.php
header('Location: index.php');