<?php


function emptyInputSignup($fname, $lname, $email, $username, $pwd, $pwdReapet)  {
    $result;
    if (empty($fname) || empty($lname) || empty($email) || empty($username) || empty($pwd) || empty($pwdReapet)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/" , $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
   
function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function passwordLength($pwd) {
    $result;
    if(strlen($pwd) < 6) {
        $result = true;
    }

    else {
        $result = false;
    }

    return $result;
}

function pwdMatch($pwd ,$pwdReapet) {
    $result;
    if ($pwd !== $pwdReapet) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExits($conn, $email) {
    $sql = "SELECT * FROM user_account WHERE uemail =?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location ../index.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $fname, $mname, $lname, $address, $email, $username, $pwd) {
    $sql = "INSERT INTO users (firstName, middleName, lastName, usersAddress, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location ../index.php?error=stmtfailed");
        exit();
    }
    
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssss", $fname, $mname, $lname, $address, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../index.php?error=none");
    exit();

}

function emptyInputLogin($username, $pwd)  {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


function loginUser($conn, $username, $pwd) {
    $uidExists = uidExits($conn, $username);
    if($uidExists === false) {
        session_start();
        $_SESSION['wronglogin'] = "WRONG CREDENTIALS!";
        header("location: ../../login.php?error=wronglogin");
        exit();
    }
    $pwdHashed = $uidExists["upwd"];
    $checkedPwd = password_verify($pwd, $pwdHashed);
    
    if($checkedPwd === false) {
        header("location: ../../login.php?error=wronglogin");
        exit();
    }
    else if ($checkedPwd === true) {
        
     
        if($uidExists['ustatus']=='Deactivated')  {
            $_SESSION['Deactivated'] = "Your account has been deactivated!";
            header("location: ../../login.php");
            exit();
        }else {

            $_SESSION["usersid"] = $uidExists["id"];
            $_SESSION["userrbi"] = $uidExists["urbi"];
            // $_SESSION['residentId'] = $uidExists['residentId']
            header("location: ../user-home.php");
            exit();
        }

    }
}




function applicationBrgy($conn,  $street, $fullname, $rbi, $email, $purpose, $date, $status, $applicationId, $permit_type, $ucontact, $img, $pickupMode, $residentId) {

    $sql = "INSERT INTO application (street, uname, urbi, uemail,  upurpose, udate, ustatus, applicationId, permit_type, ucontactno, receiptImg, pickupMode, residentId, permit_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,'none');";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location ../user-home.php?error=stmtfailed");
        exit();
    }
    

    mysqli_stmt_bind_param($stmt, "sssssssssssss",$street,  $fullname,  $rbi, $email,   $purpose, $date, $status,  $applicationId, $permit_type, $ucontact,$img, $pickupMode , $residentId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    


    session_start();


    $_SESSION["applicatonSuccess"] = "Your online application has been sent successfully!";

    header("location: ../myApplication.php");
    exit();
}



function applicationBusiness($conn, $businessName, $businessType, $businessAddress, $contact, $date, $req_status, $applicationId, $permit_type, $purpose, $uemail, $ufullname, $owner, $pickupMode, $rbi, $residentId) {

    $sql = "INSERT INTO application (businessName, businessType, businessAddress, ucontactno, udate, ustatus, applicationId, permit_type, upurpose, uemail, uname, owner,  pickupMode, urbi, residentId, receiptImg, permit_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,'none','none');";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location ../user-home.php?error=stmtfailed");
        exit();
    }
    

    mysqli_stmt_bind_param($stmt, "sssssssssssssss",$businessName, $businessType, $businessAddress, $contact, $date, $req_status, $applicationId, $permit_type, $purpose, $uemail, $ufullname, $owner, $pickupMode, $rbi, $residentId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    


    session_start();



    $_SESSION["applicatonSuccess"] = "Your online application has been sent successfully!";
    header("location: ../myApplication.php");
    exit();
}

function applicationIndigency($conn,$street,  $fullname, $rbi, $email, $purpose, $date, $status, $applicationId, $permit_type, $ucontact, $img, $pickupMode, $residentId) {

    $sql = "INSERT INTO application (street, uname, urbi, uemail,  upurpose, udate, ustatus, applicationId, permit_type, ucontactno, receiptImg, pickupMode, residentId, permit_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,'none');";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location ../user-home.php?error=stmtfailed");
        exit();
    }
    

    mysqli_stmt_bind_param($stmt, "sssssssssssss", $street, $fullname, $rbi, $email,  $purpose, $date, $status, $applicationId, $permit_type, $ucontact, $img, $pickupMode, $residentId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    


    session_start();


    $_SESSION["applicatonSuccess"] = "Your online application has been sent successfully!";

    header("location: ../myApplication.php");
    exit();
}

function applicationTravel($conn, $fullname, $rbi, $email, $address, $purpose, $date, $status, $applicationId, $permit_type, $ucontact, $to_travel, $img, $pickupMode) {

    $sql = "INSERT INTO application (uname, urbi, uemail, uaddress, upurpose, udate, ustatus, applicationId, permit_type, ucontactno, to_travel, receiptImg, pickupMode) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location ../myApplication.php?error=stmtfailed");
        exit();
    }
    

    mysqli_stmt_bind_param($stmt, "sssssssssssss", $fullname, $rbi, $email, $address, $purpose, $date, $status, $applicationId, $permit_type, $ucontact, $to_travel, $img, $pickupMode);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    


    session_start();


    $_SESSION["applicatonSuccess"] = "Your online application has been sent successfully";

    header("location: ../myApplication.php?error=none");
    exit();
}



