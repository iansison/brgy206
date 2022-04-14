<?php 
    session_start();
    if(isset($_POST["be-submit"])) {

        $ebusinessName = $_POST["ebname"];
        // $ebusinessType = $_POST["ebtype"];
        // $ebusinessProduct = $_POST["eproduct"];
        $ebusinessContactno = $_POST["ebcontactno"];
        $ebusinessEmail = $_POST["ebemail"];
        // $eopeningHours = $_POST["eophrs"];
        $elocation = $_POST["elocation"];
        $elocation = str_replace(" ", "+", $elocation);
        $ebuid = $_POST['ebuid'];

        $bstatus = "Pending";


        

        $img = time() . '_' . $_FILES['img']['name'];

        $target = '../businessImage/' . $img;


        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';
        

        
        if(move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
            // $sql = "INSERT INTO users(profile_img) VALUES ('$profileImg');";

            // $ID =  $_SESSION["usersid"];

            // $sql ="UPDATE user_account SET image_picture=? WHERE id=$ID";
            // $stmt = mysqli_stmt_init($conn);
            // if (!mysqli_stmt_prepare($stmt, $sql)) {
            //     header("location ../edit.php?error=stmtfailed");
            //     exit();
            // }
            
        
            // mysqli_stmt_bind_param($stmt, "s",$img);
            // mysqli_stmt_execute($stmt);
            // mysqli_stmt_close($stmt);

            // $query = mysqli_query($conn, "update business set businessName='$ebusinessName', businessType='$ebusinessType', businessProduct='$ebusinessProduct', businessContactno='$ebusinessContactno', businessEmail = '$ebusinessEmail' , location = '$elocation' , businessImg ='$img' where ID='$ebuid'") or die(mysqli_error($conn));


            // $_SESSION['success'] = "Edited Successfully";
            // header("location: ../business.php");

            $sql = "UPDATE business set businessName=?, businessType=?, businessProduct=?, businessContactno=?, businessEmail = ? , location = ? , businessImg =?, bstatus=? where ID='$ebuid'";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location ../business.php?error=stmtfailed");
                exit();
            }
            
        
            mysqli_stmt_bind_param($stmt, "ssssssss", $ebusinessName,  $ebusinessType, $ebusinessProduct,  $ebusinessContactno,  $ebusinessEmail, $elocation, $img, $bstatus);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            $_SESSION['success'] = "Edited Successfully";
            header("location: ../business.php");
            exit();
            

       

        }else {
            $sql = "UPDATE business set businessName=?, businessType=?, businessProduct=?, businessContactno=?, businessEmail = ? , location = ?, bstatus=?  where ID='$ebuid'";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location ../business.php?error=stmtfailed");
                exit();
            }
            
        
            mysqli_stmt_bind_param($stmt, "sssssss", $ebusinessName,  $ebusinessType, $ebusinessProduct,  $ebusinessContactno,  $ebusinessEmail, $elocation, $bstatus);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            $_SESSION['success'] = "Edited Successfully";
            header("location: ../business.php");
            exit();
        }


   
        // businessEdit($conn, $ebusinessName, $ebusinessType, $ebusinessProduct, $ebusinessContactno,  $ebusinessEmail , $eopeningHours, $elocation, $ebuid);

        // $query = mysqli_query($conn, "update business set businessName='$ebusinessName', businessType='$ebusinessType', businessProduct='$ebusinessProduct', businessContactno='$ebusinessContactno', businessEmail = '$ebusinessEmail' , location = '$elocation'  where ID='$ebuid'") or die(mysqli_error($conn));


        // $_SESSION['success'] = "Edited Successfully";
        // header("location: ../business.php");
            
    }

    else {
        header("location: ../user-home.php");
    }