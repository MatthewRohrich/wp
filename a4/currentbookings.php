<?php
include './tools.php';
include './head.php';

$name = 'bob';
$email = 'bob@email.com';


$foundData = [];
// Assumptions
// data stored in bookings.txt
$bookFile = fopen('bookings.txt', 'r');
//echo fread($bookFile, filesize('bookings.txt'));
while (!feof($bookFile)) {

    $row = fgetcsv($bookFile);
    print_r($row[1]); //read and print one line
    echo '<br>';
    if (($row[1] == $name) and ($row[2] == $email)) {

        echo 'We found Bob! ' . $name . ' ' . $email;
        array_push($foundData, $row);
    }
    // print_r($foundData);
}
//



fclose($bookFile);


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