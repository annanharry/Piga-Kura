<?php
    session_start();
    require('../db/connection.php');
    //Add session check.
    //do below if session is invalid
    if(empty($_SESSION['admin_id'])){
        header("location:access-denied.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCC</title>
    <link rel="stylesheet" href="css/admin_styles.css" type="text/css"/>
</head>
<body bgcolor="lightgreen">
    <center><b><font color="black" size="6">Nani Community College</font></b></center><br><br>
    <div id="page">
        <div id="header">
            <h1>ADMINISTRATION CONTROL PANEL </h1>
            <a href="admin.php">Home</a> | <a href="manage-admins.php">Manage Administrators</a> |<a href="manage-students.php">Manage Students</a>| <a href="positions.php">Manage Positions</a> | <a href="candidates.php">Manage Candidates</a> | <a href="refresh.php">Poll Results</a> | <a href="logout.php">Logout</a>
        </div>
        <p align="center">&nbsp;</p>
        <div id="container">
            <p>Click any to perform the required action.</p>
        </div>
        <div id="footer">
            <div class="bottom_addr">&copy; 2020 School voting system. All Rights Reserved.</div>
        </div>
    </div>
</body>
</html>