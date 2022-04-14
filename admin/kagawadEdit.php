<?php
include("include/session.php");
include("include/connect.php");
//check if form is submitted
if (isset($_POST['btn_edit']))
{
    // $img = $_FILES['img']['name'];
    $fullname = $_POST['fullname'];
    $uemail = $_POST['email'];
    $upwd =  password_hash($_POST['pwd'], PASSWORD_DEFAULT);
    $cnumber = $_POST['cnumber'];
    $role = '2';
    $id = $_POST['id'];
    $position = $_POST['position'];
    $profileImg = time() . '_' . $_FILES['profile']['name'];
    $path = 'officialsimg/';
    $accountStatus = $_POST['accountStatus'];

    $query1 = mysqli_query($conn, "update brgy_account set uemail='' where id='$id'") or die(mysqli_error($conn));
    $email_query = mysqli_query($conn, "select * from brgy_account where uemail='$uemail'") or die(mysqli_error($conn));
    if (mysqli_num_rows($email_query)>0) {
        $_SESSION['error'] = "Email already exist";
        header("location:kagawad.php");
        exit();
    }else{
            if(move_uploaded_file($_FILES['profile']['tmp_name'],($path . $profileImg))) {
                $sql = mysqli_query($conn,"UPDATE brgy_account set image_picture='$profileImg' WHERE id='$id'") or die(mysqli_error($conn));
                $sql = mysqli_query($conn,"UPDATE brgy_account set  fullname='$fullname', contact_no='$cnumber', uemail='$uemail', upwd='$upwd' ,position='$position' , accountStatus='$accountStatus' WHERE id='$id'") or die(mysqli_error($conn));
                $_SESSION['success'] = " Barangay Officials Edited Successfully";
                header("Location: kagawad.php");
            }
            $sql = mysqli_query($conn,"UPDATE brgy_account set  fullname='$fullname', contact_no='$cnumber', uemail='$uemail', upwd='$upwd' ,position='$position' , accountStatus='$accountStatus' WHERE id='$id'") or die(mysqli_error($conn));
            $_SESSION['success'] = " Barangay Officials Edited Successfully";
            header("Location: kagawad.php");

        }


}
else {
    header("Location: kagawad.php?");
}
?>