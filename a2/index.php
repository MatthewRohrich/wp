<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Home Page</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>


  </head>

  <body>

    <header>
      <!-- https://pixabay.com/vectors/film-cinema-popcorn-coke-fun-162029/ -->
      <div id="cinemaTitle"><img id='logo' src='../../media/logo-160.png' alt='Film and popcorn'> Lunardo Cinemas</div>
    </header>

    <nav>
      
      <ul>
        <li>
          <a href="#about">About Lunardo</a>
        </li>
        <li>
          <a href="#seats">Seats and Prices</a>
        </li>
        <li>
          <a href="#nowShowing">Now Showing</a>
        </li>
      </ul>
     
      
    </nav>

    <main>
      <article id='Lunardo cinemas'>
  
        <section id="about">
          <h2>About Us</h2>
          <p>We have re-opened!
          We took advantage of the recent downtime and we have been hard at work renovating the cinemas.</p>
          <p>We have all new seats both standard and first class have been upgraded. 
            The first class seats are all built to recline so you can enjoy the movies in comfort.<p>

          <!-- https://www.dolby.com/technologies/dolby-vision/ -->
          The projection system has been upgraded with the latest Dolby Vision&trade; our screens now have sharper contrast and ultravivid colours. 
          Colour and contrast are with a High Dynamic Range (HDR) so you can see what you came to see.

          <!-- https://www.dolby.com/technologies/dolby-atmos/ -->
          Do you want to feel like you are in the movie? 
          Now you can with our Dolby Atmos&trade; sound upgrades.
          You will never forget the feeling of being surrounded and immersed by sound, you will be able to hear where each sound comes from and feel like you are there.
        </section>

        <section id="seats" class="seats-grid" id="seats-container">
          <div class="seats">
            <h2 >Seats and prices</h2>
          </div>
          <div class="seats" id="standardSeats">
            <table>
              <thead>
                <tr>
                  <th>Seat Type</th><th>Seat Code</th><th>Discount Prices</th><th>Normal Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Standard Adult</td><td>STA</td><td>16.00</td><td>21.50</td>
                </tr>
                <tr>
                  <td>Standard Concession</td><td>STP</td><td>14.50</td><td>19.00</td>
                </tr>
                <tr>
                  <td>Standard Child</td><td>STC</td><td>13.00</td><td>17.50</td>
                </tr>
              </tbody>
            </table> 
          </div>
          <div class="seats">
            <img src="../../media/Profern-Standard-Twin.png" alt="standard seats">
          </div>
          <div class="seats" id="firstClassSeats">
            <table>
              <thead>
                <tr>
                  <th>Seat Type</th><th>Seat Code</th><th>Discount Prices</th><th>Normal Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>First Class Adult</td><td>FCA</td><td>25.00</td><td>28.00</td>
                </tr>
                <tr>
                  <td>First Class Concession</td><td>FCP</td><td>23.50</td><td>28.00</td>
                </tr>
                <tr>
                  <td>First Class Child</td><td>FCC</td><td>22.00</td><td>25.00</td>
                </tr>
              </tbody>
            </table>
          </div>   
          <div class="seats">
            <img  src="../../media/Profern-Verona-Twin.png"  alt="first class reclining seats">
          </div>
        </section>
        <section id="nowShowing">
          <h2>Now Showing</h2>
          <!-- flipping cards Based on Trevors lecture notes --> 
          <div id="movieContainer">
            <div class="movie">
              <div class="movieCards">
                <div class="movieFront">
                  <!-- image sourced from -->
                  <!-- https://www.imdb.com/title/tt1630029/mediaviewer/rm92486145/?ref_=tt_ov_i -->
                  <!-- https://m.media-amazon.com/images/M/MV5BYjExNDJkMWEtZjM5Yi00NjA5LThlZTMtZmI0MTU1NzYxNDgzXkEyXkFqcGdeQXVyNzA4NTc5MjE@._V1_.jpg%22 -->
                  <img src="../../media/avatar_way_poster_400.png" alt="Avatar: The Way of Water, movie poster">
                </div>
                <div class="movieBack">
                  <p>Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na'vi race to protect their home.</p>
                  <ul>
                    <li>Mon/Tue - 9pm</li>
                    <li>Wed/Fri - 9pm</li>
                    <li>Sat/Sun - 6pm</li>
                    <li>Booking link</li>
                  </ul>
                  <a class="bookNow" href="booking.php?movie=ACT">Book Now</a>
                </div>
              </div>
              <div class="movieTitle">
                <p>Avatar: The Way of Water</p>
                <p>( M )</p>
              </div>
            </div>
            <div class="movie">
              <div class="movieCards">
                <div class="movieFront">
                  <!-- image sourced from -->
                  <!-- https://www.imdb.com/title/tt17076046/mediaviewer/rm629541889/?ref_=tt_ov_i -->
                  <!-- https://m.media-amazon.com/images/M/MV5BOWRiNmI1OTItYjc0Zi00YTYwLWI4OTEtMmE0YTNlODJkOTQwXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg -->
                  <img src="../../media/weird_al_poster_400.png" alt="Weird: The Al Yankovic Story, movie poster">
                </div>
                <div class="movieBack">
                  <p>Explores every facet of Yankovic's life, from his meteoric rise to fame with early hits like 'Eat It' and 'Like a Surgeon' to his torrid celebrity love affairs and famously depraved lifestyle.</p>
                  <ul>
                    <li>Wed/Fri - 12pm</li>
                    <li>Sat/Sun - 3pm</li>
                    <li>Booking link</li>
                  </ul>
                  <a class="bookNow" href="booking.php?movie=ACT">Book Now</a>
                </div>
              </div>
              <div class="movieTitle">
                <p>Weird: The Al Yankovic Story</p>
                <p>( M )</p>
              </div>
            </div>
            <div class="movie">
              <div class="movieCards">
                <div class="movieFront">
                  <!-- image sourced from -->
                  <!-- https://www.imdb.com/title/tt3915174/mediaviewer/rm342562561/?ref_=tt_ov_i -->
                  <!-- https://m.media-amazon.com/images/M/MV5BNjMyMDBjMGUtNDUzZi00N2MwLTg1MjItZTk2MDE1OTZmNTYxXkEyXkFqcGdeQXVyMTQ5NjA0NDM0._V1_.jpg -->
                  <img src="../../media/puss_in_boots_poster_400.png" alt="Puss in Boots: The Last Wish, movie poster">
                </div>
                <div class="movieBack">
                  <p>Puss in Boots discovers that his passion for adventure has taken its toll: he has burned through eight of his nine lives. Puss sets out on an epic journey to find the mythical Last Wish and restore his nine lives.</p>
                  <ul>
                    <li>Mon/Tue - 12pm</li>
                    <li>Wed/Fri - 6pm</li>
                    <li>Sat/Sun - 12pm</li>
                    <li>Booking link</li>
                  </ul>
                  <a class="bookNow" href="booking.php?movie=ACT">Book Now</a>
                </div>
              </div>
              <div class="movieTitle">
                <p>Puss in Boots: The Last Wish</p>
                <p>( PG )</p>
              </div>
            </div>
            <div class="movie">
              <div class="movieCards">
                <div class="movieFront">
                  <!-- image sourced from -->
                  <!-- https://www.imdb.com/title/tt9308390/mediaviewer/rm898035713/?ref_=tt_ov_i -->
                  <!-- https://m.media-amazon.com/images/M/MV5BNWU5NTEwOGEtZTMzYS00ODFlLWE5MjAtYTZjOGU3NjA1YWMxXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_.jpg -->
                  <img src="../../media/margrete_queen_poster_400.png" alt="Margrete: Queen of the North, movie poster">
                </div>
                <div class="movieBack">
                  <p>1402. Queen Margrete is ruling Sweden, Norway and Denmark through her adopted son, Erik. But a conspiracy is in the making and Margrete finds herself in an impossible dilemma that could shatter her life's work: the Kalmar Union.</p>
                  <ul>
                    <li>Mon/Tue - 6pm</li>
                    <li>Sat/Sun - 9pm</li>
                    <li>Booking link</li>
                  </ul>
                  <a class="bookNow" href="booking.php?movie=ACT">Book Now</a>
                </div>
              </div>
              <div class="movieTitle">
                <p>Margrete: Queen of the North</p>
                <p>( M )</p>
              </div>
            </div>
          </div>
        </section>
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
      <div>&copy;
        <script>
          document.write(new Date().getFullYear());
        </script> Matthew Rohrich, StudentID. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
        <a id="github" href="https://github.com/matthewrohrich/wp" target="_blank">Matthews Github</a>
      </div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
