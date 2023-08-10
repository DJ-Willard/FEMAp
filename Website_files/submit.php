// Connect to database 

<?php
$db = new mysqli('34.170.255.121', 'web_user', 'OHg0dh3lp!', 'natural_disaster_db');

// Insert form data into database
$stmt = $db->prepare("INSERT INTO user_responses (name, 
                                                  adults, 
                                                  children, 
                                                  infants, 
                                                  hurricanes_tropical_storms,
                                                  tornadoes, 
                                                  earthquakes,
                                                  wildfires,
                                                  floods,
                                                  landslides,
                                                  tsunamis,
                                                  volcanic_eruptions,
                                                  droughts,
                                                  heatwaves,
                                                  blizzards,
                                                  avalanches,
                                                  thunderstorms,
                                                  hailstorms,
                                                  high_winds,
                                                  microbursts,
                                                  dust_storms,
                                                  fog_visibility,
                                                  industrial_accidents,
                                                  chemical_spills,
                                                  nuclear_accidents,
                                                  power_outages,
                                                  water_supply_disruptions,
                                                  gas_leaks_explosions,
                                                  sewage_system_failures)
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('siiii', 
                  $_POST['name'], 
                  $_POST['adults'], 
                  $_POST['children'],
                  $_POST['infants'],
                  $_POST['hurricanes_tropical_storms'],
                  $_POST['tornadoes'],
                  $_POST['earthquakes'],
                  $_POST['wildfires'],
                  $_POST['floods'],
                  $_POST['landslides'],
                  $_POST['tsunamis'],
                  $_POST['volcanic_eruptions'],
                  $_POST['droughts'],
                  $_POST['heatwaves'],
                  $_POST['blizzards'],
                  $_POST['avalanches'],
                  $_POST['thunderstorms'],
                  $_POST['hailstorms'],
                  $_POST['high_winds'],
                  $_POST['microbursts'],
                  $_POST['dust_storms'],
                  $_POST['fog_visibility'],
                  $_POST['industrial_accidents'],
                  $_POST['chemical_spills'],
                  $_POST['nuclear_accidents'],
                  $_POST['power_outages'],
                  $_POST['water_supply_disruptions'],
                  $_POST['gas_leaks_explosions'],
                  $_POST['sewage_system_failures']); 
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

//creating passing varible user_name
$user_name = $user['name'];

// Set gear list in $_SESSION
session_start();
$_SESSION['gearList'] = $gearList;
$_SESSION['user_name'] = $user_name;

// Redirect back to index.php
header('Location: index.php');
?>