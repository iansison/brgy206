<?php
include("include/session.php");
include("include/connect.php");
//check if form is submitted
if (isset($_POST['btn_user']))
{
    // $img = time() . '_' . $_FILES['img']['name'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password =  password_hash($_POST['password'], PASSWORD_DEFAULT);
    $cnumber = $_POST['cnumber'];
    $role = '1';


    $profileImg = time() . '_' . $_FILES['img']['name'];
    $target = 'officialsimg/' . $profileImg;
    

    
    if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){
        $email_query = mysqli_query($conn, "select * from brgy_account where uemail='$email' ") or die(mysqli_error($conn));
        if (mysqli_num_rows($email_query)>0) {
            # code...
            $_SESSION['error'] = "Email already exist";
            header("location:admin.php?error=emailexist");
            exit();
        }else{
            
                $sql = "INSERT INTO brgy_account(fullname, contact_no, uemail, upwd, role, image_picture, accountStatus)VALUES (?, ?, ?,?,?, ?, 'Active');";
                $stmt = mysqli_stmt_init($conn);
            
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: admin.php?error=stmtfailed");
                    exit();
                }
                
                mysqli_stmt_bind_param($stmt, "ssssss",  $fullname,$cnumber,$email,$password, $role, $profileImg);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
            
                $_SESSION['success'] = " Barangay Staff Added Successfully";
                header("Location: admin.php");
                exit();
            }
    }

    else
        header("Location: admin.php");
}
?>