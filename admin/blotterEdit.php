<?php
session_start();
include_once('include/connect.php');

if (isset($_POST['blotter-submit'])) {
    # code...
    $id = $_POST['id'];
    $status = $_POST['status'];
    $details_session = $_POST['details_session'];
    $date_session = date('Y-m-d');


    $query = mysqli_query($conn, "update blotter set status='$status', details_session='$details_session', date_session='$date_session'  where id='$id' ") or die(mysqli_error($conn));

    $_SESSION['success'] = "Edited Successfully";
    header("location:blotter.php");
        
   
}else{
    echo "nothing";
}
?>