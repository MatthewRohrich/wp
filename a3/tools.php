<?php
session_start();

/* Put your PHP functions and modules here.
Many will be provided in the teaching materials,
keep a look out for them!
*/

// movies associative array
$movies = [
  'ACT' => [
    'movie-name' => 'Avatar: The Way of Water',
    'rating' => '( M )',
    'synopsis' => 'Jake Sully lives with his newfound family formed on the extrasolar moon Pandora.
      Once a familiar threat returns to finish what was previously started,
      Jake must work with Neytiri and the army of the Na\'vi race to protect their home.',
    'sessions' => [
      'Mon' => '9pm',
      'Tue' => '9pm',
      'Wed' => '9pm',
      'Fri' => '9pm',
      'Sat' => '6pm',
      'Sun' => '6pm'
    ],

    'cast' => [
      [
        'name' => 'Zoe Saldana',
        'image' => '../../media/ZoeSaldana-242.png',
        'alt' => 'Zoe Saldana in Na\'vi makeup'
      ],
      [
        'name' => 'Sam Worthington',
        'image' => '../../media/SamWorthington-242.png',
        'alt' => 'Sam Worthington in Na\'vi makeup'
      ],
      [
        'name' => 'Director - James-Cameron',
        'image' => '../../media/JamesCameron-242.png',
        'alt' => 'James Cameron gesturing forwards'
      ]
    ],
    'poster' => '../../media/avatar_way_poster_400.png',
    'poster-alt' => 'Avatar: The Way of Water, movie poster',
    'trailer' => '../../media/avatar-preview.mp4'
  ],
  'RMC' => [
    'movie-name' => 'Weird: The Al Yankovic Story',
    'rating' => '( M )',
    'synopsis' => 'Explores every facet of Yankovic\'s life, from his meteoric rise to fame with early hits like \'Eat It\'
      and \'Like a Surgeon\' to his torrid celebrity love affairs and famously depraved lifestyle.',
    'sessions' => [
      'Wed' => '12pm',
      'Fri' => '12pm',
      'Sat' => '3pm',
      'Sun' => '3pm'
    ],

    'cast' => [
      [
        'name' => 'Diedrich Bader',
        'image' => '../../media/DiedrichBader-242.png',
        'alt' => 'Diedrich Bader portrait'
      ],
      [
        'name' => 'Daniel Radcliffe',
        'image' => '../../media/DanielRadcliffe-242.png',
        'alt' => 'Daniel Radcliffe leaning on a wall'
      ],
      [
        'name' => 'Lin-Manuel Miranda',
        'image' => '../../media/Lin-ManuelMiranda-242.png',
        'alt' => 'Lin-Manuel Miranda in a black suit'
      ]
    ],
    'poster' => '../../media/weird_al_poster_400.png',
    'poster-alt' => 'Weird: The Al Yankovic Story, movie poster',
    'trailer' => '../../media/avatar-preview.mp4'
  ],
  'FAM' => [
    'movie-name' => 'Puss in Boots: The Last Wish',
    'rating' => '( PG )',
    'synopsis' => 'Puss in Boots discovers that his passion for adventure has taken its toll: he has burned through eight
      of his nine lives. Puss sets out on an epic journey to find the mythical Last Wish and restore his nine
      lives.',
    'sessions' => [
      'Mon' => '12pm',
      'Tue' => '12pm',
      'Wed' => '6pm',
      'Fri' => '6pm',
      'Sat' => '12pm',
      'Sun' => '12pm'
    ],
    'cast' => [
      [
        'name' => 'Antonio Banderas',
        'image' => '../../media/AntonioBanderas-242.png',
        'alt' => 'Antonio Banderas Portrait'
      ],
      [
        'name' => 'Salma Hayek',
        'image' => '../../media/SalmaHayek-242.png',
        'alt' => 'Salma Hayek Portrait'
      ],
      [
        'name' => 'Florence Pugh',
        'image' => '../../media/FlorencePugh-242.png',
        'alt' => 'Florence Pugh Portrait'
      ]
    ],
    'poster' => '../../media/puss_in_boots_poster_400.png',
    'poster-alt' => 'Puss in Boots: The Last Wish, movie poster',
    'trailer' => '../../media/avatar-preview.mp4'
  ],
  'AHF' => [
    'movie-name' => 'Margrete: Queen of the North',
    'rating' => '( M )',
    'synopsis' => '1402. Queen Margrete is ruling Sweden, Norway and Denmark through her adopted son, Erik. But a
      conspiracy is in the making and Margrete finds herself in an impossible dilemma that could shatter her
      life\'s work: the Kalmar Union.',
    'sessions' => [
      'Mon' => '6pm',
      'Tue' => '6pm',
      'Sat' => '9pm',
      'Sun' => '9pm'
    ],
    'cast' => [
      [
        'name' => 'Trine Dyrholm',
        'image' => '../../media/TrineDyrholm-242.png',
        'alt' => 'Trine Dyrholm portrait'
      ],
      [
        'name' => 'Søren Malling',
        'image' => '../../media/SørenMalling-242.png',
        'alt' => 'Søren Malling portrait'
      ],
      [
        'name' => 'Morten Hee Andersen',
        'image' => '../../media/MortenHeeAndersen-242.png',
        'alt' => 'Morten Hee Andersen portrait'
      ]
    ],
    'poster' => '../../media/margrete_queen_poster_400.png',
    'poster-alt' => 'Margrete: Queen of the North, movie poster',
    'trailer' => '../../media/avatar-preview.mp4'
  ]
];


