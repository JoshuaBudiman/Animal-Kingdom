<?php
function conn(){
    $dbhost="localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "animalkingdom";

    $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $db)
    or die ("Error connecting to Database");

    return $connect;
}

function closed($n){
    mysqli_close($n);
}
?>