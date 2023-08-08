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
        <li><a href="About_page/index.php">About</a></li>
        <li><a href="https://www.fema.gov/about/contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>

    <section class="hero">
      <div class="content">
        <h1><center>FEMAp</center></h1>
        <p><pre>     Complete the questionnaire below to receive general advice on how to handle hazards near you.</pre></center></p>
        <a href="Generative_PDF_page/index.php" class="btn">
          <span style="padding-left: 55px;">Click Here To Get Started</span>
        </a>
      </div>
    </section>

    <section class="posts">

      <h2>Location</h2>
      <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1O5t-WPX3L9ZyOeUen-pZ2H_1mj8BCls&ehbc=2E312F" width="640" height="480"></iframe>

      <h2>Checklist</h2>
      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScF8CjdG3sYW855tML0LCCHN4xcJVN1Qj02Z4UVEpBZAUp92Q/viewform?embedded=true" width="640" height="993" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>

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
    <!-- 
    <section class="checklist">

<h2>Hazard Checklist: Use the maps and questions below to cater your preventative needs.</h2>

  <article>
    <p>
      <input type="checkbox" id="drought">
      <label for="drought">Do you live in a relatively dry area with little rainfall for months at a time?</label>
    </p>
    <img src="images/map-drought_risk.png" width = "600" height = "350"> 
  </article>

  <article>
    <p>
      <input type="checkbox" id="heatwave">
      <label for="heatwave">Do you live in a dry/arid region, or at a relatively high-pressure altitude?</label>
    </p>
    <img src="images/map-heatwave_risk.png" width = "600" height = "350" >
  </article>

  <article>
    <p>
      <input type="checkbox" id="heatwave">
      <label for="heatwave">Do you live near any forests, grasslands, or shrublands?</label>
    </p>
    <img src="images/map-wildfire_risk.png" width = "600" height = "350" >
  </article>

  <article>
    <p>
      <input type="checkbox" id="heatwave">
      <label for="heatwave">Do you live near any fault lines?</label>
    </p>
    <img src="images/map-earthquake_risk.png" width = "600" height = "350" >
  </article>

  <article>
    <p>
      <input type="checkbox" id="heatwave">
      <label for="heatwave">Do you live on or beside any mountains or cliffsides?
      </label>
    </p>
    <img src="images/map-landslide_risk.png" width = "600" height = "350" >
  </article>

  <article>
    <p>
      <input type="checkbox" id="heatwave">
      <label for="heatwave">Does your region experience high winds?</label>
    </p>
    <img src="images/map-strongwind_risk.png" width = "600" height = "350" >
  </article>

  <article>
    <p>
      <input type="checkbox" id="heatwave">
      <label for="heatwave">Does your region experience thunderstorms?</label>
    </p>
    <img src="images/map-lightning_risk.png" width = "600" height = "350" >
  </article>

  <article>
    <p>
      <input type="checkbox" id="heatwave">
      <label for="heatwave">Do you live in or around flatlands/plains?</label>
    </p>
    <img src="images/map-tornado_risk.png" width = "600" height = "350" >
  </article>

  <article>
    <p>
      <input type="checkbox" id="heatwave">
      <label for="heatwave">Do you live along the East or SE coasts, or on an island?</label>
    </p>
    <img src="images/map-hurricane_risk.png" width = "600" height = "350"> </article>

  <article>
    <p>
      <input type="checkbox" id="heatwave">
      <label for="heatwave">Do you live along the coast and/or near a river?</label>
    </p>
    <img src="images/map-coastalflooding_risk.png" width = "600" height = "350" > </article>

  <article>
    <p>
      <input type="checkbox" id="heatwave">
      <label for="heatwave">Do you live along the West coast?</label>
    </p>
    <img src="images/map-tsunami_risk.png" width = "600" height = "350" >
  </article>

  <article>
    <p>
      <input type="checkbox" id="heatwave">
      <label for="heatwave">Do you live near any active/inactive volcanoes, or are you on an island?</label>
    </p>
    <img src="images/map-volcanicactivity_risk.png" width = "600" height = "350"> </article>

  <article>
    <p>
      <input type="checkbox" id="heatwave">
      <label for="heatwave">Do you live in a flat area region with moderate or high elevation, (ex. Great Plains)?</label>
    </p>
    <img src="images/map-hail_risk.png" width = "600" height = "350" >
  </article>

  <article>
    <p>
      <input type="checkbox" id="heatwave">
      <label for="heatwave">Do live in an area that experiences regular/annual snowfall (greater than 12”)?</label>
    </p>
    <img src="images/map-icestorm_risk.png" width = "600" height = "350">
  </article>

  <article>
    <p>
      <input type="checkbox" id="heatwave">
      <label for="heatwave">Do you live inland (non-coastal) and experience regular/annual snowfall? (>= 12”)?</label>
    </p>
    <img src="images/map-winterweather_risk.png" width = "600" height = "350" >
  </article>

  <article>
    <p>
      <input type="checkbox" id="heatwave">
      <label for="heatwave">Do you live on/around a mountainous region that experiences regular/annual snowfall? (>= 12”)</label>
    </p>
    <img src="images/map-avalanche_risk.png" width = "600" height = "350" >
  </article>
  -->
  <!-- Additional questions -->

  </section>


  </main>

  <footer>
    <p>&copy; 2023 FEMAp, we are not affiliated with FEMA.</p>
  </footer>

</body>

</html>
