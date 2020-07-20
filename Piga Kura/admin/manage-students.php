<?php
    session_start();
    require('../db/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCC</title>
    <link rel="stylesheet" href="css/admin_styles.css" type="text/css" />
    <script></script>
</head>
<body bgcolor="lightgreen">
    <center><b><font color="black" size="6">Nani Community College</font></b></center><br><br>
    <div id="page">
        <div id="header">
            <h1>ADMINISTRATION CONTROL PANEL </h1>
            <a href="admin.php">Home</a> | <a href="manage-admins.php">Manage Administrators</a> |<a href="manage-students.php">Manage Students</a>| <a href="positions.php">Manage Positions</a> | <a href="candidates.php">Manage Candidates</a> | <a href="refresh.php">Poll Results</a> | <a href="logout.php">Logout</a>
        </div>
        <div id="container">
            <?php
                //check session
                if(empty($_SESSION['admin_id'])){
                    header("location:access-denied.php");
                }
                //Create student process
                if(isset($_POST['submit'])){
                    $firstName = addslashes($_POST['firstname']);
                    $lastName = addslashes($_POST['lastname']);
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $newpass = md5($password);

                    $sql =mysqli_query($conn, "INSERT INTO scmembers(first_name, last_name, email, password) VALUES('$firstName','$lastName','$email','$newpass')") or die(mysqli_error());

                    die("A new student has been added.");
                }
            ?>
            <table align="center">
                <tr>
                    <td>
                        <form action="manage-students.php" method="post">
                            <table align="center">
                                <CAPTION><h4>CREATE ACCOUNT</h4></CAPTION>
                                <tr>
                                    <td>First Name:</td>
                                    <td><input type="text" style="font-weight:bold;" name="firstname" maxlength="15"></td>
                                </tr>
                                <tr>
                                    <td>Last Name:</td>
                                    <td><input type="text" style="font-weight:bold;" name="lastname" maxlength="15"></td>
                                </tr>
                                <tr>
                                    <td>Email Address:</td>
                                    <td><input type="text" style="font-weight:bold;" name="email" maxlength="100"></td>
                                </tr>
                                <tr>
                                    <td>Password:</td>
                                    <td><input type="password" style="font-weight:bold;" name="password" maxlength="15"></td>
                                </tr>
                                <tr>
                                    <td>Confirm Password:</td>
                                    <td><input type="password" style="font-weight:bold;" name="confirmPassword" maxlength="15"></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><input type="submit" name="submit" value="Create Account"></td>
                                </tr>
                            </table>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
        <div id="footer">
            <div class="bottom_addr">&copy; 2020 School voting system. All Rights Reserved.</div>
        </div>
    </div>
</body>
</html>