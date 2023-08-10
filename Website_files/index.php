<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FEMAp</title>
  <link rel="stylesheet" href="style.css">
</head>

<!--- <style> <?php include 'style.css'; ?> </style> /> -->

<body>

  <header>
    <nav>
      <ul>
        <a href="About_page/index.php">About</a>
        <a <span style="padding-left: 55px;" href="https://www.fema.gov/about/contact">Contact </span></a>
      </ul>
    </nav>
  </header>

  <main>

    <section class="hero">
      <div class="content">
        <h1><center>FEMAp</center></h1>
        <p><pre>     Complete the questionnaire below to receive general advice on how to handle hazards near you.</pre></center></p>
       <!--  <a href="Generative_PDF_page/index.php" class="btn">
          <span style="padding-left: 55px;">Click Here To Get Started</span>
        </a> -->
      </div>
    </section>

    <section class="posts">

      <h2>Location:</h2>
      <h3>Use this interactive map to track where you are on the maps that follow.</h3>
      <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1O5t-WPX3L9ZyOeUen-pZ2H_1mj8BCls&ehbc=2E312F" width="640" height="480"></iframe>
<!--
      <h2>Checklist</h2>
      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScF8CjdG3sYW855tML0LCCHN4xcJVN1Qj02Z4UVEpBZAUp92Q/viewform?embedded=true" width="640" height="993" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
