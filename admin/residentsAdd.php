<?php
include("include/session.php");
include("include/connect.php");
//check if form is submitted
if (isset($_POST['btn_user']))
{
    /*$user = $user_id;*/
    $urbi = $_POST['urbi'];
    $ufullname = $_POST['ufullname'];
    $residentidName = $_POST['residentidName'];
    // $ustreename = $_POST['ustreename'];
    // $uhouseholdno = $_POST['uhouseholdno'];
    // $householdno = $_POST['householdno'];
    $street = $_POST['street'];

    $ucontactno = $_POST['ucontactno'];
    // $gender = $_POST['gender'];
    // $voter = $_POST['voter'];
    $uemail = $_POST['uemail'];
    $upwd =  password_hash($_POST['upwd'], PASSWORD_DEFAULT);
    // $image_picture = $_FILES['image_picture']['name'];
    // $role = '4';

    // $address = $_POST['address'];
    //upload file

    function uidExits($conn, $uemail) {
        $sql = "SELECT * FROM user_account WHERE uemail =?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location ../index.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $uemail);
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

    


    if(uidExits($conn,$uemail) !==false) {
        $_SESSION['error'] = " Email is already taken!";
        header("Location: residents.php?error=emailtaken");
        exit();
    }




  

    // $sql = mysqli_query($conn,"INSERT INTO user_account (urbi, ufullname, street, uhouseholdno, ucontactno, uemail, upwd, image_picture) VALUES('$urbi','$ufullname','$street', '$householdno', '$ucontactno','$uemail','$upwd', 'null')") or die(mysqli_error($conn));
    // $_SESSION['success'] = " Resident Added Successfully";
    // header("Location: residents.php");
    // exit();

  

    $sql = "INSERT INTO user_account (residentId, urbi, ufullname, street, ucontactno, uemail, upwd, image_picture,  ustatus) VALUES (?, ?, ?, ?, ?, ?,  ? ,'null', 'Active');";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location ../index.php?error=stmtfailed");
        exit();
    }
    

    mysqli_stmt_bind_param($stmt, "sssssss", $residentidName, $urbi, $ufullname, $street,  $ucontactno, $uemail, $upwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    $_SESSION['success'] = " Resident Added Successfully";
    header("Location: residents.php");
    exit();


   
}
?>