<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCC</title>
    <link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="lightgreen">
    <center><b><font color="black" size="6">Nani Community College</font></b></center><br><br>
    <div id="page">
        <div id="header">
            <h1>Invalid Credentials Provided </h1>
            <p align="center">&nbsp;</p>
        </div>
        <div id="container">
            <?php
                require("../db/connection.php");
                session_start();

                //details to variables
                $username = $_POST['username'];
                $password = $_POST['password'];
                $newpass = md5($password);
                //injection protection
                $username = stripslashes($username);
                $password = stripslashes($password);
                $username = mysqli_real_escape_string($conn, $username);
                $password = mysqli_real_escape_string($conn, $password);

                //sql query
                $sql="SELECT * FROM scadministrators WHERE email='$username' and password='$newpass'" or die(mysqli_error());
                $result=mysqli_query($conn, $sql) or die(mysqli_error());
                
                //check table row
                $count=mysqli_num_rows($result);

                if($count==1){
                    $user = mysqli_fetch_assoc($result);
                    $_SESSION['admin_id'] = $user['admin_id'];
                    header("location:admin.php");
                }
                //If the username or password is wrong, you will receive this message below.
                 else {
                    echo "Wrong Username or Password<br><br>Return to <a href=\"index.php\">login</a>";
                }
            ?>
        </div>
        <div id="footer">
            <div class="bottom_addr">&copy; 2020 School voting system. All Rights Reserved.</div>
        </div>
    </div>
</body>
</html>