<?php
session_start();
$moviesObject = [
  'ACT' => [
    'title' => 'Avatar: The Way of Water',
    'rating' => 'M',
    'genre' => 'Action, Adventure, Sci-Fi',
    'plot' => 'Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Navi race to protect their home.',
    'imdb' => 'tt1630029',
    'screening-summary' => 'Mon-Tue: 9pm, Wed-Fri: 9pm, Sat-Sun: 6pm',
    'screenings' => [
      'MON' => [
        'time' => '9pm',
        'rate' => 'discount'
      ],
      'TUE' => [
        'time' => '9pm',
        'rate' => 'regular'
      ],
      'WED' => [
        'time' => '9pm',
        'rate' => 'regular'
      ],
      'THU' => [
        'time' => '9pm',
        'rate' => 'regular'
      ],
      'FRI' => [
        'time' => '9pm',
        'rate' => 'regular'
      ],
      'SAT' => [
        'time' => '6pm',
        'rate' => 'regular'
      ],
      'SUN' => [
        'time' => '6pm',
        'rate' => 'regular'
      ]
    ]
  ],
  'RMC' => [
    'title' => 'Weird: The Al Yankovic Story',
    'rating' => 'M',
    'genre' => 'Romance, Drama, Comedy',
    'plot' => 'Explores every facet of Yankovics life, from his meteoric rise to fame with early hits like Eat It and Like a Surgeon to his torrid celebrity love affairs and famously depraved lifestyle.',
    'imdb' => 'tt17076046',
    'screening-summary' => 'Mon-Tue: Not Showing, Wed-Fri: 12pm, Sat-Sun: 3pm',
    'screenings' => [
      'WED' => [
        'time' => '12pm',
        'rate' => 'discount'
      ],
      'THU' => [
        'time' => '12pm',
        'rate' => 'discount'
      ],
      'FRI' => [
        'time' => '12pm',
        'rate' => 'discount'
      ],
      'SAT' => [
        'time' => '3pm',
        'rate' => 'regular'
      ],
      'SUN' => [
        'time' => '3pm',
        'rate' => 'regular'
      ]
    ]
  ],
  'FAM' => [
    'title' => 'Puss in Boots: The Last Wish',
    'rating' => 'PG-13',
    'genre' => 'Animation, Action, Adventure',
    'plot' => 'When Puss in Boots discovers that his passion for adventure has taken its toll and he has burned through eight of his nine lives, he launches an epic journey to restore them by finding the mythical Last Wish.',
    'imdb' => 'tt3915174',
    'screening-summary' => 'Mon-Tue: 12pm, Wed-Fri: 6pm, Sat-Sun: 12pm',
    'screenings' => [
      'MON' => [
        'time' => '12pm',
        'rate' => 'discount'
      ],
      'TUE' => [
        'time' => '12pm',
        'rate' => 'discount'
      ],
      'WED' => [
        'time' => '6pm',
        'rate' => 'regular'
      ],
      'THU' => [
        'time' => '6pm',
        'rate' => 'regular'
      ],
      'FRI' => [
        'time' => '6pm',
        'rate' => 'regular'
      ],
      'SAT' => [
        'time' => '12pm',
        'rate' => 'regular'
      ],
      'SUN' => [
        'time' => '12pm',
        'rate' => 'regular'
      ]
    ]
  ],
  'AHF' => [
    'title' => 'Margrete: Queen of the North',
    'rating' => 'MA15+',
    'genre' => 'Action, Drama, History',
    'plot' => '1402. Queen Margrete is ruling Sweden, Norway and Denmark through her adopted son, Erik. But a conspiracy is in the making and Margrete finds herself in an impossible dilemma that could shatter her lifes work: the Kalmar Union.',
    'imdb' => 'tt9308390',
    'screening-summary' => 'Mon-Tue: 6pm, Wed-Fri: Not Showing, Sat-Sun: 10pm',
    'screenings' => [
      'MON' => [
        'time' => '6pm',
        'rate' => 'discount'
      ],
      'TUE' => [
        'time' => '6pm',
        'rate' => 'regular'
      ],
      'SAT' => [
        'time' => '10pm',
        'rate' => 'regular'
      ],
      'SUN' => [
        'time' => '10pm',
        'rate' => 'regular'
      ]
    ]
  ]
];

$seatsObject = [
  'STA' => [
    'desc' => 'Standard Adult',
    'regular' => 21.50,
    'discount' => 16.00
  ],
  'STP' => [
    'desc' => 'Standard Concession',
    'regular' => 19.00,
    'discount' => 14.50
  ],
  'STC' => [
    'desc' => 'Standard Child',
    'regular' => 17.50,
    'discount' => 13.00
  ],
  'FCA' => [
    'desc' => 'First Class Adult',
    'regular' => 31.00,
    'discount' => 25.00
  ],
  'FCP' => [
    'desc' => 'First Class Concession',
    'regular' => 28.00,
    'discount' => 23.50
  ],
  'FCC' => [
    'desc' => 'First Class Child',
    'regular' => 25.00,
    'discount' => 22.00
  ]
];

