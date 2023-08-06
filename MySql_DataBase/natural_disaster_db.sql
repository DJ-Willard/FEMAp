-- Create the MySQL Database and grant privileges to a new user
CREATE DATABASE natural_disaster_db;
-- CREATE USER 'web_user'@'%' IDENTIFIED BY 'your_password';
-- GRANT ALL PRIVILEGES ON natural_disaster_db.* TO 'web_user'@'%';
-- FLUSH PRIVILEGES;

-- Use the database
USE natural_disaster_db;

-- Create the table to store user responses
CREATE TABLE user_responses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    adults INT NOT NULL,
    children INT NOT NULL,
    infants INT NOT NULL,
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
    thunderstorms ENUM('yes', 'no'),
    hailstorms ENUM('yes', 'no'),
    high_winds ENUM('yes', 'no'),
    microbursts ENUM('yes', 'no'),
    dust_storms ENUM('yes', 'no'),
    ice_storms ENUM('yes', 'no'),
    fog_visibility ENUM('yes', 'no'),
    industrial_accidents ENUM('yes', 'no'),
    chemical_spills ENUM('yes', 'no'),
    nuclear_accidents ENUM('yes', 'no'),
    power_outages ENUM('yes', 'no'),
    water_supply_disruptions ENUM('yes', 'no'),
    gas_leaks_explosions ENUM('yes', 'no'),
    sewage_system_failures ENUM('yes', 'no')


-- Create tables for each gear list tied to each ND in order of list
CREATE TABLE hurricanes_tropical_storms_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table that is unquie
INSERT INTO hurricanes_tropical_storms_gear (gear_item)
VALUES 
	('Tarps'), 
    ('Plastic Sheeting'), 
    ('Duct Tape'), 
    ('Plywood'), 
    ('Wood planks');


-- Create tables for each gear list tied to each ND
CREATE TABLE tornadoes_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO tornadoes_gear  (gear_item)
VALUES 
	('Helmet'), 
    ('Nearest Shelter Location'), 
    ('Sturdy Boots'), 
    ('Safety Googles'), 
    ('Puncture Resisant Jacket');

-- Create tables for each gear list tied to each ND
CREATE TABLE Earthquakes_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO earthquakes_gear  (gear_item)
VALUES 
	('Helmet'), 
    ('Nearest Shelter Location'), 
    ('Sturdy Boots'), 
    ('Safety Googles'), 
    ('Abrasion Resisant Jacket');

-- Create tables for each gear list tied to each ND
CREATE TABLE wildfires_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO wildfires_gear  (gear_item)
VALUES 
	('Long Sleeve Fire Resistant'), 
    ('N95 masks'), 
    ('Fireproof Blanket'), 
    ('Safety Googles');

-- Create tables for each gear list tied to each ND
CREATE TABLE wildfires_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO wildfires_gear  (gear_item)
VALUES 
	('Long Sleeve Fire Resistant'),
    ('N95 masks'),
    ('Fireproof Blanket'),
    ('Safety Googles');

-- Create tables for each gear list tied to each ND
CREATE TABLE floods_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO floods_gear  (gear_item)
VALUES 
	('Life Jackets'), 
    ('Rubber over boots'), 
    ('inflatable boat'), 
    ('Sandbags');

-- Create tables for each gear list tied to each ND
CREATE TABLE landslides_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO landslides_gear  (gear_item)
VALUES 
	('Sturdy Boots'), 
    ('Helmet'), 
    ('Safety Goggles');

-- Create tables for each gear list tied to each ND
CREATE TABLE tsunamis_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO tsunamis_gear  (gear_item)
VALUES 
	('Life Jacket'), 
	('Personal Mini Scuba tank');

-- Create tables for each gear list tied to each ND
CREATE TABLE droughts_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO droughts_gear  (gear_item)
VALUES 
	('Water Purification Tablets'),
    ('Rainwater Collector'),
    ('Shade Canopy'),
    ('Water Saving Devices');

-- Create tables for each gear list tied to each ND
CREATE TABLE volcanic_eruptions_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO volcanic_eruptions_gear  (gear_item)
VALUES 
	('N95 mask'), 
    ('Safety Goggles'), 
    ('Helmet'), 
    ('Leather Jacket');


