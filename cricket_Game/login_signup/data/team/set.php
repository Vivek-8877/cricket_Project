<?php
include '../config.php';
$conn = mysqli_connect($server_name,$user_name,$password,$data_base_name);
$team_name = $_POST['team_name'];

$sql = mysqli_query($conn,"INSERT INTO `team` (`Team_name`, `Captain`, `Vice_captain`, `Player_1`, `Player_2`, `Player_3`, `Player_4`, `Player_5`, `Player_6`, `Player_7`, `Player_8`, `Player_9`, `Player_10`, `Player_11`, `Player_12`, `Player_13`) VALUES ('$team_name', '123', '12', '11', '2', '1', '2', '2', '2', '1', '4', '5', '4', '4', '4', '4')");
echo "Your Team is Succesfully Registered.";
?>