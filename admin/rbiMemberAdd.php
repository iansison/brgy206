<?php
include("include/session.php");
include("include/connect.php");
//check if form is submitted
if (isset($_POST['btn_tenant']))
{
    /*$user = $user_id;*/
    $rbi_id = $_POST['rbi_id'];
    // $house_hold_no = $_POST['householdno'];
    // $full_name = $_POST['full_name'];
    // $address = $_POST['address'];
    $streetno = $_POST['street'];

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];

    $full_name = $fname . " " . $lname;

    $birth_place = $_POST['birth_place'];
    $birth_date = $_POST['birth_date'];
    $gender = $_POST['gender'];
    $civil_status = $_POST['civil_status'];
    $voter_status = $_POST['voter'];
    $occupation = $_POST['occupation'];
    $family_no = $_POST['fnumber'];

    $relation = $_POST['relation'];

    $residentNo = $rbi_id."-".$family_no."-1";
  
    //  $sql = mysqli_query($conn,"INSERT INTO rbi_tenant ( rbi_id, house_hold_no, full_name, address, birth_place, birth_date, gender, civil_status, occupation, relationship_to_household, tenant,family_no, voter_status) VALUES('$rbi_id','$house_hold_no','$full_name','$address','$birth_place' ,'$birth_date', '$gender','$civil_status','$occupation','$relationship_to_household','$tenant','$family_no', '$voter_status')") or die(mysqli_error($conn));

     
    $sql2 = mysqli_query($conn,"INSERT INTO rbi_tenant (rbi_id,  streetno, firstname, middlename, lastname, full_name, birth_place, birth_date, gender, civil_status, occupation, family_position, family_no, voter_status, resident_no, relationship, rnumber, status) 
    VALUES('$rbi_id', '$streetno','$fname', '$mname', '$lname','$full_name' ,'$birth_place' ,'$birth_date', '$gender','$civil_status','$occupation','Head','$family_no', '$voter_status','$residentNo', '$relation','1', 'Active')") or die(mysqli_error($conn));
    $_SESSION['success'] = "Family added successfully";
    header("Location: rbiMember.php?id=$rbi_id");

  
}
?>