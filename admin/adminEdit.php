<?php
include("include/session.php");
include("include/connect.php");
//check if form is submitted
if (isset($_POST['btn_edit']))
{
    // $img = $_FILES['img']['name'];
    $fullname = $_POST['fullname'];
    $uEmail = $_POST['email'];
    $upwd =  password_hash($_POST['upwd'], PASSWORD_DEFAULT);
    $cnumber = $_POST['cnumber'];
    $role = '1';
    $id = $_POST['id'];
    
    $profileImg = time() . '_' . $_FILES['profile']['name'];
    $path = 'officialsimg/';


    
    // $query1 = mysqli_query($conn, "update user_account set uemail='' where id='$id' ") or die(mysqli_error($conn));

    // function uidExits($conn, $uEmail) {
    //     $sql = "SELECT * FROM user_account WHERE uemail =?;";
    //     $stmt = mysqli_stmt_init($conn);
    //     if (!mysqli_stmt_prepare($stmt, $sql)) {
    //         header("location: admin.php?error=stmtfailed");
    //         exit();
    //     }
    //     mysqli_stmt_bind_param($stmt, "s", $uEmail);
    //     mysqli_stmt_execute($stmt);
    
    //     $resultData = mysqli_stmt_get_result($stmt);
    
    //     if ($row = mysqli_fetch_assoc($resultData)) {
    //         return $row;
    //     }
    //     else {
    //         $result = false;
    //         return $result;
    //     }
    //     mysqli_stmt_close($stmt);
    // }
    



    // if(uidExits($conn,$uEmail) !==false) {
    //     $_SESSION['error'] = " Email is already taken!";
    //     header("Location: admin.php?error=emailtaken");

    //     $query1 = mysqli_query($conn, "update user_account set uemail='$uemail' where id='$id' ") or die(mysqli_error($conn));
    //     exit();
    // }

    

    if(move_uploaded_file($_FILES['profile']['tmp_name'],($path . $profileImg))) {
        $sql = mysqli_query($conn,"UPDATE brgy_account set image_picture='$profileImg' WHERE id='$id'") or die(mysqli_error($conn));
    }

    $email_query = mysqli_query($conn, "select * from brgy_account where uemail='$uEmail' ") or die(mysqli_error($conn));
    if (mysqli_num_rows($email_query)>1) {
        # code...
        $_SESSION['error'] = "Email already exist";

        header("location:staff.php");
        exit();
    }

    if(empty($_POST['upwd'])) {
        $pwdQuery = "SELECT * FROM brgy_account where id='$id'";
        $result = mysqli_query($conn, $pwdQuery);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                
                $oldPwd = $row['upwd'];
                $query = mysqli_query($conn, "UPDATE brgy_account set fullname='$fullname', uemail='$uEmail',position='$position', contact_no='$cnumber', upwd='$oldPwd' where id='$id' ") or die(mysqli_error($conn));
                $_SESSION['success'] = "Edited Successfully";
                header("location:admin.php");
                exit();
            }
        }
    }else {

        $query = mysqli_query($conn, "UPDATE brgy_account set fullname='$fullname', uemail='$uEmail', position='$position', contact_no='$cnumber', upwd='$upwd' where id='$id'") or die(mysqli_error($conn));
        $_SESSION['success'] = "Edited Successfully";
        header("location:admin.php");
        exit();
    
    }





    // $sql = mysqli_query($conn,"UPDATE user_account set  ufullname='$fullname', ucontactno='$cnumber', uemail='$uEmail', upwd='$upwd' WHERE id='$id'") or die(mysqli_error($conn));

    // $_SESSION['success'] = " Barangay Officials Edited Successfully";
    // header("Location: admin.php");
}
else {
    header("Location: admin.php?");
}
?>