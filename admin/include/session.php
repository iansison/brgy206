<?php
session_start();
include('connect.php');

if (isset($_SESSION['user_id'])) {
    # code...
    
$user_id = $_SESSION['user_id'];

$session_query = mysqli_query($conn, "select * from brgy_account where id='$user_id' ") or die(mysqli_error($conn));
$session_row = mysqli_fetch_assoc($session_query);


$username = $session_row['fullname'];
$uemail = $session_row['uemail'];
$role = $session_row['role'];
$img = $session_row['image_picture'];

}else{
    $_SESSION['error'] = "You dont have permission to view this Page";
    header("location: ../../index.php");
}
?>