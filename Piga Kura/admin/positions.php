<?php
    session_start();
    require('../db/connection.php');
    if(empty($_SESSION['admin_id'])){
        header("location:access-denied.php");
    }
    //get positions from the database
    $result=mysqli_query($conn, "SELECT * FROM scpositions") or die("There are no positions yet... \n". mysqli_error($conn));
    if(mysqli_num_rows($result)<1){
        $result=null;
    }
?>
<?php
    //inserting sql query
    if(isset($_POST['Submit'])){
        $newPosition=addslashes($_POST['position']);
        $sql= mysqli_query($conn, "INSERT INTO scpositions(position_name) VALUES ('$newPosition')") or die("Could not insert field at the moment.". mysqli_error($conn));
        //back to positions
        header("location: positions.php");
    }
?>
<?php
    //deleting sql query
    // check if the 'id' variable is set in URL
    if(isset($_GET['id'])){
        //get id value
        $id=$_GET['id'];
        //delete the entry
        $result=mysqli_query($conn, "DELETE FROM scpositions WHERE position_id='$id'") or die("The position does not exist...\n");
        //back to positions
        header("Location: positions.php");
    }
    else//do nothing
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCC</title>
    <link rel="stylesheet" href="css/admin_styles.css" type="text/css">
    <script></script>
</head>
<body bgcolor="lightgreen">
    <center><b><font color="black" size="6">Nani Community College</font></b></center><br><br>
    <div id="page">
        <div id="header">
            <h1>MANAGE POSITIONS </h1>
            <a href="admin.php">Home</a> | <a href="manage-admins.php">Manage Administrators</a> |<a href="manage-students.php">Manage Students</a>| <a href="positions.php">Manage Positions</a> | <a href="candidates.php">Manage Candidates</a> | <a href="refresh.php">Poll Results</a> | <a href="logout.php">Logout</a>
        </div>
        <div id="container">
            <table width="380" align="center">
                <CAPTION><h3>ADD NEW POSITION</h3></CAPTION>
                <form action="positions.php" method="post" name="fmPositions" id="fmPositions">
                    <tr>
                        <td>Position Name</td>
                        <td><input type="text" name="position"></td>
                        <td><input type="submit" name="Submit" value="Add"></td>
                    </tr>
                </form>
            </table>
            <hr>
            <table border="0" width="420" align="center">
                <CAPTION><h3>AVAILABLE POSITIONS</h3></CAPTION>
                <tr>
                    <th>Position ID</th>
                    <th>Position Name</th>
                </tr>
                <?php
                    //loop through all the table rows
                    while($row=mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>". $row['position_id']."</td>";
                        echo "<td>". $row['position_name']."</td>";
                        echo '<td><a href="positions.php?id='.$row['position_id'].'">Delete Posisiton</a></td>';
                        echo "</tr";
                    }
                    mysqli_free_result($result);
                    mysqli_close($conn);
                ?>
            </table>
        </div>
        <div id="footer">
            <div class="bottom_addr">&copy; 2020 School voting system. All Rights Reserved.</div>
        </div>
    </div>
</body>
</html>