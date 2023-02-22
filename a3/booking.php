<?php
include './tools.php';
include './head.php';
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
  $movieCode = $_GET['movie'];
  showOneMovie($movieCode);
  ?>


  <article id="booking">
    <h2>Book Your Movie</h2>
    <h3>How many seats?</h3>
    <form action="booking.php" method="post">
      <input type=text name="movie" value="<?= $movieCode ?>" hidden>
      <?php
      foreach ($seats as $key => $seat) {
        echo '<div class="seats">';
        echo "{$seats[$key]['Type']}";
        // echo "my keys: {$key}";
        echo "<select name='seats[{$key}]'>";
        echo "<option value=''>Please Select</option>";
        echo "<option value=\"01\" data-fullprice=\"{$seats[$key]['Normal']}\" data-discprice=\"{$seats[$key]['Discount']}\">1</option>";

        echo "</select>";
        echo "</div>";
      }
      ?>
      <br>
      <br>
      <br>
      <br>
      <div class="seats">
        Standard Adult
        <select name='seats[STA]'>
          <option value=''>Please Select</option>
          <option value='01' data-fullprice="21.5" data-discprice="16">1</option>
          <option value='02' data-fullprice="43" data-discprice="32">2</option>
          <option value='03' data-fullprice="64.5" data-discprice="48">3</option>
          <option value='04' data-fullprice="86" data-discprice="64">4</option>
          <option value='05' data-fullprice="107.5" data-discprice="80">5</option>
          <option value='06' data-fullprice="129" data-discprice="96">6</option>
          <option value='07' data-fullprice="107.5" data-discprice="112">7</option>
          <option value='08' data-fullprice="172" data-discprice="128">8</option>
          <option value='09' data-fullprice="193.5" data-discprice="144">9</option>
          <option value='10' data-fullprice="215" data-discprice="160">10</option>
        </select>
      </div>
      <div class="seats">
        Standard Concession
        <select name='seats[STP]'>
          <option value=''>Please Select</option>
          <option value='01' data-fullprice="19" data-discprice="14.5">1</option>
          <option value='02' data-fullprice="38" data-discprice="29">2</option>
          <option value='03' data-fullprice="57" data-discprice="43.5">3</option>
          <option value='04' data-fullprice="76" data-discprice="58">4</option>
          <option value='05' data-fullprice="95" data-discprice="72.5">5</option>
          <option value='06' data-fullprice="114" data-discprice="87">6</option>
          <option value='07' data-fullprice="133" data-discprice="101.5">7</option>
          <option value='08' data-fullprice="152" data-discprice="116">8</option>
          <option value='09' data-fullprice="171" data-discprice="130.5">9</option>
          <option value='10' data-fullprice="190" data-discprice="145">10</option>
          </optgroup>
        </select>
      </div>
      <div class="seats">
        Standard Child
        <select name='seats[STC]'>
          <option value=''>Please Select</option>
          <option value='01' data-fullprice="17.50" data-discprice="13">1</option>
          <option value='02' data-fullprice="35" data-discprice="23">2</option>
          <option value='03' data-fullprice="52.5" data-discprice="39">3</option>
          <option value='04' data-fullprice="70" data-discprice="52">4</option>
          <option value='05' data-fullprice="87.5" data-discprice="65">5</option>
          <option value='06' data-fullprice="105" data-discprice="78">6</option>
          <option value='07' data-fullprice="122.5" data-discprice="91">7</option>
          <option value='08' data-fullprice="140" data-discprice="104">8</option>
          <option value='09' data-fullprice="157.5" data-discprice="117">9</option>
          <option value='10' data-fullprice="175" data-discprice="130">10</option>
          </optgroup>
        </select>
      </div>
      <div class="seats">
        First Class Adult
        <select name='seats[FCA]'>
          <option value=''>Please Select</option>
          <option value='01' data-fullprice="31" data-discprice="25">1</option>
          <option value='02' data-fullprice="62" data-discprice="50">2</option>
          <option value='03' data-fullprice="93" data-discprice="75">3</option>
          <option value='04' data-fullprice="124" data-discprice="100">4</option>
          <option value='05' data-fullprice="155" data-discprice="125">5</option>
          <option value='06' data-fullprice="186" data-discprice="150">6</option>
          <option value='07' data-fullprice="217" data-discprice="175">7</option>
          <option value='08' data-fullprice="248" data-discprice="200">8</option>
          <option value='09' data-fullprice="279" data-discprice="225">9</option>
          <option value='10' data-fullprice="310" data-discprice="250">10</option>
          </optgroup>
        </select>
      </div>
      <div class="seats">
        First Class Concession
        <select name='seats[FCP]'>
          <option value=''>Please Select</option>
          <option value='01' data-fullprice="28" data-discprice="23.5">1</option>
          <option value='02' data-fullprice="56" data-discprice="47">2</option>
          <option value='03' data-fullprice="84" data-discprice="70.5">3</option>
          <option value='04' data-fullprice="112" data-discprice="94">4</option>
          <option value='05' data-fullprice="140" data-discprice="117.5">5</option>
          <option value='06' data-fullprice="168" data-discprice="141">6</option>
          <option value='07' data-fullprice="196" data-discprice="164.5">7</option>
          <option value='08' data-fullprice="224" data-discprice="188">8</option>
          <option value='09' data-fullprice="252" data-discprice="211.5">9</option>
          <option value='10' data-fullprice="280" data-discprice="235">10</option>
          </optgroup>
        </select>
      </div>
      <div class="seats">
        First Class Child
        <select name='seats[FCC]'>
          <option value=''>Please Select</option>
          <option value='01' data-fullprice="25" data-discprice="22">1</option>
          <option value='02' data-fullprice="50" data-discprice="44">2</option>
          <option value='03' data-fullprice="75" data-discprice="66">3</option>
          <option value='04' data-fullprice="100" data-discprice="88">4</option>
          <option value='05' data-fullprice="125" data-discprice="110">5</option>
          <option value='06' data-fullprice="150" data-discprice="132">6</option>
          <option value='07' data-fullprice="175" data-discprice="154">7</option>
          <option value='08' data-fullprice="200" data-discprice="176">8</option>
          <option value='09' data-fullprice="225" data-discprice="198">9</option>
          <option value='10' data-fullprice="250" data-discprice="220">10</option>
          </optgroup>
        </select>
      </div>
      <h3>Pick a Session</h3>
      <div class="movieSessions">

        <div class="button">
          <input type=radio id='Mon' value="mon" name='session' data-pricing="discprice" /> <label for='Mon'>Mon
            9pm</label>
        </div>
        <div class="button">
          <input type=radio id='Tue' value="tue" name='session' data-pricing="fullprice" /> <label for='Tue'>Tue
            9pm</label>
        </div>
        <div class="button">
          <input type=radio id='Wed' value="wed" name='session' data-pricing="discprice" /> <label for='Wed'>Wed
            9pm</label>
        </div>
        <div class="button">
          <input type=radio id='Fri' value="fri" name='session' data-pricing="fullprice" /> <label for='Fri'>Fri
            9pm</label>
        </div>
        <div class="button">
          <input type=radio id='Sat' value="sat" name='session' data-pricing="fullprice" /> <label for='Sat'>Sat
            6pm</label>
        </div>
        <div class="button">
          <input type=radio id='Sun' value="sun" name='session' data-pricing="fullprice" /> <label for='Sun'>Sun
            6pm</label>
        </div>
      </div>

      <h3>Booking Details</h3>
      <div id="bookingDetails">

        <p><label for="name">Name: </label>
          <input type=text id="name" name="name" value="" required>
        </p>
        <p><label for="email">Email: </label>
          <input type=email id="email" name="email" value="" required>
        </p>
        <p><label for="mobile">Mobile Num: </label>
          <input type=tel id="mobile" name="mobile" pattern="[0-9]{4}[ ]][0-9]{3}[ ][0-9]{3}" placeholder="04nn nnn nnn"
            value="" required></span>
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