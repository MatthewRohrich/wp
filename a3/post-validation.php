<?php
//session_start();






/* Call this function in the booking page like so:
$postErrors = validateBooking();
If the array is empty, then no errors were generated
*/
function validateBooking()
{
  global $movies;
  $errors = []; // new empty array to return multiple error messages
  $username = trim($_POST['name']);
  if ($username == '') {
    $errors['name'] = "Name is required it can't be blank";
  } else {
    // more advanced name checks here with better error message
  }
  $email = trim($_POST['email']);
  if ($email == '') {
    $errors['email'] = "Email is required it can't be blank";
  } else {
    // more advanced email checks here with better error message
  }
  $mobile = trim($_POST['mobile']);
  if ($mobile = '') {
    $errors['mobile'] = "Mobile phone is required it can't be blank";
  }
  // ... repeat for all other form field checks
  $movie = trim($_POST['movie']);
  if ($movie == '') {
    $errors['movie'] = "Movie is required it can't be blank";
  } else if (!array_key_exists($movie, $movies)) {
    $errors['movie'] = "Movie does not exist";
  }
  return $errors; // empty array -> no errors; populated array -> errors.
}
function suppliedValidateBooking()
{
  $errors = []; // new empty array to return multiple error messages
  $username = trim($_POST['user']['name']);
  if ($username == '') {
    $errors['user']['name'] = "Name can't be blank";
  } else {
    // more advanced name checks here with better error message
  }
  $email = trim($_POST['user']['email']);
  if ($email == '') {
    $errors['user']['email'] = "Email can't be blank";
  } else {
    // more advanced email checks here with better error message
  }
  // ... repeat for all other form field checks

  return $errors; // empty array -> no errors; populated array -> errors.
}



?>