function Daymyname($DAY)
{
  switch ($DAY) {
    case 'MON':
      return 'Monday';
      break;
    case 'TUE':
      return 'Tuesday';
      break;
    case 'WED':
      return 'Wednesday';
      break;
    case 'THU':
      return 'Thursday';
      break;
    case 'FRI':
      return 'Friday';
      break;
    case 'SAT':
      return 'Saturday';
      break;
    case 'SUN':
      return 'Sunday';
      break;
    default:
      return "Funday";
  }
}

$movie = 'ACT'; // default movie setting for A4 simplicity
if (isset($_GET['movie']) && isset($moviesObject[$_GET['movie']])) {
  $movie = $_GET['movie'];
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lunardo Booking Page</title>

  <style>
    body {
      font-family: Arial;
    }

    fieldset {
      padding: 10px;
      margin-bottom: 20px;
    }

    button,
    input,
    select {
      padding: 10px;
      margin: 5px;
    }

    label {
      display: inline-flex;
      align-items: center;
      border: 1px #999 solid;
      border-radius: 10px;
      padding: 5px 10px 5px 5px;
      margin: 10px;

    }


    }
  </style>

  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">

  <script src='./script.js'></script>
  <script>
    var moviesObjectJS = <?= json_encode($moviesObject, JSON_PRETTY_PRINT) ?>;
    var seatsObjectJS = <?= json_encode($seatsObject, JSON_PRETTY_PRINT) ?>;
  </script>
</head>

<body>

  <header>
    <h1>🌝 Lunardo Booking Page</h1>
  </header>

  <hr>

  <nav><a href="booking.php?movie=<?= $movie ?>">Booking Page</a></nav>

  <hr>

  <main>

    <h2>Movie Selection</h2>

    <p>Movie Title:
      <?= $moviesObject[$movie]['title'] ?>
    </p>
    <p>Rating:
      <?= $moviesObject[$movie]['rating'] ?>
    </p>
    <p>Genre:
      <?= $moviesObject[$movie]['genre'] ?>
    </p>
    <p>Plot:
      <?= $moviesObject[$movie]['plot'] ?>
    </p>
    <p>IMDB Link: <a href='https://www.imdb.com/title/<?= $moviesObject[$movie]['imdb'] ?>/' target="_blank">More about
        <?= $moviesObject[$movie]['title'] ?> over at IMDB</a></p>
    <p>Screening Times:
      <?= $moviesObject[$movie]['screening-summary'] ?>
    </p>

    <hr>

    <h2>Booking Form</h2>

    <form action="booking.php?movie=<?= $movie ?>" method='POST'>

      <input type="hidden" id="movie" name="movie" value="<?= $movie ?>" />

      <fieldset id="screening-set">
        <legend>Screenings</legend>
        <?php
        foreach ($moviesObject[$movie]['screenings'] as $day => $details) {
          echo "<label><input type='radio' id='$day' name='day' value='$day' />" .
            Daymyname($day) .
            " {$details['time']} ({$details['rate']})</label>";
        }
        ?>
      </fieldset>

      <fieldset id="seating-set">
        <legend>Seating</legend>
        <?php
        foreach ($seatsObject as $seat => $details) {
          echo "<label>$seat</label> <select name='seats[$seat]'>\n";
          echo "  <option value=\"\">Please Select</option>\n";
          for ($s = 1; $s <= 10; $s++) {
            echo "  <option value=\"$s\">$s</option>\n";
          }
          echo "</select><br>";
        }
        ?>
      </fieldset>

      <fieldset>
        <legend>Personal Details</legend>
        <input type='text' name="user[name]" id="name" value='' placeholder="Name" /><br>
        <input type='email' name="user[email]" id="email" value='' placeholder="Email" /><br>
        <input type='tel' name="user[mobile]" id="mobile" value='' placeholder="Mobile" />
      </fieldset>
      <style>
        /* 
        input[type=checkbox]+label {
          color: #ccc;
          font-style: italic;
        }

        input[type=checkbox]: checked+label {
          color: #f00;
          font-style: normal;
        } */
      </style>
      <fieldset>
        <div class='remember'>

          <input type='checkbox' id='remember' name='remember' class='hidden'>
          <label id='remember-label' for='remember'>
            Remember Me

          </label>
        </div>
      </fieldset>
      <!-- <button id='showme'>Show me the stores</button> <span id='remember-errors'></span> -->

      <fieldset>
        <legend>Submit Options</legend>
        <button id="submitCS" name='submitCS'>Order &amp; check<br>Client-Side Validation</button>
        <button id="submitSS" name='submitSS' formnovalidate>Order &amp; check<br>Server-Side Validation</button>
      </fieldset>
    </form>

  </main>

  <hr>

  <footer>
    Assignment 4 Fallback Template Debug Area
    <pre>
      $movie
      <?= $movie ?>

      seatsObject contains:
      <?php print_r($seatsObject); ?>
      moviesObject contains:
      <?php print_r($moviesObject); ?>
      GET contains:
      <?php print_r($_GET); ?>
      POST contains:
      <?php print_r($_POST); ?>
      SESSION contains:
      <?php print_r($_SESSION); ?>
    </pre>
  </footer>
</body>

</html>