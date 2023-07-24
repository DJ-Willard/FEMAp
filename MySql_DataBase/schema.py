-- Create the MySQL Database and grant privileges to a new user
CREATE DATABASE disaster_webpage_db;
CREATE USER 'web_user'@'%' IDENTIFIED BY 'your_password';
GRANT ALL PRIVILEGES ON disaster_webpage_db.* TO 'web_user'@'%';
FLUSH PRIVILEGES;

-- Use the database
USE disaster_webpage_db;

-- Create the table to store user responses
CREATE TABLE user_responses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    adults INT NOT NULL,
    children INT NOT NULL,
    infants INT NOT NULL,
    thunderstorms ENUM('yes', 'no'),
    hailstorms ENUM('yes', 'no'),
    high_winds ENUM('yes', 'no'),
    microbursts ENUM('yes', 'no'),
    dust_storms ENUM('yes', 'no'),
    ice_storms ENUM('yes', 'no'),
    fog_visibility ENUM('yes', 'no'),
    hurricanes_tropical_storms ENUM('yes', 'no'),
    tornadoes ENUM('yes', 'no'),
    earthquakes ENUM('yes', 'no'),
    wildfires ENUM('yes', 'no'),
    floods ENUM('yes', 'no'),
    landslides ENUM('yes', 'no'),
    tsunamis ENUM('yes', 'no'),
    volcanic_eruptions ENUM('yes', 'no'),
    droughts ENUM('yes', 'no'),
    heatwaves ENUM('yes', 'no'),
    blizzards ENUM('yes', 'no'),
    avalanches ENUM('yes', 'no'),
    industrial_accidents ENUM('yes', 'no'),
    chemical_spills ENUM('yes', 'no'),
    nuclear_accidents ENUM('yes', 'no'),
    power_outages ENUM('yes', 'no'),
    water_supply_disruptions ENUM('yes', 'no'),
    gas_leaks_explosions ENUM('yes', 'no'),
    sewage_system_failures ENUM('yes', 'no')
);
