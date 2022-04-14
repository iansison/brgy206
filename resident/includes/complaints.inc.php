<?php 
    if(isset($_POST["submit"])) {

        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        // $dates = $_POST['dates'];
        // $timee = $_POST["timee"];
        // $defendant = $_POST["defendant"];
        $details = $_POST["details"];
        $status = 'Active';
        $complaintId = $_POST['complaintId'];
        $narration = $_POST['narration'];
        $urbi = $_POST['urbi'];
        $contatno = $_POST['contatno'];
        require_once 'connect.php';
    


        $complaints = mysqli_query($conn,"insert into complaints (fullname,email,dates,details,status, complaintsId, narration, urbi, contactno) values ('$fullname', '$email' , NOW(),  '$details','$status', '$complaintId', '$narration', '$urbi', '$contatno')");

            
        session_start();
        $_SESSION['success'] = "Your complaint has been sent successfully!";
        header("location: ../user-home.php?error=none");
    }

    else {
        header("location: ../user-home.php");
    }