-->
      <!--<article class="post">
        <a href="https://hazards.fema.gov/nri/expected-annual-loss">
          <img src="images/map-expectedannualloss.png" width = "800" height = "550" alt="US Expected Loss Map">
        </a>
        <h3>
          <a href="#">Post Title 1</a>
        </h3>
        <p>Post excerpt...</p>
        <a href="#" class="readmore">Read more</a>
      </article> -->


    </section>

    <section class="SecondTitle">
      <h2> <span style="padding-left: 0px;">Hazard Checklist:</span></h2>
      <h2> <span style="padding-left: 75px;">Use the maps and questions below to cater your preventative needs.</span></h2>
      <h2> <span style="padding-left: 75px;">For more information on the natural risk, click the map or select contact at the top of the page. </span></h2>
      <h2> <span style="padding-left: 75px;">After completing the checklist click submit to generate your personalized natural hazard </span></h2>
      <h2> <span style="padding-left: 75px;">hazard prevention list. </span></h2>


  <section class="checklist">

  <!-- Make a questions with a text box that takes in how many family members (adults, children, infants) there are (check github for queries) -->
  <!-- Add the city based questions as well -->

  <form method="post" action="submit.php">

  <article>

  <label for="name">What is your first name (or nickname)?</label>

    <input type="text" id="name" name="name">

  </article>

  <script>

    const $name = $('#name');

    $name.change(function() {
    $name.val(this.value); 
    });

  </script>


  <article>

    <label for="adults">How many adults are in your household (18+ years)?</label>
    
    <input type="number" id="adults" name="adults">

  </article>

  <article>

    <label for="infants">How many infants are in your household (0-1 years)?</label>
  
    <input type="number" id="infants" name="infants">
  
  </article>
  
  <article>
  
    <label for="children">How many children are in your household (1-12 years)?</label>  
  
    <input type="number" id="children" name="children">
  
  </article>
  
    
    <script>
      // Get entered value
      const numAdults = document.getElementById("adults").value;
      const numInfants = document.getElementById("infants").value;
      const numChildren = document.getElementById("children").value;

      
      // Save value to adult input
      const adultInput = document.createElement("input");
      adultInput.type = "hidden";
      adultInput.name = "numAdults"; 
      adultInput.value = numAdults;

      // Infants hidden input
      const infantInput = document.createElement("input");
      infantInput.type = "hidden";
      infantInput.name = "numInfants";
      infantInput.value = numInfants;

      // Children hidden input
      const childInput = document.createElement("input");
      childInput.type = "hidden";
      childInput.name = "numChildren";
      childInput.value = numChildren;

      // Append to document
      document.body.appendChild(infantInput);
      document.body.appendChild(childInput);
      document.body.appendChild(adultInput);
    </script>
  
  <br> <br>
  <article>
    <a href="https://hazards.fema.gov/nri/drought">
      <img src="images/map-drought_risk.png" width = "600" height = "350">
    </a>
    <p>
      <input type="hidden" name="drought" value="no">  
      <input type="checkbox" id="drought" name="drought" value="yes">
      <label for="drought">Do you live in a relatively dry area with little rainfall for months at a time?</label>
    </p>
    
  </article>

  <br> <br>
  <article>
    <a href="https://hazards.fema.gov/nri/heat-wave">
      <img src="images/map-heatwave_risk.png" width = "600" height = "350" >
    </a>
    <p>
      <input type="hidden" name="heatwave" value="no">  
      <input type="checkbox" id="heatwave" name="heatwave" value="yes">
      <label for="heatwave">Do you live in a dry/arid region, or at a relatively high-pressure altitude?</label>
    </p>
  </article>

  <br> <br>
  <article>
    <a href="https://hazards.fema.gov/nri/wildfire">
      <img src="images/map-wildfire_risk.png" width = "600" height = "350" >
    </a>
    <p>
      <input type="hidden" name="wildfire" value="no">  
      <input type="checkbox" id="wildfire" name="wildfire" value="yes">
      <label for="wildfire">Do you live near any forests, grasslands, or shrublands?</label>
    </p>
  </article>

  <br> <br>
  <article>
    <a href="https://hazards.fema.gov/nri/earthquake">
      <img src="images/map-earthquake_risk.png" width = "600" height = "350" >
    </a>
    <p>
      <input type="hidden" name="earthquake" value="no">  
      <input type="checkbox" id="earthquake" name="earthquake" value="yes">
      <label for="earthquake">Do you live near any fault lines?</label>
    </p>
  </article>

  <br> <br>
  <article>
    <a href="https://hazards.fema.gov/nri/landslide">
      <img src="images/map-landslide_risk.png" width = "600" height = "350" >
    </a>
    <p>
      <input type="hidden" name="landslide" value="no">  
      <input type="checkbox" id="landslide" name="landslide" value="yes">
      <label for="landslide">Do you live on or beside any mountains or cliffsides?
      </label>
    </p>
  </article>

  <br> <br>
  <article>
    <a href="https://hazards.fema.gov/nri/strong-wind">
      <img src="images/map-strongwind_risk.png" width = "600" height = "350" >
    </a>
    <p>
      <input type="hidden" name="strongwind" value="no">  
      <input type="checkbox" id="strongwind" name="strongwind" value="yes">
      <label for="strongwind">Does your region experience high winds?</label>
    </p>
  </article>

  <br> <br>
  <article>
    <a href="https://hazards.fema.gov/nri/lightning">
      <img src="images/map-lightning_risk.png" width = "600" height = "350" >
    </a>
    <p>
      <input type="hidden" name="lightning" value="no">  
      <input type="checkbox" id="lightning" name="lightning" value="yes">
      <label for="lightning">Does your region experience thunderstorms?</label>
    </p>
  </article>

  <br> <br>
  <article>
    <a href="https://hazards.fema.gov/nri/tornado">
      <img src="images/map-tornado_risk.png" width = "600" height = "350" >
    </a>
    <p>
      <input type="hidden" name="tornado" value="no">  
      <input type="checkbox" id="tornado" name="tornado" value="yes">
      <label for="tornado">Do you live in or around flatlands/plains?</label>
    </p>
  </article>

  <br> <br>
  <article>
    <a href="https://hazards.fema.gov/nri/hurricane">
      <img src="images/map-hurricane_risk.png" width = "600" height = "350"> 
    </a>
    <p>
      <input type="hidden" name="hurricane" value="no">  
      <input type="checkbox" id="hurricane" name="hurricane" value="yes">
      <label for="hurricane">Do you live along the East or SE coasts, or on an island?</label>
    </p>
  </article>

  <br> <br>
  <article>
    <a href="https://hazards.fema.gov/nri/coastal-flooding">
      <img src="images/map-coastalflooding_risk.png" width = "600" height = "350" >
    </a>
    <p>
      <input type="hidden" name="coastalflooding" value="no">  
      <input type="checkbox" id="" name="coastalflooding" value="yes">
      <label for="coastalflooding">Do you live along the coast and/or near a river?</label>
    </p> 
  </article>

  <br> <br>
  <article>
    <a href="https://hazards.fema.gov/nri/tsunami">
      <img src="images/map-tsunami_risk.png" width = "600" height = "350" >
    </a>
    <p>
      <input type="hidden" name="tsunami" value="no">  
      <input type="checkbox" id="tsunami" name="tsunami" value="yes">
      <label for="tsunami">Do you live along the West coast?</label>
    </p>
  </article>

  <br> <br>
  <article>
    <a href="https://hazards.fema.gov/nri/volcanic-activity">
      <img src="images/map-volcanicactivity_risk.png" width = "600" height = "350"> 
    </a>
    <p>
      <input type="hidden" name="volcanicactivity" value="no">  
      <input type="checkbox" id="volcanicactivity" name="volcanicactivity" value="yes">
      <label for="volcanicactivity">Do you live near any active/inactive volcanoes, or are you on an island?</label>
    </p>
  </article>

  <br> <br>
  <article>
    <a href="https://hazards.fema.gov/nri/hail">
      <img src="images/map-hail_risk.png" width = "600" height = "350" >
    </a>
    <p>
      <input type="hidden" name="hail" value="no">  
      <input type="checkbox" id="hail" name="hail" value="yes">
      <label for="hail">Do you live in a flat area region with moderate or high elevation (ex. Great Plains)?</label>
    </p>

  </article>

  <br> <br>
  <article>
    <a href="https://hazards.fema.gov/nri/ice-storm">
      <img src="images/map-icestorm_risk.png" width = "600" height = "350">
    </a>
    <p>
      <input type="hidden" name="icestorm" value="no">  
      <input type="checkbox" id="icestorm" name="icestorm" value="yes">
      <label for="icestorm">Do live in an area that experiences regular/annual snowfall (greater than 12 inches)?</label>
    </p>

  </article>

  <br> <br>
  <article>
    <a href="https://hazards.fema.gov/nri/winter-weather">
      <img src="images/map-winterweather_risk.png" width = "600" height = "350" >
    </a>
    <p>
      <input type="hidden" name="winterweather" value="no">  
      <input type="checkbox" id="winterweather" name="winterweather" value="yes">
      <label for="winterweather">Do you live inland (non-coastal) and experience regular/annual snowfall? (greater than 12 inches)?</label>
    </p>
  </article>

  <br> <br>
  <article>
    <a href="https://hazards.fema.gov/nri/avalanche">
      <img src="images/map-avalanche_risk.png" width = "600" height = "350" >
    </a>
    <p>
      <input type="hidden" name="avalanche" value="no">  
      <input type="checkbox" id="avalanche" name="avalanche" value="yes">
      <label for="avalanche">Do you live on/around a mountainous region that experiences regular/annual snowfall? (greater than 12 inches)</label>
    </p>
  </article>

  <!-- CITY BASED QUESTIONS -->
  <br> <br>
  <article>
    <p>
      <input type="hidden" name="power" value="no">
      <input type="checkbox" id="power" name="power" value="yes">
      <label for="power">Do you own and maintain your own source of electrical power?</label>
    </p>
    </article>
  
    <article>
      <p>
      <input type="hidden" name="water" value="no">
      <input type="checkbox" id="water" name="water" value="yes">
      <label for="water">Do you own and maintain your own source of water?</label>
    </p>
    </article>
  
    <article>
      <p>
      <input type="hidden" name="gas" value="no">
      <input type="checkbox" id="gas" name="gas" value="yes">
      <label for="gas">Do you own any gas appliances, to include heating?</label>
    </p>
    </article>
  
    <article>
      <p>
      <input type="hidden" name="sewage" value="no">
      <input type="checkbox" id="sewage" name="sewage" value="yes">
      <label for="sewage">Do you live in or near any cities, factories, or industrial plants?</label>
    </p>
    </article>

    <article>
      <p>
      <input type="hidden" name="chemical" value="no">
      <input type="checkbox" id="chemical" name="chemical" value="yes">
      <label for="chemical">Do you live near any nuclear facilities, major cities, or military installations?</label>
    </p>
    </article>

      <button class="Submit" type="Submit">Submit</button>

    </form>

    <?php 

        //data passback
        // Start session
        session_start();

        // Check if gear list exists
        if(isset($_SESSION['gearList'])) {

          // Display gear list
          echo "<p>Recommended Gear:</p>";
          echo "<p>" . $_SESSION['gearList'] . "</p>";
          
          // Unset session variable
          unset($_SESSION['gearList']);

        } else {

          // Show default text
          echo "<p>Complete the form to see recommended gear</p>";

        }
    ?>

  </section>


  </main>

  <footer>
    <p><span style="padding-left: 75px;">2023 FEMAp, we are not affiliated with FEMA.</span></p>
  </footer>

</body>

</html>