//define the seats
$seats = [
  'STA' => [
    'Type' => 'Standard Adult',
    'Discount' => '16.00',
    'Normal' => '21.50'
  ],
  'STP' => [
    'Type' => 'Standard Concession',
    'Discount' => '14.50',
    'Normal' => '19.00'
  ],
  'STC' => [
    'Type' => 'Standard Child',
    'Discount' => '13.00',
    'Normal' => '17.50'
  ],
  'FCA' => [
    'Type' => 'First Class Adult',
    'Discount' => '25.00',
    'Normal' => '31.00'
  ],
  'FCP' => [
    'Type' => 'First Class Concession',
    'Discount' => '23.50',
    'Normal' => '28.00'
  ],
  'FCC' => [
    'Type' => 'First Class Child',
    'Discount' => '22.00',
    'Normal' => '25.00'
  ]
];

function validateMovieCode($movieCode)
{
  // does the movie code exist if not someone has made a mistake
  // or is faking the movie code
  global $movies;
  if (!array_key_exists($movieCode, $movies)) {
    header('Location: index.php');
  }
}

//display seat selection options for the bookings
function seatSelection()
{
  global $seats;
  foreach ($seats as $key => $seat) {
    echo '<div class="seats">';
    echo "{$seats[$key]['Type']}";
    echo "<select name='seats[{$key}]'>";
    echo "<option value=''>Please Select</option>";
    for ($i = 1; $i <= 10; $i++) {
      $fullPrice = $seats[$key]['Normal'] * $i;
      $discountPrice = $seats[$key]['Discount'] * $i;
      echo "<option value=\"{$i}\" data-fullprice=\"{$fullPrice}\" data-discprice=\"{$discountPrice}\">{$i}</option>";
    }
    echo "</select>";
    echo "</div>";
  }
}



//display the buttons showing the sessions that this movie
// has
function displayMovieSessions($code)
{
  global $movies;

  foreach ($movies[$code]['sessions'] as $sessKey => $sessTime) {
    $dataPricing = 'fullprice';
    if (($sessKey == 'Mon') or ($sessTime == "12pm")) {
      $dataPricing = 'discountprice';
    }
    echo <<<"DISPLAYSESSIONS"
      <div class="button">
        <input type=radio id='{$sessKey}' value="{$sessKey}" name='session' data-pricing="{$dataPricing}" /> 
        <label for='{$sessKey}'>{$sessKey} - {$sessTime}</label>
      </div>
    DISPLAYSESSIONS;

  }
}




function showSeatPricing()
{
  global $seats;
  echo <<<"OPENSEATS"
  <div class="seats">
    <table>
      <thead>
        <tr>
          <th>Seat Type</th>
          <th>Discount Prices</th>
          <th>Normal Price</th>
        </tr>
      </thead>
  OPENSEATS;

  foreach ($seats as $seat) {
    echo <<<"SEATS"
        <tr>
          <td>{$seat['Type']}</td>
          <td>{$seat['Discount']}</td>
          <td>{$seat['Normal']}</td>
        </tr>

    SEATS;
  }
  echo <<<"CLOSESEATS"
      </table>
    </div>
  CLOSESEATS;
}


function showAllMovies()
{

  global $movies; //why php why?

  foreach ($movies as $key => $movie) {
    echo <<<"OPENMOVIE"
        <div class="movie">
          <div class="movieCards">
            <div class="movieFront">
              <img src="{$movie['poster']}" alt="{$movie['poster-alt']}">
            </div>
            <div class="movieBack">
              <p>
                {$movie['synopsis']}
              </p>
              <ul>
    OPENMOVIE;

    foreach ($movie['sessions'] as $day => $time) {
      echo <<<"SESSIONS"
             <li>
                    {$day} - {$time}
             </li>
      SESSIONS;
    }

    echo <<<"CLOSEMOVIE"
              </ul>
              <a class="bookNow" href="booking.php?movie={$key}">Book Now</a>
            </div>
          </div>
          <div class="movieTitle">
            <p>{$movie['movie-name']}</p>
            <p>{$movie['rating']}</p>
          </div>
        </div>
    CLOSEMOVIE;
  }
}

function showOneMovie($movieCode)
{
  //print_r("my movie code " . $movieCode);
  //die();
  global $movies;
  echo <<<"DISPLAYTRAILER"
    <h1>{$movies[$movieCode]['movie-name']}</h1>
    <article id='preview'>
    <h2>Movie preview</h2>
    <div>
      <video controls width=600>
        <source src="{$movies[$movieCode]['trailer']}" type="video/mp4">
    </div>
  </article>
  DISPLAYTRAILER;

  echo <<<"DISPLAYSYNOPSIS"
  <article id='synopsis'>
    <h2>Synopsis</h2>
    <p>
      {$movies[$movieCode]['synopsis']}
    </p>
  </article>
  DISPLAYSYNOPSIS;

  echo <<<"SYNOPSISHEAD"
    <article id="movieCast">
    <h2>Starring</h2>
    <div class="castContainer">
    SYNOPSISHEAD;

  foreach ($movies[$movieCode]['cast'] as $star) {
    echo "<div class=\"cast\">";
    echo "<img src=\"{$star['image']}\" alt=\"{$star['alt']}\">";
    echo "<p>{$star['name']}</p>";
    echo "</div>";
  }

  echo <<<"SYNOPSISFOOT"
    </div>
    </article>
    SYNOPSISFOOT;

}

?>