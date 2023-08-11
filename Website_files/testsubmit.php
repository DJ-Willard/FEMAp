<?php
$conn = mysqli_connect('34.170.255.121', 'web_user', 'OHg0dh3lp!', 'natural_disaster_db', '3306') or die('Error connecting to MySQL server.');
?>

<html>
<head>
<title>Attempting MySQL Connection</title>
</head>

<?php
// Get form values
$name = $_POST['name'];
$adults = $_POST['adults'];
$children = $_POST['children']; 
$infants = $_POST['infants'];

// Insert into database  
$query = "INSERT INTO user_responses VALUES(NULL, '$name', $adults, $children, $infants, 
           '{$_POST['hurricanes_tropical_storms']}',
           '{$_POST['tornadoes']}',
           '{$_POST['earthquakes']}',
           '{$_POST['wildfires']}',
           '{$_POST['floods']}',
           '{$_POST['landslides']}',
           '{$_POST['tsunamis']}',
           '{$_POST['volcanic_eruptions']}',
           '{$_POST['droughts']}',
           '{$_POST['heatwaves']}',
           '{$_POST['blizzards']}',
           '{$_POST['avalanches']}', 
           '{$_POST['thunderstorms']}',
           '{$_POST['hailstorms']}',
           '{$_POST['high_winds']}',
           '{$_POST['microbursts']}',
           '{$_POST['dust_storms']}',
           '{$_POST['ice_storms']}',
           '{$_POST['fog_visibility']}',
           '{$_POST['industrial_accidents']}',
           '{$_POST['chemical_spills']}',
           '{$_POST['nuclear_accidents']}',
           '{$_POST['power_outages']}',
           '{$_POST['water_supply_disruptions']}', 
           '{$_POST['gas_leaks_explosions']}',
           '{$_POST['sewage_system_failures']}'";
           
mysqli_query($conn, $query);

// Build gear list by querying corresponding table 
// based on checked hazards
$gear_list = ""; 

//test query then start data calculation
$result = mysqli_query($conn, $query)
or die(mysqli_error($conn));

//universal gear fetch
$universal_query = "SELECT * FROM universal_gear";
$universal_result = mysqli_query($conn, $universal_query);
while($universal_row = mysqli_fetch_assoc($universal_result)) {
    $gear_list .= $universal_row['gear_item'] . ", "; 
  }

if($_POST['hurricanes_tropical_storms'] == 'yes'){
  $result = mysqli_query($conn, "SELECT * FROM hurricanes_tropical_storms_gear");
  
  while($row = mysqli_fetch_assoc($result)){
    $gear_list .= $row['gear_item'] . ", ";
  }
}

// Trim trailing comma
$gear_list = rtrim($gear_list, ',');

?>

<hr>
<p>
Result of query:
<p>

<?php

// Print output 
echo $gear_list;
echo "<br>";
echo $name;

mysqli_free_result($result);
mysqli_close($conn);
?>

<p>
</body>
</html>