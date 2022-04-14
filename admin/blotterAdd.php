<?php
include("include/session.php");
include("include/connect.php");
//check if form is submitted
if (isset($_POST['btn_blotter']))
{
    /*$user = $user_id;*/
    $complainant = $_POST['complainant'];
    $complainantAge = $_POST['complainantAge'];
    $complainantAddress = $_POST['complainantAddress'];
    $complainantContact = $_POST['complainantContact'];

    $complainee=  $_POST['complainee'];
    $complaineeAge =$_POST['complaineeAge'];
    $complaineeAddress= $_POST['complaineeAddress'];
    $complaineeContact =$_POST['complaineeContact'];

    // $date = $_POST['date'];
    // $date = date('Y-m-d', strtotime($_POST['date']));

    
    date_default_timezone_set('Asia/Manila');
    $date = date('F j, Y g:i:a  ');
    // $time = $_POST['time'];
    $time = date('h:i A', strtotime($_POST['time']));

    $location = $_POST['location'];
    $status = $_POST['status'];
    $details = $_POST['details'];
  
     $sql = mysqli_query($conn,"INSERT INTO blotter (complainant, complainantAge, complainantAddress, complainantContact, complainee, complaineeAge, complaineeAddress, complaineeContact, date, time, location, status, details, session_no) 
     VALUES('$complainant','$complainantAge','$complainantAddress','$complainantContact' ,'$complainee','$complaineeAge','$complaineeAddress', '$complaineeContact','$date', '$time', '$location','$status','$details', '1')") or die(mysqli_error($conn));

            $_SESSION['success'] = "Blotter Added Successfully";
            header("Location: blotter.php");
        
  
}
?>

