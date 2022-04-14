<?php 

    include("include/session.php");
    include("include/connect.php");

    if(isset($_POST['submit'])) {

        $brangay_clearance = $_POST['barangay_clearance'];
        $business_clearance = $_POST['business_clearance'];
        $indigency = $_POST['indigency'];
        $delivery_fee = $_POST['delivery_fee'];


     
        $query = mysqli_query($conn, "update content set barangay_clearance='$brangay_clearance', business_clearance='$business_clearance', indigency='$indigency', delivery_fee='$delivery_fee'")or die(mysqli_error($conn));
        $_SESSION["success"] = "Edited Successfuly!";
        header("Location: contentDoucmet.php");
        exit();


    }