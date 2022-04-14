<?php 

    session_start();
    if(isset($_POST["submit"])) {

        $businessName = $_POST["bname"];
        // $businessType = $_POST["btype"];
        // $businessProduct = $_POST["product"];
        $businessContactno = $_POST["bcontactno"];
        $businessEmail = $_POST["bemail"];
        // $openingHours = $_POST["ophrs"];
        // $lon = $_POST["lon"];
        // $lat = $_POST["lat"];
        $location = $_POST["lacation"];
        $location = str_replace(" ", "+", $location);
        $businessId = $_POST['businessId'];
        $description = $_POST['description'];

        $urbi = $_SESSION["userrbi"];

        $uname = $_POST['uname'];
        $uemail = $_POST['uemail'];
        
        

        $status = "Pending";

        date_default_timezone_set('Asia/Manila');
        $date = date('m-d-y h:i:s');
   
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

               
        $img = time() . '_' . $_FILES['img']['name'];

        $target = '../businessImage/' . $img;

    

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

            business($conn, $businessName, $location, $businessId, $img, $businessContactno, $description,  $businessEmail,  $urbi, $uname, $uemail);
            exit();

       

        }



   

        // business($conn, $businessName, $businessType, $businessProduct, $businessContactno,  $businessEmail , $openingHours, $location, $businessId);
    }

    else {
        header("location: ../user-home.php");
    }