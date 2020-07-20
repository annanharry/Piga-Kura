<?php
    require('db/connection.php');
    session_start();
    if(empty($_SESSION['member_id'])){
        header("location:access-denied.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCC Student:Home</title>
    <link href="css/user_styles.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="lightblue">
    <center><b><font color="black" size="6">Nani Community College</font></b></center><br><br>
    <div id="page">
        <div id="header">
            <h1>STUDENT HOME </h1>
            <a href="student.php">Home</a> | <a href="vote.php">Current Polls</a> | <a href="manage-profile.php">Manage My Profile</a> | <a href="logout.php">Logout</a>
        </div>
        <div id="container">
            <p>Click above to perform any required action.</p>
        </div>
        <div id="footer">
            <div class="bottom_addr">&copy; 2020 School voting system. All Rights Reserved.</div>
        </div>
    </div>
</body>
</html>