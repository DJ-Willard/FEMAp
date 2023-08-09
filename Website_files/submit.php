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

if ($user['hurricanes_tropical_storms'] == 'yes') {
  $stmt = $db->query("SELECT gear_item FROM hurricanes_tropical_storms_gear");
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