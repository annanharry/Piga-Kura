<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCC</title>
    <link rel="stylesheet" href="css/admin_styles.css" type="text/css" />
</head>
<body bgcolor="lightgreen">
    <center><b><font color="black" size="6">Nani Community College</font></b></center><br><br>
    <div id="page">
        <div id="header">
            <h1>Log out success.</h1>
            <p align="center">&nbsp;</p>
        </div>
        <?php
            session_start();
            session_destroy();
        ?>
        You have been logged out. <br><br><br>
        Return to <a href="index.php">Login</a>
        <div id="footer">
            <div class="bottom_addr">&copy; 2020 School voting system. All Rights Reserved.</div>
        </div>
    </div>
</body>
</html>