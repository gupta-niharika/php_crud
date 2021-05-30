<?php     
    $con=mysqli_connect("localhost", "root", "", "Student") or die("Connection Error!".mysqli_connect_error()); //Create connection

    $team_name = $_POST['team_name'];       
    $matches = $_POST['nofmatches'];
    $won = $_POST['nofwon'];
    $lost = $_POST['noflost'];
    $points = $_POST['points'];

    $sql = "UPDATE ipl_cricket_2015 SET matches=$matches, won=$won, lost=$lost, points=$points WHERE team_name='$team_name'";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }

    mysqli_close($con);
?>