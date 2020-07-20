<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCC</title>
    <link href="css/user_styles.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="lightblue">
    <center><b><font color="black" size="6">Nani Community College</font></b></center><br><br>
    <div id="page">
        <div id="header">
            <h1>Logged Out Successfully </h1>
            <p align="center">&nbsp;</p>
        </div>
        <?php
            session_destroy();
        ?>
        You logged out successfully. <br><br><br>
        Return to <a href="index.php">Login</a>
        <div id="footer">
            <div class="bottom_addr">&copy; 2020 School voting system. All Rights Reserved.</div>
        </div>
    </div>
</body>
</html>