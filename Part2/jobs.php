<?php
    require_once 'settings.php';
    $db_conn = mysqli_connect($host, $user, $pwd, $database);
    if ($db_conn) {
        $query = "SELECT * FROM jobs";
        $result = mysqli_query($db_conn, $query);
        mysqli_close($db_conn);
    } else {
        echo "<p> Connection failed. </p> " ;
    }
?>