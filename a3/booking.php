<?php
include './tools.php';
include './head.php';


if (isset($_GET['movie'])) {
  $movieCode = $_GET['movie'];
  //validate movie code 
  validateMovieCode($movieCode);
} else {
  $movieCode = $_POST['movie'];
  validateMovieCode($movieCode);
}



?>

<nav>
  <ul>
    <li>
      <a href="#preview">Movie Preview</a>
    </li>
    <li>
      <a href="#synopsis">Movie Synopsis</a>
    </li>
    <li>
      <a href="#movieCast">Cast</a>
    </li>
    <li>
      <a href="#booking">Booking</a>
    </li>
    <li>
      <a href="./index.php">Home</a>
    </li>
  </ul>

</nav>

<main>

  <?php

  showOneMovie($movieCode);
  ?>


  <article id="booking">
    <h2>Book Your Movie</h2>

    <form action="booking.php" method="post">
      <h3>Please pick your seats?</h3>
      <input type=text name="movie" value="<?= $movieCode ?>" hidden>
      <?php

      // display the seat selection options 
      seatSelection();
      ?>

      <h3>Pick a Session</h3>
      <div class="movieSessions">
        <?php
        displayMovieSessions($movieCode);
        ?>

        <h3>Booking Details</h3>
        <div id="bookingDetails">

          <p><label for="name">Name: </label>
            <input type=text id="name" name="name" value="" required>
          </p>
          <p><label for="email">Email: </label>
            <input type=email id="email" name="email" value="" required>
          </p>
          <p><label for="mobile">Mobile Num: </label>
            <input type=tel id="mobile" name="mobile" pattern="[0-9]{4}[ ]][0-9]{3}[ ][0-9]{3}"
              placeholder="04nn nnn nnn" value="" required></span>
          </p>
          <p><input id="submitBooking" type='submit' name='submit' value='Book' /></p>
        </div>
    </form>
  </article>
</main>
<?php include './footer.php' ?>
<?php include './debug.php' ?>

</body>

</html>