-- Create tables for each gear list tied to each ND
CREATE TABLE heatwaves_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO heatwaves_gear  (gear_item)
VALUES 
	('Electrolyte Replacement powder'), 
    ('Water spray bottles'), 
    ('Portable Fans'), 
    ('Sun Hat'), 
    ('Sun Glasses'), 
    ('Lightweight Clothing'), 
    ('Cooling Towles'), 
    ('Shade Canopy'),
    ('A/C Unit'),
    ('Black-out Curtains'),
    ('Coolers'),
    ('Ice Packs'),
    ('Heat-related Illness information');

-- Create tables for each gear list tied to each ND
CREATE TABLE blizzards_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO blizzards_gear  (gear_item)
VALUES 
('Warm Clothing'), 
('Sleeping Bag'), 
('Warm Blankets'), 
('Emergency Blankets'), 
('Heating Source'), 
('Fuel for Heat Source'), 
('Shovel'), 
('Rock salt'),
('Sand or Kitty litter'),
('Snow boots'),
('Winter Tires'),
('Books'),
('Black-out Curtains'),
 ('Weather Proofing Tape'),
 ('Snow Shoes'),
 ('Warm Hat'), 
 ('Warm Gloves'), 
 ('Warm Socks');

-- Create tables for each gear list tied to each ND
CREATE TABLE avalanches_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO avalanches_gear  (gear_item)
VALUES 
	('Warm Clothing'), 
    ('Avalanche Beacon Transceiver'), 
    ('Shovel'), 
    ('Probe'), 
    ('Avalung'), 
    ('Snow Study Kit'), 
    ('Helmet'), 
    ('Avalanche Airbag Backpack'),
    ('Two Way Radio'),
    ('Snow boots'),
    ('GPS Device'),
    ('Map'),
    ('Compass'), 
    ('Bivouac'), 
    ('High Energy Snacks'), 
    ('Warm Hat'), 
    ('Warm Gloves'), 
    ('Warm Socks'), 
    ('Ice Axe');

-- Create tables for each gear list tied to each ND
CREATE TABLE thunderstorms_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO thunderstorms_gear  (gear_item)
VALUES 
	('Surge protectors'), 
	('Generator'), 
    ('Weather Proofing Tape'), 
    ('Critical Power Battery Backup');

-- Create tables for each gear list tied to each ND
CREATE TABLE hailstorms_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO hailstorms_gear  (gear_item)
VALUES 
	('Helmet'), 
    ('Nearest Shelter Location');

-- Create tables for each gear list tied to each ND
CREATE TABLE high_winds_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO high_winds_gear  (gear_item)
VALUES 
	('Plywood'), 
    ('Wood Planks'), 
    ('Sandbags');

-- Create tables for each gear list tied to each ND
CREATE TABLE microbursts_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO microbursts_gear  (gear_item)
VALUES 
	('Plywood'), 
    ('Wood Planks'), 
    ('Helmet');

-- Create tables for each gear list tied to each ND
CREATE TABLE dust_storms_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO dust_storms_gear  (gear_item)
VALUES 
	('Door Sealant'), 
    ('Window Sealant'), 
    ('HEPA Filters'), 
    ('N95 Masks');

-- Create tables for each gear list tied to each ND
CREATE TABLE ice_storms_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO ice_storms_gear  (gear_item)
VALUES 
	('Fuel for Heating Source'), 
    ('Heating Source'), 
    ('Weather Proofing Tape'), 
    ('Crampons'), 
    ('Warm Blankets'), 
    ('Sleeping Bag'), 
    ('Warm Clothing'), 
    ('Rock Salt'), 
    ('Sand or Kitty litter'), 
    ('Snow Boots'), 
    ('Warm Hat'), 
    ('Warm Socks'), 
    ('Warm Gloves');

-- Create tables for each gear list tied to each ND
CREATE TABLE fog_visibility_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO fog_visibility_gear  (gear_item)
VALUES 
	('High Visibility Vest'), 
    ('Red Light Flashlight');

-- Create tables for each gear list tied to each ND
CREATE TABLE industrial_accidents_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO industrial_accidents_gear  (gear_item)
VALUES 
	('Hard Hat'), 
    ('Safety Glasses'), 
    ('Ear Protection'), 
    ('High Visibility Vest'), 
    ('Eye Flush Bottles'), 
    ('Impact Gloves');

-- Create tables for each gear list tied to each ND
CREATE TABLE chemical_spills_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO chemical_spills_gear  (gear_item)
VALUES 
	('Chemical resistant Gloves'), 
    ('Absorbent Chemical Clothes'), 
    ('Chemical-Resistant Coveralls'), 
    ('Chemical Neutralizers'), 
    ('Eye Flush Bottles'), 
    ('Spill Containment Kits'), 
    ('Chemical-Resistant Shoe Covers');

