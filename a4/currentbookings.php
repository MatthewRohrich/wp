<?php
include './tools.php';
include './head.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $emailSearch = $_POST['booking']['email'];
    $mobileSearch = $_POST['booking']['mobile]'];

    // testing without a form POST
    //$emailSearch = 'bob@email.com';
    //$mobileSearch = '0422 555 555';




    $foundData = [];
    // Assumptions
    // data stored in bookings.txt
    $bookFile = fopen('bookings.txt', 'r');
    //echo fread($bookFile, filesize('bookings.txt'));
    while (!feof($bookFile)) {

        $row = fgetcsv($bookFile);
        print_r($row[2]); //read and print one line
        echo ': search term: ' . $emailSearch;
        echo '<br>';
        $emailResult = $row[2];
        $mobileResult = $row[3];



        //if (($emailResult == $emailSearch) and ($mobileResult == $mobileSearch)) {
        if (($emailResult == $emailSearch)) {
            // can't get any result at all
            echo 'We found Bob! ' . $emailResult;
            array_push($foundData, $row); //supposed to add found result 
        }
        // print_r($foundData);
    }
    //



    fclose($bookFile);




} else {
    echo '<h2>Sorry no bookings found</h2>';
}




?>



<!-- open the bookings.txt file put in an Array assume max 50 bookings -->
<!--  -->
<!-- find any entries matching name and email  -->
<!-- display if found -->
<!-- else show message "no bookings found" -->
<!-- show a button that will send the information to the reciept page so the customer can print it. -->


<?php include './footer.php' ?>
<?php include './debug.php' ?>
</body>

</html>