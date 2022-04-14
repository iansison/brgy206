<?php
session_start();
include_once('include/connect.php');

if (isset($_POST['btn_edit'])) {
    # code...
    $rbi = $_POST['rbi'];
    $id = $_POST['id'];
    // $house_hold_no = $_POST['house_hold_no'];
    // $streeno = $_POST['streeno'];
    // $full_name = $_POST['full_name'];

    // $address = $_POST['address'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];

    $fullname = $fname. " ". $lname;

    // $family_no = $_POST['fnumber'];
    $birth_place = $_POST['birth_place'];
    $birth_date = $_POST['birth_date'];
    $gender = $_POST['gender'];
    $civil_status = $_POST['civil_status'];
    $occupation = $_POST['occupation'];
    // $relationship_to_household = $_POST['relationship_to_household'];
    $voter_status = $_POST["voter_status"];

    $relation = $_POST['relation'];
    $family_no = $_POST['family_no']; 

    $status = $_POST['status'];
    // $query = mysqli_query($conn, "update rbi_tenant set house_hold_no='$house_hold_no', full_name='$full_name', address='$address', family_no='$family_no', birth_place='$birth_place', gender='$gender', civil_status='$civil_status', occupation = '$occupation' ,relationship_to_household='$relationship_to_household', voter_status='$voter_status' where id='$id'") or die(mysqli_error($conn));

    $query = mysqli_query($conn, "update rbi_tenant set  relationship='$relation' ,voter_status='$voter_status', firstname='$fname', lastname='$lname', middlename='$mname', full_name='$fullname', birth_place='$birth_place', birth_date='$birth_date', gender='$gender', civil_status='$civil_status', status='$status' where id='$id' ") or die(mysqli_error($conn));
    $_SESSION['success'] = "Edited Successfully";
    header("location:rbiMemberFamily.php?id=$rbi&&familyNo=$family_no");
    exit();
        
   
}


if (isset($_POST['archiveSubmit']))  {

    $rbi = $_POST['rbi'];
    $id = $_POST['id'];
    $query = mysqli_query($conn, "update rbi_tenant set status='Active' where id='$id' ") or die(mysqli_error($conn));
    $_SESSION['success'] = "Edited Successfully";
    header("location:archive_rbi.php");
    exit();
}



?>