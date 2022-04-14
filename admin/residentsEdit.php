<?php
session_start();
include_once('include/connect.php');

if (isset($_POST['btn_edit'])) {
    # code...
    $id = $_POST['id'];
    $ufullname = $_POST['ufullname'];
    $urbi = $_POST['urbi'];
    // $ustreename = $_POST['ustreename'];

    $street = $_POST['ustreename'];

    $uhouseholdno = $_POST['uhouseholdno'];
    $ucontactno = $_POST['ucontactno'];
    // $gender = $_POST['gender'];
    // $voter = $_POST['voter'];
    $uemail = $_POST['uemail'];
    $upwd =  password_hash($_POST['pwd'], PASSWORD_DEFAULT);

    $accountStatus = $_POST['accountStatus'];



    $query1 = mysqli_query($conn, "update user_account set uemail='' where id='$id'") or die(mysqli_error($conn));


  

    $email_query = mysqli_query($conn, "select * from user_account where uemail='$uemail' ") or die(mysqli_error($conn));
    if (mysqli_num_rows($email_query)>0) {
        # code...
        $_SESSION['error'] = "Email already exist";
        header("location:residents.php");
        exit();
    }
    else{

        if(empty($_POST['pwd'])) {
    


            $pwdQuery = "SELECT * FROM user_account where id='$id'";
            $result = mysqli_query($conn, $pwdQuery);
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {



                    
                    $oldPwd = $row['upwd'];

                    
                    // $query = mysqli_query($conn, "update user_account set ufullname='$ufullname', urbi='$urbi', street='$street', uhouseholdno='$uhouseholdno', ucontactno='$ucontactno', upwd='$oldPwd',  uemail='$uemail' where id='$id' ") or die(mysqli_error($conn));
                    // $query= mysqli_query($conn, "UPDATE application SET uname='$ufullname' WHERE applicationId='$id'") or die(mysqli_error($conn));
                    // $_SESSION['success'] = "Edited Successfully";
                    // header("location:residents.php");
                    // exit();

                            
                    $sql = "UPDATE user_account set ufullname=?, urbi=?, street=?, uhouseholdno=?, ucontactno=?, upwd=?,  uemail=? , ustatus=? where id='$id'";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("location: residents.php?error=stmtfailed");
                        exit();
                    }
                    
                
                    mysqli_stmt_bind_param($stmt, "ssssssss", $ufullname,  $urbi, $street,  $uhouseholdno,  $ucontactno, $oldPwd, $uemail, $accountStatus);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);

                    $_SESSION['success'] = "Edited Successfully";
                    header("location:residents.php");
                    exit();

                }
            }
        }else {

            $query = mysqli_query($conn, "update user_account set ufullname='$ufullname', urbi='$urbi', street='$street',  uhouseholdno='$uhouseholdno', ucontactno='$ucontactno', upwd='$upwd', uemail='$uemail' where id='$id' ") or die(mysqli_error($conn));
            $query = mysqli_query($conn, "UPDATE application SET uname='$ufullname' WHERE applicationId='$id' ") or die(mysqli_error($conn));
            $_SESSION['success'] = "Edited Successfully";
            header("location:residents.php");
            exit();
        
        }
    }
   
}else{
    header ("location: residents.php");
}
?>