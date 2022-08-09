<?php
include 'config.php';
$conn = mysqli_connect($server_name,$user_name,$password,$data_base_name);
if(isset($_POST['state_id'])) {
    $id = $_POST['state_id'];
    $sql = "SELECT * FROM `district` WHERE state_id='$id'";
    $district_name = mysqli_query($conn,$sql);
    if(mysqli_num_rows($district_name)==0) {
        echo '<option selected value="">Select Your State First...</option>';
    } else {
        echo '<option selected value="">Select Your District...</option>';
    }
    // echo '<option selected value="">Select Your District...</option>';
    foreach($district_name as $value) {
        echo '<option value="'.$value['district_id'].'">'.$value['district_name'].'</option>';
    }
}
?>