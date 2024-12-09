<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // Set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";
    print_r($_SESSION);

    // to change a session variable, just overwrite it
    $_SESSION["favcolor"] = "yellow";
    ?>

</body>

</html