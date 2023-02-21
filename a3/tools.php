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
        'image' => '../../media/AntonioBanderas-242.png'
      ],
      [
        'name' => 'Salma Hayek',
        'image' => '../../media/SalmaHayek-242.png'
      ],
      [
        'name' => 'Florence Pugh',
        'image' => '../../media/FlorencePugh-242.png'
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
        'image' => '../../media/TrineDyrholm-242.png'
      ],
      [
        'name' => 'Søren Malling',
        'image' => '../../media/SørenMalling-242.png'
      ],
      [
        'name' => 'Morten Hee Andersen',
        'image' => '../../media/MortenHeeAndersen-242.png'
      ]
    ],
    'poster' => '../../media/margrete_queen_poster_400.png',
    'poster-alt' => 'Margrete: Queen of the North, movie poster',
    'trailer' => '../../media/avatar-preview.mp4'
  ]
];




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
              <a class="bookNow" href="booking.php?movie='{$key}'">Book Now</a>
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
  global $movies;
  echo <<<"DISPLAYTRAILER"
    <h1>The movie is {$movies[$movieCode]['movie-name']}</h1>
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

  
  <article id="movieCast">
    <h2>Starring</h2>
    <div class="castContainer">
      <div class="cast">
        <img src="../../media/ZoeSaldana-242.png" alt="Zoe Saldana in Avatar makeup">
        <p>Zoe Saldana</p>
      </div>
      <div class="cast">
        <img src="../../media/SamWorthington-242.png" alt="Sam Worthington in Avatar makeup">
        <p>Sam Worthington</p>
      </div>
      <div class="cast">
        <img src="../../media/JamesCameron-242.png" alt="James Cameron gesturing forwards">
        <p>Director - James Cameron</p>
      </div>
    </div>
  </article>



  DISPLAYMOVIE;
}


?>