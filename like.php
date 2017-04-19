<?php
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
$user = $_GET['user'];
$mbid = $_GET['mbid'];
$sql2 = "SELECT seed1, seed2, seed3, seed4, seed5 FROM users WHERE id='$user'";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        if($row['seed1'] == ""){
            $sql = "UPDATE users SET seed1='$mbid' WHERE id='$user'";
        }elseif($row['seed2'] == ""){
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
    $sql = "UPDATE users SET seed1='$mbid' WHERE id='$user'";
}


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
echo "<script>window.close();</script>";
?>