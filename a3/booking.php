<?php
include './tools.php';
include './head.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require_once("post-validation.php");
  $movieCode = $_POST['movie'];
  $errors = validateBooking();
  if (count($errors) == 0) {
    $_SESSION = $_POST;
  } else {
    validateMovieCode($movieCode); //this will redirect to index.php if movie has invalid code
    // reload the form data and show errors
    prefillForm();

  }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (isset($_GET['movie'])) {
    $movieCode = $_GET['movie'];
    validateMovieCode($movieCode); //this will redirect to index.php if movie is invalid
  }
}

function prefillForm()
{

  // foreach ($_SESSION as $key => $setting) {
  //   echo $key . '' . $setting;

  // }

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
            <input type=text id="name" name="name" value=""> <!-- required > -->
          </p>
          <p><label for="email">Email: </label>
            <input type=email id="email" name="email" value=""> <!--  required> -->
          </p>
          <p><label for="mobile">Mobile Num: </label>
            <input type=tel id="mobile" name="mobile" pattern="[0-9]{4}[ ]][0-9]{3}[ ][0-9]{3}"
              placeholder="04nn nnn nnn" value=""> <!-- required> -->
          </p>
          <p><input id="submitBooking" type='submit' name='submit' value='Book' /></p>
          <p><input id="submitNoValidate" type='submit' name='submit2' value='Book no-validate' novalidate /></p>
        </div>
    </form>
  </article>
</main>
<?php include './footer.php' ?>
<?php include './debug.php' ?>

</body>
<script type="text/javascript">
  // this script has to go after the page is rendered or it will not work.

  var movieSession = new Object;  // object store the selected movieSession and the pricelevel
  var priceLevel = null; // is this movie discounted?

  // add an eventlistener to the movie radio buttons to trigger when clicked
  const sessionButtons = document.querySelectorAll('input[name="session"]');
  sessionButtons.forEach(
    button => {
      button.addEventListener('change', function () {
        setMovieSession();
        // I should be able to pass the button to the function so it is already the correct button.
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

        //console.log("SessionDay: " + radioButtons[i].id);
        //console.log("SelectedTime: " + radioButtons[i].value);
        //console.log("priceLevel: " + radioButtons[i].getAttribute('data-pricing'));
        //var movieSession = new Object();

        movieSession.day = radioButtons[i].id;  // day of the sessionButtons
        movieSession.time = radioButtons[i].value; // time of the movie
        //set the price level
        priceLevel = radioButtons[i].getAttribute('data-pricing');
        break;
      }
    }
  }


  seatData = null; //object to store the booking data
  // setup the events for the dropdown boxes
  //loop through all the  dropdowns
  const seatsSelect = document.getElementById("seatsSTA");  // for some reason query selector doesn't return the right data?
  seatsSelect.addEventListener("change", function () {
    setSeatData(seatsSelect);
  });

  function setSeatData(seatsSelect) {

    const selectedOption = seatsSelect.selectedOptions[0];
    if (priceLevel == 'discprice')
    {
      //console.log("movie Session: " + movieSession);
      // add the discount price to the movieSession
      movieSession.staAmt = selectedOption.getAttribute("data-discprice");
    }
    else
    {
      //console.log("movie Session: " + movieSession);
      // add the full price to the movieSession
      movieSession.staAmt = selectedOption.getAttribute("data-fullprice");
    }
    //console.log(seatsSelect.value + ' ' + selectedOption.getAttribute("data-fullprice") + ' ' + selectedOption.getAttribute("data-discprice"));
    //console.log("movie Session: " + movieSession.day + ":" + movieSession.time + ":" + movieSession.staAmt);
  };

</script>

</html>