// function business($conn, $businessName, $businessType, $businessProduct, $businessContactno,  $businessEmail , $openingHours, $location, $businessId ) {

//     $sql = "INSERT INTO business (businessName, businessType, businessProduct,  businessContactno, businessEmail, openingHours, location, businessId, date_set) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW());";
//     $stmt = mysqli_stmt_init($conn);
//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         header("location ../user-home.php?error=stmtfailed");
//         exit();
//     }
    

//     mysqli_stmt_bind_param($stmt, "ssssssss",$businessName, $businessType, $businessProduct, $businessContactno,  $businessEmail , $openingHours, $location, $businessId ) ;
//     mysqli_stmt_execute($stmt);
//     mysqli_stmt_close($stmt);

//     $_SESSION["BusinessAdded"] = "Your Business has been added successfully!";
//     header("location: ../business.php");
//     exit();
// }

function business($conn, $businessName, $location, $businessId, $img, $businessContactno, $description, $businessEmail, $urbi , $uname, $uemail) {

    $sql = "INSERT INTO business (businessName, location, businessId, businessImg, businessContactno, description, businessEmail, urbi, uname, uemail, bstatus, date_set, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'Pending',NOW(), 'Active');";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location ../user-home.php?error=stmtfailed");
        exit();
    }
    

    mysqli_stmt_bind_param($stmt, "ssssssssss", $businessName, $location, $businessId, $img, $businessContactno, $description,  $businessEmail, $urbi, $uname, $uemail) ;
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    $_SESSION["BusinessAdded"] = "Your Business has been added successfully!";
    header("location: businesses_request.php");
    exit();
}


function businessEdit($conn, $ebusinessName, $ebusinessType, $ebusinessProduct, $ebusinessContactno,  $ebusinessEmail , $eopeningHours, $elocation, $ebuid) {


    $sql ="UPDATE business SET businessName=?, businessType=?, businessProduct=?, businessContactno=?, businessEmail=?, openingHours=?, location=? WHERE ID='$ebuid'";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location ../edit.php?error=stmtfailed");
        exit();
    }
    

    mysqli_stmt_bind_param($stmt, "ssssssss",$ebusinessName, $ebusinessType, $ebusinessProduct, $ebusinessContactno,  $ebusinessEmail , $eopeningHours, $elocation, $ebuid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    $_SESSION['success'] = "Your Business has been changed successfully!";
    // header("location: ../edit.php?error=none");
    header("location: ../business.phps.php");
    exit();
}




function complaints($conn, $fullname, $date, $defendant,  $time,  $email,  $details) {

    $sql = "INSERT INTO complaints(fullname, dates, defendant, timee, email, details) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location ../user-home.php?error=stmtfailed");
        exit();
    }
    

    mysqli_stmt_bind_param($stmt, "ssssss",$fullname, $date, $defendant,  $time,  $email,  $details);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../user-home.php?error=none");
    exit();
}



function edit($conn, $fname, $contactno) {

    // $msg = "";
    // $css_class="";

    $id =  $_SESSION["usersid"];

    $sql ="UPDATE user_account SET ufullname=?, ucontactno=? WHERE id=$id";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location ../edit.php?error=stmtfailed");
        exit();
    }
    

    mysqli_stmt_bind_param($stmt, "ss",$fname, $contactno);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    $sql2 ="UPDATE application SET ucontactno=? WHERE applicationId=$id";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql2)) {
        header("location ../edit.php?error=stmtfailed");
        exit();
    }
    

    mysqli_stmt_bind_param($stmt, "s", $contactno);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    $_SESSION["changedProfile"] = "Your profile has been changed successfully!";
    // header("location: ../edit.php?error=none");
    header("location: ../userProfile.php");
    exit();
}




function changepass($conn,$repeatpwd, $newpwd, $oldpwd) {

    $id =  $_SESSION["usersid"];
    $hashedNewPwd = password_hash($newpwd, PASSWORD_DEFAULT);


    $id =  $_SESSION["usersid"];

    $sql = "SELECT * FROM user_account WHERE id ='$id'";
    $result = mysqli_query($conn, $sql);
   
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $pwd = $row['upwd'];
        }
        
        $checkedPwd = password_verify($newpwd, $pwd);

        if($checkedPwd !== false) {
            $_SESSION["wrongpassword"] = "Wrong password!";
          header("Location: ../changepassword.php?message=wrongpassword");
            exit();
        }else {

            $sql ="UPDATE user_account SET upwd=? WHERE id=$id";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location ../edit.php?error=stmtfailed");
                exit();
            }
            
            mysqli_stmt_bind_param($stmt, "s",$hashedNewPwd);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
    
            $_SESSION["passwordChanged"] = "Your password has been changed!";
            header("Location: ../changepassword.php?message=passwordchanged");
            exit();
        
        }
      
    }
}





