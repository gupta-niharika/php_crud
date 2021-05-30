<?php     
    $con=mysqli_connect("localhost", "root", "", "Student") or die("Connection Error!".mysqli_connect_error()); //Create connection

    $team_name = $_POST['team_name'];       
    $matches = $_POST['nofmatches'];
    $won = $_POST['nofwon'];
    $lost = $_POST['noflost'];
    $points = $_POST['points'];
    
    $entry = "INSERT INTO ipl_cricket_2015 VALUES('$team_name', '$matches', '$won', '$lost', '$points')";
    if ($con->query($entry) === TRUE) {
        echo "New record created successfully  <br>";        
      } else {
        echo "Error: " . $entry . "<br>" . $con->error ."\n";
    }   

    mysqli_close($con);
?>