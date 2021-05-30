<?php     
    $con=mysqli_connect("localhost", "root", "", "Student") or die("Connection Error!".mysqli_connect_error()); //Create connection
    $team_name = $_POST['team_name'];    
    $sql = "SELECT * FROM ipl_cricket_2015 WHERE team_name='$team_name'";
    $result = $con->query($sql);
    while($row = $result->fetch_assoc()) {  // output data of each row
      if ($team_name == $row["team_name"]) {  //output of specific row
        echo "Team: ". $row["team_name"]. ", Matches: " . $row["matches"] . ", Won: " .$row["won"] .", Lost: " .$row["lost"] .", Points: " .$row["points"] . "<br>";
      }
    }

    mysqli_close($con);
?>