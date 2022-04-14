<?php
include("include/session.php");
include("include/connect.php");
//check if form is submitted
if (isset($_POST['btn_user']))
{
    /*$user = $user_id;*/
    $ufullname = $_POST['ufullname'];
    $position = $_POST['position'];
    $ucontactno = $_POST['ucontactno'];
    $uemail = $_POST['uemail'];
    $upwd =  password_hash($_POST['upwd'], PASSWORD_DEFAULT);
    $role = '3';
    // $ext = pathinfo($img, PATHINFO_EXTENSION);
    // $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    // $path = 'officialsimg/' .$img;
    $profileImg = time() . '_' . $_FILES['img']['name'];
    $target = 'officialsimg/' . $profileImg;

  
    //  $sql = mysqli_query($conn,"INSERT INTO brgy_account ( fullname, position, contact_no, uemail, upwd, role) VALUES('$ufullname','$position','$ucontactno','$uemail','$upwd', '$role')") or die(mysqli_error($conn));

    //         $_SESSION['success'] = " Barangay Staff Added Successfully";
    //         header("Location: staff.php");
        
  

    if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){


        $email_query = mysqli_query($conn, "select * from brgy_account where uemail='$uemail' ") or die(mysqli_error($conn));
        if (mysqli_num_rows($email_query)>0) {
            # code...
            $_SESSION['error'] = "Email already exist";
            header("location:staff.php");
            exit();
        }else{
            
                $sql = "INSERT INTO brgy_account(fullname, position, contact_no, uemail, upwd, role, image_picture, accountStatus)VALUES (?, ?, ?,?,?, ?, ?, 'Active');";
                $stmt = mysqli_stmt_init($conn);
            
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: staff.php?error=stmtfailed");
                    exit();
                }
                
                mysqli_stmt_bind_param($stmt, "sssssss",  $ufullname, $position ,$ucontactno,$uemail,$upwd, $role, $profileImg);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
            
                $_SESSION['success'] = " Barangay Staff Added Successfully";
                header("Location: staff.php");
                exit();
            }
    }
    else {
        header("Location: staff.php?error");
        exit();
    }

}
?>