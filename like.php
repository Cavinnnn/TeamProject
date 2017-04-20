<?php
//SQL connetion information
$servername = "localhost";
$username = "cavinn";
$password = "";
$dbname = "c9";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//gets user data from previous page in the bellow code it gets the user id
$user = $_GET['user'];
//gets the unique id of the song liked
$mbid = $_GET['mbid'];
// gets the current liked songs bellow using the sql
$sql2 = "SELECT seed1, seed2, seed3, seed4, seed5 FROM users WHERE id='$user'";
//runs the query
$result2 = $conn->query($sql2);
//if the query returns more than 0 rows it means the query was successfull
if ($result2->num_rows > 0) {
    // uses an if statment in a while loop to figure out exactly which song like are most recent and acurate 
    while($row = $result2->fetch_assoc()) {
        if($row['seed1'] == ""){
            //if the first seed is empty this means the user has not liked any songs
            $sql = "UPDATE users SET seed1='$mbid' WHERE id='$user'";
        }elseif($row['seed2'] == ""){
            //after any of these if statements the sql is set to different querys that bes suit the user
            $sql = "UPDATE users SET seed2='$mbid' WHERE id='$user'";
        }elseif($row['seed3'] == ""){
            $sql = "UPDATE users SET seed3='$mbid' WHERE id='$user'";
        }elseif($row['seed4'] == ""){
            $sql = "UPDATE users SET seed4='$mbid' WHERE id='$user'";
        }elseif($row['seed5'] == ""){
            $sql = "UPDATE users SET seed5='$mbid' WHERE id='$user'";
        }else{
            $sql = "UPDATE users SET seed1='$mbid' WHERE id='$user'";
        }
    }
} else {
    //failsafe if while loop from above fails or returns 0 rows
    $sql = "UPDATE users SET seed1='$mbid' WHERE id='$user'";
}
//runs the second sql query and retuns result based on success or failure
if ($conn->query($sql) === TRUE) {
    //if success then closes the current window to keep the user on the page they liked the song on
    echo "<script>window.close();</script>";
} else {
    //if error it reports the error to the user/admin
    echo "Error updating record: " . $conn->error;
}
//closes the connection
$conn->close();

?>