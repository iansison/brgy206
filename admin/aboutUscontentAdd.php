<?php 

    include("include/session.php");
    include("include/connect.php");

    if(isset($_POST['submit'])) {

        $mission = $_POST['mission'];
        $vision = $_POST['vision'];
        $aboutus = $_POST['aboutus'];

        $sql = "UPDATE content set mission=?, vission=?, aboutus=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: aboutUscontent.php?error=stmtfailed");
            exit();
        }
        
    
        mysqli_stmt_bind_param($stmt, "sss", $mission,  $vision, $aboutus);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

     
        // $query = mysqli_query($conn, "update content set mission='$mission', vission='$vision', aboutus='$aboutus'")or die(mysqli_error($conn));
        $_SESSION["success"] = "Edited Successfuly!";
        header("Location: aboutUscontent.php");
        exit();



    }