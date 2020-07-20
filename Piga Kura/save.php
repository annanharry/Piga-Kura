<?php
    require('db/connection.php');
    $vote=$_REQUEST['vote'];
    mysqli_query($conn,"UPDATE sccandidates SET candidate_votes=candidate_votes+1 WHERE candidate_name='$vote'");
    mysqli_close($conn);
?>