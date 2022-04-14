<?php
include("include/session.php");
include("include/connect.php");
//check if form is submitted
if (isset($_POST['btn_rbi']))
{
    /*$user = $user_id;*/
    $rbi_no = $_POST['rbi_no'];
    // $full_name = $_POST['full_name'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];

    
    $full_name = $fname . " " . $lname;
    $gender = $_POST['gender'];
    $birth_date = $_POST['birth_date'];
    // $cnumber = $_POST['cnumber'];
    $civil_status = $_POST['civil_status'];
    $voter_status = $_POST['voter_status'];
    
    // $address = $_POST['address'];
    // $familyNo = $_POST['familyNo'];
    $streetno = $_POST['streetno'];

    $birth_place = $_POST['birth_place'];
    $occupation = $_POST['occupation'];
    $tenantOwner = $_POST['tenantOwner'];

    

    $residentNo = $rbi_no.'-1-'.'1';

    function rbiExits($conn,$rbi_no) {
        $sql = "SELECT * FROM rbi_tenant WHERE rbi_id =?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: rbi.php");
            exit();
        }
        

        mysqli_stmt_bind_param($stmt, "s", $rbi_no);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);

    }

     if(rbiExits($conn,$rbi_no) !==false) {
        $_SESSION["rbiError"] = " RBI already exist!";
        header("Location: rbi.php");
        exit();
    }




    // $family_no = $_POST['cnumber'];
    // $relationship_to_household = 'Head';
    // $sql = mysqli_query($conn,"INSERT INTO rbi ( rbi_no, full_name, gender, birth_date, cnumber, civil_status,address,birth_place, voter_status, house_hold_no) VALUES('$rbi_no','$full_name','$gender','$birth_date','$cnumber' ,'$civil_status','$address','$birth_place', '$voter_status', '$householdno')") or die(mysqli_error($conn));

    $sql2 = mysqli_query($conn,"INSERT INTO rbi_tenant (rbi_id, streetno, firstname, middlename, lastname, full_name, birth_place, birth_date, gender, civil_status, occupation, family_position, family_no, voter_status, tenantOwner, position, resident_no, rnumber, status) 
    VALUES('$rbi_no', '$streetno','$fname', '$mname', '$lname','$full_name' ,'$birth_place' ,'$birth_date', '$gender','$civil_status','$occupation','Head','1', '$voter_status', '$tenantOwner', '1', '$residentNo', '1', 'Active')") or die(mysqli_error($conn));
    $_SESSION['success'] = " RBI Added Successfully";
    header("Location: rbi.php");
        
  
}
?>