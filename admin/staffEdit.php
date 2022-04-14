<?php
session_start();
include_once('include/connect.php');

if (isset($_POST['btn_edit'])) {    
    # code...
    $id = $_POST['id'];
    $ufullname = $_POST['ufullname'];
    $position = $_POST['position'];
    $ucontactno = $_POST['ucontactno'];
    $uemail = $_POST['uemail'];
    $upwd =  password_hash($_POST['pwd'], PASSWORD_DEFAULT);
    
    $accountStatus = $_POST['accountStatus'];



    $profileImg = time() . '_' . $_FILES['profile']['name'];
    $path = 'officialsimg/';

    

    
   


    if(move_uploaded_file($_FILES['profile']['tmp_name'],($path . $profileImg))) {
        $sql = mysqli_query($conn,"UPDATE brgy_account set image_picture='$profileImg' WHERE id='$id'") or die(mysqli_error($conn));
        // $query = mysqli_query($conn, "UPDATE brgy_account set fullname='$ufullname', position='$position', contact_no='$ucontactno', uemail='$uemail' where id='$id' ") or die(mysqli_error($conn));
        // $_SESSION['success'] = "Edited Successfully";
        // header("location:staff.php");
        // exit();
        
    }
        // $query = mysqli_query($conn, "UPDATE brgy_account set fullname='$ufullname', position='$position', contact_no='$ucontactno', uemail='$uemail' where id='$id' ") or die(mysqli_error($conn));
        // $_SESSION['success'] = "Edited Successfully";
        // header("location:staff.php");



    $email_query = mysqli_query($conn, "select * from brgy_account where uemail='$uemail' ") or die(mysqli_error($conn));
    if (mysqli_num_rows($email_query)>1) {
        # code...
        $_SESSION['error'] = "Email already exist";

        header("location:staff.php");
        exit();
    }

    if(empty($_POST['pwd'])) {
        $pwdQuery = "SELECT * FROM brgy_account where id='$id'";
        $result = mysqli_query($conn, $pwdQuery);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                
                $oldPwd = $row['upwd'];
                $query = mysqli_query($conn, "UPDATE brgy_account set fullname='$ufullname', uemail='$uemail',position='$position', contact_no='$ucontactno', upwd='$oldPwd', accountStatus='$accountStatus' where id='$id' ") or die(mysqli_error($conn));
                $_SESSION['success'] = "Edited Successfully";
                header("location:staff.php");
                exit();
            }
        }
    }else {

        $query = mysqli_query($conn, "UPDATE brgy_account set fullname='$ufullname', uemail='$uemail', position='$position', contact_no='$ucontactno', accountStatus='$accountStatus', upwd='$upwd' where id='$id'") or die(mysqli_error($conn));
        $_SESSION['success'] = "Edited Successfully";
        header("location:staff.php");
        exit();
    
    }

 
    }






else{
    echo "nothing";
}
?>