<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied</title>
    <link rel="stylesheet" href="css/user_styles.css" type="text/css">
</head>
<body bgcolor="lightblue">
    <center><b><font color="black" size="6">Nani Community College</font></b></center><br><br>
    <div id="page">
        <div id="header">
            <h1>Invalid Credentials, try again.</h1>
            <p align="center">&nbsp;</p>
        </div>
        <div id="container">
            <?php
                ini_set ("display_errros", "1");
                error_reporting(E_ALL);

                ob_start();
                session_start();
                require('db/connection.php');

                $myusername=$_POST['myusername'];
                $mypassword=$_POST['mypassword'];

                $encrypted_mypassword=md5($mypassword);

                $myusername = stripslashes($myusername);
                $mypassword = stripslashes($mypassword);
                $myusername = mysqli_real_escape_string($conn, $myusername);
                $mypassword = mysqli_real_escape_string($conn, $mypassword);

                $sql="SELECT * FROM scmembers WHERE email='$myusername' and password='$encrypted_mypassword'" or die(mysql_error());
                $result=mysqli_query($conn,$sql) or die(mysqli_error());

                $count=mysqli_num_rows($result);

                if($count==1){
                    $user = mysqli_fetch_assoc($result);
                    $_SESSION['member_id'] = $user['member_id'];
                    header("location:student.php");
                }
                else {
                    echo "Wrong Username or Password. Try again. <br><br> Go to <a href=\"index.php\">login</a>";
                }

                ob_end_flush();
            ?>
        </div>
        <div id="footer">
            <div class="bottom_addr">&copy; 2020 School voting system. All Rights Reserved.</div>
        </div>
    </div>
</body>
</html>