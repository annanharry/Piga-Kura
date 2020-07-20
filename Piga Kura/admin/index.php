<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCC Admin:Home</title>
    <link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="js/admin.js"></script>
</head>
<body bgcolor="lightgreen">
    <center><b><font color="black" size="6">Nani Community College</font></b></center><br><br>
    <div id="page">
        <div id="header">
            <h1>Administrator Login </h1>
            <p align="center">&nbsp;</p>
        </div>
        <div id="container">
            <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="FFFFFF">
                <tr>
                    <form name="form1" action="checklogin.php" method="post">
                        <tr>
                            <td width="78">Username</td>
                            <td width="6">:</td>
                            <td width="294"><input type="text" name="username" id="username"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input type="password" name="password" id="password"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><input type="submit" name="submit" value="Login"></td>
                        </tr>
                    </form>
                </tr>
            </table>
        </div>
        <div id="footer">
            <div class="bottom_addr">&copy; 2020 School voting system. All Rights Reserved.</div>
        </div>
    </div>
</body>
</html>