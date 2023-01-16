<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Booking Page</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
      <div>Put company logo and name here</div>
    </header>

    <nav>
      <div>Put website navigation links here</div>
    </nav>

    <main>
      <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
      </article>
    </main>
    <footer>
      <div class="contactDetails">
        <em>Contact Us:</em>
        email - <a href="mailto:info@lunardocineamas.com.au" target="_blank" >info@lunardocineamas.com.au</a> 
        Mobile - <a href="tel:0439 555 5555" target="_blank">Call 0439 555 5555</a>
        Address - <a href="https://www.openstreetmap.org/node/4301500443#map=19/-34.06668/150.81231" target="_blank">
          1 Cinema Rd, Movie Town, NSW 2999
        </a>
      </div>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Matthew Rohrich, s3256609. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <a id="github" href="https://github.com/matthewrohrich/wp" target="_blank">Matthews Github</a> &nbsp;
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
    <aside id="debug">
      <hr>
      <h3>Debug Area</h3>
      <pre>
GET Contains:
<?php print_r($_GET) ?>
POST Contains:
<?php print_r($_POST) ?>
SESSION Contains:
<?php print_r($_SESSION) ?>
      </pre>
    </aside>

  </body>
</html>
