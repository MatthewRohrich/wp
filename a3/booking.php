<?php
include './tools.php';
include './head.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require_once("post-validation.php");
  //$errors = validateBooking();   // validate booking does not work as is;
  $errors = [];
  if (count($errors) == 0) {
    $_SESSION = $_POST;
    $movieCode = $_POST['movie'];
  }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {

  if (isset($_GET['movie'])) {
    $movieCode = $_GET['movie'];
    validateMovieCode($movieCode); //this will redirect to index.php if movie is invalid
  }
}



// do we have valid movie code in get or post data
// set it or redirect
// if (isset($_GET['movie'])) {
//   $movieCode = $_GET['movie'];
//   validateMovieCode($movieCode);
// } else {
//   $postErrors = validateBooking();
//   $movieCode = $_POST['movie'];
//   validateMovieCode($movieCode);

//   // re-populate the fields
// }


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
      <h3>Pick a Session</h3>
      <div class="movieSessions">

        <?php


        // display the buttons for the available sessions
        displayMovieSessions($movieCode);
        ?>
        <h3>Please pick your seats?</h3>
        <input type=text name="movie" value="<?= $movieCode ?>" hidden>
        <?php
        // display the seat selection options 
        seatSelection();
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
<script type="text/javascript">
  // this script has to go after the page is rendered or it will not work.

  movieSession = null;  // object store the selected movieSession and the pricelevel

  // add an eventlistener to the movie radio buttons to trigger when clicked
  const sessionButtons = document.querySelectorAll('input[name="session"]');
  sessionButtons.forEach(
    button => {
      button.addEventListener('change', function () {
        setMovieSession();
        //console.log(button.value, button.getAttribute('data-pricing'));
      });
    });

  function setMovieSession() {
    const radioButtons = document.getElementsByName('session');
    let selectedRadioButton, selectedValue, priceLevel;

    // Loop through each radio button to find the selected one
    for (let i = 0; i < radioButtons.length; i++)
    {
      if (radioButtons[i].checked)
      {
        //console.log("SelectedValue: " + radioButtons[i].value);
        //console.log("priceLevel: " + radioButtons[i].getAttribute('data-pricing'));

        var movieSession = new Object();
        // Save the selected radio button and its value and pricing data
        movieSession.value = radioButtons[i].value;
        movieSession.priceLevel = radioButtons[i].getAttribute('data-pricing');
        break;
      }
    }
  }


  bookingData = null; //object to store the booking data
  // setup the events for the dropdown boxes
  //loop through all the  dropdowns
  const booking = document.getElementById("seatsSTA");  // for some reason query selector doesn't return the right data?
  booking.addEventListener("change", function () {
    setBookingData();
    const selectedOption = booking.selectedOptions[0];
    console.log(booking.value + ' ' + selectedOption.getAttribute("data-fullprice") + ' ' + selectedOption.getAttribute("data-discprice"));
  });

  function setBookingData() {
    console.log("setBookingData()");
  };

</script>

</html>