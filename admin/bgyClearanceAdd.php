<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['ufullname']) && isset($_POST['purpose'])) {
        
        $residentId = "WALK-IN";
        $username = $_POST['ufullname'];
        $purpose = $_POST['purpose'];
        $status = "Pending";
        $permitType = 'Barangay Clearance';
        $pstatus = "none";
        date_default_timezone_set('Asia/Manila');
        $date = date("F j, Y, g:i a");

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "barangay206";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT uname FROM application WHERE uname = ? LIMIT 1";
            $Insert = "INSERT INTO application(uname, upurpose, ustatus,permit_type,permit_status,udate,residentId) values(?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $id);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssssss",$username, $purpose, $status,$permitType,$pstatus, $date, $residentId);
                if ($stmt->execute()) {
                    header('Location: barangay_clearance.php');
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Insert failed.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>