<?php
    require('db/connection.php');
    session_start();
    if(empty($_SESSION['member_id'])){
        header("location:access-denied.php");
    }
?>
<?php
    $positions=mysqli_query($conn, "SELECT * FROM scpositions") or die("There is nothing to see here...\n".mysqli_error($conn));
?>
<?php
    if(isset($_POST['position'])){
        $position=addslashes($_POST['position']);
        $result=mysqli_query($conn, "SELECT * FROM sccandidates WHERE candidate_position='$position'") or die("There are no records currently...\n");
        //header("location:vote.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCC Student: Vote</title>
    <link href="css/user_styles.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src=""></script>
    <script type="text/javascript">
        function getVote(int)
        {
            if(window.XMLHttpRequest)
            {//code for IE7, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {//for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            if(confirm("Your vote is for "+int))
            {
                xmlhttp.open("GET","save.php?vote="+int,true);
                xmlhttp.send();
            }
            else
            {
                alert("Choose another candidate");
            }
        }
        function getPosition(String)
        {
            if(window.XMLHttpRequest)
            {
                xmlhttp=new XMLHttpRequest();
            }
            else
            {
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.open("GET","vote.php?position="+String,true);
            xmlhttp.send();
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            var j = jQuery.noConflict();
            j(document).ready(function()
            {
                j(".refresh").everyTime(1000,function(i){
                    j.ajax({
                        url: "admin/refresh.php",
                        cache: false,
                        success: function(html){
                            j(".refresh").html(html);
                        }
                    })
                })
            })
            j('.refresh').css({color:"green"});
        });
    </script>
</head>
<body bgcolor="lightblue">
    <center><b><font color="black" size="6">Nani Community College</font></b></center><br><br>
    <div id="page">
        <div id="header">
            <h1>CURRENT POLLS</h1>
            <a href="student.php">Home</a> | <a href="vote.php">Current Polls</a> | <a href="manage-profile.php">Manage My Profile</a> | <a href="logout.php">Logout</a>
        </div>
        <div class="refresh">
        </div>
        <div id="container">
            <table width="420" align="center">
                <form action="vote.php" method="post">
                    <tr>
                        <td>Choose Position</td>
                        <td>
                            <SELECT NAME="position" id="position" onclick="getPosition(this.value)">
                            <OPTION VALUE="select">select
                            <?php
                                while($row=mysqli_fetch_array($positions)){
                                    echo "<OPTION VALUE=$row[position_name]>$row[position_name]";
                                }
                            ?>
                        </td>
                        <td><input type="submit" name="Submit" value="See Candidates"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </form>
            </table>
            <table width="270" align="center">
                <form action="">
                    <tr>
                        <th>Candidates:</th>
                    </tr>
                    <?php
                        if(isset($_POST['Submit'])){
                            while($row=mysqli_fetch_array($result)){
                                echo "<t>";
                                echo "<td>" . $row['candidate_name']."</td>";
                                echo "<td><input type='radio' name='vote' value='$row[candidate_name]' onclick='getVote(this.value)' /></td>";
                                echo "</tr>";
                            }
                            mysqli_free_result($result);
                            mysqli_close($conn);
                        }
                        else
                        // do nothing
                    ?>
                    <tr>
                        <h4>NOTE: Click a circle under your preferred candidate to vote for them. You can only vote once, and it is un reversable.</h4>
                        <td>&nbsp;</td>
                    </tr>
                </form>
            </table>
        </div>
        <div id="footer">
            <div class="bottom_addr">&copy; 2020 School voting system. All Rights Reserved.</div>
        </div>
    </div>
</body>
</html>