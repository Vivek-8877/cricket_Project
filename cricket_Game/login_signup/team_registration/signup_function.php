<?php
// print_r($_POST);
include 'config.php';
$mob = $_POST['mob'];
$conn = mysqli_connect($server_name,$user_name,$password,$data_base_name);
$sql = "SELECT * FROM `player` WHERE `Mobile_number` LIKE '$mob'";
$result = mysqli_query($conn,$sql);
$val = mysqli_num_rows($result);
if($val==0) {
    echo false;
} else {
    foreach($result as $key => $value) {
        echo $value['Name'];
        break;
    }
}
?>