<?php
    session_start();
    require('../db/connection.php');
    if(empty($_SESSION['admin_id'])){
        header("location:access-denied.php");
    }
    //retrieve data from the table
    $result=mysqli_query($conn, "SELECT * FROM sccandidates") or die("There are no records to display... \n".mysqli_error($conn));
    if(mysqli_num_rows($result)<1){
        $result=null;
    }
?>
<?php
	//retrieving positions query
	$positions_retrieved=mysqli_query($conn, "SELECT * FROM scpositions") or die("There are no records to display...\n".mysqli_error($conn));
?>
<?php
    //query to insert
    if(isset($_POST['Submit'])){
        $candidateName=addslashes($_POST['name']);
        $candidatePosition=addslashes($_POST['position']);
        $sql=mysqli_query($conn, "INSERT INTO   sccandidates(candidate_name,candidate_position) VALUES ('$candidateName','$candidatePosition')") or die("Could not insert candidate at the moment". mysqli_error($conn));
        header("location: candidates.php");
    }
?>
<?php
    //deleting query
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $result=mysqli_query($conn, "DELETE FROM sccandidates WHERE candidate_id='$id'") or die("The candidate is non existent...\n");
        header("location:candidates.php");
    }
    else
    //do nothing
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCC Admin: Candidates</title>
    <link rel="stylesheet" href="css/admin_styles.css" type="text/css">
    <script></script>
</head>
<body bgcolor="lightgreen">
    <center><b><font color="black" size="6">Nani Community College</font></b></center><br><br>
    <div id="page">
        <div id="header">
            <h1>MANAGE CANDIDATES </h1>
            <a href="admin.php">Home</a> | <a href="manage-admins.php">Manage Administrators</a> |<a href="manage-students.php">Manage Students</a>| <a href="positions.php">Manage Positions</a> | <a href="candidates.php">Manage Candidates</a> | <a href="refresh.php">Poll Results</a> | <a href="logout.php">Logout</a>
        </div>
        <div id="container">
            <CAPTION><h3>ADD NEW CANDIDATE</h3></CAPTION>
            <form action="candidates.php" method="post">
                <table>
                    <tr>
                        <td>Candidate Name</td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td>Candidate Position</td>
                        <?php echo $positions; ?>
                        <td>
                            <SELECT NAME="position" id="position"> select
                                <OPTION VALUE="select">select
                                <?php
                                    //loop through all the rows
                                    while($row=mysqli_fetch_array($positions_retrieved)){
                                        echo "<OPTION VALUE=$row[position_name]>$row[position_name]";
                                    }
                                ?>
                            </SELECT>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
						<td><input type="submit" name="Submit" value="Add"></td>
                    </tr>
                </table>
            </form>
			<hr>
			<table border="0" width="620" align="center">
				<CAPTION><h3>AVAILABLE CANDIDATES</h3></CAPTION>
				<tr>
					<th>Candidate ID</th>
					<th>Candidate Name</th>
					<th>Candidate Position</th>
				</tr>
				<?php
					//loop for the table rows
					while($row=mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>".$row['candidate_id']."</td>";
						echo "<td>".$row['candidate_name']."</td>";
						echo "<td>".$row['candidate_position']."</td>";
						echo '<td><a href="candidates.php?id='.$row['candidate_id'].'">Delete Candidate</a></td>';
						echo "</tr>";
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