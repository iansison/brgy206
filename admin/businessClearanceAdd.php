<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['ufullname']) && isset($_POST['businessName']) && isset($_POST['businessType']) && isset($_POST['businessAddress']) && isset($_POST['businessOwner'])) {
        
        $residentId = "WALK-IN";
        $username = $_POST['ufullname'];
        $upurpose = "Business";
        $businessName = $_POST['businessName'];
        $businessType = $_POST['businessType'];
        $businessAddress = $_POST['businessAddress'];
        $businessOwner = $_POST['businessOwner'];
        $status = "Pending";
        $permitType = 'Business Clearance';
        $pstatus = "none";
        $pickupMode = "walk in";
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
            $Insert = "INSERT INTO application(uname,upurpose,businessName,businessType,businessAddress,udate,ustatus,permit_type,owner,pickupMode,residentId,permit_status) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
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
                $stmt->bind_param("ssssssssssss",$username, $upurpose, $businessName, $businessType, $businessAddress,$date,$status,$permitType,$businessOwner,$pickupMode,$residentId,$pstatus);
                if ($stmt->execute()) {
                    header('Location: business_clearance.php');
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