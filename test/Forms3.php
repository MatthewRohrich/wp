<html>
<!-- https://www.w3schools.com/php/php_superglobals_post.asp -->

<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_POST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }

    $_SESSION = $_POST;

    ?>
    <aside id="debug">
        <hr>
        <h3>Debug Area</h3>
        <pre>
            GET Contains:
            <?php print_r($_GET) ?>
            POST Contains:
            <?php print_r($_POST) ?>
            SESSION Contains:
            <?php print_r($_SESSION) ?>
        </pre>
    </aside>
</body>

</html>