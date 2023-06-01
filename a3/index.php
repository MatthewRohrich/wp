<?php
include './tools.php';
include './head.php';



?>

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
  <article id='about'>
    <h2>About Us</h2>
    <p>We have re-opened!
      We took advantage of the recent downtime and we have been hard at work renovating the cinemas.</p>
    <p>We have all new seats both standard and first class have been upgraded.
      The first class seats are all built to recline so you can enjoy the movies in comfort.
    <p>

      <!-- https://www.dolby.com/technologies/dolby-vision/ -->
      The projection system has been upgraded with the latest Dolby Vision&trade; our screens now have sharper
      contrast and ultravivid colours.
      Colour and contrast are with a High Dynamic Range (HDR) so you can see what you came to see.

      <!-- https://www.dolby.com/technologies/dolby-atmos/ -->
      Do you want to feel like you are in the movie?
      Now you can with our Dolby Atmos&trade; sound upgrades.
      You will never forget the feeling of being surrounded and immersed by sound, you will be able to hear where each
      sound comes from and feel like you are there.
  </article>
  <article id="seatsContainer">
    <div class="seats">
      <h2>Seats and prices</h2>
    </div>
    <div class="seats-image">
      <img src="../../media/Profern-Standard-Twin.png" alt="standard seats">
      <p>Standard Seats</p>
    </div>

    <?php showSeatPricing(); ?>

    </div>
    <div class="seats-image">
      <img src="../../media/Profern-Verona-Twin.png" alt="first class reclining seats">
      <p>First Class Seats</p>
    </div>
  </article>
  <h2>Now Showing</h2>
  <article id="nowShowing">
    <div id="movieContainer">
      <?php showAllMovies(); ?>
    </div>
  </article>
</main>



<?php include './footer.php' ?>
<?php include './debug.php' ?>
</body>

</html>