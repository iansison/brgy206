<?php

    session_start();

    if(isset($_POST["submit"])) {

        $fname = $_POST["fname"];
        $contactno = $_POST["contactno"];
   
   
        
        $profileImg = time() . '_' . $_FILES['profileImage']['name'];

        $target = '../images/profileImages/' . $profileImg;

        // $fileExt = explode('.', $profileImg);
        // $fileActualExt = strtolower(end($fileExt));
        // $allowed = array('jpg', 'jpeg', 'png');
        
        require_once 'functions.inc.php';
        require_once 'dbh.inc.php';


    

        if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
            // $sql = "INSERT INTO users(profile_img) VALUES ('$profileImg');";

            $ID =  $_SESSION["usersid"];

            $sql ="UPDATE user_account SET image_picture=? WHERE id=$ID";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location ../edit.php?error=stmtfailed");
                exit();
            }
            
        
            mysqli_stmt_bind_param($stmt, "s",$profileImg);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

       

        }



        edit($conn, $fname, $contactno);
    }