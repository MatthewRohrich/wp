<fieldset>
    <legend>Find Previous Bookings</legend>
    <form id=bookingsearch action="currentbookings.php" method='POST'>
        <input type='text' name="booking[name]" id="bookingname" value='' placeholder="Name" /><br>
        <input type='email' name="booking[email]" id="bookingemail" value='' placeholder="Email" /><br>
        <button id="submitSearch" name="submitSearch">Search for <br>Booking/s</button>
    </form>
</fieldset>