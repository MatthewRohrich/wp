<fieldset>
    <legend>Find Previous Bookings</legend>
    <form id=bookingsearch action="currentbookings.php" method='POST'>
        <input type='email' name="booking[email]" id="bookingemail" value='' placeholder="Email" /><br>
        <input type='text' name="booking[mobile]" id="bookingname" value='' placeholder="Mobile" /><br>
        <button id="submitSearch" name="submitSearch">Search for <br>Booking/s</button>
    </form>
</fieldset>