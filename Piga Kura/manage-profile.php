<?php
    session_start();
    require('db/connection.php');
    if(empty($_SESSION['member_id'])){
        header("location:access-denied.php");
    }
    $result=mysqli_query($conn,"SELECT * FROM scmembers WHERE member_id='$_SESSION[member_id]'") or die("There are no records to show...\n".mysqli_error($conn));
    if(mysqli_num_rows($result)<1){
        $result=null;
    }
    $row=mysqli_fetch_array($result);
    if($row){
        $stdId = $row['member_id'];
        $firstName = $row['first_name'];
        $lastName = $row['last_name'];
        $email = $row['email'];
    }
?>
<?php
    if(isset($_POST['update'])){
        $myId = addslashes( $_GET[id]);
        $myFirstName = addslashes( $_POST['firstname'] );
        $myLastName = addslashes( $_POST['lastname'] ); 
        $myEmail = $_POST['email'];
        $myPassword = $_POST['password'];
        $newpass = md5($myPassword);
        $sql=mysqli_query($conn,"UPDATE scmembers SET first_name='$myFirstName', last_name='$myLastName', email='$myEmail', password='$newpass' WHERE member_id = '$myId'") or die(mysqli_error($conn));
        header("location:manage-profile.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCC Student:Manage</title>
    <link href="css/user_styles.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="lightblue">
    <center><b><font color="black" size="6">Nani Community College</font></b></center><br><br>
    <div id="page">
        <div id="header">
            <h1>MANAGE MY PROFILE</h1>
            <a href="student.php">Home</a> | <a href="vote.php">Current Polls</a> | <a href="manage-profile.php">Manage My Profile</a> | <a href="logout.php">Logout</a>
        </div>
        <div id="container">
            <table>
                <tr>
                    <td>
                        <table width="380" align="center">
                            <CAPTION><h3>MY PROFILE</h3></CAPTION>
                            <tr>
                                <td>Student ID:</td>
                                <td><?php echo $stdId; ?></td>
                            </tr>
                            <tr>
                                <td>First Name:</td>
                                <td><?php echo $firstName; ?></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><?php echo $lastName; ?></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><?php echo $email; ?></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td>Encrypted</td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table border="0" width="620" align="center">
                            <CAPTION><h3>UPDATE PROFILE</h3></CAPTION>
                            <form action="manage-profile.php?id=<?php echo $_SESSION['member_id']; ?>" method="post">
                                <table align="center">
                                    <tr><td>First Name:</td><td><input type="text" style=" font-weight:bold;" name="firstname" maxlength="15" value=""></td></tr>
                                    <tr><td>Last Name:</td><td><input type="text" style=" font-weight:bold;" name="lastname" maxlength="15" value=""></td></tr>
                                    <tr><td>Email Address:</td><td><input type="text" style=" font-weight:bold;" name="email" maxlength="100" value=""></td></tr>
                                    <tr><td>New Password:</td><td><input type="password" style=" font-weight:bold;" name="password" maxlength="5" value=""></td></tr>
                                    <tr><td>Confirm New Password:</td><td><input type="password" style=" font-weight:bold;" name="ConfirmPassword" maxlength="15" value=""></td></tr>
                                    <tr><td>&nbsp;</td></td><td><input type="submit" name="update" value="Update Profile"></td></tr>
                                </table>
                            </form>
                        </table>
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