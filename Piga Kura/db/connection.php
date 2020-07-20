<?php
    $conn=mysqli_connect("localhost","root","","election");

    if(!$conn) {
        die("Connection failed: ". mysqli_connect_error());
    }

    //$mysqli = new mysqli("localhost", "root", "", "election");

    //check connection
    //if (mysqli_connect_errno()) {
    //    printf("Connection was unsuccessfull: %s\n", mysqli_connect_error());
    //    exit();
    //}
?>