-- Create tables for each gear list tied to each ND
CREATE TABLE nuclear_accidents_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO nuclear_accidents_gear  (gear_item)
VALUES 
	('Full-Face Respirator with Appropriate Filters'), 
    ('Disposable Coveralls with Attached Hood and Boot Covers'), 
    ('Chemical-Resistant Gloves'), 
    ('Disposable Boot Covers'), 
    ('Personal Radiation Dosimeters'), 
    ('Radiation Survey Meters'), 
    ('Decontamination Solutions'), 
    ('Shielding Materials'), 
    ('Potassium Iodide Pills');

-- Create tables for each gear list tied to each ND
CREATE TABLE power_outages_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO power_outages_gear  (gear_item)
VALUES 
	('Generator'), 
    ('Uninterruptible Power Supply'), 
    ('Portable Camping Stove'), 
    ('Extra Fuel');

-- Create tables for each gear list tied to each ND
CREATE TABLE water_supply_disruptions_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO water_supply_disruptions_gear  (gear_item)
VALUES 
	('Portable Water Filter'), 
	('Wet Wipes'), 
	('Waterless Toilets or Portable Camping Toilets'), 
    ('Rainwater Collection System'), 
    ('Buckets and Basins');

-- Create tables for each gear list tied to each ND
CREATE TABLE gas_leaks_explosions_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO gas_leaks_explosions_gear  (gear_item)
VALUES 
	('Gas Mask or Respirator'), 
	('Gas Leak Detector'), 
	('Carbon Monoxide (CO) Detector'), 
    ('ABC Fire Extinguishers');

-- Create tables for each gear list tied to each ND
CREATE TABLE sewage_system_failures_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);
-- Then Insert data into each table
INSERT INTO sewage_system_failures_gear  (gear_item)
VALUES 
	('Rubber Gloves'), 
    ('Disposable Coveralls'), 
    ('Disinfectant'), 
    ('Bleach'), 
    ('Mops'), 
    ('Brooms'), 
    ('Portable Camping Toilet'), 
    ('Trash Bags'), 
    ('Disposable Gloves');

-- Create the table for universal gear items
CREATE TABLE universal_gear (
    gear_id INT AUTO_INCREMENT PRIMARY KEY,
    gear_item VARCHAR(255) NOT NULL
);

-- Insert the universal gear items into the table
INSERT INTO universal_gear (gear_item)
VALUES
    ('Water'),
    ('Non-perishable food'),
    ('Radio'),
    ('Flashlights'),
    ('First Aid Kit'),
    ('Cell Phone'),
    ('Chargers'),
    ('Cash'),
    ('Important Documents'),
    ('Waterproof Bag'),
    ('Emergency contact list'),
    ('Extra Clothing'),
    ('Rain Gear'),
    ('Personal Items'),
    ('Extra batteries'),
    ('Soap'),
    ('Toilet paper'),
    ('Hand sanitizer'),
    ('Menstrual Products'),
    ('Government IDs'),
    ('Multi Tool'),
    ('Whistle'),
    ('Matches'),
    ('Lighter'),
    ('Ferrous Rod'),
    ('Plastic Bags'),
    ('Work Gloves'),
    ('Fire Extinguisher'),
    ('Portable power bank'),
    ('NOAA weather radio'),
    ('Insect Repellent'),
    ('Baby Supplies'),
    ('Sunscreen'),
    ('Pet Supplies'),
    ('Manual Can opener'),
    ('Toothbrush'),
    ('Personal Hygiene Items'),
    ('Toothpaste'),
    ('Emergency Car kit');
    
-- Create a temporary table to store the calculated conditional list
CREATE TEMPORARY TABLE conditional_list AS
SELECT 
    user_id,
    user_name,
    number_of_adults,
    number_of_children,
    number_of_infants,
    (number_of_adults + number_of_children + number_of_infants) * 3 AS gallons_of_water,
    (number_of_adults + number_of_children) * 3000 AS calories_of_nonperishable_food,
    number_of_infants * 1500 AS calories_of_infant_safe_food,
    number_of_adults AS number_of_adult_first_aid_kits,
    number_of_children AS number_of_children_first_aid_kits,
    number_of_infants AS number_of_infant_first_aid_kits
FROM user_responses;

-- Display the conditional list
SELECT * FROM conditional_list;